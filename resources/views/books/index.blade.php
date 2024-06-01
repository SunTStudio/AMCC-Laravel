<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <a href="{{ route('books.create') }}">Tambah Buku</a>
        <table>
            <tr>
                <th>Judul</th>
                <th>Jumlah Halaman</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->jumlah_halaman }}</td>
                <td>{{ $book->tanggal_terbit }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>