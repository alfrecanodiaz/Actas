<?php namespace Modules\Alumnos\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Alumnos\Entities\Alumnos;
use Modules\Alumnos\Repositories\AlumnosRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class AlumnosController extends AdminBaseController
{
    /**
     * @var AlumnosRepository
     */
    private $alumnos;

    public function __construct(AlumnosRepository $alumnos)
    {
        parent::__construct();

        $this->alumnos = $alumnos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$alumnos = $this->alumnos->all();

        return view('alumnos::admin.alumnos.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('alumnos::admin.alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->alumnos->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('alumnos::alumnos.title.alumnos')]));

        return redirect()->route('admin.alumnos.alumnos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Alumnos $alumnos
     * @return Response
     */
    public function edit(Alumnos $alumnos)
    {
        return view('alumnos::admin.alumnos.edit', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Alumnos $alumnos
     * @param  Request $request
     * @return Response
     */
    public function update(Alumnos $alumnos, Request $request)
    {
        $this->alumnos->update($alumnos, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('alumnos::alumnos.title.alumnos')]));

        return redirect()->route('admin.alumnos.alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Alumnos $alumnos
     * @return Response
     */
    public function destroy(Alumnos $alumnos)
    {
        $this->alumnos->destroy($alumnos);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('alumnos::alumnos.title.alumnos')]));

        return redirect()->route('admin.alumnos.alumnos.index');
    }
}
