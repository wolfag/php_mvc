<h2>Register</h2>


<form action="./register/HandleRegister" method="post">
  <div class="form-group">
    <label>Username</label>
    <input name="username" type="text" class="form-control" id="username">
    <small id="usernameHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" class="form-control" id="inputPassword">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input name="email" type="email" class="form-control" id="inputEmail">
  </div>

  <div class="form-group">
    <label>Fullname</label>
    <input name="fullname" type="text" class="form-control" id="inputFullname">
  </div>

  <div class="form-group">
    <label>Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress">
  </div>

  <button name="btnRegister" type="submit" class="btn btn-primary">Register</button>
</form>

<h3>
  <?php
    if (isset($data['result'])) {
        if ($data['result'] == 'true') {
            echo 'Register successfull';
        } else {
            echo 'Register fail';
        }
    }
  ?>
</h3>