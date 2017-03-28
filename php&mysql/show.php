<?php 
      session_start();
      include "include/db.php";
      include "include/header.php"; ?>

<title>Crud</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css"/>  
  <link rel="stylesheet" href="public/css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" href="public/css/custom.css">

	<div class="container-fluid">
      <div class="row">
      	<div class="col-md-6 col-md-offset-3">
      		<h1 class="text-center">Consultar avatar</h1>
          <hr>
          <ol class="breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li class="active">Consultar avatar</li>
          </ol>
          <?php if (isset($_GET['id'])): ?>
              <?php 
                $id = $_GET['id'];
                $sql= "SELECT * FROM avatars WHERE id= $id";
                $rs = mysqli_query($conx,$sql);
                while($row = mysqli_fetch_array($rs)){
               ?>
              
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h3 class="panel-title"><?=$row['name']?></h3>
            </div>
            <div class="panel-body">
              <table class="table">
                  <tr>
                    <td><img src="<?=$row['image']?>"></td>
                  </tr>
                  <tr>
                    <td><?=$row['color']?></td>
                  </tr>
                  <tr>
                    <td><?=$row['gender']?></td>
                  </tr>
                    <td style="background-color:<?=$row['color']?>;
                    color: #fff; 
                    "></td>
              </table>
            </div>
          </div>
            
            <?php 
              }
              mysqli_close($conx);
             ?>
          <?php endif ?>
      	</div>
      </div>
    </div>



    <script src="public/js/jquery-3.1.1.js"></script>

</body>
</html>