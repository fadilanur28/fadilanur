<?php
// $mahasiswa = [
//     [
//         "nama" => "Fadlinur",
//         "nip" => "2217020113",
//         "email" => "fadlinurhutapea@gmail.com"
//     ],
//     [
//         "nama" => "Indra Sanintra",
//         "nip" => "221702099724",
//         "email" => "indra sanintra@gmail.com"
//     ],
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO ::FETCH_ASSOC);
$data = json_encode($mahasiswa);

echo $data;
?>