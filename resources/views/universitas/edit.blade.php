<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Edit Data</h1>
    <form  action="{{ route('universitas.update', $universitas->id) }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" value="{{ $universitas->nama }}" ></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" value="" id="" cols="30" rows="10">{{ $universitas->alamat }}</textarea>
                </td>
            </tr>

            <tr>
                <td>No Telp</td>
                <td><input type="number" name="no_telp" value="{{ $universitas->no_telp }}" ></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{ $universitas->email }}" ></td>
            </tr>

            <tr>
                <td>Akreditas</td>
                <td><input type="number" name="akreditas" value="{{ $universitas->akreditas }}" ></td>
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
