<div id="back"></div>
<!-- Log on to codeastro.com for more projects! -->
<div class="login-box">

  <div class="login-logo">
    <img class="img-logo" src="views/img/template/login-logo.png">
  </div>

  <div class="login-box-body">

    <strong><p class="login-box-msg">Please log in to start your session</p></strong>

    <form method="post">
    <div class="wrapper">
      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Username" name="loginUser" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Password" name="loginPass" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-success btn-block btn-flat">Log In</button>

        </div>
       
      </div>
      <div>
      <?php

        $login = new ControllerUsers();
        $login -> ctrUserLogin();

      ?>

    </form>

  </div>

</div>
<!-- Log on to codeastro.com for more projects! -->
