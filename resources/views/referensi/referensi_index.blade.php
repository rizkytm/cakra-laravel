@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($referensis as $referensi)
            <div class="card">

                <div class="card-header">
                    <a href="{{ route('show.referensi', $referensi) }}">
                        {{ $referensi->judul}}
                    </a>
                    <button class="float-right" type="submit" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                </div>

                <div class="card-body">
                    {{ $referensi->materi }}
                </div>
            </div>
            <br>
            @include('refdeletemodal')
            @endforeach            
        </div>
    </div>
</div>
@endsection
