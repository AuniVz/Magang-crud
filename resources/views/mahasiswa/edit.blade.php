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
    <form  action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" value="{{ $mahasiswa->nama }}" ></td>
            </tr>

            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim" value="{{ $mahasiswa->nim }}" ></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="no_telp" value="{{ $mahasiswa->no_telp }}" ></td>
            </tr>

            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" value="{{ $mahasiswa->umur }}" ></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" value="" id="" cols="30" rows="10">{{ $mahasiswa->alamat }}</textarea>
                </td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}" ></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jenis_kelamin" value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'checked' : '' }}>laki laki</td>
                <td><input type="radio" name="jenis_kelamin" value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'checked' : '' }}>perempuan</td>
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
