<?php

require ("Entities/TasksEntity.php");


class TasksModel {

   
    function GetTasksTypes() {
        require 'Credentials.php';

       
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT id FROM task") or die(mysql_error());
        $types = array();

       
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

       
        mysql_close();
        return $types;
    }

   
    function GetTasksByType($id) {
        require 'Credentials.php';

          
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM task where id LIKE '$id'";
        $result = mysql_query($query) or die(mysql_error());
        $tasksArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $id=$row[0];
            $name = $row[1];
            $description = $row[2];
            $dateCreated = $row[3]; 
            $dateUpdated = $row[4];
            
           
            
       
            
            
            

            
            $tasks = new TasksEntity($id, $name, $description, $dateCreated,$dateUpdated);
            array_push($tasksArray, $tasks);
        }
       
        mysql_close();
        return $tasksArray;
    }

}

?>
