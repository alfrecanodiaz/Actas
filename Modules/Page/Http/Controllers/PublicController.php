<?php namespace Modules\Page\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Page\Repositories\PageRepository;
use Modules\Materias\Entities\Materias;
use Modules\Cursos\Entities\Cursos;
use Modules\Profesores\Entities\Profesores;
use Illuminate\Http\Request;
use Validator;
use Input;
use Redirect;
use Auth;
use Carbon\Carbon;

class PublicController extends BasePublicController
{
    /**
     * @var PageRepository
     */
    private $page;
    /**
     * @var Application
     */
    private $app;

    public function __construct(PageRepository $page, Application $app)
    {
        parent::__construct();
        $this->page = $page;
        $this->app = $app;
    }

    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function uri($slug)
    {
        $page = $this->page->findBySlugInLocale($slug, $this->locale);

        $this->throw404IfNotFound($page);

        $template = $this->getTemplateForPage($page);

        return view($template, compact('page'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function homepage($keylogin)
    {
        //$id = pack('H*', base_convert($keylogin, 2, 16));

        //dd($id);

        $page = $this->page->findHomepage();

        $this->throw404IfNotFound($page);

        $template = $this->getTemplateForPage($page);

        return view($template, compact('page','keylogin'));
    }
    
    public function materias() {
        
        $materias = Materias::orderBy('nombre','desc')->get();
        
        return view('materias', compact('materias'));
    }
    
    public function profesores() {
        
        $profesores = Profesores::orderBy('nombre','desc')->get();
        
        return view('profesores', compact('profesores'));
    }
    
    public function query() {

        if ((Input::has("curso_profesor")) == true) {

            //$id = Input::get('curso_profesor');

            $id = pack('H*', base_convert(Input::get('curso_profesor'), 2, 16));

            //dd($id);
        
            $cursos = Cursos::where('profesor_id',$id)->orderBy('id','desc')->get();
        }
        
        return view('query', compact('cursos','id'));
    }
    
    public function formCalificacion() {
        
        return view('formCalificacion', compact(''));
    }
    
    public function showLogin() {
        
        return view('login', compact(''));
    }
    
    public function doLogin(Request $request) {

        if($request->isMethod('post')) {

            $validation = Validator::make(Input::all(), array(
                    // campos requeridos en el login
                    'username' => 'required',
                    'password' => 'required'
                )
            );

            // si la validacion de los datos falla
            if ($validation->fails()) {

                //dd($validation);

                return redirect()->back()->with('error','Error en el Inicio de Sesión');

            } else {

                /*$userdata = array(
                    'username' => $request->get('username'),
                    'password' => $request->get('password')
                );*/
                //dd($userdata);

                // guardar variables del login
                $username = $request->get('username');
                $password = $request->get('password');

                // query para buscar y comparar los datos en la base de datos
                $user = Profesores::where('username', '=', $username)->where('password', '=', $password)->first();

                // si el usuario no existe
                if ($user === null) {

                    //dd('El usuario no existe');
                    return redirect()->back()->with('usuario','Usuario o clave incorrectas, verifique sus datos.');

                } else {

                    $carbon=new \Carbon\Carbon();
                    $now=$carbon->now('America/Asuncion')->toDateTimeString();
                    $session = strtotime($now);

                    //dd(strtotime($now));

                    //dd('el usuario si existe');
                    //dd($user->username);
                    // si el usuario existe
                    //dd($user);

                    $id = $user->id;

                    $clave = unpack('H*', $id);

                    $keylogin = base_convert($clave[1], 16, 2);

                    //dd(base_convert($clave[1], 16, 2));
                    //dd(pack('H*', base_convert($keylogin, 2, 16)));

                    //return redirect()->route('homepage', [$id, $session]);
                    return redirect()->route('homepage', [$keylogin]);

                }

            }
        }
        
    }

    /**
     * Return the template for the given page
     * or the default template if none found
     * @param $page
     * @return string
     */
    private function getTemplateForPage($page)
    {
        return (view()->exists($page->template)) ? $page->template : 'default';
    }

    /**
     * Throw a 404 error page if the given page is not found
     * @param $page
     */
    private function throw404IfNotFound($page)
    {
        if (is_null($page)) {
            $this->app->abort('404');
        }
    }
}
