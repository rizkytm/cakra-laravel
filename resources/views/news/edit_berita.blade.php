@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                    <div class="card-header"><h4>Edit Berita</h4></div>

                    <div class="card-body">
                        <form action="{{ route('update.berita', $berita) }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group has-feedback {{ $errors->has('judul') ? ' has-error' : '' }}">
                                <label for="">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Post Title" value="{{ $berita->judul }}">
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('judul') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('sumber') ? ' has-error' : '' }}">
                                <label for="">Sumber</label>
                                <input type="text" class="form-control" name="sumber" placeholder="Post Title"
                                value="{{ $berita->sumber }}">
                                @if ($errors->has('sumber'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('sumber') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('penulis') ? ' has-error' : '' }}">
                                <label for="">Penulis</label>
                                <input type="text" class="form-control" name="penulis" placeholder="Post Title"
                                value="{{ $berita->penulis }}">
                                @if ($errors->has('penulis'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('penulis') }}</p>
                                    </span>
                                @endif
                            </div>         
                            
                            <div class="form-group has-feedback {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                <label for="">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" placeholder="Post Content">{{ $berita->deskripsi }}</textarea>
                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('deskripsi') }}</p>
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
                </div><br>
        </div>
    </div>
</div>
@endsection
