@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Layanan</h1>
    <p><strong>Nama:</strong> {{ $service->name }}</p>
    <p><strong>Kategori:</strong> {{ $service->category }}</p>
    <p><strong>Deskripsi:</strong> {{ $service->description }}</p>
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
