	
		<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="accueil.php" style="color: #007bff;">ZAYATECH</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="accueil.php">Home </a>
            </li>
            
           
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item" style="margin-bottom: 3px;margin-right: 7px;" >
             
              <button onclick="document.getElementById('id02').style.display='block'" class="btn btn-success" id="sign" style="height: 25px;width: 78px;background-color: grey;border: 1px solid grey;" ><p style="position: relative;bottom: 7px;"> login </p></button>
              <div id="id02" class="modal" >
                <span onclick="document.getElementById('id02').style.display='none'" >&times;</span>
                <form class="modal-content animate form-row" action="login.php" method="POST" style="padding: 20px;">
                  
                  <div class="form-row" >
                    <div class="form-group col-md-6" >
                      <label>Pseudo</label>
                      <input type="text" class="form-control"  placeholder="pseudo" name="pseudo" required maxlength="30">
                    </div>
                    <div class="form-group col-md-6" >
                      <label >Password</label>
                      <input type="password" class="form-control"  placeholder="Password"  name="pass" required>
                    </div>
                  </div>
                  
                  <button type="submit" style="height: 50px;" class="btn-primary">Login</button>
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
              <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary" id="sign" style="height: 25px;" ><p style="position: relative;bottom: 7px;">contact</p></button>
              <div id="id03" class="modal" >
                <span onclick="document.getElementById('id03').style.display='none'" >&times;</span>
                <form class="modal-content animate" action="envoyer.php" method="POST" style="padding: 10px;">
                  <div class="form-row" >
                    <div class="form-group col-md-6" >
                    <label for="email" >Email</label>
                    <input type="email" name="email1" placeholder="your email" required class="form-control" required>  
                  </div>
                 
                
                  <div class="form-group col-md-6" >
                  <label for="country" >Country</label>
                  <select id="country" name="country" class="form-control">
                    <option value="tunisia">Tuniasia</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                  </select>
                </div>
              </div>
              <div class="form-row" >
                <div class="form-group col-md-12" >
                  <label for="subject" >Subject</label>
                  <textarea id="subject" class="form-control" placeholder="Write something.." name="message" style="height:120px" required></textarea>
                </div>
              </div>
                  <input type="submit" value="Submit" class="btn-primary">
                </form>
              </div>
            </li>
            <li class="nav-item" style="margin-bottom: 3px;margin-right: 7px;">
              <button onclick="document.getElementById('id04').style.display='block'" class="btn btn-primary" id="sign" style="height: 25px;" ><p style="position: relative;bottom: 7px;">About</p></button>
              <div id="id04" class="modal" >
                <span onclick="document.getElementById('id04').style.display='none'" >&times;</span>
                <form class="modal-content animate" action="envoyer.php" method="POST" style="padding: 10px;">
                  <div class="form-row" >
                    <p> Notre site vous offre différents produits informatiques de trés bonne qualité  </p>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Nos Produits</a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        Ordinateurs
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="affichage.php?categorie=ordinateur portable">ordinateurs portables</a>
        <a class="dropdown-item" href="affichage.php?categorie=ordinateur bureau">ordinateurs bureaux</a>
        <a class="dropdown-item" href="affichage.php?categorie=composants informatique">composants informatiques</a>
      </div>
     </li>
     <li class="nav-item active">
        <a class="nav-link" href="affichage.php?categorie=composants informatique">composants informatiques</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="affichage.php?categorie=telephone">Téléphone</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="affichage.php?categorie=Camera">Camèra</a>
      </li>    
    </ul>
  </div>  
</nav>
<br> <br>

    


