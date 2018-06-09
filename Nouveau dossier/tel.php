<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css.css" />
      <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
      <title>site1</title>
      <style >
         /*img{
         border: 1px solid black;
         }*/
         li{
         list-style-type: none;
         }
         .span3{
         background-color: white;padding: 8px;border-radius: 6px;margin-bottom: 20px;
         }
         @media (max-width: 575.98px) {
         ul{
         padding-left: 0px;
         }
         }
      </style>
   </head>
   <body style="background: url('back.jpg') no-repeat fixed; background-size: 100% 100%;">
      <?php include("entete.php"); ?>
      <br> <br>
      <div class="container" style="width: 100%;">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="capture.png" alt="First slide" >
                  <div class="carousel-caption d-none d-md-block">
                     <h4>C'est en communiquant qu'on avance</h4>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="capture1.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                     <h4>La technologie en mouvement </h4>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="cap2.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                     <h4>Nous donnons vie à la technologie </h4>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <center>
            <div class="row">
               <div class="col-sm-9" >
                  <center>
                     <h1>nouvel arrivage</h1>
                  </center>
                  <ul class="thumbnails" >
                     <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=projet_daw;charset=utf8', 'root', '');
                        $query = "SELECT nom, price,imagename,marque FROM produit where categorie='".$_GET['categorie']."' order by id DESC limit 9 ";
                         $result = $bdd->query($query); 
                         while($row=$result->fetch())
                        {
                        ?>
                     <li class="span3 taille" style="margin-left: 3px;" >
                        <div class="thumbnail" >
                           <a  href="product_details.html"><img  class="img-thumbnail" <?php echo 'src="data:image/jpeg;base64,'.base64_encode($row['imagename']).'"' ?> alt=""/></a>
                           <div class="caption">
                              <h5><?php  echo $row['nom']; ?></h5>
                              <p> 
                                 <?php  echo $row['marque']; ?>
                              </p>
                              <h4 style="text-align:center"><a class="btn" href="product_details.html"> description</a> <button class="btn btn-primary" href="#"><?php  echo $row['price']; ?>$</button></h4>
                           </div>
                        </div>
                     </li>
                     <?php  
                        }
                        $result->closeCursor();
                        ?>
                  </ul>
               </div>
               <div class="col-sm-3  ">
                  <center>
                     <h1>pub</h1>
                  </center>
                  <img src="pubb1.jpg" class="rounded img-fluid" style="height: 350px;">
                  <img src="oor.jpg" class="rounded img-fluid" style="margin-top: 40px;height: 400px;">
               </div>
            </div>
         </center>
         <br>
      </div>
      <?php include("footer.php"); ?>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
   <script>
      var modal1 = document.getElementById("id03");
      var modal2 = document.getElementById("id01");
      // Get the modal
      var modal = document.getElementById("id02");
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
        if (event.target == modal1) {
          modal1.style.display = "none";
        }
        if (event.target == modal2) {
          modal2.style.display = "none";
        }
      }
   </script>
</html>