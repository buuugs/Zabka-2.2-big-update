<?php
   require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   $user = new UserController;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   
   $username = Session::get("username");
   
   Util::head();
   Util::navbar("Panel Pracownika");
   
   ?>
<div class="col-12 mt-3 mb-2">
   <div class="alert alert-danger" role="alert">
<center>
   <b>TODO</b>
</center>
   </div>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col">
         <div class="card">
            <div class="card-body">
                TODO
            </div>
         </div>
      </div>
   </div>
</div>
<?php Util::footer(); ?>