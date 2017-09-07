<?php

require ("Model/TasksModel.php");


class TasksController {

    function CreateTasksDropdownList() {
        $tasksModel = new TasksModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                   <p> Please select a ID: </p>
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($tasksModel->GetTasksTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateTasksTables($types)
    {
        $tasksModel = new TasksModel();
        $tasksArray = $tasksModel->GetTasksByType($types);
        $result = "";
        
        
        foreach ($tasksArray as $key => $tasks) 
        {
            $result = $result .
                    "<table class = 'tasksTable'>
                        <tr>
                           
                            
                            
                            <th width = '75px' >Task Id : </th>
                            <td>$tasks->id</td>
                        </tr>
                          
                        <tr>
                            <th width = '75px' >Task Name : </th>
                            <td>$tasks->name</td>
                        </tr>
                        
                        <tr>
                            <th>Task Description : </th>
                            <td>$tasks->description</td>
                        </tr>
                        
                        <tr>
                            <th>Date Created : </th>
                            <td>$tasks->dateCreated</td>
                        </tr>
                        
                            
                        <tr>
                            <th>Date Updated : </th>
                            <td>$tasks->dateUpdated</td>
                        </tr>
                        


                        
                        
                        


                        
                                         
                     </table>";
        }        
        return $result;
        
    }

}

?>
