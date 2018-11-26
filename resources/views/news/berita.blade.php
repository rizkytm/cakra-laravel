@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($berita as $news)
            <div class="card">

                <div class="card-header">
                    <a href="{{ route('show.berita', $news) }}">
                        {{ $news->judul }}
                    </a>
                    <button class="float-right" type="submit" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>                    
                </div>

                <div class="card-body">
                    {{ $news->deskripsi }}
                </div>
            </div>
            <br>
            @include('beritadeletemodal')
            @endforeach
        </div>
    </div>
</div>
@endsection
