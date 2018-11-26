@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $berita->judul}} | {{ $berita->sumber }} | {{ $berita->penulis }}
                    <a class="float-right" href="{{ route('edit.berita', $berita) }}">Edit</a>
                </div>                

                <div class="card-body">
                    {{ $berita->deskripsi }}
                </div>
            </div><br>
        </div>
    </div>
</div>
@endsection
