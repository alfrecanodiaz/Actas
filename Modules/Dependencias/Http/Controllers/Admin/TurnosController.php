<?php namespace Modules\Dependencias\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Dependencias\Entities\Turnos;
use Modules\Dependencias\Repositories\TurnosRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Dependencias\Http\Requests\TurnosRequest;

class TurnosController extends AdminBaseController
{
    /**
     * @var TurnosRepository
     */
    private $turnos;

    public function __construct(TurnosRepository $turnos)
    {
        parent::__construct();

        $this->turnos = $turnos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $turnos = Turnos::orderBy('id')->get();

        return view('dependencias::admin.turnos.index', compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dependencias::admin.turnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(TurnosRequest $request)
    {
        $turnos = $this->turnos->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('dependencias::turnos.title.turnos')]));

        return redirect()->route('admin.dependencias.turnos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Turnos $turnos
     * @return Response
     */
    public function edit(Turnos $turnos)
    {
        return view('dependencias::admin.turnos.edit', compact('turnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Turnos $turnos
     * @param  Request $request
     * @return Response
     */
    public function update(Turnos $turnos, TurnosRequest $request)
    {
        $this->turnos->update($turnos, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('dependencias::turnos.title.turnos')]));

        return redirect()->route('admin.dependencias.turnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Turnos $turnos
     * @return Response
     */
    public function destroy(Turnos $turnos)
    {
        $this->turnos->destroy($turnos);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('dependencias::turnos.title.turnos')]));

        return redirect()->route('admin.dependencias.turnos.index');
    }
}
