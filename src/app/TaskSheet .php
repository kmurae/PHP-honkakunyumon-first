<?php

namespace App;

use App\Task;

class TaskSheet
{
  private $tasks = [];
  private $taskSheet = [];

  public function __construct(array $tasks)
  {
    foreach ($tasks as $task) {
      $this->taskSheet = new Task($task['name'], $task['priority'], $task['progress']);
    }
  }

  public function getTaskSheet()
  {
    foreach ($this->taskSheet as $task) {
      echo $task->getName();
      echo $task->getPriority();
      echo $task->getProgress();
    }
  }
}
