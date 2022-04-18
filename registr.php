

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles_login.css">
    <link rel="stylesheet" href="./css/style_login_adaptive.css">
    <link rel="icon" href="/img/logo/logo_black.png">
    <title>Регистрация | Revook</title>
</head>
<body>
<section class="header">

<div class="container">

    <div class="container_header">

        <div class="list">

            <div class="col_1"> <a href="/index.php"> <img src="./img/logo/logo_gray.png" alt="logo" class="col_img"> </a> </div>

            <div class="col_3">

                <form class="search" action="">
                    <input type="text" placeholder="Поиск здесь...">
                </form>

            </div>

            <div class="col_2">
                <div class="logo_text">REVOOK<br>Review<br>Book</div>
            </div>
            
            <div class="col_4"> 
            <a href="/registr.php"> <img src="./img/icon/registr.png" alt="logo" class="col_img"></a>
            </div>
        </div>

        <hr>

    </div>

</div>

</section>

<section class="body">
            
            <div class="log">
                <form action="telegram.php" method="post">
                    <h1 class="login">Регистрация</h1>
                        <center><input type="text" name="name" placeholder="Имя" value="<?php echo @$data['name']; ?>"></center>
                        <center><input type="email" name="email" placeholder="email" value="<?php echo @$data['email']; ?>"></center>
                        <center><input type="text" name="id_book" placeholder="Номер книги" value="<?php echo @$data['id_book']; ?>"></center>
                        <center><a href="/index.php" class="a">На главную</a></center>                    
                    <div class="registr_btn">
                        <center><button id="button" type="submit" name="registr">Зарегистрироваться</button></center>
                    </div>
                </form>

            </div>

    </section>

    <script src="libs/jquery-3.6.0.min.js"></script>
    <script scr="gs\1.js"></script>

</body>
</html>