<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../style_daw.css" />
      <link href="../themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
      <title>site1</title>

   </head>
   <body style="background: url('back.jpg') no-repeat fixed; background-size: 100% 100%;">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <a class="navbar-brand" href="../user_panel/home_page.php" style="color: #007bff;">ZAYATECH</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item active">
                  <a class="nav-link" href="../user_panel/home_page.php">Home </a>

               </li>
            </ul>
            <ul class="navbar-nav">
               <li class="nav-item" style="margin-bottom: 3px;margin-right: 7px;">
                  <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary" id="sign" style="height: 25px;" >
                     <p style="position: relative;bottom: 7px;">Inserer produit</p>
                  </button>
                  <div id="id03" class="modal" >
                     <span onclick="document.getElementById('id03').style.display='none'" >&times;</span>
                     <form method="POST" action="insert_articale.php" enctype="multipart/form-data" style="padding: 20px;"" class="modal-content animate form-row">
                        <div class="form-row">
                           <div class="form-group col-md-6" >
                              <label for="name">Nom produit</label>
                              <input type="text"  id="name" aria-describedby="emailHelp" class="form-control" placeholder="Name" name="name" required maxlength="30">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="name">prix</label>
                              <input type="number"  id="price" aria-describedby="emailHelp" class="form-control" placeholder="price" name="price" required maxlength="5">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="country" >Choisir categorie</label>
                              <select   id="country" name="categorie" class="form-control">
                                 <option value="ordinateur bureau">ordinateur bureau</option>
                                 <option value="ordinateur portable">ordinateur portable</option>
                                 <option value="composants informatique">composants informatique</option>
                                 <option value="telephone">telephone</option>
                                 <option value="imprimante">imprimante</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="name"  >Marque</label>
                              <input type="text"  id="marquerque"  class="form-control" placeholder="marque" name="marque" required maxlength="30">
                           </div>
                        </div>
                        <div class="form-row">
                           <label for="name"  >Quantité</label>
                           <input type="text"  id="marquerque"  class="form-control" placeholder="Quantité" name="quantite" required maxlength="30">
                        </div>
                        <input type="file" name="myimage"  class="form-control-file">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label for="verify" >Description</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required ></textarea>                                
                           </div>
                        </div>
                        <input type="submit" name="submit_image" value="Upload"  class="btn btn-primary">
                     </form>
                  </div>
               </li>
               <li>
                  <button class="btn btn-primary"  style="height: 25px;" ><a href="show_message.php" style="position: relative;bottom: 7px;color: white">Messages reçus</a></button>
               </li>
               <li>
                  <button class="btn btn-primary"  style="height: 25px; margin-left: 6px;" ><a href="delete_article.php" style="position: relative;bottom: 7px;color: white">Supprimer produit</a></button>
               </li>

               <li>
                  <button class="btn btn-primary"  style="height: 25px; margin-left: 6px;" ><a href="logout.php" style="position: relative;bottom: 7px;color: white">Logout</a></button>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container" ">
         <center>
            <div class="row">
               <div class="col-md-9  "  >
                  <br><br>
                  <h2>Mise a jour un produit</h2>
                  <div class="container">
                     <form method="POST" action="maj.php" enctype="multipart/form-data">
                        <div class="form-group row">
                           <label class="col-sm-2">choisir le produit à modifier</label>
                           <select  class="form-control col-sm-6"  name="modifier">
                           <?php  
                              $bdd = new PDO('mysql:host=localhost;dbname=projet_daw;charset=utf8', 'root', '');
                              $query = "SELECT nom FROM produit ";
                               $result = $bdd->query($query); 
                               while($row=$result->fetch())   
                              {    
                              echo '<option value="'.$row['nom'].'">'.$row['nom'].'</option>';
                              
                              
                              
                              
                              }
                               $result->closeCursor();
                              ?>
                           <?php
                              if (isset($_POST['modifier'])) {
                                $s=$_POST['modifier'];
                                
                                $mod="UPDATE `produit` SET `nom`='".$_POST['name']."',`categorie`='".$_POST['categorie']."',`description`='".$_POST['description']."',`price`='".$_POST['price']."',`marque`='".$_POST['marque']."',`quantite`='".$_POST['quantite']."',`imagename`='".addslashes (file_get_contents($_FILES['myimage']['tmp_name']))."',`imagetmp`='".$_FILES["myimage"]["name"]."' WHERE nom='".$_POST['modifier']."'";
                               
                                $result = $bdd->query($mod);
                                 $result->closeCursor();
                              }
                              ?>
                           </select>
                        </div>
                        <div class="form-group row">
                           <label for="name" class="col-sm-2" >nom de produit</label>
                           <input type="text" class="form-control col-sm-2" id="name" aria-describedby="emailHelp" placeholder="Name" name="name" required maxlength="30">
                           <label for="name" class="col-sm-2" >prrice</label>
                           <input type="number" class="form-control col-sm-2" id="price" aria-describedby="emailHelp" placeholder="price" name="price" required maxlength="30">
                        </div>
                        <br>
                        <div class="form-group row">
                           <label for="country" class="col-sm-2">choisir la categorie</label>
                           <select  class="form-control col-sm-2" id="country" name="categorie">
                              <option value="ordinateur bureau">ordinateur bureau</option>
                              <option value="ordinateur portable">ordinateur portable</option>
                              <option value="composants informatique">composants informatique</option>
                              <option value="telephone">telephone</option>
                              <option value="camera">Camèra</option>
                           </select>
                           <label for="name" class="col-sm-2" >marque</label>
                           <input type="text" class="form-control col-sm-2" id="marquerque" aria-describedby="emailHelp" placeholder="marque" name="marque" required maxlength="30">
                        </div>
                        <input type="file" name="myimage" class="form-control-file">
                        <br>
                        <div class="form-group row">
                           <label for="name" class="col-sm-2" >Quantité</label>
                           <input type="text" class="form-control col-sm-6"  id="marquerque"  class="form-control" placeholder="Quantité" name="quantite" required maxlength="30">
                        </div>
                        <div class="form-group row">
                           <label for="verify" class="col-sm-2">description</label>
                           <textarea class="form-control col-sm-6" id="exampleFormControlTextarea1" rows="3" name="description" required ></textarea>                                
                        </div>
                        <input type="submit" name="submit_image" value="Upload"  class="btn btn-info">
                     </form>
                  </div>
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
<<<<<<< HEAD
      <?php include("../user_panel/footer.php"); ?>
=======
      <?php include("footer.php"); ?>
>>>>>>> 6b31d3130a4da1fa5b9ea3f226160cbc9fb508c2
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
   </body>
   <script>
      var modal1 = document.getElementById("id03");
      var modal2 = document.getElementById("id01");
      // Get the modal
      var modal = document.getElementById("id02");
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