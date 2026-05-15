<?php

$conn = mysqli_connect(
    "mysql",
    "akmal",
    "12345",
    "pendaftaran"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nim = $_POST['nim'];
$username = $_POST['username'];
$study_program = $_POST['study_program'];
$gender = $_POST['gender'];

$query = "INSERT INTO mahasiswa
(nim, username, study_program, gender)

VALUES
('$nim', '$username', '$study_program', '$gender')";

if (mysqli_query($conn, $query)) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}

?>