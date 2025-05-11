<?php

namespace App\Containers\Todo\Todo\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\Todo\Todo\Models\Todo;
use App\Containers\Todo\Todo\Tasks\CreateTodoTask;
use App\Containers\Todo\Todo\UI\WEB\Requests\StoreTodoRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateTodoAction extends ParentAction
{
    public function __construct(
        private readonly CreateTodoTask $createTodoTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(StoreTodoRequest $request): Todo
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'name'
        ]);

        return $this->createTodoTask->run($data);
    }
}
