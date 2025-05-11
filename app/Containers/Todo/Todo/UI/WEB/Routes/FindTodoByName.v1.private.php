<?php

use App\Containers\Todo\Todo\UI\WEB\Controllers\FindTodoByNameController;
use Illuminate\Support\Facades\Route;

Route::get('todos/{name}', [FindTodoByNameController::class, 'show']);

