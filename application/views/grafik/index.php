<?php
   require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   $user = new UserController;
   $grafik = New Grafik;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    
    $grafik->DrawInfo();  
    $grafik->DrawDays();
    
  
}
   $username = Session::get("username");
   
   Util::head();
   Util::navbar("Grafik Pracowników");
   
   ?>
   <div class="col-12 mt-3 mb-2">
   <div class="alert alert-warning" role="alert">
   <center><b>Grafik Pracowników</b> </br> Zalogowano jako : <b> <?php Util::display($username); ?>  </b>
</center>
   </div>
</div>
<div class="container-fluid">
<a href="/dashboard/index"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
   <div class="row">
      <div class="col">
         <div class="card">
       
            <form method="POST" id="grafikmies" action="">
</br>
               <select onchange="SubmitForm('grafikmies');" name="miesiac" id="formobject">
               <?php
                  $grafik->DrawInput();
                  ?>
               </select>
               <!-- <input type="submit" style="display: none;" value="Zatwierdź" name="submit" class="login-button"/> -->
            </form>
            <h5 class="card-title">&nbsp;Grafik pracowników na miesiąc : <b>
               <?php 
                  $grafik->DrawInfo();  
                ?>
                </b>
            </h5>
            <div class="card-body" style="overflow-y: scroll; max-height:320px;">
               <table class="table" >
                  <thead>
                     <tr>
                        <th scope="col">Dzień</th>
                        <?php
                           $grafik->Draw("Z8854");
                           $grafik->DrawDays();
                           
                        ?>
                     </tr>
                  </thead>
                  <tbody >
                      <?php
                      $grafik->DrawCalendar();
                      ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>