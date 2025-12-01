<?php
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/Book.php';

$db = (new Database())->getConnection();
$book = new Book($db);
$books = $book->getAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Daftar Buku</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $i => $b): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= htmlspecialchars($b['title']) ?></td>
                <td><?= htmlspecialchars($b['author']) ?></td>
                <td><?= htmlspecialchars($b['publisher']) ?></td>
                <td><?= htmlspecialchars($b['year']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
