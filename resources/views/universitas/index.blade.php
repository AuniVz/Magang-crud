@extends('layout.default')
@section('body')
    <div class="overflow-x-auto">
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
            <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
              Data Universitas
            </h1>
            </div>
        <button type="button" data-modal-toggle="add-user-modal" class="w-1/2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center sm:w-auto">
        <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            <a href="{{ route('universitas.create') }}">tambah data</a>
        </button>
        <table class="table-fixed min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                    No</th>
                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Alamat</th>
                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">No Telp</th>
                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">email</th>
                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Akreditas</th>
                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase"width="150">aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($universitas as $no => $item)
                <tr>
                <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                <div class="text-sm font-normal text-bold"></div>
                {{ $no + 1 }}</td>
                <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">{{ $item->nama }}</td>
                <td class="">
                <div class="text-sm font-normal text-bold"></div>{{ $item->alamat }}</td>
                <td class="">
                <div class="text-sm font-normal text-bold"></div>{{ $item->no_telp }}</td>
                <td><div class="text-sm font-normal text-bold"></div>{{ $item->email }}</td>
                <td><div class="text-sm font-normal text-bold"></div>{{ $item->akreditas }}</td>
                 <td>
                    <div class="">
                     <a href="{{ route('universitas.edit', $item->id) }}"  type="submit" data-modal-toggle="user-modal" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                        <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>edit</a>
                         <form action="{{ route('universitas.delete', $item->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button type="submit" data-modal-toggle="delete-user-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                             <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>Hapus</button>
                        </form>
                    </div>
                </td>
                </tr>
                @empty
                <tr>
                <td colspan="12">Tidak Ada Data </td>
                </tr>
                @endforelse
            </tbody>
        </table>
            </div>
        </div>
    </div>
@endsection

