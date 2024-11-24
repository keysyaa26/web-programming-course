<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Data Produk</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require './config/db.php';

                    $products = mysqli_query($db_connect, "SELECT * FROM products");
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($products)) {
                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row['name'];?></td>
                        <td><?=$row['price'];?></td>
                        <!-- Gambar Produk Link -->
                        <td><a href="<?=$row['image'];?>" target="_blank" class="btn btn-info btn-sm">Unduh</a></td>
                        <td>
                            <!-- Edit and Delete Links -->
                            <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
