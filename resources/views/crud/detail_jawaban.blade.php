@extends('adminlte.master')
@section('content')
    <div class="card">
        
        <h1>Pertanyaan</h1> <br>
        <p> judul : {{ $pertanyaan->judul }} </p> <br>
        <p> isi : {{ $pertanyaan->isi }} </p> <br>
        <p> tanggal dibuat : {{ $pertanyaan->tanggal_dibuat }} </p> <br>
        <p> tanggal diperbaharui : {{ $pertanyaan->tanggal_diperbaharui }} </p> <br>
        
        <h2> Jawaban </h2>
        @foreach ($jawabans as $jawaban)
            <p> {{ $jawaban->isi }}, {{ $jawaban->tanggal_dibuat }}, {{ $jawaban->tanggal_diperbaharui }} </p>
        @endforeach
    </div>

@endsection