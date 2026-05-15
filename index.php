<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
</head>
<body>

<h1>Form Pendaftaran</h1>

<form action=".php" method="POST">

    <label>NIM:</label><br>
    <input type="text" name="nim"><br><br>

    <label>Username:</label><br>
    <input type="text" name="username"><br><br>

    <label>Study Program:</label><br>
    <input type="text" name="study_program"><br><br>

    <label>Gender:</label><br>

    <input type="radio" name="gender" value="Laki-laki">
    Laki-laki

    <input type="radio" name="gender" value="Perempuan">
    Perempuan

    <br><br>

    <button type="submit">
        Simpan ke Database
    </button>

</form>

</body>
</html>