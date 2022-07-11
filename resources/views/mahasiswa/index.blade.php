@extends('layout.default')
@section('body')
<div class=" ">
    <div class=" bg-red-500 min-h-screen items-center flex justify-center h-200 align-center">
        <button class="min-h-screen items-center flex justify-center ">
            <a href="{{ route('mahasiswa.create') }}">Tambah Data</a>
        </button>
        <table class="border-collapse border-2 border-black">
        <thead>
            <tr>
                <th class="border border-black">No</th>
                <th class="border border-black">Nama</th>
                <th class="border border-black">Nim</th>
                <th class="border border-black">No Telp</th>
                <th class="border border-black">Umur</th>
                <th class="border border-black">Alamat</th>
                <th class="border border-black">tanggal lahir</th>
                <th class="border border-black">Jenis Kelamin</th>
                <th class="border border-black">action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $no => $item)
            <tr>
                <td class="border whitespace-nowwrap border-black">{{ $no + 1 }}</td>
                <td class="border whitespace-nowwrap border-black">{{ $item->nama }}</td>
                <td class="border whitespace-nowwrap border-black">{{ $item->nim }}</td>
                <td class="border whitespace-nowwrap border-black">{{ $item->no_telp }}</td>
                <td class="border whitespace-nowwrap border-black">{{ $item->umur }}</td>
                <td class="border whitespace-nowwrap border-black">{{ $item->alamat }}</td>
                <td class="border whitespace-nowwrap border-black">{{ $item->tanggal_lahir }}</td>
                <td class="border whitespace-nowwrap border-black">{{ $item->jenis_kelamin }}</td>
                <td class="border whitespace-nowwrap border-black">
                <a href="{{ route('mahasiswa.edit', $item->id) }}">edit</a>
                    <form action="{{ route('mahasiswa.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="12">Tidak Ada Data Mahasiswa</td>
            </tr>
            @endforelse
        </tbody>
        </table>
    </div>
</div>
@endsection

