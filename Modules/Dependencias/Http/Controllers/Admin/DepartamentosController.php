<?php namespace Modules\Dependencias\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Dependencias\Entities\Departamentos;
use Modules\Dependencias\Repositories\DepartamentosRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Dependencias\Http\Requests\DepartamentosRequest;

class DepartamentosController extends AdminBaseController
{
    /**
     * @var DepartamentosRepository
     */
    private $departamentos;

    public function __construct(DepartamentosRepository $departamentos)
    {
        parent::__construct();

        $this->departamentos = $departamentos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $departamentos = Departamentos::orderBy('departamento','desc')->get();

        return view('dependencias::admin.departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dependencias::admin.departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(DepartamentosRequest $request)
    {
        $derpatamentos = $this->departamentos->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('dependencias::departamentos.title.departamentos')]));

        return redirect()->route('admin.dependencias.departamentos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Departamentos $departamentos
     * @return Response
     */
    public function edit(Departamentos $departamentos)
    {
        return view('dependencias::admin.departamentos.edit', compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Departamentos $departamentos
     * @param  Request $request
     * @return Response
     */
    public function update(Departamentos $departamentos, DepartamentosRequest $request)
    {
        $this->departamentos->update($departamentos, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('dependencias::departamentos.title.departamentos')]));

        return redirect()->route('admin.dependencias.departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Departamentos $departamentos
     * @return Response
     */
    public function destroy(Departamentos $departamentos)
    {
        $this->departamentos->destroy($departamentos);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('dependencias::departamentos.title.departamentos')]));

        return redirect()->route('admin.dependencias.departamentos.index');
    }
}
