<?php

namespace App\Containers\Todo\Todo\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class FindTodoByNameRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => null,
        'roles' => null,
    ];

    protected array $decode = [
    ];

    protected array $urlParameters = [
        'name',
    ];

    public function rules(): array
    {
        return [
             'name' => 'required|string',
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
