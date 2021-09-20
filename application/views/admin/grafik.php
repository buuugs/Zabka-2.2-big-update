<?php
   require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   $user = new UserController;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   if (!Session::isAdmin()) { Util::redirect('/dashboard/index'); }
   
   $username = Session::get("username");
   
   Util::head();
   Util::navbar("Ustalanie Grafiku");
   
   ?>

<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
              </h5>
              <form method="post" action="#">
        
</form>
              <h6 class="card-subtitle mb-2 text-muted"></p>
              <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">Dzień</th>
                    
                  </tr>
                </thead>
                <tbody >
                <form method="post" action="#">

                <select name="miesiac" id="formobject">

          </select>
<input type="submit" value="Zatwierdź" name="submit" class="login-button"/>
</form>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
 