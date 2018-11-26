@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat post</div>

                <div class="card-body">
            <form class="" action="{{ route('store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback {{ $errors->has('judul') ? ' has-error' : '' }}">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Post Title" value="{{ old('judul') }}">
                @if ($errors->has('judul'))
                    <span class="help-block">
                        <p>{{ $errors->first('judul') }}</p>
                    </span>
                @endif
            </div>         
            
            <div class="form-group has-feedback {{ $errors->has('materi') ? ' has-error' : '' }}">
                <label for="">Materi</label>
                <textarea name="materi" rows="5" class="form-control" placeholder="Post Content">{{ old('materi') }}</textarea>
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
