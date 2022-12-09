<form class="justify-content-md-center" method="post" action="reg.php">
  <p class="text-danger"><?= $errMsg ?></p>
  <div class="mb-3">
    <label for="ExampleInputLogin1" class="form-label">Ваш логин</label>
    <input type="text" class="form-control" id="ExampleInputLogin1" placeholder="Введите ваш логин" name="login" value="<?=$login?>">
  </div>
  <!-- https://getbootstrap.com/docs/5.0/layout/grid/ -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email адрес</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$email?>">
    <div id="emailHelp" class="form-text">Мы не будем делиться вашим email ни с кем.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="passF">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="passS">
  </div>
  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-outline-warning btn-lg" name='button-reg'>Зарегаться</button>
  </div>

</div>
</form>

<style>
  form {
    width: 40%;
    margin: 30px auto;
  }
</style>    
