<?php

namespace App\Containers\Todo\Todo\Tasks;

use App\Containers\Todo\Todo\Data\Repositories\TodoRepository;
use App\Containers\Todo\Todo\Models\Todo;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateTodoTask extends ParentTask
{
    public function __construct(
        private readonly TodoRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Todo
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
