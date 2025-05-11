<?php

namespace App\Containers\Todo\Todo\Tasks;

use App\Containers\Todo\Todo\Data\Repositories\TodoRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteTodoTask extends ParentTask
{
    public function __construct(
        private readonly TodoRepository $repository,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
