<?php include("connection.php"); ?>

<html>
  <head>
    <title> Display</title>
    </head>
  <style>
   body {
    background-color: #f0f2f5;
    font-family: 'Arial', sans-serif;
    color: #333;
    overflow-x: hidden;
    text-align: center;
    margin: 0;
    padding: 0;
}

h2 {
    font-size: xx-large;
    color: #555;
    padding: 10px;
}

table {
    text-align: center;
    width: 850px;
    background-color: white;
    padding: 20px;
    margin: auto;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #333;
    background-image: linear-gradient(135deg, #4e7cff 0%, #6a5acd 100%);
}

.update {
    background-color: #4e7cff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 12px;
    width: 80%;
    font-weight: bold;
    cursor: pointer;
   margin:10px;
    transition: all 0.3s ease;
    background-image: linear-gradient(135deg, #4e7cff 0%, #6a5acd 100%);
}

.update:hover {
    transform: scale(1.05);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.delete {
    background-color: #4e7cff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 12px;
    margin:10px;
    width: 80%;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    background-image: linear-gradient(135deg, #4e7cff 0%, #6a5acd 100%);
}

.delete:hover {
    transform: scale(1.05);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.btn {
    width: 150px;
    padding: 10px 15px;
    cursor: pointer;
    border: none;
    border-radius: 10px;
    text-align: center;
    margin-left: 80%;
    color: white;
    font-weight: bold;
    transition: all 0.3s ease;
    background-image: linear-gradient(135deg, #4e7cff 0%, #6a5acd 100%);
}

.btn:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Additional styles for the photography categories */
.category {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin: 30px auto;
}

.category-item {
    background-image: linear-gradient(135deg, #4e7cff 0%, #6a5acd 100%);
    border-radius: 10px;
    padding: 50px 30px;
    width: 200px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.category-title {
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: bold;
    display: inline-block;
}

.main-title {
    color: #4e7cff;
    font-size: 48px;
    margin-bottom: 5px;
}

.subtitle {
    color: #4e9fff;
    font-size: 20px;
    margin-top: 0;
}

.category-heading {
    position: relative;
    text-align: center;
    margin: 40px 0;
    font-size: 28px;
    color: #555;
}

.category-heading::before,
.category-heading::after {
    content: "—";
    color: #ff5757;
    margin: 0 10px;
}

  </style>
  <body>
<?php 
   
  error_reporting(error_level: 0);
    $query = "SELECT * FROM USER";
    mysqli_query(mysql: $con, query:$query);
    $data = mysqli_query(mysql: $con,query: $query);

   $total =  mysqli_num_rows(result: $data);
  //echo $total;
   if($total != 0)

   {
    ?>
 <h2> <align="center"><br>Display Register Records</h2>
<br><br><br><br><br>
<a href="Adminpage.php">
<input type="button" value="Log out"  class="btn"></a>
</a>
<br><br>
 <center> <table border="2px" cellspacing="3" width="100%">
    <tr>  
    <th widht="20%">Name</th>
   <th  widht="20%">Email</th>
    <th widht="20%">Password</th>
   
    <th widht="20%">Operations</th>
  </tr>
<?php
   while($result = mysqli_fetch_assoc(result: $data))
   {
    echo"<tr> 
        <td>".$result["name"]."</td>
         <td>".$result["email"]."</td>
      <td>".$result["password"]."</td>
     <td><a href='Update.php?email=$result[email]'><input type='submit' value='Update' class='update'></a>
     <a href='Delete.php?email=$result[email]'><input type='submit' value='Delete' class='delete' onclick='deletemsg()'></a></td>
      </tr>
      ";
   }
}
else{
    echo "table has no records";
}
?>
</table></center>

<script>
function deletemsg(){
  return alert('Are you want to delete record?');
}
</script>

  </body>
  </html>