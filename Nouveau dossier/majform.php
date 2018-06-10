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
      <!--   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
         <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png"> -->
      <!--       <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
         -->    <!-- <link href="themes/css/base.css" rel="stylesheet" media="screen"/> -->
      <!-- Bootstrap style responsive --> 
      <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
      <!--  <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
         --><!-- Google-code-prettify --> 
      <!--  <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
         --><!-- fav and touch icons -->
      <!--     <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
         -->
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
      <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">LOGO</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item active">
                  <a class="nav-link" href="acc.php">Home </a>
               </li>
            </ul>
            <ul class="navbar-nav">
               <li class="nav-item" style="margin-bottom: 3px;margin-right: 7px;" >
                  <button onclick="document.getElementById('id02').style.display='block'" class="btn btn-success" id="sign" style="height: 25px;width: 78px;background-color: grey;border: 1px solid grey;" >
                     <p style="position: relative;bottom: 7px;"> login </p>
                  </button>
                  <div id="id02" class="modal" >
                     <span onclick="document.getElementById('id02').style.display='none'" >&times;</span>
                     <form class="modal-content animate form-row" action="login.php" style="padding: 20px;">
                        <div class="imgcontainer">
                           <img src="img_avatar2.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="form-row" >
                           <div class="form-group col-md-6" >
                              <label  >Email</label>
                              <input type="email" class="form-control"  placeholder="Email" >
                           </div>
                           <div class="form-group col-md-6" >
                              <label >Password</label>
                              <input type="password" class="form-control"  placeholder="Password" >
                           </div>
                        </div>
                        <button type="submit" class="btn-primary" style="height: 50px;">Login</button>
                        <label class="form-check-label"><input type="checkbox" checked="checked"> Remember me</label>
                     </form>
                  </div>
               </li>
               <!--  <li class="nav-item" style="margin-bottom: 3px;margin-right: 7px;""><button onclick="document.getElementById('id01').style.display='block' " class="btn btn-success" style="height: 25px;" ><p style="position: relative;bottom: 7px;">sign up</p></button><div id="id01" class="modal" ">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <form class="modal-content animate" action="/action_page.php" style="padding: 20px;">
                    
                      
                      <div class="form-row" >
                        <div class="form-group col-md-12" >
                         <label><b>Email</b></label>
                         <input type="email" placeholder="Enter Email" name="email" required class="form-control">
                       </div>
                      </div>
                      <div class="form-row" >
                       <div class="form-group col-md-6" >
                       <label><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required class="form-control">
                       </div>
                       <div class="form-group col-md-6" >
                        <label><b>Repeat Password</b></label>
                      <input type="password" placeholder="Repeat Password" name="psw-repeat" required class="form-control">
                       </div>
                      </div>
                       <input type="checkbox" checked="checked">
                       Remember me
                      <p>
                        By creating an account you agree to our 
                        <a href="#">Terms & Privacy</a>
                        
                      </p> 
                      <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="height:  50px;width: 200px;">Cancel</button>
                        <button type="submit" class="signupbtn" style="height: 50px;width: 200px;">Sign Up</button>
                      </div>
                  
                  
                  </form>
                  
                  </div>
                  </li> -->
               <li class="nav-item" style="margin-bottom: 3px;margin-right: 7px;">
                  <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary" id="sign" style="height: 25px;" >
                     <p style="position: relative;bottom: 7px;">Inserer produit</p>
                  </button>
                  <div id="id03" class="modal" >
                     <span onclick="document.getElementById('id03').style.display='none'" >&times;</span>
                     <form method="POST" action="getdata.php" enctype="multipart/form-data" style="padding: 20px;"" class="modal-content animate form-row">
                        <div class="form-row">
                           <div class="form-group col-md-6" >
                              <label for="name">Nom produit</label>
                              <input type="text"  id="name" aria-describedby="emailHelp" class="form-control" placeholder="Name" name="name">
                           </div>
                           <div class="form-group col-md-6">
                              <label for="name">prix</label>
                              <input type="text"  id="price" aria-describedby="emailHelp" class="form-control" placeholder="price" name="price">
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="country" >Choisir categorie</label>
                              <select   id="country" name="categorie">
                                 <option value="ordinateur bureau">ordinateur bureau</option>
                                 <option value="ordinateur portable">ordinateur portable</option>
                                 <option value="composants informatique">composants informatique</option>
                                 <option value="telephone">telephone</option>
                                 <option value="imprimante">imprimante</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="name"  >Marque</label>
                              <input type="text"  id="marquerque"  class="form-control" placeholder="marque" name="marque">
                           </div>
                        </div>
                        <div class="form-row">
                           <label for="name"  >Quantité</label>
                           <input type="text"  id="marquerque"  class="form-control" placeholder="Quantité" name="quantite">
                        </div>
                        <input type="file" name="myimage"  class="form-control-file">
                        <div class="form-row">
                           <div class="form-group col-md-12">
                              <label for="verify" >Description</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>                                
                           </div>
                        </div>
                        <input type="submit" name="submit_image" value="Upload"  class="btn btn-primary">
                     </form>
                  </div>
               </li>
               <li>
                  <button class="btn btn-primary"  style="height: 25px;" ><a href="msgg.php" style="position: relative;bottom: 7px;color: white;">Messages reçus</a></button>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container" ">
         <center>
            <div class="row">
               <div class="col-md-9  "  >
                  <br><br>
                  <h2>Supprimer un produit</h2>
                  <form method="POST" action="majform.php" enctype="multipart/form-data">
                     <div class="form-group row">
                        <label for="country" class="col-sm-6">choisir le produit à supprimer</label>
                        <select  class="form-control col-sm-12" id="country" name="modifier">
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
                         
                        </select>
                        <input type="submit" value="modifier">
                     </div>
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