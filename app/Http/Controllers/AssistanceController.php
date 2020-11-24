<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssistanceRequest;
use App\Http\Requests\UpdateAssistanceRequest;
use App\Repositories\AssistanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AssistanceController extends AppBaseController
{
    /** @var  AssistanceRepository */
    private $assistanceRepository;

    public function __construct(AssistanceRepository $assistanceRepo)
    {
        $this->assistanceRepository = $assistanceRepo;
    }

    /**
     * Display a listing of the Assistance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $assistances = $this->assistanceRepository->all();

        return view('assistances.index')
            ->with('assistances', $assistances);
    }

    /**
     * Show the form for creating a new Assistance.
     *
     * @return Response
     */
    public function create()
    {
        return view('assistances.create');
    }

    /**
     * Store a newly created Assistance in storage.
     *
     * @param CreateAssistanceRequest $request
     *
     * @return Response
     */
    public function store(CreateAssistanceRequest $request)
    {
        $input = $request->all();

        $assistance = $this->assistanceRepository->create($input);

        Flash::success('Assistance saved successfully.');

        return redirect(route('assistances.index'));
    }

    /**
     * Display the specified Assistance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assistance = $this->assistanceRepository->find($id);

        if (empty($assistance)) {
            Flash::error('Assistance not found');

            return redirect(route('assistances.index'));
        }

        return view('assistances.show')->with('assistance', $assistance);
    }

    /**
     * Show the form for editing the specified Assistance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assistance = $this->assistanceRepository->find($id);

        if (empty($assistance)) {
            Flash::error('Assistance not found');

            return redirect(route('assistances.index'));
        }

        return view('assistances.edit')->with('assistance', $assistance);
    }

    /**
     * Update the specified Assistance in storage.
     *
     * @param int $id
     * @param UpdateAssistanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssistanceRequest $request)
    {
        $assistance = $this->assistanceRepository->find($id);

        if (empty($assistance)) {
            Flash::error('Assistance not found');

            return redirect(route('assistances.index'));
        }

        $assistance = $this->assistanceRepository->update($request->all(), $id);

        Flash::success('Assistance updated successfully.');

        return redirect(route('assistances.index'));
    }

    /**
     * Remove the specified Assistance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assistance = $this->assistanceRepository->find($id);

        if (empty($assistance)) {
            Flash::error('Assistance not found');

            return redirect(route('assistances.index'));
        }

        $this->assistanceRepository->delete($id);

        Flash::success('Assistance deleted successfully.');

        return redirect(route('assistances.index'));
    }
}
