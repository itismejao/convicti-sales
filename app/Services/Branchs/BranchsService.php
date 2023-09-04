<?php

namespace App\Services\Branchs;

use App\Repositories\Branchs\BranchsRepository;

class BranchsService
{
    protected $repository;

    public function __construct(BranchsRepository $branchsRepository)
    {
        $this->repository = $branchsRepository;
    }

    public function map()
    {
        return $this->repository->map();
    }

}