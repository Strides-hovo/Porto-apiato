<?php

use App\Containers\Todo\Todo\UI\WEB\Controllers\UpdateTodoController;
use Illuminate\Support\Facades\Route;

Route::patch('todos/{id}', [UpdateTodoController::class, 'update']);

