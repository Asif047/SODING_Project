
<!DOCTYPE html>
<html>
<head>
<title>Update Task Page</title>

<link rel="stylesheet" type="text/css" href="Styles/Stylesheet3.css" />

 <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
 
</head>
<body>
    
    <div id="wrapper">
            <div id="banner">             
            </div>
            
           
                    
                    
 
        
        
         <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Insert Task</a></li>
                    <li><a href="UpdateTask.php">Update Task</a></li>
                    <li><a href="DeleteTask.php">Delete Task</a></li>
                    <li><a href="Tasks.php">Task List</a></li>
                    
                   
                    
                   <!-- <li><a href="OrderBook.php">Order book</a></li>
                    <!-- <li><a href="admin.php">AdminPanel </a></li> -->
                   
                </ul>
            </nav>
                   
                    
                   
  
        
         
        
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("taskdb")or die("Connection Failed");
        
        
         if(isset($_POST['id'])&&($_POST['name'])){
             
           $id = $_POST['id'];
        $name = $_POST['name'];
        
        
        
        $query = "UPDATE task SET name = '$name' WHERE id = '$id'";
        
       
        if(mysql_query($query))
            { //echo "updated";
            
            
             print '<script type="text/javascript">'; 
                  print 'alert("Your information have been updated successfully")'; 
                  print '</script>';
            
            }
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("taskdb")or die("Connection Failed");
        
        
         if(isset($_POST['id'])&&($_POST['description'])){
             
           $id = $_POST['id'];
        $description = $_POST['description'];
        
        
        
        $query = "UPDATE task SET description = '$description' WHERE id = '$id'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        <?php 
        mysql_connect("localhost","root","")
        or die("Connection Failed"); 
        mysql_select_db("taskdb")or die("Connection Failed");
        
        
         if(isset($_POST['id'])&&($_POST['dateUpdated'])){
             
           $id = $_POST['id'];
        $dateUpdated = $_POST['dateUpdated'];
        
        
        
        $query = "UPDATE task SET dateUpdated = '$dateUpdated' WHERE id = '$id'";
        
       
        if(mysql_query($query))
            { echo "updated";}
            
            else{ echo "fail";}  
         }
        
        ?> 
        
        
        
        
          
        
        
        
       
        
        
        
        
    
    
<div id="main">
    

<div id="login">
<h2>Update Task</h2>
<form action="UpdateTask.php" method="post"> Task Id:
    
    <?php
mysql_connect('localhost','root','');

mysql_select_db('taskdb');

$sql="SELECT id FROM task";
$result=  mysql_query($sql);

echo "<select  name='id' type='int'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['id']."'>".$row['id']."</option>";
}

echo "</select>";
?>
    
    
    
    <form method="post" name="update" action="UpdateTask.php" />
    Task Name:   <input type="text" name="name" /> 
    Description:   <input type="text" name="description" /> 
    Date Updated:   <input type="date" name="dateUpdated" /> 
    <br><br>

<br><br>


    <input type="submit" name="Submit" value="update" />
    </form> 
    
    
    
</form> 



</div>
</div>
        
        
        
      
        
        
        
       
        
        <footer>
            <font size="4" color="black"> copyright@2017. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>