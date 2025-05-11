<?php

namespace App\Containers\Todo\Todo\Data\Repositories;

use App\Containers\Todo\Todo\Models\Todo;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Todo
 *
 * @extends ParentRepository<TModel>
 */
class TodoRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
