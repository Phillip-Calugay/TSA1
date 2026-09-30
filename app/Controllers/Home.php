<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index(): string
    {
        $tasks = (new TaskModel())->getTodayTasks(date('Y-m-d'));

        return view('home', [
            'title' => 'Today\'s Tasks',
            'tasks' => $tasks,
        ]);
    }
}
