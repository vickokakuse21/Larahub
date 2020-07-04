@extends('master')
@section('content')
    <div>
        <h3>Detail Pertanyaan</h3>
        <p>Pertanyaan : {{$tanya->judul}} </p>
        <p>Isi Pertanyaan : {{$tanya->isi}}</p>
    </div>
    <div>
        <h3>Jawaban</h3>
        <p></p>
    </div>
@endsection