
<?php
include("conn.php");

if(isset($_GET['d_name'])){
  $name=$_GET['d_name'];
  $query="DELETE FROM userss WHERE name=?";
  $sta=$cona->prepare($query);
  $sta->bind_param("s",$name);
  $sta->execute();
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dachboord</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="shortcut icon"
      href="img/portfolio/footer-removebg-preview.png"
    />
  </head>
  <body class="bg-light">
    <!-- Navbar-Start  -->
    <nav class="navbar mb-4 navbar-light bg-light shadow-sm">
      <div class="container-lg">
        <a href="#" class="navbar-brand text-danger fw-bold fs-4">View Users</a>

        <i class="fa fa-solid fa-user text-danger fs-4"></i>
      </div>
    </nav>
    <!-- Navbar-End-->

    <div class="container-lg mb-4">
      <div class="text-capitalize text-center mb-4 fs-4">
        View Users in Delta
      </div>
      <table class="table  table-hover">
        <thead>
          <tr>
            <td>Avtar</td>
            <td>Name</td>
            <td class="text-center">Massege</td>
            <td>Delete</td>
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
            <td><img src="img/Avtar/pic-1.png" alt="" /></td>
            <td><?php echo $row['name']?></td>
            <td class="px-4 text-center"><?php echo $row['masseg']?></td>
            <td><a class="btn btn-danger" href="view.php?d_name=<?php echo $row['name']?>">Delete</a></td>
          </tr>
          <?php
               }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
