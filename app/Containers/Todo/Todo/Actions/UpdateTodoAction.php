<?php

namespace App\Containers\Todo\Todo\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\Todo\Todo\Models\Todo;
use App\Containers\Todo\Todo\Tasks\UpdateTodoTask;
use App\Containers\Todo\Todo\UI\WEB\Requests\UpdateTodoRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateTodoAction extends ParentAction
{
    public function __construct(
        private readonly UpdateTodoTask $updateTodoTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateTodoRequest $request): Todo
    {
        $data = $request->sanitizeInput([
            'status'
        ]);

        return $this->updateTodoTask->run($data, $request->id);
    }
}
