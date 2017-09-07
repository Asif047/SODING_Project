<?php

class TasksEntity
{
    public $id ;
    public $name;
    public $description ;
    public $dateCreated ;
    public $dateUpdated ;
   
    
  
    
   
   
    
    function __construct($id,$name, $description, $dateCreated, $dateUpdated)
    {
        $this->id = $id;
        $this->name = $name;
         $this->description= $description;
        $this->dateCreated = $dateCreated;
        $this->dateUpdated = $dateUpdated;
      
        
         
        
     
    
    }

}

?>
