<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('books.store') }}" method="POST">
    @csrf
    <input type="text" name="judul" placeholder="Judul" required>
    <input type="number" name="jumlah_halaman" placeholder="Jumlah Halaman" required>
    <input type="date" name="tanggal_terbit" placeholder="Tanggal Terbit" required>
    <button type="submit">Tambah Buku</button>
    </form>
</body>
</html>