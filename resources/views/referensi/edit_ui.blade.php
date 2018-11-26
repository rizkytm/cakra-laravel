@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                    <div class="card-header"><h4>Analisa Unsur Intrinsik</h4></div>

                    <div class="card-body">
                        <form action="{{ route('update.ui', $ui) }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group has-feedback {{ $errors->has('tema') ? ' has-error' : '' }}">
                                <label for="tema">Tema</label>
                                <textarea name="tema" rows="2" class="form-control" placeholder="Analisa Tema Referensi">{{ $ui->tema }}</textarea>
                                @if ($errors->has('tema'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('tema') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('tokoh') ? ' has-error' : '' }}">
                                <label for="tokoh">Tokoh</label>
                                <textarea name="tokoh" rows="2" class="form-control" placeholder="Analisa Tokoh Referensi">{{ $ui->tokoh }}</textarea>
                                @if ($errors->has('tokoh'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('tokoh') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('alur') ? ' has-error' : '' }}">
                                <label for="alur">Alur</label>
                                <textarea name="alur" rows="2" class="form-control" placeholder="Analisa Alur Referensi">{{ $ui->alur }}</textarea>
                                @if ($errors->has('alur'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('alur') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('latar') ? ' has-error' : '' }}">
                                <label for="latar">Latar</label>
                                <textarea name="latar" rows="2" class="form-control" placeholder="Analisa Latar Referensi">{{ $ui->latar }}</textarea>
                                @if ($errors->has('latar'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('latar') }}</p>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback {{ $errors->has('amanat') ? ' has-error' : '' }}">
                                <label for="amanat">Amanat</label>
                                <textarea name="amanat" rows="2" class="form-control" placeholder="Analisa Amanat Referensi">{{ $ui->amanat }}</textarea>
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
                    </div>
                </div><br>
        </div>
    </div>
</div>
@endsection
