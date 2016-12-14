<?php namespace Modules\Dependencias\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Dependencias\Entities\Aulas;
use Modules\Dependencias\Repositories\AulasRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Dependencias\Http\Requests\AulasRequest;

class AulasController extends AdminBaseController
{
    /**
     * @var AulasRepository
     */
    private $aulas;

    public function __construct(AulasRepository $aulas)
    {
        parent::__construct();

        $this->aulas = $aulas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $aulas = Aulas::orderBy('aula','asc')->get();

        return view('dependencias::admin.aulas.index', compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dependencias::admin.aulas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(AulasRequest $request)
    {
        $aulas = $this->aulas->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('dependencias::aulas.title.aulas')]));

        return redirect()->route('admin.dependencias.aulas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Aulas $aulas
     * @return Response
     */
    public function edit(Aulas $aulas)
    {
        return view('dependencias::admin.aulas.edit', compact('aulas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Aulas $aulas
     * @param  Request $request
     * @return Response
     */
    public function update(Aulas $aulas, AulasRequest $request)
    {
        $this->aulas->update($aulas, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('dependencias::aulas.title.aulas')]));

        return redirect()->route('admin.dependencias.aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Aulas $aulas
     * @return Response
     */
    public function destroy(Aulas $aulas)
    {
        $this->aulas->destroy($aulas);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('dependencias::aulas.title.aulas')]));

        return redirect()->route('admin.dependencias.aulas.index');
    }
}
