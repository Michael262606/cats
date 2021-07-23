<?php
$dbServerName="localhost";
$dbUserName="root";/*логин к БД */
$dbPassword="";/*пароля его в данном случии нет */
$dbName="cats";/*название БД */
 /*соединение с БД */
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}


?>