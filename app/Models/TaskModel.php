<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];

    public function getTodayTasks(string $date): array
    {
        $tasks = $this->where('task_date', $date)
            ->orderBy('task_date', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();

        return $this->normalizeRows($tasks);
    }

    public function getAllTasks(): array
    {
        $tasks = $this->orderBy('task_date', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();

        return $this->normalizeRows($tasks);
    }

    private function normalizeRows(array $tasks): array
    {
        return array_map(
            static fn (array $task): array => array_change_key_case($task, CASE_LOWER),
            $tasks
        );
    }
}
