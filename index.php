
<?php
include("conn.php");

$name="";
$email="";
$supject="";
$masseg="";


// Massege Error 
$name_error="";
$email_error="";
$supject_error="";
$masseg_error="";

if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $supject=$_POST['supject'];
    $masseg=$_POST['masseg'];
    $sucssfuly=true;

    if(empty($name)){
      $name_error="Name is required!";
    }
    if(empty($email)){
      $email_error="Email is required!";
    }
    if(empty($supject)){
      $supject_error="Supject is required!";
    }
    if(empty($masseg)){
      $masseg_error="Massege is required!";
    }

    if($sucssfuly){
      $query="INSERT INTO userss(name,email,supject,masseg) values(?,?,?,?)";
      $statment= $cona->prepare($query);
      $statment->bind_param("ssss",$name,$email,$supject,$masseg);
      $statment->execute();
      $name="";
      $email="";
      $supject="";
      $masseg="";
    }
  }
}



?>











<!DOCTYPE html>
<html lang="en">
<head>
  <title>DELTA UI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/portfolio/footer-removebg-preview.png" />
</head>
<body class="bg-light">
  <!-- Navbar-Start  -->
 <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
   <div class="container-lg">
    <a href="#" class="navbar-brand text-danger fw-bold fs-4">DELTA UI</a>

    <div class="dropdown">
      <button type="button" id="dropdown" data-bs-toggle="dropdown" class="btn btn-danger px-3 ">
       <i class="fas fa-bars"></i>
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="#home">Home</a></li>
        <li><a class="dropdown-item" href="#about">About</a></li>
        <li><a class="dropdown-item" href="#service">Services</a></li>
        <li><a class="dropdown-item" href="#protfolio">Protfolio</a></li>
        <li><a class="dropdown-item" href="#testim">Testimonials</a></li>
        <li><a class="dropdown-item" href="#contact">Contact</a></li>
        <li><a class="dropdown-item" href="Admin/login.php">Login Admin</a></li>
      </ul>
    </div>
   </div>
 </nav>
  <!-- Navbar-End-->

  <!-- Home Section Start  -->
  <section class="home py-5" id="home">
    <div class="container-lg">
      <div class="row  min-vh-100 align-items-center align-content-center ">
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="home-img text-center">
            <img width="373px" height="373px" class="rounded-circle mw-100" src="img/profile.png" alt="profile">
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0 order-md-first">
          <div class="home-text">
            <p class="text-muted mb-1 ">Hello I'm</p>
            <h1 class="text-danger text-uppercase fs-1 fw-bold">Web Designer</h1>
            <h2 class="fs-4">Abdallah Najjar</h2>
            <p class="mt-4 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse doloribus libero quibusdam officia culpa!</p>
            <a class="btn btn-danger text-white px-3 mt-3" href="#protfolio">My Work</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Home Section End -->


  <!-- About Section Start  -->
  <section class="about  py-5" id="about">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5  ">About Me</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="about-text">
            <h3 class="fs-4 mb-3">Lorem ipsum dolor sit amet consectetur</h3>
            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero incidunt vitae, amet obcaecati error eligendi itaque dolore. Esse nobis, dicta quod sint officiis animi vel reprehenderit inventore, dolores officia numquam!</p>

          </div>
          <div class="row text-center text-uppercase my-3">
            <div class="col-sm-4">
              <div class="fact-item">
                <h4 class="fs-1 fw-bold ">100</h4>
                <p class="text-muted">Projects Completed</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="fact-item">
                <h4 class="fs-1 fw-bold ">90</h4>
                <p class="text-muted">Happy Clients</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="fact-item">
                <h4 class="fs-1 fw-bold ">95</h4>
                <p class="text-muted">Positive Reviews</p>
              </div>
            </div>
          </div>
          <div class="row">
         <div class="col-lg-12 d-flex align-items-center">
          <a class="btn btn-danger px-3 me-5" href="#">Download CV</a>
          <div class="social-Links">
            <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
          </div>
         </div>
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="skill-item mb-4">
            <h3 class="fs-6 ">Html</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-danger" style="width: 25%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="skill-item mb-4">
            <h3 class="fs-6 ">Css</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="skill-item mb-4">
            <h3 class="fs-6 ">JavaScript</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-danger" style="width: 90%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="skill-item mb-4">
            <h3 class="fs-6 ">BootStrap</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-danger" style="width: 100%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Service Section Start  -->
  <section class="Service  py-5" id="service">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-danger fs-2">
              <i class="fas fa-code"></i>
            </div>
            <h3 class="fs-5 py-2">Web Development</h3>
            <p class="text-muted">Lorem ipsum dolor, sit amet consectetur </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-danger fs-2">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h3 class="fs-5 py-2">Creative Design</h3>
            <p class="text-muted">Lorem ipsum dolor, sit amet consectetur </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-danger fs-2">
              <i class="fas fa-image"></i>
            </div>
            <h3 class="fs-5 py-2">Photoshop</h3>
            <p class="text-muted">Lorem ipsum dolor, sit amet consectetur </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section End -->


  <!-- Protfolio Section Start  -->
  <section class="Protfolio py-5" id="protfolio">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Protfolio</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-lg-4">
          <div class="protfolio-item">
            <img class="w-100 img-thumbnail" src="img/portfolio/1.jpg" alt="">
            <h3 class="text-capitalize fs-5 my-2">team section</h3>
            <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-lg-4">
          <div class="protfolio-item">
            <img class="w-100 img-thumbnail" src="img/portfolio/2.jpg" alt="">
            <h3 class="text-capitalize fs-5 my-2">App Landing Page</h3>
            <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-lg-4">
          <div class="protfolio-item">
            <img class="w-100 img-thumbnail" src="img/portfolio/3.jpg" alt="">
            <h3 class="text-capitalize fs-5 my-2">creative team section</h3>
            <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-lg-4">
          <div class="protfolio-item">
            <img class="w-100 img-thumbnail" src="img/portfolio/4.jpg" alt="">
            <h3 class="text-capitalize fs-5 my-2">toggle pricing table</h3>
            <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-lg-4">
          <div class="protfolio-item">
            <img class="w-100 img-thumbnail" src="img/portfolio/5.jpg" alt="">
            <h3 class="text-capitalize fs-5 my-2">bootstrap 5 image gallary</h3>
            <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-lg-4">
          <div class="protfolio-item">
            <img class="w-100 img-thumbnail" src="img/portfolio/6.jpg" alt="">
            <h3 class="text-capitalize fs-5 my-2">filwabie image gallary</h3>
            <p class="mb-4"><a class="text-danger text-decoration-none" href="#">Live Demo</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Protfolio Section End -->

  <!-- Freelancer available Section Start  -->
  <section class="Freelancer py-5 bg-danger">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <p class="text-light fs-5">Do you have any project ?</p>
          <h2 class="fs-1 text-white mb-4">I'm Available For Freelancer Projects</h2>
          <a class="btn btn-outline-light" href="#contact">Hire Me</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Freelacer available Section End -->

  <!-- testimonials section start  -->
  <section class="testimon py-5" id="testim">
    <div class="container-lg py-4">
      
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        
        <div class="col-lg-8 col-xl-7">
          <div class="testi-item bg-white shadow-sm rounded p-4">
            <div class="testi-auther-info d-flex align-items-center ">
              <img width="70px" height="70px" class="img-thumbnail rounded-circle" src="img/testimonial/1.jpg" alt="">
              <div class="author ms-3">
                <h3 class="fs-6 mb-1">Abdallah Najjar</h3>
                <p class="text-muted m-0">Seo Manager</p>
              </div>
             
            </div>
            <p class="text-muted mt-3">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus nisi accusamus quidem fugit rerum temporibus consectetur sequi porro numquam voluptatem sit, labore, veniam autem dignissimos soluta consequatur voluptatibus sapiente tempora.
  
            </p>
            <div class="rating text-danger">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- testimonials section end -->

  <!-- Contact Section Start  -->
  <section class="conact py-5" id="contact">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">Contact Me</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="contact-item d-flex mb-3 ">
            <div class="icon fs-4 text-danger">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="text ms-3 ">
              <h3 class="fs-5">Email</h3>
              <p class="text-muted ">bwwdalnjar18@gmail.com</p>
            </div>
          </div>
          <div class="contact-item d-flex mb-3">
            <div class="icon fs-4 text-danger">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text ms-3 ">
              <h3 class="fs-5">Phone</h3>
              <p class="text-muted ">+972594749278</p>
            </div>
          </div>
          <div class="contact-item d-flex mb-3">
            <div class="icon fs-4 text-danger">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text ms-3 ">
              <h3 class="fs-5">Visit Office</h3>
              <p class="text-muted ">85 Shuhada Street "Gaza strip"</p>
            </div>
          </div>
     
        </div>
        <div class="col-md-7">
          <div class="contact-form">
            <form method="POST">
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <input value="<?php echo $name?>" name="name" type="text" placeholder="Your Name" class="form-control form-control-lg fs-6 border-0 shadow-sm ">
                  <span class="text-danger"><?php echo $name_error?></span>
                </div>
                <div class="col-lg-6 mb-4">
                  <input value="<?php echo $email?>" name="email" type="text" placeholder="Your Email" class="form-control form-control-lg fs-6 border-0 shadow-sm ">
                  <span class="text-danger"><?php echo $email_error?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <input value="<?php echo $supject?>" name="supject" type="text" placeholder="Supject" class="form-control form-control-lg fs-6 border-0 shadow-sm ">
                  <span class="text-danger"><?php echo $supject_error?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <textarea value="<?php echo $masseg?>" name="masseg" rows="5" placeholder="Your Massege" class="form-control form-control-lg fs-6 border-0 shadow-sm " ></textarea>
                  <span class="text-danger"><?php echo $masseg_error?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 mb-4">
                 <input name="send" class="btn btn-danger px-3" type="submit" value="Send Massege">

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Conact Section  End   -->

  <!-- Footer Start  -->
  <footer class="footer border-top py-4">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-12">
          <p class="m-0 text-center text-muted">&copy; 2023 The Web Abdallah ❤️</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer  End   -->
















<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>