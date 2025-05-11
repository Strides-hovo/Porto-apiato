<?php

namespace App\Containers\Todo\Todo\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\Todo\Todo\Data\Repositories\TodoRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class ListTodosTask extends ParentTask
{
    public function __construct(
        private readonly TodoRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
