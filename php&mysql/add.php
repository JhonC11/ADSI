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
      		<h1 class="text-center">Adicionar avatar</h1>
          <hr>
          <ol class="breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li class="active">Adicionar avatar</li>
          </ol>
      		  <form method="post" id="add" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="name" placeholder="Nombre" class="form-control" data-validation="required"></input>
                </div>
                <div class="form-group">
                   <select name="gender" class="form-control" data-validation="required">
                      <option value="">Genero:</option>
                      <option value="Femenino">Femenino</option>
                      <option value="Masculino">Masculino</option>
                   </select>
                </div>
                <div class="form-group">
                    
                    <img id="avatar" src="public/imgs/avatar.png">
                    <button type="button" class="btn btn-default btn-upload">
                     <i class="glyphicon glyphicon-user"></i>   
                    Cargar Foto</button>
                    <input type="file" id="upload" name="image" accept="image/*"></input>
                </div>  
                <div class="form-group">
                    <input type="color" class="form-control" name="color" placeholder="Color en hexagecimal" data-validation="required"></input>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                      <i class="glyphicon glyphicon-pluss"></i>
                      Adicionar
                    </button>
                    <input class="btn btn-danger glyphicon-trash" type="reset" value="limpiar"></input>
                </div>
            </form>
            <?php 
              include 'include/db.php';
              if ($_FILES) {
                  $path = $_FILES['image']['name'];
                  $extension = pathinfo($path, PATHINFO_EXTENSION);
                  $nimage = time();
                  $name = $_POST['name'];
                  $gender = $_POST['gender'];
                  $image = 'public/imgs/avatars/'.$nimage.'.'.$extension;
                  $color = $_POST['color'];
                  
                  if (!empty($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $image);
                    $sql = "INSERT INTO avatars VALUES (DEFAULT, '$name', '$gender', '$image', '$color')";
                    
                  }else{
                    $sql = "INSERT INTO avatars VALUES (DEFAULT, '$name', '$gender', DEFAULT, '$color')";


                  }

                  

                  if (mysqli_query($conx,$sql)) {
                    $_SESSION['action'] = 'Add';
                    echo "<script>window.location.replace('index.php');</script>";
                  }
                  
              }
              mysqli_close($conx);
             ?>
      	</div>
      </div>
    </div>



    <script src="public/js/jquery-3.1.1.js"></script>
    <script src="public/js/jquery.form-validator.min.js"></script>
    <script src="public/js/jquery.form_validator.es.js"></script>

  	<script>
  		$(document).ready(function(){
        $('#upload').hide();
        $('.btn-upload').click(function(){
            $('#upload').click();
        });
        $.validate({
            form: '#add',
            language: es
        });
        $('#upload').change(function(event) {
          previewAvatar();
        });
      });
      function previewAvatar(){
          var fr = new FileReader();
          fr.readAsDataURL(document.getElementById("upload").files[0]);
          fr.onload = function (frevent){
            document.getElementById("avatar").src = frevent.target.result;
          }
      }
  	</script>
</body>
</html>