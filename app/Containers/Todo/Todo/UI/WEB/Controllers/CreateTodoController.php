<?php

namespace App\Containers\Todo\Todo\UI\WEB\Controllers;

use App\Containers\Todo\Todo\Actions\CreateTodoAction;
use App\Containers\Todo\Todo\UI\WEB\Requests\StoreTodoRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\JsonResponse;

class CreateTodoController extends WebController
{

    public function store(StoreTodoRequest $request): JsonResponse
    {
        app(CreateTodoAction::class)->run($request);
        return response()->json(['status' => 200]);
    }
}
