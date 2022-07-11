<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="no_telp"></td>
            </tr>

            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jenis_kelamin" value="L">laki laki</td>
                <td><input type="radio" name="jenis_kelamin" value="P">perempuan</td>
            </tr>

            <tr>
                <td>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
