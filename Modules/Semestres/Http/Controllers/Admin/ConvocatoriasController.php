<?php namespace Modules\Semestres\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Semestres\Entities\Convocatorias;
use Modules\Semestres\Repositories\ConvocatoriasRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Semestres\Http\Requests\ConvocatoriasRequest;

class ConvocatoriasController extends AdminBaseController
{
    /**
     * @var ConvocatoriasRepository
     */
    private $convocatorias;

    public function __construct(ConvocatoriasRepository $convocatorias)
    {
        parent::__construct();

        $this->convocatorias = $convocatorias;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $convocatorias = Convocatorias::orderBy('id')->get();

        return view('semestres::admin.convocatorias.index', compact('convocatorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('semestres::admin.convocatorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(ConvocatoriasRequest $request)
    {
        $convocatorias = $this->convocatorias->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('semestres::convocatorias.title.convocatorias')]));

        return redirect()->route('admin.semestres.convocatorias.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Convocatorias $convocatorias
     * @return Response
     */
    public function edit(Convocatorias $convocatorias)
    {
        return view('semestres::admin.convocatorias.edit', compact('convocatorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Convocatorias $convocatorias
     * @param  Request $request
     * @return Response
     */
    public function update(Convocatorias $convocatorias, ConvocatoriasRequest $request)
    {
        $this->convocatorias->update($convocatorias, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('semestres::convocatorias.title.convocatorias')]));

        return redirect()->route('admin.semestres.convocatorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Convocatorias $convocatorias
     * @return Response
     */
    public function destroy(Convocatorias $convocatorias)
    {
        $this->convocatorias->destroy($convocatorias);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('semestres::convocatorias.title.convocatorias')]));

        return redirect()->route('admin.semestres.convocatorias.index');
    }
}
