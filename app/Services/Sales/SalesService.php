<?php

namespace App\Services\Sales;

use App\Repositories\Sales\SalesRepository;

class SalesService
{
    protected $repository;

    public function __construct(SalesRepository $salesRepository)
    {
        $this->repository = $salesRepository;
    }

    public function index($request)
    {
        return $this->repository->index($request);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function show($id)
    {
        return $this->repository->show($id);
    }

}