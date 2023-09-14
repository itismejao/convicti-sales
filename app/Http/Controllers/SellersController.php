<?php

namespace App\Http\Controllers;

use App\Http\Resources\SellersResource;
use App\Services\Sellers\SellersService;
use Illuminate\Http\Request;

class SellersController extends Controller
{

    protected $service;
    
    public function __construct(SellersService $sellersService)
    {
        $this->service = $sellersService;
    }

    public function index()
    {
        $sellers =  $this->service->index();
        return SellersResource::collection($sellers);
    }
}
