<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Mensajes</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body{
            background:#f5f7fa;
        }

        .table-container{
            background:white;
            padding:30px;
            border-radius:12px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        .message-box{
            max-width:300px;
            white-space:pre-wrap;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Mensajes recibidos</h1>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-dark">
                Cerrar sesión
            </button>
        </form>
    </div>

    <div class="table-container">

        @if($messages->count())

            <table class="table table-striped align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Asunto</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($messages as $message)

                        <tr>
                            <td>{{ $message->id }}</td>

                            <td>
                                {{ $message->name }}
                            </td>

                            <td>
                                {{ $message->email }}
                            </td>

                            <td>
                                {{ $message->subject }}
                            </td>

                            <td class="message-box">
                                {{ $message->message }}
                            </td>

                            <td>
                                {{ $message->created_at->format('d/m/Y H:i') }}
                            </td>
                        </tr>

                    @endforeach

                </tbody>

            </table>

        @else

            <div class="alert alert-info mb-0">
                No hay mensajes todavía.
            </div>

        @endif

    </div>

</div>

</body>

</html>