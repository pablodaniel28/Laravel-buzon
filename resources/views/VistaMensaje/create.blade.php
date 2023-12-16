@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Sugerencias</h3>
                </div>

                <form  action="{{route('mensaje.store')}}" method="POST" class="max-w-md mx-auto">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control"  name="titulo" id="titulo" placeholder="Ingrese el título">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripción"></textarea>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-danger">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

