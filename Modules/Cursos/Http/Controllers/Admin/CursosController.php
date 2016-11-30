<?php namespace Modules\Cursos\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Cursos\Entities\Cursos;
use Modules\Cursos\Repositories\CursosRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Materias\Entities\Materias;
use Modules\Profesores\Entities\Profesores;
use Modules\Cursos\Http\Requests\CursosRequest;

class CursosController extends AdminBaseController
{
    /**
     * @var CursosRepository
     */
    private $cursos;

    public function __construct(CursosRepository $cursos)
    {
        parent::__construct();

        $this->cursos = $cursos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cursos = Cursos::orderBy('id')->get();

        return view('cursos::admin.cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $materias=Materias::orderBy('nombre')->lists('nombre','id')->all();
        $profesores=Profesores::orderBy('nombre')->lists('nombre','id')->all();

        return view('cursos::admin.cursos.create',compact('materias','profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(CursosRequest $request)
    {
        $cursos = $this->cursos->create($request->all());

        flash()->success(trans('Curso creado correctamente.', ['name' => trans('cursos::cursos.title.cursos')]));

        return redirect()->route('admin.cursos.cursos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cursos $cursos
     * @return Response
     */
    public function edit(Cursos $cursos)
    {
        $materias=Materias::orderBy('nombre')->lists('nombre','id')->all();
        $profesores=Profesores::orderBy('nombre')->lists('nombre','id')->all();

        return view('cursos::admin.cursos.edit', compact('cursos','materias','profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Cursos $cursos
     * @param  Request $request
     * @return Response
     */
    public function update(Cursos $cursos, CursosRequest $request)
    {
        $this->cursos->update($cursos, $request->all());

        flash()->success(trans('Curso modificado correctamente.', ['name' => trans('cursos::cursos.title.cursos')]));

        return redirect()->route('admin.cursos.cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cursos $cursos
     * @return Response
     */
    public function destroy(Cursos $cursos)
    {
        $this->cursos->destroy($cursos);

        flash()->success(trans('Curso eliminado satisfactoriamente.', ['name' => trans('cursos::cursos.title.cursos')]));

        return redirect()->route('admin.cursos.cursos.index');
    }
}
