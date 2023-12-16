@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div>
        <h3>Mensajes</h3>
    </div>

@stop


@section('content')
    <div class="botton-b">
        <a href="{{route('mensaje.create')}}"><button type="button">Agregar Nota</button></a>
    </div>
    <div class="bg-white-container">
        <div class="table-responsive">
            <table class="table table-sm custom-table">
                <thead class="bg-red">
                    <tr>

                        <th scope="col" class="text-center" style="width: 40p%;">Titulo</th>
                        <th scope="col" class="text-center" style="width: 60%;">Descripcion</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mensajes as $m)
                    <tr>
                        {{-- <td scope="col" class="text-center" style="width: 1%">{{$m->id}}</td> --}}
                        <td class="text-left" style="width: 60%; max-height: 100px; overflow: auto; word-wrap: break-word; font-weight: bold;">
                            {{$m->titulo}}
                        </td>
                        <td class="text-left" style="width: 60%; max-height: 100px; overflow: auto; word-wrap: break-word;">
                            {{$m->descripcion}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <style>
         table {
        width: 100%;
        table-layout: fixed;
    }
    .botton-b{
        text-align: center;
    }
        button {
            background-color: rgb(226, 168, 60);
            /* Color de fondo verde oscuro */
            color: white;
            /* Color del texto blanco */
            border: none;
            /* Sin borde */
            padding: 10px 20px;
            /* Espaciado interno */
            border-radius: 5px;
            /* Bordes redondeados */
            cursor: pointer;
            transition: background-color 0.3s ease;
            /* Transición suave */
            font-size: 16px;
            /* Tamaño de fuente */
            font-weight: bold;
            /* Texto en negrita */
            font-family: 'Verdana', sans-serif;
        }

        button:hover {
            background-color: #45a049;
            /* Cambio de color al pasar el mouse */
        }

        a {
            font-size: 16px;
            /* Tamaño de fuente */
            text-decoration: none;
            /* Eliminar subrayado del enlace */
        }

        h3 {
            text-align: center;
        }

        .bg-white-container {
            background-color: #fff;
            /* overflow: hidden; */
            width: 80%;
            border-radius: 0.375rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            margin-top: 20px;
            font-family: 'Verdana', sans-serif;
            margin-left: 10%;
        }

        /* Personalización de la tabla */
        .custom-table {
            border: 2px solid #e2e8f0;
            border-radius: 8px;
        }

        /* Estilos para las filas pares e impares */
        .custom-table tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .custom-table tbody tr:hover {
            background-color: #edf2f7;
        }

        /* Ajustes para el encabezado */

        .custom-table thead th {
            border-bottom: 2px solid #e2e8f0;
            color: white;
            /* Cambiar el color del texto a blanco */
        }



        /* Media query para dispositivos móviles */
        @media (max-width: 767px) {
            .custom-table th {
                font-size: 10px;
                /* Tamaño de fuente para th en dispositivos móviles */

            }

            .custom-table td {
                font-size: 10px;
                /* Tamaño de fuente para td en dispositivos móviles */
            }

            button {
                background-color: rgb(226, 168, 60);
                /* Color de fondo verde oscuro */
                color: white;
                /* Color del texto blanco */
                border: none;
                /* Sin borde */
                padding: 3px 8px;
                /* Espaciado interno */
                border-radius: 5px;
                /* Bordes redondeados */
                cursor: pointer;
                transition: background-color 0.3s ease;
                /* Transición suave */
                font-size: 10px;
                /* Tamaño de fuente */
                font-weight: bold;
                /* Texto en negrita */
                font-family: 'Verdana', sans-serif;
            }

            button:hover {
                background-color: #45a049;
                /* Cambio de color al pasar el mouse */
            }

            a {
                font-size: 16px;
                /* Tamaño de fuente */
                text-decoration: none;
                /* Eliminar subrayado del enlace */
            }
        }
    </style>


@stop



@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
