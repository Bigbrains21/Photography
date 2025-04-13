<?php include("connection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">

    <title>Book a photographer</title>

</head>

<body>

<div class="navbar">
    <i class="fa-solid fa-user"> <a href="#details">Details</a></i>
    <i class="fa-solid fa-right-to-bracket"> <a href="home.php">Log Out</a></i>
    </div>
<div class="popL">
        <form action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="5361c22d-e001-47eb-9649-670a34b5dad4">
        <div class="popCL"><br><br> 
            <h1> Wedding Photography</h1><hr>
         <input type="radio"id="1Photographer" value="1Photographer : Rs. 75,000 - Rs. 1,75,000" name="Wedding Photographer"><br>
         <Label for="1Photographer">1Photographer : Rs. 75,000 - Rs. 1,75,000</Label><br>
         <input type="radio" value="Photographer 2: Rs. 50,000 - Rs. 1,50,000" id="2photographer" name=" Wedding Photographer"><br>
         <label for="2photograoher">Photographer 2: Rs. 50,000 - Rs. 1,50,000</label><br>
         <input type="radio" value="Photographer 3: Rs. 1,00,000 - Rs. 2,50,000 (destination weddings)" id="3photographer" name="Wedding Photographer"><br>
         <label for="3photograoher"> Photographer 3: Rs. 1,00,000 - Rs. 2,50,000 (destination weddings)</label><br>
         <input type="radio" value=" Photographer 4: Rs. 15,000 - Rs. 25,000 (beginner packages)" id="4photographer" name=" Wedding Photographer"><br>
         <label for="4photograoher">  Photographer 4: Rs. 15,000 - Rs. 25,000 (beginner packages)</label><br>
         <input type="radio" value="Photographer 5: Rs. 2,00,000 - Rs. 5,00,000 (high-end packages)" id="5photographer" name="Wedding Photographer"><br>
         <label for="5photograoher">  Photographer 5: Rs. 2,00,000 - Rs. 5,00,000 (high-end packages)</label> <br><br>
        <input type="submit" value="Submit" name="bookphotographer" class="btn">
        <br>
          <h1> Babies & Kids Photography</h1>
        <hr>
       <input type="radio"id="1Photographer" value="1Photographer :15,000 - Rs. 30,000 (newborn shoots)" name="Babies & Kids Photographer"><br>
       <Label for="1Photographer">1Photographer : Rs.15,000 - Rs. 30,000 (newborn shoots)</Label><br>
       <input type="radio" value="2Photographer:Rs. 10,000 - Rs. 25,000 (family photo shoots)" id="2photographer" name="Babies & Kids Photographer"><br>
       <label for="2photograoher">2Photographer: Rs. 10,000 - Rs. 25,000 (family photo shoots)</label><br>
       <input type="radio" value="3Photographer:Rs. 7,500 - Rs. 20,000 (children's portraits)" id="3photographer" name="Babies & Kids Photographer"><br>
       <label for="3photograoher">3Photographer Rs. 7,500 - Rs. 20,000 (children's portraits)</label><br>
       <input type="radio" value="Photographer 4: Rs. 12,000 - Rs. 28,000 (maternity and baby shoots)" id="4photographer" name="Babies & Kids Photographer"><br>
       <label for="4photograoher">  Photographer 4: Rs. 12,000 - Rs. 28,000 (maternity and baby shoots)</label><br>
       <input type="radio" value="Photographer 5: Rs. 20,000 - Rs. 35,000 (themed children's photography)" id="5photographer" name="Babies & Kids Photographer"><br>
       <label for="5photograoher">Photographer 5: Rs. 20,000 - Rs. 35,000 (themed children's photography)</label> <br><br>
       <input type="submit" value="Submit" name="bookphotographer" class="btn"><br>
       <h2> Commercial Photography</h2>
        <hr>
       <input type="radio"id="1Photographer" value="Photographer 1: Rs. 12,500+ per image" name="Babies & Kids Photographer"><br>
       <Label for="1Photographer">Photographer 1: Rs. 12,500+ per image</Label><br>
       <input type="radio" value="Photographer 2: Rs. 15,000 - Rs. 50,000 (branding and product shoots)" id="2photographer" name="Babies & Kids Photographer"><br>
       <label for="2photograoher">Photographer 2: Rs. 15,000 - Rs. 50,000 (branding and product shoots)</label><br>
       <input type="radio" value="Photographer 3: Rs. 20,000 - Rs. 60,000 (corporate events)" id="3photographer" name="Babies & Kids Photographer"><br>
       <label for="3photograoher">Photographer 3: Rs. 20,000 - Rs. 60,000 (corporate events)</label><br>
       <input type="radio" value="Photographer 4: Rs. 10,000 - Rs. 30,000 (small business photography)" id="4photographer" name="Babies & Kids Photographer"><br>
       <label for="4photograoher">Photographer 4: Rs. 10,000 - Rs. 30,000 (small business photography)</label><br>
       <input type="radio" value="Photographer 5: Rs. 25,000 - Rs. 1,00,000 (large-scale commercial projects)" id="5photographer" name="Babies & Kids Photographer"><br>
       <label for="5photograoher">Photographer 5: Rs. 25,000 - Rs. 1,00,000 (large-scale commercial projects)</label> <br><br>
       <input type="submit" value="Submit" name="bookphotographer" class="btn"><br>
       <h1>Corporate Events Photography</h1><hr>
       <input type="radio"id="1Photographer" value="Photographer 1: Rs. 25,000 - Rs. 50,000" name="Wedding Photographer"><br>
       <Label for="1Photographer">Photographer 1: Rs. 25,000 - Rs. 50,000</Label><br>
       <input type="radio" value="Photographer 2: Rs. 20,000 - Rs. 40,000" id="2photographer" name=" Wedding Photographer"><br>
       <label for="2photograoher">Photographer 2: Rs. 20,000 - Rs. 40,000</label><br>
       <input type="radio" value="Photographer 3: Rs. 30,000 - Rs. 70,000" id="3photographer" name="Wedding Photographer"><br>
       <label for="3photograoher">Photographer 3: Rs. 30,000 - Rs. 70,000</label><br>
       <input type="radio" value="Photographer 4: Rs. 15,000 - Rs. 35,000" id="4photographer" name=" Wedding Photographer"><br>
       <label for="4photograoher">Photographer 4: Rs. 15,000 - Rs. 35,000</label><br>
       <input type="radio" value="Photographer 5: Rs. 50,000 - Rs. 1,00,000" id="5photographer" name="Wedding Photographer"><br>
       <label for="5photograoher">Photographer 5: Rs. 50,000 - Rs. 1,00,000</label> <br><br>
      <input type="submit" value="Submit" name="bookphotographer" class="btn">
      <br>
        <h1>Fashion & Portfolio Photography</h1>
      <hr>
     <input type="radio"id="1Photographer" value="Photographer 1: Rs. 20,000 - Rs. 50,000 per session" name="Babies & Kids Photographer"><br>
     <Label for="1Photographer">Photographer 1: Rs. 20,000 - Rs. 50,000 per session</Label><br>
     <input type="radio" value="Photographer 2: Rs. 15,000 - Rs. 40,000 (model portfolios)" id="2photographer" name="Babies & Kids Photographer"><br>
     <label for="2photograoher">Photographer 2: Rs. 15,000 - Rs. 40,000 (model portfolios)</label><br>
     <input type="radio" value="Photographer 3: Rs. 25,000 - Rs. 60,000 (editorial fashion shoots)" id="3photographer" name="Babies & Kids Photographer"><br>
     <label for="3photograoher">Photographer 3: Rs. 25,000 - Rs. 60,000 (editorial fashion shoots)</label><br>
     <input type="radio" value="Photographer 4: Rs. 10,000 - Rs. 30,000 (beginner portfolios)" id="4photographer" name="Babies & Kids Photographer"><br>
     <label for="4photograoher">Photographer 4: Rs. 10,000 - Rs. 30,000 (beginner portfolios)</label><br>
     <input type="radio" value="Photographer 5: Rs. 50,000+ (high-fashion shoots)" id="5photographer" name="Babies & Kids Photographer"><br>
     <label for="5photograoher">Photographer 5: Rs. 50,000+ (high-fashion shoots)</label> <br><br>
     <input type="submit" value="Submit" name="bookphotographer" class="btn"><br>
     <h1>Nature Photography</h1>
      <hr>
     <input type="radio"id="1Photographer" value="Photographer 1: Rs.10,000 - Rs.25,000" name="Babies & Kids Photographer"><br>
     <Label for="1Photographer">Photographer 1: Rs.10,000 - Rs.25,000</Label><br>
     <input type="radio" value="Photographer 2: Rs.8,500 -Rs.20,000" id="2photographer" name="Babies & Kids Photographer"><br>
     <label for="2photograoher">Photographer 2: Rs.8,500 -Rs.20,000</label><br>
     <input type="radio" value="Photographer3:Rs .15 ,0oo-Rs .30 ,000" id="3photographer" name="Babies & Kids Photographer"><br>
     <label for="3photograoher">Photographer3:Rs .15 ,0oo-Rs .30 ,000</label><br>
     <input type="radio" value="Photographer4 :Rs .12,000-Rs.-22 ,000" id="4photographer" name="Babies & Kids Photographer"><br>
     <label for="4photograoher">Photographer4 :Rs .12,000-Rs.-22 ,000</label><br>
     <input type="radio" value="Photographer5:Rs .20,000-Rs-40 ,000" id="5photographer" name="Babies & Kids Photographer"><br>
     <label for="5photograoher">Photographer 5: Rs. 20,000 - Rs.40,000 (themed children's photography)</label> <br><br>
     <input type="submit" value="Submit" name="bookphotographer" class="btn"><br>
     <h1>Travel Photography</h1>
     <hr>
    <input type="radio"id="1Photographer" value="Photographer1:Rs.15,000-Rs-35,000" name="Babies & Kids Photographer"><br>
    <Label for="1Photographer">Photographer1:Rs.15,000-Rs-35,000</Label><br>
    <input type="radio" value="Photographer2:Rs.10,000-Rs.-25,000" id="2photographer" name="Babies & Kids Photographer"><br>
    <label for="2photograoher">Photographer2:Rs.10,000-Rs.-25,000</label><br>
    <input type="radio" value="Photographer3:Rs.20,000-Rs.45,000" id="3photographer" name="Babies & Kids Photographer"><br>
    <label for="3photograoher">Photographer3:Rs.20,000-Rs.45,000</label><br>
    <input type="radio" value="Photographer4:Rs .18 ,000-Rs.32,000" id="4photographer" name="Babies & Kids Photographer"><br>
    <label for="4photograoher">Photographer4:Rs .18,000-Rs.32,000</label><br>
    <input type="radio" value="Photographer5:Rs.30,000-Rs.60,000" id="5photographer" name="Babies & Kids Photographer"><br>
    <label for="5photograoher">Photographer5:Rs.30,000-Rs.60,000</label> <br><br>
    <input type="submit" value="Submit" name="bookphotographer" class="btn"><br>
    <br>
    <div class="details" id="details">
       <label> User Name </label><br><input type="text" placeholder="Username" spellcheck="true" maxlength="20"
       name="user" autocomplete="off" required><br><br>
     <label> Phone Number</label> <br><input type="number" placeholder="10 digits numbers" maxlength="10"
       name="number" required><br><br>
       <label> Location </label><br><input type="text" placeholder="Enter your location" spellcheck="true" maxlength="20"
       name="location" autocomplete="off" required><br><br>
       <label> Date and time</label><br><input type="datetime-local" 
       name="Time date" autocomplete="off" required><br><br>
      <input type="submit" value="Submit" name="bookphotographer" class="bnt">
      </div>  
    </div>
      </form>
      </div>
    </div>




</body>
</html>