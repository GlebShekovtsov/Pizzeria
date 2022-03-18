<?php 
$conn = mysqli_connect("localhost", "root", "root", "pizza");
if (!$conn) {
    die("Ошибка:" . mysqli_connect_error());
}

if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $userReg = "INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')";
    if($conn->query($userReg)){
        echo "Регистрация прошла успешно";
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
else{
    echo "Введите все данные";
}
?>