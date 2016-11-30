<?php namespace Modules\Materias\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Materias\Entities\Materias;
use Modules\Materias\Repositories\MateriasRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Materias\Http\Requests\MateriasRequest;

class MateriasController extends AdminBaseController
{
    /**
     * @var MateriasRepository
     */
    private $materias;

    public function __construct(MateriasRepository $materias)
    {
        parent::__construct();

        $this->materias = $materias;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $materias = Materias::orderBy('nombre')->get();

        return view('materias::admin.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('materias::admin.materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $materias = $this->materias->create($request->all());

        flash()->success(trans('Materia creada correctamente.', ['name' => trans('materias::materias.title.materias')]));

        return redirect()->route('admin.materias.materias.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Materias $materias
     * @return Response
     */
    public function edit(Materias $materias)
    {
        return view('materias::admin.materias.edit', compact('materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Materias $materias
     * @param  Request $request
     * @return Response
     */
    public function update(Materias $materias, Request $request)
    {
        $this->materias->update($materias, $request->all());

        flash()->success(trans('Materia actualizada correctamente.', ['name' => trans('materias::materias.title.materias')]));

        return redirect()->route('admin.materias.materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Materias $materias
     * @return Response
     */
    public function destroy(Materias $materias)
    {
        $this->materias->destroy($materias);

        flash()->success(trans('Materia eliminada satisfactoriamente.', ['name' => trans('materias::materias.title.materias')]));

        return redirect()->route('admin.materias.materias.index');
    }
}
