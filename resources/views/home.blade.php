@extends('base.template')

@section('title', 'Dashboard')

@section('content')
{{ $judul }} <br>
{{  $deskripsi }} <br>
@foreach($nama as $value)
  Nama saya {{ $value }} <br>
@endforeach
@endsection

