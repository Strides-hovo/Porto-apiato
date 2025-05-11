<?php

namespace App\Containers\Todo\Todo\Actions;

use App\Containers\Todo\Todo\Tasks\DeleteTodoTask;
use App\Containers\Todo\Todo\UI\WEB\Requests\DeleteTodoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteTodoAction extends ParentAction
{
    public function __construct(
        private readonly DeleteTodoTask $deleteTodoTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteTodoRequest $request): int
    {
        return $this->deleteTodoTask->run($request->id);
    }
}
