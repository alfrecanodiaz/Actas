<?php namespace Modules\Semestres\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Semestres\Entities\Semestres;
use Modules\Semestres\Repositories\SemestresRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Semestres\Http\Requests\SemestresRequest;

class SemestresController extends AdminBaseController
{
    /**
     * @var SemestresRepository
     */
    private $semestres;

    public function __construct(SemestresRepository $semestres)
    {
        parent::__construct();

        $this->semestres = $semestres;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $semestres = Semestres::orderBy('id')->get();

        return view('semestres::admin.semestres.index', compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('semestres::admin.semestres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(SemestresRequest $request)
    {
        $semestres = $this->semestres->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('semestres::semestres.title.semestres')]));

        return redirect()->route('admin.semestres.semestres.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Semestres $semestres
     * @return Response
     */
    public function edit(Semestres $semestres)
    {
        return view('semestres::admin.semestres.edit', compact('semestres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Semestres $semestres
     * @param  Request $request
     * @return Response
     */
    public function update(Semestres $semestres, SemestresRequest $request)
    {
        $this->semestres->update($semestres, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('semestres::semestres.title.semestres')]));

        return redirect()->route('admin.semestres.semestres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Semestres $semestres
     * @return Response
     */
    public function destroy(Semestres $semestres)
    {
        $this->semestres->destroy($semestres);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('semestres::semestres.title.semestres')]));

        return redirect()->route('admin.semestres.semestres.index');
    }
}
