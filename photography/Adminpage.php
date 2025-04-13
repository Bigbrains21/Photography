<?php include("connection.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<style>
     body {
    background-color: #f0f2f5;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: #333;
    overflow-x: hidden;
    text-align: center;
    margin: 0;
    padding: 0;
}

.title {
    font-size: 48px;
    color: #4a6fc1;
    margin-top: 40px;
    font-weight: bold;
}

.subtitle {
    color: #5aace0;
    font-size: 20px;
    margin-bottom: 50px;
}

.category-section {
    padding: 20px;
}

.category-title {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
}

.category-title h2 {
    color: #333;
    font-size: 28px;
    margin: 0 10px;
}

.category-title hr {
    width: 50px;
    border: none;
    height: 2px;
    background-color: #e74c3c;
}

.category-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.category-card {
    background-image: linear-gradient(135deg, #4a90e2 0%, #7467b0 100%);
    border-radius: 10px;
    height: 180px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s ease;
    margin-bottom: 20px;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.category-button {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 12px 25px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.category-button:hover {
    background-color: rgba(255, 255, 255, 0.3);
}

.form {
    width: 650px;
    background-color: white;
    padding: 30px;
    margin: 40px auto;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    color: black;
    position: relative;
}

input {
    text-align: center;
    border-radius: 10px;
    width: 80%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    font-size: 16px;
    transition: all 0.3s ease;
}

input:focus {
    outline: none;
    border-color: #4a90e2;
    box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
}

input:hover {
    border-color: #4a90e2;
}

.btn {
    width: 40%;
    cursor: pointer;
    background-color: #4a90e2;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #3a7bc8;
}

@media (max-width: 1200px) {
    .category-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .form {
        width: 90%;
    }
    
    .category-grid {
        grid-template-columns: 1fr;
    }
}
</style>
<body>
    <div class="container" >
    <form action="#" method="POST" autocomplete="off" >
    <div class="title"> Admin  Login ID</div>
    <div class="form">
   <label> Name </label><br><input type="text" placeholder="AdminID" name="admin" required><Br><br>
   <label> Password </label><br><input type="password" placeholder=" login password" name="pass" maxlength="6" required><br><br>
   <input type="submit" value="Log in" name="login" class="btn">

  </div>
    </div>
    </div>
    
</form>
</body>
</html>
<?php 
if(isset( $_POST["login"]))
    {
   $name = $_POST['admin'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM  adminlogin WHERE name='$name' && password='$password' ";
   $data = mysqli_query(mysql: $con, query: $query); 
  $total= mysqli_num_rows(result: $data);
  
  if($total == 1)
  {
    header(header: 'location:displaypage.php');

}
else{
    echo "Login Failed";
}
    }

 ?>


