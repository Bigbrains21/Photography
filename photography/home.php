<?php include("connection.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="home.css">
  <title>Photography Business  Website</title>
</head>


<body>
  <div class="container" id="top">  
    <div class="navbar">
    
    <i class="fa-solid fa-house"><a href="#top">Home</a></i>
    <i class="fa-solid fa-camera"><a href="#work">Types of Photography</a></i>
    <i class="fa-solid fa-user"> <a href="#user">Register</a></i>
    <i class="fa-solid fa-right-to-bracket"> <a href="#userlogin">Log in</a></i>
    <i class="fa-solid fa-phone"> <a href="#us">Contact us</a></i>
    </div>
   
    <img src="logo.png" height="250px" widht="250px"  style="margin-left: 35%; margin-top:4%;">
    <h1>Photography Station</h1>

<h2>Capturing Moments, Creating Memories</h2>
    <h3>Category</h3>

    <div class="Category">
      <div id="slide1" class="slide"><b style="color: black;font-size: x-large;">Wedding</b></div>
      <div id="slide2" class="slide"><b style="color: black;font-size: x-large; ">Babies & Kids</b></div>
      <div id="slide3" class="slide"><b style="color:black;font-size: x-large; ">Special Occasion</b></div>
      <div id="slide4" class="slide"><b style="font-size: x-large">Commercial</b></div>
      <div id="slide5" class="slide"><b style="font-size: x-large">Corporate Events</b></div>
      <div id="slide6" class="slide"><b style="font-size: x-large">Fashion & Portfolio</b></div>
      <div id="slide7" class="slide"><b style="color: lavender;font-size: x-large; ">Nature</b></div>
      <div id="slide8" class="slide"><b style="color:lavenderblush ; font-size: x-large; ">Traveling</b></div>
    </div>
    </div>
    <div class="work" id="work">
      <h6>Types of Photography</h6>
      <div class="cards">
        <div class="card">
          <h4>Portrait Photography</h4>
          <p>Capturing individual or family portraits in studio settings or natural environments.</p>
        </div>
        <div class="card">
          <h4>Fashion Photography</h4>
          <p>Focusing on clothing and accessories, typically in controlled studio settings or dynamic outdoor locations.
          </p>
        </div>
        <div class="card">
          <h4>Event Photography</h4>
          <p>Documenting significant occasions such as weddings, corporate events, or parties.</p>
        </div>
      </div>
    </div>
    <div class="blogs">
      <h1>Photography Specialties</h1>

      <div class="blog-grid">
        <div class="blog-cards">
          <h2>Wedding Photography</h2>
          <div class="content">
            <ul>
              <li>Must-Have Shots: Essential moments like the bride walking down the aisle</li>
              <li>Technical Skills: Master lighting techniques and RAW format shooting</li>
              <li>Creative Composition: Using architectural features for framing</li>
            </ul>

          </div>

        </div>

        <div class="blog-cards">
          <h2>Babies & Kids Photography</h2>
          <div class="content">
            <ul>
              <li>Natural Moments: Candid shots that reflect genuine emotions</li>
              <li>Safety and Comfort: Ensuring children feel comfortable during shoots</li>
              <li>Creative Themes: Using props and themed settings</li>
            </ul>
          </div>
        </div>
        <div class="blog-cards">
          <h2>Commercial Photography</h2>
          <div class="content">
            <ul>
              <li>Product Shots: High-quality images for marketing</li>
              <li>Brand Identity: Alignment with marketing strategies</li>
              <li>Diverse Applications: Fashion, food, and corporate headshots</li>
            </ul>
          </div>
        </div>
        <div class="blog-cards">
          <h2>Corporate Events Photography</h2>
          <div class="content">
            <ul>
              <li>Professionalism: Maintaining professional demeanor</li>
              <li>Networking Moments: Documenting interactions</li>
            </ul><br><br>
          </div>
        </div>

        <div class="blog-cards">
          <h2>Fashion & Portfolio Photography</h2>
          <div class="content">
            <ul>
              <li>Styling and Direction: Collaborating with stylists</li>
              <li>Creative Lighting: Dramatic lighting techniques</li>
            </ul><br><br>
          </div>
        </div>
        <div class="blog-cards">
          <h2>Nature Photography</h2>
          <div class="content">
            <ul>
              <li>Patience and Timing: Waiting for perfect moments</li>
              <li>Environmental Awareness: Conservation themes</li>
              <li>Technical Skills: Long exposures and macro photography</li>
            </ul>

          </div>

        </div>
        <div class="blog-cards">
          <h2>Travel Photography</h2>
          <div class="content">
            <ul>
              <li>Storytelling: Conveying sense of place and culture</li>
              <li>Candid Moments: Capturing local life</li>
              <li>Diverse Techniques: Aerial and street photography</li>
            </ul><br>
          </div>
         

        </div>
        <img src="camera.png" height="250px" width="550px" style="margin-left:30%;">

      </div><br>
      <input type="button" value="View Plan" id="btn" class="ViewP">
      <div class="pop">
        <div class="popC">
          Wedding plan
          <hr>
          Basic-25,000-65,000 <br><br>
          Normal-65,000-70,000<br><br>
          Advance-70,500-95,000<br><br><br>
          Babies & Kids Photography
          <hr>
          Basic-25,000-65,000 <br><br>
          Normal-65,000-70,000<br><br>
          Advance-70,500-95,000<br><br><br>
          Commercial Photography
          <hr>
          Basic-25,000-65,000 <br><br>
          Normal-65,000-70,000<br><br>
          Advance-70,500-95,000<br><br><br>
          Corporate Events Photography
          <hr>
          Basic-25,000-65,000 <br><br>
          Normal-65,000-70,000<br><br>
          Advance-70,500-95,000<br><br><br>
          Fashion & Portfolio Photography
          <hr>
          Basic-25,000-65,000 <br><br>
          Normal-65,000-70,000<br><br>
          Advance-70,500-95,000<br><br><br>
          Nature Photography
          <hr>
          Basic-25,000-65,000 <br><br>
          Normal-65,000-70,000<br><br>
          Advance-70,500-95,000<br><br><br>
          Travel Photography
          <hr>
          Basic-25,000-65,000 <br><br>
          Normal-65,000-70,000<br><br>
          Advance-70,500-95,000<br><br><br>
          <input type="button" value="close" id="close"
            style="height: 18px;font-size: small; width: 50%; margin: auto; cursor: pointer; ">
        </div>
      </div>
    </div>
    <div class="Rigister" id="user">

      <h2>Are you want Professional Photographer?</h2>
      <input type="button" value="Register as a client" id="register" >

      <div class="popR">
        <div class="popCR"><br><br>
        <form action="#" method="POST">
          <label> Name </label><br><input type="text" placeholder="Username" spellcheck="true" maxlength="20"
            name="user" autocomplete="off" required><br><br>
          <label> Phone Number</label> <br><input type="number" placeholder="10 digits numbers" maxlength="10"
            name="number" required><br><br>
            <label> Email Id</label> <br><input type="email" placeholder="@gamil.com" name="mail" required><br><br>
            <label> Password</label> <br><input type="Password" placeholder="Enter your password" name="pass" maxlength="6"  required><br><br>
            <input type="submit" value="Register" id="klose"name="Register"
            style="height: 18px;font-size: small; width: 50%; margin: auto; cursor: pointer; ">
        </div>
        </form>
      </div>
      
    </div>
    <div class="d">
      <img src="camera2.png" height="450px" width="350px">   
    </div>
    <div class="login"  id="userlogin">
      
      <h2>
        <marquee direction="right">Book a Photographer</marquee>
      </h2>
      <form action="#" method="POST">
        <input type="email" placeholder="Enter your Register mail" name="mail" spellcheck="true" required><br><br>
        <input type="password" placeholder="Enter your Pssword" name="pass" spellcheck="true" maxlength="6" required><br><br>
        <input type="submit" value="Login" name="Login" id="login" style="cursor: pointer;">
      </form>
    </div>
    <div class="d3">
      <img src="dimg.png" height="650px" width="550px"  style="margin-left:8%; margin-top:-40%;">   
    </div>  
    <div class="gallery-container">
  <h1 class="gallery-title">Gallery</h1>
  <marquee direction="left">
  <div class="gallery-grid">
    <div class="gallery-item">
      <img src="weeding.jpg" alt="Wedding Photography" class="wedding-filter">
      <div class="gallery-caption">Wedding Photography</div>
      <div class="category-label">Wedding</div>
    </div>
    
    <div class="gallery-item">
      <img src="kids.jpg" alt="Babies & Kids Photography" class="kids-filter">
      <div class="gallery-caption">Babies & Kids Photography</div>
      <div class="category-label">Babies & Kids</div>
    </div>
    
    <div class="gallery-item">
      <img src="company.jpg" alt="Commercial Photography" class="commercial-filter">
      <div class="gallery-caption">Commercial Photography</div>
      <div class="category-label">Commercial</div>
    </div>
    
    <div class="gallery-item">
      <img src="party.jpg" alt="Special Occasion Photography" class="occasion-filter">
      <div class="gallery-caption">Special Occasion Photography</div>
      <div class="category-label">Special Occasion</div>
    </div>
    
    <div class="gallery-item">
      <img src="fashion.jpg" alt="Fashion Photography" class="fashion-filter">
      <div class="gallery-caption">Fashion & Portfolio</div>
      <div class="category-label">Fashion</div>
    </div>
    
    <div class="gallery-item">
      <img src="nature.jpg" alt="Nature Photography" class="nature-filter">
      <div class="gallery-caption">Nature Photography</div>
      <div class="category-label">Nature</div>
    </div>
    
    <div class="gallery-item">
      <img src="travel.jpg" alt="Travel Photography" class="travel-filter">
      <div class="gallery-caption">Travel Photography</div>
      <div class="category-label">Traveling</div>
    </div>
   
    <div class="gallery-item">
      <img src="weeding2.jpg" alt="weeding2" class="travel-filter">
      <div class="gallery-caption">wedding Photography</div>
      <div class="category-label">wedding Photography</div>
    </div>
  </div> </marquee>
</div>

      <div class="contactus" id="us">
      <div class="mail">
        <form action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="5361c22d-e001-47eb-9649-670a34b5dad4">
          <h2>Contact US</h2><br></br>
          <label> User Name </label><br><input type="text" placeholder="Username" spellcheck="true" maxlength="20"
            name="user" autocomplete="off" required><br><br>
          <label> Phone Number</label> <br><input type="number" placeholder="10 digits numbers" maxlength="10"
            name="number" required><br><br>
          <label> Email Id</label> <br><input type="email" placeholder="@gamil.com" name="mail" required><br><br>
          <label> Do you have any question?/Feedback</label> <br><br><textarea placeholder="Question?/Feedback" rows="8"
            cols="60" name="QUESTIONS/Feedback" required> </textarea><br><br>
          <input type="submit" value="Submit" name="Register" class="btn"> <br><br><br><br>
      </div>
    </div>
    <br><br>
    </form>
    <div class="contact3d">
      <img src="contact.png" height="750px" width="650px" style="margin-left: -4%;margin-top: -58%; filter: none;">
    </div>  
  </div>
  
  <div class="footer">
    <h2>Photography Station</h2><br>
    <div class="links">
    <a href="#top">Home</a><br>
    <a href="#work">Types of Photography</a><br>
    <a href="#btn">Plans</a><br>
  </div>
    <div class="links2">
    <a href="#user">Register</a><br>
    <a href="#userlogin">Log in</a><br>
    <a href="#us">Contact us</a><br>
    </div><br><br>
    <hr>
    Icons and 3D Pictures made by <a href="https://www.flaticon.com/"> Freepik from www.flaticon.com</a> And <a href="https://fontawesome.com/search"> Font Awesome</a>
    <hr>
    © Copyright 2025 Photography Station Technologies Pvt. Ltd. All rights reserved.
  </div>
  <script src="script.js"></script>
</body>
</html>

<?php 
      if($_POST['Register'])
      {
     $name      = $_POST['user'];
     $contact     = $_POST['number'];
     $email  = $_POST['mail'];
     $password  = $_POST['pass'];
   $query = "INSERT INTO user VALUES('$name','$contact','$email','$password')";
   $data= mysqli_query($con,$query);
  if($data)
  {
      echo"Data inserted succesfully";
    
  }
  else{
          echo "Failed";
   }
      }
        if($data){ 
       header( header: "location:.login");}
      
  ?>
 <?php 
if(isset( $_POST["Login"]))
    {
  
   $email = $_POST['mail'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM  user WHERE email ='$email' && password='$password' ";
   $data = mysqli_query($con, $query); 
  $total= mysqli_num_rows($data);
  
  if($total == 1)
  {
    //header('location:login.php');
    ?>
   
   <meta http-equiv = "refresh" content="0; url =http://localhost:3000/login.php"/>
<?php 
}
else{
    echo "Login Failed";
}
    }

 ?>
    
  
 