<?php
require './connection.php';
require '/public/auth_user.php';
require '/public/login.php';
require '/templates/header.php';

?>

    <div class="container  ">
        <div class="row d-flex justify-content-center">

            <div class="col-md-6 ">
                <form class="form-horizontal" method="post">
                    <span class="heading">АВТОРИЗАЦИЯ</span>
                    <div class="form-group">
                        <input name="login" type="" class="form-control" id="inputEmail" placeholder="Login">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group help">
                        <input name="pass" type="password" class="form-control" id="inputPassword"
                               placeholder="Password">
                        <i class="fa fa-lock"></i>
                        <a href="#" class="fa fa-question-circle"></a>
                    </div>
                    <div class="form-group">
                        <div class="main-checkbox">
                            <input  type="checkbox" value="none" id="checkbox1" name="check"/>
                            <label for="checkbox1"></label>
                        </div>
                        <span class="text">Запомнить</span>
                        <button type="submit" class="btn btn-default">ВХОД</button>
                    </div>
                </form>
            </div>

        </div>


<?php
require ROOT_DIR.'templates/footer.php';
?>


