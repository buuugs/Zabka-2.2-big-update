<?php
   require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   include_once SUB_DIR . 'assets/data/pia.txt';
   $user = new UserController;
   $straty = new Straty;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    
    $straty->add($_POST, "pieczywo"); 
  
}
   $username = Session::get("username");
   
   Util::head($username);
   Util::navbar("Straty - Pieczywo");
   
   ?>
<div class="col-12 mt-3 mb-2">
   <div class="alert alert-warning" role="alert">
   <center><b>Pieczywo</b> </br> Zalogowano jako : <b> <?php Util::display($username); ?>  </b>
</center>
   </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
        <a href="/straty/index"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
          <center>
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-muted">
          
            <form method="post" action="">
              <?php
                foreach($bazap as $item)
                {
                   echo '<label for="'. $item .'">'. $item  . ':</label></br>';
                   echo '<input type="number" id="formobject" name="'.$item.'" placeholder="0" autofocus="true"/><br />';
                }
                ?>
              <input type="submit" value="Wyślij" name="submit" class="login-button"/>
            </form>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>