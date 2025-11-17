<?php
include "../auth/cek_login.php";

if (!isset($_SESSION['kontaks'])) {
    $_SESSION['kontaks'] = [];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">

<h1 class="text-2xl font-bold mb-5">Daftar Kontak</h1>

<a href="tambah.php" class="bg-green-600 text-white px-4 py-2 rounded">+ Tambah Kontak</a>
<a href="../logout.php" class="bg-red-600 text-white px-4 py-2 rounded ml-2">Logout</a>

<table class="w-full mt-5 border-collapse">
    <tr class="bg-gray-300">
        <th class="border p-2">Nama</th>
        <th class="border p-2">Telepon</th>
        <th class="border p-2">Aksi</th>
    </tr>

    <?php foreach ($_SESSION['kontaks'] as $id => $k): ?>
    <tr class="bg-white">
        <td class="border p-2"><?= $k['nama'] ?></td>
        <td class="border p-2"><?= $k['telp'] ?></td>
        <td class="border p-2">
            <a href="edit.php?id=<?= $id ?>" class="text-blue-600">Edit</a> |
            <a href="hapus.php?id=<?= $id ?>" class="text-red-600"
               onclick="return confirm('Hapus kontak?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
