<?php

namespace App\Containers\Todo\Todo\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\Todo\Todo\Tasks\ListTodosTask;
use App\Containers\Todo\Todo\UI\WEB\Requests\ListTodosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListTodosAction extends ParentAction
{
    public function __construct(
        private readonly ListTodosTask $listTodosTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListTodosRequest $request): mixed
    {
        return $this->listTodosTask->run();
    }
}
