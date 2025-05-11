<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{ csrf_field()  }}
    <title>Todos</title>
</head>
<body>

<!-- component -->
<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">
            <h1 class="text-grey-darkest">Todo List</h1>
            <div class="flex mt-4">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker " placeholder="Add Todo" id="todo-input">
                <button class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-red-300 cursor-pointer duration-300" id="add-todo">Add</button>
            </div>
        </div>
        <div id="todo-list">
            @foreach($todos as $todo)
                <div class="flex mb-4 items-center">
                    <p class="w-full text-grey-darkest @if($todo->status) line-through @endif" > {{ $todo->name }} </p>
                    <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-red-300 cursor-pointer duration-300" data-id="{{ $todo->id }}" data-action="done" data-status="{{ $todo->status }}">Done</button>
                    <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white  hover:bg-red-300 cursor-pointer duration-300" data-id="{{ $todo->id }}" data-action="remove">Remove</button>
                </div>
            @endforeach

        </div>
    </div>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>
