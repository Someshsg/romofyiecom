
<!DOCTYPE html>
<html lang="en">
 <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>romofyi</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_top d_none1">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <ul class="conta_icon ">
                           <li><a href="#"><img src="images/call.png" alt="#"/>Call us: +91 9876543210</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="social_icon">
                           <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <div class="se_fonr1">
                           
                           <span class="time_o"> Open hour: 8.00 - 18.00</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <ul class="conta_icon d_none1">
                           <li><a href="#"><img src="images/email.png" alt="#"/> support@romofyi.com</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <a class="logo" href="#"><img src="images/logo.png" alt="#"/></a>
                     </div>
                     <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <li><a href="#"><img src="images/shopping.png" alt="#"/></a> </li>
                           <a href="#" class="order">Order Now</a> 
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="product1.html">Products</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/hariom/registration.php">SIGN UP</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="news.html">News</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contactus.html">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                            <form id="search-form">
  <input type="text" id="search-input" placeholder="Search">
  <button type="submit" id="search-button">Search</button>
</form>
<script>
// Get the form, input and button elements
const searchForm = document.getElementById('search-form');
const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');

// Add an event listener to the form for when it is submitted
searchForm.addEventListener('submit', (event) => {
  // Prevent the form from submitting and refreshing the page
  event.preventDefault();

  // Get the value of the search input
  const searchTerm = searchInput.value;

  // Check if the search term matches a specific page and redirect if it does
  if (searchTerm === 'tv') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product1.html';
  } else if (searchTerm === 'smart tvs') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product1.html';
  }
else if (searchTerm === 'android tvs') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product1.html';
  }
else if (searchTerm === 'smart tvs') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product1.htmll';
  }
else if (searchTerm === 'running shoes') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product2.html';
  }
else if (searchTerm === 'shoes') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product2.html';
  }
else if (searchTerm === 'sports shoes') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product2.html';
  }
else if (searchTerm === 'smart phones') {
    window.location.href = '/product3.html';
  }
else if (searchTerm === 'phones') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product3.html';
  }
else if (searchTerm === 'mobile phones') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product3.html';
  }
else if (searchTerm === 'laptops') {
    window.location.href = 'file:///C:/xampp/htdocs/hariom/product4.html';
  }
else if (searchTerm === 'budget laptops') {
    window.location.href = '/product4.html';
  }





 else {
    // If the search term doesn't match any specific page, show an error message
    alert('No results found for your search term.');
  }
});
</script>


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                  echo"<script> window.location.href='index.html'; </script>   ";
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
</body>
</html>