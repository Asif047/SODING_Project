
<!DOCTYPE html>
<html>
<head>
<title>Insert Task page</title>

<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />

<link rel="stylesheet" type="text/css" href="Styles/Stylesheet3.css" />

 
 
 
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
                   
                    
                   
             
    
    
    
<div id="main">

<div id="login">
<h2>Create Task</h2>
<form action="taskadmin.php" method="post">
<label>* Task Name :</label>
<input id="name" name="name" placeholder="Task Name" type="text"> 
<label>* Task Description :</label>
<input id="name" name="description" placeholder="Description" type="text">


<label>* Date Created :</label>
<input id="name" name="dateCreated" placeholder="Date created" type="date">





<br><br>




<input name="submit" type="submit" value=" Insert ">
<span><?php  ?></span>
</form>
</div>
</div>
        
        
        
        
        <?php
        if(isset($_POST['submit']))
        {
            $con=  mysql_connect("localhost","root","");
            
             if($_POST['name']!=""&&$_POST['description']!=""&&$_POST['dateCreated']!="")
             {
                 if(!$con)
                 {
                die("can not connect".mysql_error());
                 }
                 
                 
                  print '<script type="text/javascript">'; 
                  print 'alert("Your information have been taken successfully")'; 
                  print '</script>';
            
                mysql_select_db("taskdb",$con);
                $sql="INSERT INTO task(name,description,dateCreated)
                VALUES('$_POST[name]','$_POST[description]','$_POST[dateCreated]')";
            
               mysql_query($sql,$con);
                mysql_close($con); 
             }
             
             
             else
            {
            print '<script type="text/javascript">'; 
            print 'alert("Please insert all the required informations")'; 
            print '</script>';

            }
            
           
        }
        ?>
        
       
            <footer>
            
            <font size="4" color="black"> copyright@2017. All rights are reserved </font>

            </footer>
            
       
        
        
            
        
    
    

</body>
</html>