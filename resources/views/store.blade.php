@extends('layouts.layout')

@section('title', 'UTS PPW2 no 1')

@section('content')
    <div> 
        <table class="min-w-full">
            <thead class="bg-gray-800 border text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border">id</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border">Nama Pemain</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border">Nomor Punggung</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider border">Posisi</th>
                </tr>
            </thead>
            <tbody class=" bg-gray-500 border text-white">
                @foreach ($pemain as $p)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $p->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $p->nama_pemain }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $p->no_punggung }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $p->posisi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection