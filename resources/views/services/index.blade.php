@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Layanan</h1>
    <a href="{{ route('services.create') }}" class="btn btn-primary">Tambah Layanan</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Debugging --}}
    <pre>{{ print_r($services->toArray(), true) }}</pre>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->category }}</td>
                    <td>
                        <a href="{{ route('services.show', $service->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
