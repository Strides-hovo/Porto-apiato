<?php

namespace App\Containers\Todo\Todo\UI\WEB\Controllers;

use App\Containers\Todo\Todo\Actions\FindTodoByNameAction;
use App\Containers\Todo\Todo\UI\WEB\Requests\FindTodoByNameRequest;
use App\Ship\Parents\Controllers\WebController;

class FindTodoByNameController extends WebController
{
    public function show(FindTodoByNameRequest $request)
    {
        return app(FindTodoByNameAction::class)->run($request);
    }
}
