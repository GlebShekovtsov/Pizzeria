<?php

use LDAP\Result;

session_start();

$conn = mysqli_connect("localhost", "root", "root", "pizza");

if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT id, title FROM `site` ";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Pizza House</title>
</head>

<body>
    <div class="main">

        <header class="head">
            <div class="left">
                <div class="logo">
                    <img src="img/pizza.png" class="respons" alt="">
                    <span class="header_info">Доставка пиццы <a href="#">Волгограде</a> <br> Время доставки: 15 минут</span>
                </div>

            </div>


        </header>


    </div>
    <div class="menu">

        <?php
        foreach ($result as $row) {
            echo "<ul class='menu'";
            echo "<li><a href='index.php?id=" . $row["id"] . "'>" . " " . $row["title"] . " " . "</a></li>";
        }
        echo "</ul>";
        ?>
    </div>
    <div class="content">
        <h1>Авторизация</h1>

        <div class="cont">

            <form action="auth.php" method="POST">
                <h2>Введите данные для авторизации</h2>
                <p>Логин: <input type="text" name="login"></p>
                <p>Пароль: <input type="text" name="password"></p>
                <p><input type="submit" value="Отправить"></p>
            </form>
            <?php
            if(isset($_POST["login"]) && isset($_POST["password"]))
            {
                $login = $_POST["login"];
                $auth = "SELECT * FROM `users` WHERE login='$login'";
                $authResult = mysqli_query($conn,$auth);
                $authAssoc = mysqli_fetch_assoc($authResult);
                if(!empty($authAssoc)){
                    $hash = $authAssoc['password'];
                    if(password_verify($_POST['password'], $hash)){
                        $userid = $authAssoc['id'];
                        $_SESSION["userid"] = $userid;
                        echo "Авторизация успешна";
                    }
                    
                    else {
                        echo "Пароль неверный";
                    }
                }
                else
                {
                    echo "Пользователя с таким логином не существует(";
                }
            }
           
            ?>
        </div>
    </div>

    <footer>
        <div>
            Pizza House © 2022
        </div>
    </footer>

</body>

</html>