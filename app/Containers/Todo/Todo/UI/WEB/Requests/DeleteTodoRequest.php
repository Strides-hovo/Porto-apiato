<?php

namespace App\Containers\Todo\Todo\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class DeleteTodoRequest extends ParentRequest
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
            // 'id' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
