<?php
/**
 * Created by PhpStorm.
 * User: Johnny Cage
 * Date: 4/9/2016
 * Time: 2:50 PM
 */

namespace App\Repositories;

use App\User;
use App\Task;


class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}