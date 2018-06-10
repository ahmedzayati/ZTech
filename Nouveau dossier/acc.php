<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css.css" />
      <!--   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
         -->    
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
      <!--       <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
         -->    
      <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
      <!-- Bootstrap style responsive --> 
      <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
      <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
      <!-- Google-code-prettify --> 
      <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
      <!-- fav and touch icons -->
      <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
      <title>site1</title>
      <style >
         /*img{
         border: 1px solid black;
         }*/
         li{
         list-style-type: none;
         }
         .span3{
         background-color: white;padding: 8px;border-radius: 6px;margin-bottom: 20px;uytre
         }
         @media (max-width: 575.98px) {
         ul{
         padding-left: 0px;
         }
         }
         .titre{
         border: 1px solid green;
         border-radius: 8px;
         background-color: blue;
         color: white;
         opacity: 0.8;
         width: 50%;
         padding-bottom: 7px;
         }
         h4{
         color: brown;
         }
      </style>
   </head>
   <body style="background: url('back.jpg') no-repeat fixed; background-size: 100% 100%;">
      <?php include("e.php"); ?>
      <br>
      <div class="container" ">
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
         <br>
         <center>
            <div class="row">
               <div class="col-md-9  " style="padding: 0px;" >
                  <center>
                     <h1 class="btn btn-primary">nouvel arrivage</h1>
                  </center>
                  <ul class="thumbnails " >
                     <?php  
                        $bdd = new PDO('mysql:host=localhost;dbname=projet_daw;charset=utf8', 'root', '');
                        $query = "SELECT nom, price,imagename,marque FROM produit order by id DESC limit 9 ";
                         $result = $bdd->query($query); 
                         while($row=$result->fetch())
                        {
                        ?>
                     <li class="span3 " style="margin-left: 3px;" >
                        <div class="thumbnail" >
                           <a  href="product_details.html"><img  class="img-thumbnail" <?php echo 'src="data:image/jpeg;base64,'.base64_encode($row['imagename']).'"' ?> alt=""/></a>
                           <div class="caption">
                              <h5><?php  echo $row['nom']; ?></h5>
                              <p> 
                                 <?php  echo $row['marque']; ?>
                              </p>
                              <h4 style="text-align:center"><a class="btn" href="product_details.html"> description</a> <button class="btn btn-primary" ><?php  echo $row['price']; ?>$</button></h4>
                           </div>
                        </div>
                     </li>
                     <?php  
                        }
                        $result->closeCursor();
                        ?>
                  </ul>
               </div>
               <div class="col-md-3  ">
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
      var modal5 = document.getElementById("id02");
       var modal = document.getElementById("id04");
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
         if (event.target == modal5) {
          modal5.style.display = "none";
        }
      }
   </script>
</html>