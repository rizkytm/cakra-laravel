@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit referensi</div>

                <div class="card-body">
            <form class="" action="{{ route('update.ref', $ref) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group has-feedback {{ $errors->has('judul') ? ' has-error' : '' }}">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Post Title" value="{{ $ref->judul }}">
                @if ($errors->has('judul'))
                    <span class="help-block">
                        <p>{{ $errors->first('judul') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('sumber') ? ' has-error' : '' }}">
                <label for="">Sumber</label>
                <input type="text" class="form-control" name="sumber" placeholder="Post Title"
                value="{{ $ref->sumber }}">
                @if ($errors->has('sumber'))
                    <span class="help-block">
                        <p>{{ $errors->first('sumber') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('penulis') ? ' has-error' : '' }}">
                <label for="">Penulis</label>
                <input type="text" class="form-control" name="penulis" placeholder="Post Title"
                value="{{ $ref->penulis }}">
                @if ($errors->has('penulis'))
                    <span class="help-block">
                        <p>{{ $errors->first('penulis') }}</p>
                    </span>
                @endif
            </div>         
            
            <div class="form-group has-feedback {{ $errors->has('materi') ? ' has-error' : '' }}">
                <label for="">Materi</label>
                <textarea name="materi" rows="5" class="form-control" placeholder="Post Content">{{ $ref->materi }}</textarea>
                @if ($errors->has('materi'))
                    <span class="help-block">
                        <p>{{ $errors->first('materi') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
