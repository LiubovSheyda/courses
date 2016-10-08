<?php
class TaskFactory 
{
    protected static $tasks = array();

 
    public static function pushTask(Task $task)
    {
        self::$tasks[$task->getId()] = $task;
    }

    
    public static function getTask($id)
    {
        return isset(self::$tasks[$id]) ? self::$tasks[$id] : null;
    }

   
    public static function removeTask($id)
    {
        if (array_key_exists($id, self::$tasks)) {
            unset(self::$tasks[$id]);
        }
    }
}
