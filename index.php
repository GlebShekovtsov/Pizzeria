<?php

use LDAP\Result;

$conn = mysqli_connect("localhost", "root", "root", "pizza");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT id, title FROM `site` ";
$result = mysqli_query($conn, $sql);
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
$napolnenie = "SELECT * FROM `site` WHERE id='$id'";
$result1 = mysqli_query($conn, $napolnenie);

$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

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
                    <span class="header_info">Доставка пиццы в <a href="#">Волгограде</a> <br> Время доставки: 15 минут</span>
                </div>

            </div>


        </header>


    </div>
    <div class="menu">
        <?php

        foreach ($result as $row) {
            echo "<ul class='menu'";
            echo "<li><a href='index.php?id=" . $row["id"] . "'>" . " " . $row["title"] . " " . "</a></li>";
            echo "</ul>";
        }

        ?>
    </div>
    <div class="content">
        <?php echo $row1["content"]; ?>

    </div>

   

</body>
<footer>
    <div>
    Pizza House © 2022
    </div>
</footer>
</html>