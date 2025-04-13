<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New registertion</title>
    
</head>
<style>
   body {
    background-color: black;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: white;
    overflow-x: hidden;
    text-align: center;
}
.title{
    font-size: xx-large;
    padding: 5%;
}
.form{
   width: 650px;
    background-color: lavenderblush;
    padding: 20px;
    margin: auto ;
    border-radius: 10px;
    position: relative;
    opacity: 95%;
    color: black;
    background-image: radial-gradient(at 47% 33%, hsl(180.00, 100%, 44%) 0, transparent 59%),
    radial-gradient(at 82% 65%, hsl(180.00, 0%, 28.999999999999996%) 0, transparent 55%);
}
input{
    text-align: center;
    border-radius: 10px;
    width: 40%;
}
input:hover{
    padding-left: 10px;
}
.btn{
    width: 40%;
    cursor: pointer;
}
</style>

<body>

    <div class="container">
    
    <div class="title">
            AdminID
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>Name</label> <br> <input type="text" placeholder="adminID" spellcheck="true" maxlength="20"
                    name="admin" required><br><br>
                     
                    <label>Password</label>  <br><input type="password" placeholder="password" maxlength="6" name="pass"required><br><br>
           <input type='submit' value="Register" class='btn' name='Register' onclick="message()"> 
       
        </div>
        
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Register'])
    {
   $name      = $_POST['admin'];
 
   $password   = $_POST['pass'];
  
 $query = "INSERT INTO adminlogin VALUES('$name','$password')";
 $data= mysqli_query(mysql: $con,query: $query);
if($data)
{
    echo"Data inserted  into database";
}
else{
        echo "Failed";
 }
    }
    if($data){ 
   header(header: "location:Adminpage.php");}
    
?>
