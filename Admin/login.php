
<?php
include("conn.php");




$UserName="";
$Password="";



//  Masseg Error 


$UserName_Error="";
$Password_Error="";
$msg="";


if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['login'])){
    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];
    $succses = true;
    if(empty($UserName)){
      $UserName_Error="UserName Is Requird";
      $succses = false;
    }
    if(empty( $Password)){
      $Password_Error="Password Is Requird";
      $succses = false;
    }

  }
}

if(isset($_POST['login'])){

  $UserName = mysqli_real_escape_string($cona,$_POST['UserName']);
  $Password = mysqli_real_escape_string($cona,$_POST['Password']);

  $sql = mysqli_query($cona,"select * from admin where UserName='$UserName' and PASSWORD='$Password'");
  $num=mysqli_num_rows($sql);
  if($num>0){
    header("location:dachboord.php");
  }else{
   $msg="Enter the user or password correctly !";
  }







}







?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Delta Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="shortcut icon"
      href="img/portfolio/footer-removebg-preview.png"
    />
  </head>
  <body class="bg-light">
    <!-- Navbar-Start  -->
    <nav class="navbar navbar-light  bg-light shadow-sm">
      <div class="container-lg">
        <a href="#" class="navbar-brand text-danger fw-bold fs-4"
          >Login Admin</a
        >
      </div>
    </nav>
    <!-- Navbar-End-->
    <div class="container mt-2">
      <!-- ---------------------------------------------------------------- -->
      <div class="row mt-5">
        <div class="col-md-6 mt-4 mb-4 bg-white p-5">
          <form method="POST" class="text-danger w-100">
            <div class=" text-danger text-center"><?php echo $msg?></div>
            <h2 class="h2 text-center">
              <i class="fa fa-solid fa-user text-danger fs-4"></i>
              Login
            </h2>
            <div class="mb-3">
              <label class="form-label"
                ><span class="text-dark fs-4">UserName</span>*</label
              >
              <input type="text" name="UserName"value="<?php echo $UserName ?>" class="form-control rounded-0" />
              <span class="text-danger"><?php echo $UserName_Error ?></span>
              <div class="form-text">Enter The UserName Admin</div>
            </div>
            <div class="mb-3">
              <label class="form-label"
                ><span class="text-dark fs-4">Passowrd</span>*</label
              >
              <input name="Password" type="password" value="<?php echo $Password ?>" class="form-control rounded-0" />
              <span class="text-danger"><?php echo $Password_Error ?></span>
              <div class="form-text">Enter The Passowrd Admin</div>
            </div>

            <input type="submit" name="login" value="Login Admin" class="btn btn-danger w-100 rounded-2 p-2">
           
            
            <div class="form-text text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad modi
              eum aspernatur numquam ab nobis libero vero praesentium, eos dicta
              explicabo dolores blanditiis, facere deserunt, laboriosam
              consequuntur magni temporibus architecto!
            </div>
            <div class="form-text">
              <h1 class="text-center text-danger fs-1 mt-4 mb-4">DELTA UI</h1>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <img
            class="w-100"
            src="img/portfolio/footer-removebg-preview.png"
            alt=""
          />
        </div>
      </div>
    </div>
    <!-- Footer Start  -->
    <footer class="footer border-top py-4">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-12">
            <p class="m-0 text-center text-muted">
              &copy; 2023 The Web Abdallah ❤️
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer  End   -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
