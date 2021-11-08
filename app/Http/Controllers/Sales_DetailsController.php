<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSales_DetailsRequest;
use App\Http\Requests\UpdateSales_DetailsRequest;
use App\Repositories\Sales_DetailsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Sales_DetailsController extends AppBaseController
{
    /** @var  Sales_DetailsRepository */
    private $salesDetailsRepository;

    public function __construct(Sales_DetailsRepository $salesDetailsRepo)
    {
        $this->salesDetailsRepository = $salesDetailsRepo;
    }

    /**
     * Display a listing of the Sales_Details.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $salesDetails = $this->salesDetailsRepository->all();

        return view('sales__details.index')
            ->with('salesDetails', $salesDetails);
    }

    /**
     * Show the form for creating a new Sales_Details.
     *
     * @return Response
     */
    public function create()
    {
        return view('sales__details.create');
    }

    /**
     * Store a newly created Sales_Details in storage.
     *
     * @param CreateSales_DetailsRequest $request
     *
     * @return Response
     */
    public function store(CreateSales_DetailsRequest $request)
    {
        $input = $request->all();

        $salesDetails = $this->salesDetailsRepository->create($input);

        Flash::success('Sales  Details saved successfully.');

        return redirect(route('salesDetails.index'));
    }

    /**
     * Display the specified Sales_Details.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salesDetails = $this->salesDetailsRepository->find($id);

        if (empty($salesDetails)) {
            Flash::error('Sales  Details not found');

            return redirect(route('salesDetails.index'));
        }

        return view('sales__details.show')->with('salesDetails', $salesDetails);
    }

    /**
     * Show the form for editing the specified Sales_Details.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salesDetails = $this->salesDetailsRepository->find($id);

        if (empty($salesDetails)) {
            Flash::error('Sales  Details not found');

            return redirect(route('salesDetails.index'));
        }

        return view('sales__details.edit')->with('salesDetails', $salesDetails);
    }

    /**
     * Update the specified Sales_Details in storage.
     *
     * @param int $id
     * @param UpdateSales_DetailsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSales_DetailsRequest $request)
    {
        $salesDetails = $this->salesDetailsRepository->find($id);

        if (empty($salesDetails)) {
            Flash::error('Sales  Details not found');

            return redirect(route('salesDetails.index'));
        }

        $salesDetails = $this->salesDetailsRepository->update($request->all(), $id);

        Flash::success('Sales  Details updated successfully.');

        return redirect(route('salesDetails.index'));
    }

    /**
     * Remove the specified Sales_Details from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salesDetails = $this->salesDetailsRepository->find($id);

        if (empty($salesDetails)) {
            Flash::error('Sales  Details not found');

            return redirect(route('salesDetails.index'));
        }

        $this->salesDetailsRepository->delete($id);

        Flash::success('Sales  Details deleted successfully.');

        return redirect(route('salesDetails.index'));
    }
}
