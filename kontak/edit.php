<?php
include "../auth/cek_login.php";

$id = $_GET['id'];
$data = $_SESSION['kontaks'][$id];
$err = "";

if (isset($_POST['update'])) {
    $nama = trim($_POST['nama']);
    $telp = trim($_POST['telp']);

    if ($nama === "" || $telp === "") {
        $err = "Semua field wajib diisi!";
    } else {
        $_SESSION['kontaks'][$id] = [
            "nama" => $nama,
            "telp" => $telp
        ];
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Kontak</title>
</head>
<body class="p-10 bg-gray-100">

<h1 class="text-xl font-bold mb-5">Edit Kontak</h1>

<?php if ($err): ?>
<p class="text-red-500 mb-3"><?= $err ?></p>
<?php endif; ?>

<form method="POST" class="w-80">

    <input type="text" name="nama" value="<?= $data['nama'] ?>"
           class="w-full px-3 py-2 border rounded mb-3">

    <input type="text" name="telp" value="<?= $data['telp'] ?>"
           class="w-full px-3 py-2 border rounded mb-3">

    <button class="bg-blue-600 text-white px-4 py-2 rounded" name="update">Update</button>
    <a href="index.php" class="ml-2 text-gray-700">Batal</a>
</form>

</body>
</html>
