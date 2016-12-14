<?php namespace Modules\Alumnos\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Alumnos\Entities\Inscripciones;
use Modules\Alumnos\Repositories\InscripcionesRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class InscripcionesController extends AdminBaseController
{
    /**
     * @var InscripcionesRepository
     */
    private $inscripciones;

    public function __construct(InscripcionesRepository $inscripciones)
    {
        parent::__construct();

        $this->inscripciones = $inscripciones;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$inscripciones = $this->inscripciones->all();

        return view('alumnos::admin.inscripciones.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('alumnos::admin.inscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->inscripciones->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('alumnos::inscripciones.title.inscripciones')]));

        return redirect()->route('admin.alumnos.inscripciones.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Inscripciones $inscripciones
     * @return Response
     */
    public function edit(Inscripciones $inscripciones)
    {
        return view('alumnos::admin.inscripciones.edit', compact('inscripciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Inscripciones $inscripciones
     * @param  Request $request
     * @return Response
     */
    public function update(Inscripciones $inscripciones, Request $request)
    {
        $this->inscripciones->update($inscripciones, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('alumnos::inscripciones.title.inscripciones')]));

        return redirect()->route('admin.alumnos.inscripciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Inscripciones $inscripciones
     * @return Response
     */
    public function destroy(Inscripciones $inscripciones)
    {
        $this->inscripciones->destroy($inscripciones);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('alumnos::inscripciones.title.inscripciones')]));

        return redirect()->route('admin.alumnos.inscripciones.index');
    }
}
