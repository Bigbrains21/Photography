<?php include("connection.php"); 
$id = $_GET['email'];

$query = "SELECT * FROM user where  email = '$id'";
mysqli_query(mysql: $con, query:$query);
$data = mysqli_query(mysql: $con,query: $query);
$result = mysqli_fetch_assoc(result: $data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail</title>
    
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

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    font-size: 3.5rem;
    color: #4f6db3;
    margin-bottom: 10px;
}

h2 {
    font-size: 1.5rem;
    color: #4f9dd4;
    margin-top: 0;
    font-weight: normal;
}

.category-heading {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 40px 0;
}

.category-heading h3 {
    font-size: 1.8rem;
    color: #333;
    margin: 0 20px;
}

.category-heading::before, .category-heading::after {
    content: "";
    height: 2px;
    width: 50px;
    background-color: #ff6b6b;
}

.categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin: 30px 0;
}

.category-card {
    width: 260px;
    height: 180px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    background-image: linear-gradient(135deg, #4f9dd4 0%, #6a5acd 100%);
    transition: transform 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
}

.category-label {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 1.2rem;
    font-weight: bold;
}

.form {
    text-align: center;
    width: 850px;
    height: 350px;
    background-color: white;
    padding: 50px;
    margin: 5% auto;
    border-radius: 10px;
    position: relative;
    color: black;
    background-image: radial-gradient(at 47% 33%, #4f9dd4 0, transparent 59%),
                      radial-gradient(at 82% 65%, #4d4d4d 0, transparent 55%);
    font-size: larger;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.form:hover {
    background-color: #4f9dd4;
}

.btn {
    width: 40%;
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
    padding: 12px;
    border: none;
    color: white;
    font-weight: bold;
    background-image: radial-gradient(at 47% 33%, #4f9dd4 0, transparent 59%),
                      radial-gradient(at 82% 65%, #4d4d4d 0, transparent 55%);
    transition: transform 0.2s ease;
}

input {
    border-radius: 10px;
    width: 100%;
    text-align: center;
    font-size: medium;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
}

.btn:hover {
    transform: scale(1.1);
    background-color: #5f8fc2;
}
</style>

<body>

    <div class="container">
    
    <div class="title">
           <h1> Update Details</h1>
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>Name</label>  <input type="text" value="<?php echo $result['name']?>"  placeholder="Username" spellcheck="true" maxlength="20"
                    name="user" required><br><br>
                     <label>Email ID</label>  <input type="email" value="<?php echo $result['email']?>"placeholder="@gmail.com" spellcheck="true" maxlength="30"
                    name="id" required><br><br>
                    <label>Password</label>  <input type="password" value="<?php echo $result['password']?>" placeholder="password" maxlength="6" name="pass"required><br><br>
                   
           <input type='submit' value="Update" class='btn' name='Update' onclick="message()"> 
       
        </div>
      
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Update'])
    {
   $name      = $_POST['user'];
   $email      = $_POST['id'];
   $password   = $_POST['pass'];
 $query="UPDATE user SET name='$name',email='$email',password='$password' WHERE email='$id'";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"<script>alert('Record updated')</script>";
    ?>
    <meta http-equiv="refresh"content="0; url=http://localhost:3000/displaypage.php">
<?php
}
else{
        echo "Failed";
 }
    }
   
    
?>
