<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchsMapResource;
use App\Http\Resources\SalesResource;
use App\Services\Branchs\BranchsService;

class BranchsController extends Controller
{
    protected $service;
    
    public function __construct(BranchsService $branchsService)
    {
        $this->service = $branchsService;
    }

    public function map()
    {
        $map = $this->service->map();
        return BranchsMapResource::collection($map);
    }
}
