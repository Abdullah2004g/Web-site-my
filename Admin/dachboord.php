<?php
include("conn.php");

if(isset($_GET['b_id'])){
  $id=$_GET['b_id'];
  $query="DELETE FROM userss WHERE id=?";
  $sta=$cona->prepare($query);
  $sta->bind_param("i",$id);
  $sta->execute();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dachboord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/portfolio/footer-removebg-preview.png" />
</head>
<body class="bg-light">
  <!-- Navbar-Start  -->
 <nav class="navbar mb-4  navbar-light bg-light shadow-sm">
   <div class="container-lg ">
    <a href="#" class="navbar-brand text-danger fw-bold fs-4">Delta Admin</a>

    <i class="fa fa-solid fa-user text-danger fs-4"></i>
   </div>
 </nav>
  <!-- Navbar-End-->

 <div class="container-lg mb-4">
  <div class="text-capitalize text-center mb-4 fs-4">Users in Delta</div>
  <table class="table table-hover">
    <thead>
      <tr>
        <td>Avtar</td>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Supject</td>
        <td>View Profile</td>
        <td>Delet Profile</td>
        <td>Status</td>
      </tr>
    </thead>
    <tbody>
      <?php
       $query = "select * from userss";
       $s = $cona->prepare($query);
       $s->execute();
       $rusult=$s->get_result();
       while($row=$rusult->fetch_assoc()){
      ?>
      <tr>
        <td><img src="img/Avtar/pic-1.png" alt=""></td>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['supject']?></td>
        <td><a class="btn btn-primary" href="view.php?d_id=<?php echo $row['id']?>">View Profile</a></td>
        <td><a class="btn btn-danger" href="dachboord.php?b_id=<?php echo $row['id'] ?>">Delete Profile</a></td>
        <td><div class="badge fs-5 bg-success">Succses</div></td>
      </tr>
      <?php
       }
      ?>
    </tbody>
  </table>
</div>










  <!-- Footer Start  -->
  <!-- <footer class="footer border-top py-4">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-12">
          <p class="m-0 text-center text-muted">&copy; 2023 The Web Abdallah ❤️</p>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- Footer  End   -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>