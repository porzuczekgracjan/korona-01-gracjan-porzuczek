<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="library"; 
    $conn= new mysqli($servername, $username, $password, $dbname);

    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $tytul=$_POST['tytul'];
    $ISBN=$_POST['ISBN'];

    $sql="INSERT INTO autorzy (imie, nazwisko) VALUES ('$imie', '$nazwisko')";
    $sql2="INSERT INTO tytuly (tytul, ISBN) VALUES ('$tytul', '$ISBN')";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);

    $conn->close();

    header('Location: http://localhost:8080/strony/index4.php');
?>