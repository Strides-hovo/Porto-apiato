<?php

namespace App\Containers\Todo\Todo\Tasks;

use App\Containers\Todo\Todo\Data\Repositories\TodoRepository;
use App\Containers\Todo\Todo\Models\Todo;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateTodoTask extends ParentTask
{
    public function __construct(
        private readonly TodoRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Todo
    {
        try {
            return $this->repository->update($data, $id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
