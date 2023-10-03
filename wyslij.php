<?php
$imie = $_POST['imie'];
$kom = $_POST['tresc'];
$conn = mysqli_connect('localhost','yaure','IzakskkVV1!!','yaure');
$q = "INSERT INTO `komentarze` (`id`, `imie`, `komentarz`) VALUES (NULL, '$imie', '$kom')";
mysqli_query($conn, $q);
mysqli_close($conn);
header("Location: index.php");
?>