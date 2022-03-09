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
$pizzaId = mysqli_real_escape_string($conn, $_GET["id"]);
$pizzaFullSelection = "SELECT * FROM `pizza_list` WHERE id = '$pizzaId' ";
$pizzaResult = mysqli_query($conn, $pizzaFullSelection);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
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
    <div class="content">
        <?php

        echo "<h1>" . "Меню" . "</h1>"
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
                echo "<p>" . $pizzaRow['longDescription'] . "</p>";
                echo "<h3>" . $pizzaRow['price'] . "</h3>";

                echo "</div>";
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