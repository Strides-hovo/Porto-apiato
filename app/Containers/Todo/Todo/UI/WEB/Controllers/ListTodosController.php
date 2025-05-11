<?php

namespace App\Containers\Todo\Todo\UI\WEB\Controllers;

use App\Containers\Todo\Todo\Actions\ListTodosAction;
use App\Containers\Todo\Todo\UI\WEB\Requests\ListTodosRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

class ListTodosController extends WebController
{
    public function index(ListTodosRequest $request): View
    {
        $todos = app(ListTodosAction::class)->run($request);
        return view('todos', compact('todos'));
    }
}
