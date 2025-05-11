<?php

namespace App\Containers\Todo\Todo\UI\WEB\Controllers;

use App\Containers\Todo\Todo\Actions\UpdateTodoAction;
use App\Containers\Todo\Todo\UI\WEB\Requests\UpdateTodoRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\JsonResponse;

class UpdateTodoController extends WebController
{
    public function update(UpdateTodoRequest $request): JsonResponse
    {
        app(UpdateTodoAction::class)->run($request);
        return response()->json(['status' => 200]);
    }
}
