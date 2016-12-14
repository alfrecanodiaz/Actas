<?php namespace Modules\Profesores\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Profesores\Entities\Profesores;
use Modules\Profesores\Repositories\ProfesoresRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Profesores\Http\Requests\ProfesoresRequest;

class ProfesoresController extends AdminBaseController
{
    /**
     * @var ProfesoresRepository
     */
    private $profesores;

    public function __construct(ProfesoresRepository $profesores)
    {
        parent::__construct();

        $this->profesores = $profesores;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $profesores = Profesores::orderBy('id')->get();

        return view('profesores::admin.profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('profesores::admin.profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(ProfesoresRequest $request)
    {

        try {

            $profesores = $this->profesores->create($request->all());
            flash()->success(trans('core::core.messages.resource created', ['name' => trans('profesores::profesores.title.profesores')]));
        } 
        catch (\Illuminate\Database\QueryException $e) {

            //23000 sql code for integrity constraint violation
            if($e->getCode() == "23000"){

                flash()->error('Error al crear profesor, el usuario o correo electrónico ya esta en uso.', ['name' => trans('profesores::profesores.title.profesores')]);
                //MENSAJE DE ERROR
            }
        }

        //$profesores = $this->profesores->create($request->all());

        //flash()->success(trans('core::core.messages.resource created', ['name' => trans('profesores::profesores.title.profesores')]));

        return redirect()->route('admin.profesores.profesores.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Profesores $profesores
     * @return Response
     */
    public function edit(Profesores $profesores)
    {
        return view('profesores::admin.profesores.edit', compact('profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Profesores $profesores
     * @param  Request $request
     * @return Response
     */
    public function update(Profesores $profesores, ProfesoresRequest $request)
    {

        try {

            $this->profesores->update($profesores, $request->all());
            flash()->success(trans('core::core.messages.resource updated', ['name' => trans('profesores::profesores.title.profesores')]));
        } 
        catch (\Illuminate\Database\QueryException $e) {

            //23000 sql code for integrity constraint violation
            if($e->getCode() == "23000"){

                flash()->error('Error al crear profesor, el usuario o correo electrónico ya esta en uso.', ['name' => trans('profesores::profesores.title.profesores')]);
                //MENSAJE DE ERROR
            }
        }

        //$this->profesores->update($profesores, $request->all());

        //flash()->success(trans('core::core.messages.resource updated', ['name' => trans('profesores::profesores.title.profesores')]));

        return redirect()->route('admin.profesores.profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Profesores $profesores
     * @return Response
     */
    public function destroy(Profesores $profesores)
    {
        $this->profesores->destroy($profesores);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('profesores::profesores.title.profesores')]));

        return redirect()->route('admin.profesores.profesores.index');
    }
}
