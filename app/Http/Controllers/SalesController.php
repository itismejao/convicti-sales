<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sales\FiltersSaleRequest;
use App\Http\Requests\Sales\SaleRequest;
use App\Http\Resources\SalesResource;
use App\Services\Sales\SalesService;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    protected $service;
    
    public function __construct(SalesService $salesService)
    {
        $this->service = $salesService;
    }

    public function index(FiltersSaleRequest $request)
    {
        $sales =  $this->service->index($request);
        return SalesResource::collection($sales);
    }

    public function store(SaleRequest $request)
    {
        $sale = $this->service->store($request->all());
        return new SalesResource($sale);
    }

    public function show($id)
    {
        $sale =  $this->service->show($id);
        return  new SalesResource($sale);
    }
}
