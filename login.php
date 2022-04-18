<?php 
require "db.php"; // подключаеися к бд через файл, в которой мы прописали это самое подключение

    $data = $_POST;

    if( isset($data['signin'])) //если была нажата кнопка войти
    {
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if( $user )
        {
            if( password_verify($data['password'], $user->password))
            {
                echo 'Логинится';
                $_SESSION['logged_user'] = $user;
                echo '<div style = "color: green;">Вы Авторизованы! <br/> Можете перейти на <a href="/index.php">главную</a> страницу!</div>';
            } else{
                $errors[] = 'Пароль введён неверно';
            }
        } else
        {
            $errors[] = 'Пользователь не найден';
        }

        if( !empty($errors) ) // если ошибки есть
        { // выводим сообщение 
            echo'<div style="color: red;">'.array_shift($errors).'</div>'; // выводим сообщение об одной из ошибок со строк : 11, 15, 19. И подсвечивает красным.
        }
    }

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles_login.css">
    <link rel="stylesheet" href="./css/style_login_adaptive.css">
    <title>Вход | Revook</title>
    <link rel="icon" href="./img/logo/logo_black.png">
    
</head>

<body>

    <section class="header">

        <div class="container">

            <div class="container_header">

                <div class="list">

                    <div class="col_1"> <a href="index.php"> <img src="./img/logo/logo_gray.png" alt="logo" class="col_img"> </a> </div>

                    <div class="col_3">

                        <form class="search" action="">
                            <input type="text" placeholder="Поиск здесь...">
                        </form>

                    </div>
                    
                    <div class="col_4"> 
                        
                        <a href="#" class="btn_icon"> <img src="./img/icon/uv.png" alt="uv" class="uv"> </a> 
                        <a href="./login.php" class="btn_icon"> <img src="./img/icon/login.png" alt="login" class="login"> </a> 

                    </div>

                <hr>

            </div>

        </div>

    </section>

    <section class="body">
            
            <div class="log">
                <form action="login.php" method="POST">
                    <h1 class="login">Вход</h1>
                    <center><input type="text" name="login" placeholder="Логин"></center>
                    <center><input type="password" name="password" placeholder="Пароль"></center>
                    <center><a href="/registr.php" class="a">Регистрация</a></center>                    
                    <div class="login_btn">
                        <center><button type="submit" name="signin">Войти</button></center>
                    </div>
                </form>
            </div>

    </section>

</body>

</html>