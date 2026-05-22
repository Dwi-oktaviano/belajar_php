<!DOCTYPE html>
<html>
<head>
    <title>Login Sederhana</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST">
        Username:
        <input type="text" name="username">
        <br><br>

        Password:
        <input type="password" name="password">
        <br><br>

        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        
        if (empty($username) || empty($password)) {

            echo "<script>alert('Username dan Password wajib diisi!');</script>";

        } else {

            // Login sederhana
            if ($username === "admin" && $password === "123") {

                echo "<h3>Login Berhasil! Selamat datang, admin</h3>";

            } else {

                echo "<script>alert('Login gagal!');</script>";
            }
        }
    }
    ?>

</body>
</html>