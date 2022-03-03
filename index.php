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
$pizzaSelection = "SELECT * FROM `pizza_list`";
$pizzaResult = mysqli_query($conn, $pizzaSelection);

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
        <?php

        echo $row1["content"];
        echo "<h1>" ."Меню". "</h1>"
        ?>
        <div class="cont">
            
                <?php
                foreach ($pizzaResult as $pizzaRow) {
                    $show_img = base64_encode($pizzaRow['image']);
                    echo "<div id='pizza_block'>";

                ?>
                    <img id="pizza_image" src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="">
                <?php
                    echo "<h2>" . $pizzaRow['title'] . "</h2>";
                    echo "<p>" . $pizzaRow['description'] . "</p>";
                    echo "<h3>" . $pizzaRow['price'] . "</h3>";
                    echo "</div>";
                }

                ?>
            


        </div>
    </div>


</body>
<footer>
    <div>
        Pizza House © 2022
    </div>
</footer>

</html>