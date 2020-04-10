<!-- Hubungkan view dengan template master -->
@extends('master')

<!-- Isi Bagian Judul -->
@section('judul_halaman', 'Recent Weather')

@section('konten')
    <form action="/weather/get_forecast" method="post" class="text-center">
        @csrf
    <input class="form-control" type="text" name="search" placeholder="Insert City Name..." value="{{ old('search') }}">
    <input class="btn btn-primary btn-lg" type="submit" value="Search">
    </form>
    {{-- <p>Insert City Name</p> --}}

@endsection