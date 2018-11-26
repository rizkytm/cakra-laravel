@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit post</div>

                <div class="card-body">
            <form class="" action="{{ route('update', $post) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group has-feedback {{ $errors->has('judul') ? ' has-error' : '' }}">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Post Title" value="{{ $post->judul }}">
                @if ($errors->has('judul'))
                    <span class="help-block">
                        <p>{{ $errors->first('judul') }}</p>
                    </span>
                @endif
            </div>         
            
            <div class="form-group has-feedback {{ $errors->has('materi') ? ' has-error' : '' }}">
                <label for="">Materi</label>
                <textarea name="materi" rows="5" class="form-control" placeholder="Post Content">{{ $post->materi }}</textarea>
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
        <table class="table table-borderless">
                            <thead>
                                <tr>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row" style="height: 320px"></th>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
