<?php
/**
 * Created by PhpStorm.
 * Users: intern.nvdat1
 * Date: 8/6/2018
 * Time: 9:37 AM
 */

// src/Entity/Task.php
namespace App\Entity;

class Task
{
    protected $task;
    protected $dueDate;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }

    public function getSave()
    {
        return $this->task;
    }

    public function setSave($task)
    {
        $this->task = $task;
    }
}