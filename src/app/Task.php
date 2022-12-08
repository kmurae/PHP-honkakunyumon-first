<?php

namespace App;

class Task
{
  private $name;
  private $priority;
  private $progress;

  public function __construct(string $name, string $priority, string $progress)
  {
    $this->name = $name;
    $this->priority = $priority;
    $this->progress = $progress;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPriority()
  {
    return $this->priority;
  }

  public function getProggress()
  {
    return $this->progress;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setPriority(string $priority)
  {
    $this->priority = $priority;
  }

  public function setProgress(string $progress)
  {
    $this->progress = $progress;
  }
}
