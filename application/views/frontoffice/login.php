<div class="templatemo_contactwrapper" id="templatemo_work_page">
    <div class="container">
      <div class="row" style="background-color:coral">
        <h1>login</h1>
      </div>
    </div>

    <div class="container templatemo_contactmargin">
      <div class="row">
        <form action="<?php echo site_url("/login-rechauffement-climatique") ?>" method="post">
          <div class="col-md-7"  >
            <div class="col-md-7">
              <h2 style="text-align:center;color:red;">ADMIN LOGIN </h2>
            </div>
            <div class="col-md-7">
              <input type="text" name="email" value="randrianarisoalalatianaantonio@gmail.com" id="email" class="email" placeholder="email">
            </div>
            <div class="col-md-7">
              <input type="password" name="mdp" value="mdp" id="name" class="name" placeholder="mot de passe">
            </div>
            <?php if (isset($errorLogin)) {
            ?>
              <div class="col-md-7">
                <h2 style="color:red;"> mot de passe incorrect</h2>
              </div>
            <?php  }
            ?>
            <div class="col-md-7">
              <input type="submit" name="send" value="se connecter" id="submit" class="button templatemo_sendbtn">
            </div>
          </div>
        </form>
        <div class="col-md-5 offset-1">
        <img src="<?php echo base_url() ?>/assets/photo/planete.jpg" width="400" height="300" alt="logo background">
        </div>
      </div>
    </div>
  </div>