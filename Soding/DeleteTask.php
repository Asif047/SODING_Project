
<!DOCTYPE html>
<html>
<head>
<title>Delete Task Page</title>

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
        
        
        if(isset($_POST['name'])){
       $name = $_POST['name'];
       
        
     
        $query = "delete from task where name = '".$name."'";
        
        
        if(mysql_query($query))
            { 
            //echo "deleted";
            
            print '<script type="text/javascript">'; 
                  print 'alert("Your information have been deleted successfully")'; 
                  print '</script>';
            
            } 
            else
                {
                echo "fail";
                
                } 
        
        }
       ?>
    
    
    
<div id="main">
    

<div id="login">
<h2>Delete Task</h2>
<form action="DeleteTask.php" method="post"><p> Name:</p>
    
    <?php
mysql_connect('localhost','root','');

mysql_select_db('taskdb');

$sql="SELECT name FROM task";
$result=  mysql_query($sql);

echo "<select  name='name' type='text'>";

while($row=  mysql_fetch_array($result))
{
    echo "<option value='".$row['name']."'>".$row['name']."</option>";
}

echo "</select>";
?>
    
    <br><br>
    
    <input name="Submit" type="submit" value="delete record" /> 
</form> 



</div>
</div>
        
        
        
      
        
        
        
       
        
        <footer>
            <font size="4" color="black"> copyright@2017. All rights are reserved </font>

            </footer>
            
        
    
    

</body>
</html>