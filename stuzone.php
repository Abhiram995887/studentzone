<DOCTYPE html>
<html>
    <head>

        <title>stuzone</title>
    </head>
    <body>
        <form>

        
        <input type="text" name="Name" placeholder="Name"><br>
<input type="password" name="password" placeholder="password"><br>
<input type="date" name="dob"><br>
<input type="submit" value="submit" name="submit"/>

        </form>

        <?php
        require 'connect.php';
        if(isset($_POST['submit']))
        {
     $Name=$_POST['Name'];
     $password=$_POST['password'];
     $dob=$_POST['dob'];

     $query="INSERT INTO 'regisform'(Name,password,'dob') VALUES('$Name','$password','$dob')";
        

     if(my_sqli_query($mycon,$query))
     {
     
        echo "<h1> data inserted</h1>";
     }
    
    else
    {
        echo  "<h1>failed </h1>";
    }
  
        }
  
?>
</body>
</html>
