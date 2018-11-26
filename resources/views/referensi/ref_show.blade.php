@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $ref->judul}} | {{ $ref->sumber }} | {{ $ref->penulis }}</div>

                <div class="card-body">
                    {{ $ref->materi }}
                </div>

                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('edit.ref', $ref) }}">Edit</a>
                </div>
            </div><br>

            <div class="card">
                    <div class="card-header"><h4>Analisa Unsur Intrinsik</h4></div>

                    <div class="card-body">                    
                        @if($ui == null)
                        <form action="{{ route('unsur.store', $ref) }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group has-feedback {{ $errors->has('tema') ? ' has-error' : '' }}">
                                <label for="tema">Tema</label>
                                <textarea name="tema" rows="2" class="form-control" placeholder="Analisa Tema Referensi">{{ old('tema') }}</textarea>
                                @if ($errors->has('tema'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('tema') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('tokoh') ? ' has-error' : '' }}">
                                <label for="tokoh">Tokoh</label>
                                <textarea name="tokoh" rows="2" class="form-control" placeholder="Analisa Tokoh Referensi">{{ old('tokoh') }}</textarea>
                                @if ($errors->has('tokoh'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('tokoh') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('alur') ? ' has-error' : '' }}">
                                <label for="alur">Alur</label>
                                <textarea name="alur" rows="2" class="form-control" placeholder="Analisa Alur Referensi">{{ old('alur') }}</textarea>
                                @if ($errors->has('alur'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('alur') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('latar') ? ' has-error' : '' }}">
                                <label for="latar">Latar</label>
                                <textarea name="latar" rows="2" class="form-control" placeholder="Analisa Latar Referensi">{{ old('latar') }}</textarea>
                                @if ($errors->has('latar'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('latar') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('amanat') ? ' has-error' : '' }}">
                                <label for="amanat">Amanat</label>
                                <textarea name="amanat" rows="2" class="form-control" placeholder="Analisa Amanat Referensi">{{ old('amanat') }}</textarea>
                                @if ($errors->has('amanat'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('amanat') }}</p>
                                    </span>
                                @endif
                            </div>
                            
                            <input type="submit" value="Submit" class="btn btn-primary">
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
                        @else
                        @foreach($ref->unsur_instrinsik()->get() as $uis)
                        <label for="tema"><strong>Tema</strong></label>
                        <p>{{ $uis->tema }}</p>                        
                        <label for="tokoh"><strong>Tokoh</strong></label>
                        <p>{{ $uis->tokoh }}</p>
                        <label for="alur"><strong>Alur</strong></label>
                        <p>{{ $uis->alur }}</p>
                        <label for="latar"><strong>Latar</strong></label>
                        <p>{{ $uis->latar }}</p>
                        <label for="amanat"><strong>Amanat</strong></label>
                        <p>{{ $uis->amanat }}</p>
                        <a href="{{ route('edit.ui', $ref) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                        @include('uideletemodal')
                        @endforeach
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
                        @endif


                    </div>
                </div><br>

        </div>
    </div>
</div>
@endsection
