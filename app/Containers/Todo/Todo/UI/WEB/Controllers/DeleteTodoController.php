<?php

namespace App\Containers\Todo\Todo\UI\WEB\Controllers;

use App\Containers\Todo\Todo\Actions\DeleteTodoAction;
use App\Containers\Todo\Todo\UI\WEB\Requests\DeleteTodoRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class DeleteTodoController extends WebController
{
    public function destroy(DeleteTodoRequest $request): JsonResponse
    {
        app(DeleteTodoAction::class)->run($request);
        return response()->json(['status' => 200]);
    }
}
