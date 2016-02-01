<?include_once ('controller.php');?>
<link href="/sopdu/modules/authorize/style.css" rel="stylesheet" type="text/css"/>
<div class="panel panel-success autoriz-panel">
    <div class="panel-heading">
        <h3 class="panel-title">Авторизация</h3>
    </div>
    <div class="panel-body">
        <?if($avtorize_error == 'y'):?>
            <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Что-то пошло не так!</strong><br />Проверьте правильность ввода логина и пароля.
            </div>
            <script>$(".alert").alert()</script>
        <?endif;?>
        <form role="form" method="post">
            <div class="form-group">
                <label for="exampleInputLogin">Логин</label>
                <input type="text" name="login" class="form-control" id="exampleInputLogin" placeholder="Введите логин" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Пароль</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword" placeholder="********" />
            </div>
            <div>
                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-lock"></i> Вход</button>
            </div>
        </form><?='<pre>'; print_r($_SESSION); '</pre>';?>
    </div>
</div>
