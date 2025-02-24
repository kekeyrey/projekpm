@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Selamat Datang di Portal MyLayanan</h1>
    <p>Sistem informasi untuk layanan pemerintahan lebih mudah dan cepat.</p>
    <a href="{{ url('/layanan') }}" class="btn btn-primary">Pelajari Lebih Lanjut</a>
</div>
@endsection
