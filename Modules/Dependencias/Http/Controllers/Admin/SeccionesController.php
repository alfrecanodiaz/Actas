<?php namespace Modules\Dependencias\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Dependencias\Entities\Secciones;
use Modules\Dependencias\Entities\Departamentos;
use Modules\Dependencias\Repositories\SeccionesRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Dependencias\Http\Requests\SeccionesRequest;

class SeccionesController extends AdminBaseController
{
    /**
     * @var SeccionesRepository
     */
    private $secciones;

    public function __construct(SeccionesRepository $secciones)
    {
        parent::__construct();

        $this->secciones = $secciones;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $secciones = Secciones::orderBy('id')->get();

        return view('dependencias::admin.secciones.index', compact('secciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $departamentos=Departamentos::orderBy('departamento')->lists('departamento','id')->all();

        return view('dependencias::admin.secciones.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(SeccionesRequest $request)
    {
        $secciones = $this->secciones->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('dependencias::secciones.title.secciones')]));

        return redirect()->route('admin.dependencias.secciones.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Secciones $secciones
     * @return Response
     */
    public function edit(Secciones $secciones)
    {
        $departamentos=Departamentos::orderBy('departamento')->lists('departamento','id')->all();

        return view('dependencias::admin.secciones.edit', compact('secciones','departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Secciones $secciones
     * @param  Request $request
     * @return Response
     */
    public function update(Secciones $secciones, SeccionesRequest $request)
    {
        $this->secciones->update($secciones, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('dependencias::secciones.title.secciones')]));

        return redirect()->route('admin.dependencias.secciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Secciones $secciones
     * @return Response
     */
    public function destroy(Secciones $secciones)
    {
        $this->secciones->destroy($secciones);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('dependencias::secciones.title.secciones')]));

        return redirect()->route('admin.dependencias.secciones.index');
    }
}
