<?php

namespace App\Containers\Todo\Todo\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class UpdateTodoRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => null,
        'roles' => null,
    ];

    protected array $decode = [
    ];

    protected array $urlParameters = [
        'id',
    ];

    public function rules(): array
    {
        return [
             'status' => 'required|boolean',
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
