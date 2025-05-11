<?php

namespace App\Containers\Todo\Todo\Actions;

use App\Containers\Todo\Todo\Models\Todo;
use App\Containers\Todo\Todo\Tasks\FindTodoByNameTask;
use App\Containers\Todo\Todo\UI\WEB\Requests\FindTodoByNameRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Database\Eloquent\Collection;

class FindTodoByNameAction extends ParentAction
{
    public function __construct(
        private readonly FindTodoByNameTask $findTodoByNameTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindTodoByNameRequest $request): Collection
    {
        return $this->findTodoByNameTask->run($request->name);
    }
}
