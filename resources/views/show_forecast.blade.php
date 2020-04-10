<!-- Hubungkan View dengan template master -->
@extends('master')

<!-- Isi bagian Judul -->
@section('judul_halaman', "Today's Weather in")
{{-- @endsection --}}

<!-- Konten -->
@section('konten')
    <h4 class="text-center">{{ $city }}</h4>
    <br>
    <br>
    <h5 class="text-center">{{ $forecast }}</h5>
    {{-- <form action="" method="get" class="form form-control">
        <label for="">{{ $forecast }}</label>
    </form> --}}
@endsection