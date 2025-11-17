<?php
session_start();

$err = "";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // username & password default
    if ($user === "admin" && $pass === "123") {
        $_SESSION['login'] = true;
        header("Location: kontak/index.php");
        exit;
    } else {
        $err = "Username atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<div class="bg-white p-8 rounded-xl shadow-md w-80">
    <h2 class="text-xl font-bold mb-4 text-center">Login</h2>

    <?php if ($err): ?>
        <p class="text-red-500 text-sm mb-3"><?= $err ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username"
               class="w-full px-3 py-2 border rounded mb-3">

        <input type="password" name="password" placeholder="Password"
               class="w-full px-3 py-2 border rounded mb-3">

        <button class="w-full bg-blue-600 text-white py-2 rounded">Login</button>
    </form>
</div>

</body>
</html>
