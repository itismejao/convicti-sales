<?php

namespace App\Services\Sellers;

use App\Repositories\Sellers\SellersRepository;

class SellersService
{
    protected $repository;

    public function __construct(SellersRepository $sellersRepository)
    {
        $this->repository = $sellersRepository;
    }

    public function index()
    {
        return $this->repository->index();
    }

}