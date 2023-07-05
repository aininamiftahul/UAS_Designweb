<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "survey_penduduk";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

function submit($data)
{
    global $conn;
    $Namakk = htmlspecialchars($data["Namakk"]);
    $Alamatdi = htmlspecialchars($data["Alamatdi"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $Pos = htmlspecialchars($data["Pos"]);

    $query = ("INSERT INTO data_keluarga VALUES('', '$Namakk', '$Alamatdi', '$Alamat', '$Pos') ");
    mysqli_query($conn, $query);

    global $conn;
    $Namadi = htmlspecialchars($data["Namadi"]);
    $Nokk = htmlspecialchars($data["Nokk"]);
    $Paspordi = htmlspecialchars($data["Paspordi"]);
    $Jeniskelamindi = htmlspecialchars($data["Jeniskelamindi"]);
    $Tempatlahirdi = htmlspecialchars($data["Tempatlahirdi"]);
    $Tanggaldi = htmlspecialchars($data["Tanggaldi"]);
    $Umurdi = htmlspecialchars($data["Umurdi"]);
    $Noaktadi = htmlspecialchars($data["Noaktadi"]);
    $Goldardi = htmlspecialchars($data["Goldardi"]);
    $Agamadi = htmlspecialchars($data["Agamadi"]);
    $Statusdi = htmlspecialchars($data["Statusdi"]);
    $Pendidikandi = htmlspecialchars($data["Pendidikandi"]);

    $query = ("INSERT INTO data_individu VALUES('', '$Namadi', '$Nokk', '$Paspordi', '$Jeniskelamindi', '$Tempatlahirdi', '$Tanggaldi', '$Umurdi', '$Noaktadi', '$Goldardi, '$Agamadi', '$Statusdi, '$Pendidikandi') ");
    mysqli_query($conn, $query);

    global $conn;
    $Namaibu = htmlspecialchars($data["Namaibu"]);
    $Nikibu = htmlspecialchars($data["Nikibu"]);
    $Namaayah = htmlspecialchars($data["Namaayah"]);
    $Nikayah = htmlspecialchars($data["Nikayah"]);

    $query = ("INSERT INTO data_orangtua VALUES('', '$Namaibu', '$Nikibu', '$Namaayah', '$Nikayah') ");
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_keluarga WHERE id=$id") or die(mysqli_error($conn));
    header("Location: index.php");

    mysqli_query($conn, "DELETE FROM data_individu WHERE id=$id") or die(mysqli_error($conn));
    header("Location: index.php");

    mysqli_query($conn, "DELETE FROM data_orangtua WHERE id=$id") or die(mysqli_error($conn));
    header("Location: index.php");

    return mysqli_affected_rows($conn);
}
?>
