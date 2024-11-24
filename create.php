<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Tambah Produk</h1>
        <a href="show.php" class="btn btn-info mb-4">Lihat Data Produk</a>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Input nama produk" required>
            </div>
            <div class="form-group">
                <label for="price">Harga Produk</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Input harga produk" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar Produk</label>
                <input type="file" class="form-control-file" name="image" id="image" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
