<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
    <div class="bg-white shadow rounded-lg md:mt-0 w-full sm:max-w-screen-sm xl:p-0">
    <div class="p-6 sm:p-8 lg:p-16 space-y-8">
    <form action="{{ route('universitas.store') }}" method="POST">
        @csrf
        <div>
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 py-9">Tambah Data</h2>
        </div>
        <table>
            <tr>
                <div>
                <td>
                    <label class="text-sm font-medium text-gray-900 block mb-2"for="nama">Nama</label>
                </td>
                    <td><input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" type="text" name="nama"></td>
                </div>
            </tr>

            <tr>
                <td>
                <label class="text-sm font-medium text-gray-900 block mb-2" for="">Alamat</label>
                </td>
                <td><textarea class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" name="alamat" id="" cols="30" rows="2"></textarea></td>
            </tr>

            <tr>
                <td>
                    <label class="text-sm font-medium text-gray-900 block mb-2" for="">No Telp</label>
                </td>
                <td><input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" type="number" name="no_telp"></td>
            </tr>

            <tr>
                <td>
                    <label class="text-sm font-medium text-gray-900 block mb-2" for="">Email</label>
                </td>
                <td><input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" type="text" name="email"></td>
            </tr>

            <tr>
                <td>
                <label class="text-sm font-medium text-gray-900 block mb-2" for="">Akreditas</label>
            </td>
                <td><input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" type="text" name="akreditas"></td>
            </tr>

            <tr>
                <td>
                    <button class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center" type="submit">Simpan</button>
                </td>
                <td>
                    <button class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">kembali</button>
                </td>
            </tr>
        </table>
        </div>
        </div>
        </div>
    </form>
</body>
</html>
