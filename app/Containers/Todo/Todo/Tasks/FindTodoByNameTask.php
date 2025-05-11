<?php

namespace App\Containers\Todo\Todo\Tasks;

use App\Containers\Todo\Todo\Data\Repositories\TodoRepository;
use App\Containers\Todo\Todo\Models\Todo;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\Collection;

class FindTodoByNameTask extends ParentTask
{
    public function __construct(
        private readonly TodoRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(string $name): Collection
    {
        try {
            return $this->repository->where('name','like', "%{$name}%")->get();
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
