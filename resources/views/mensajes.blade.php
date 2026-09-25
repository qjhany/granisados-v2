@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')

<style>
    .mensajes-page {
        background: #f4f5f9;
        min-height: calc(100vh - 84px);
    }

    /* Encabezado */
    .mensajes-hero {
        background: linear-gradient(135deg, #6366f1, #a855f7, #ec4899);
        color: white;
        padding: 65px 20px;
        text-align: center;
    }

    .mensajes-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .mensajes-hero p {
        font-size: 1.3rem;
        font-weight: 500;
        margin: 0;
    }

    /* Contenedor */
    .mensajes-container {
        max-width: 1250px;
        margin: auto;
        padding: 55px 20px;
    }

    /* Título */
    .titulo-mensajes {
        text-align: center;
        margin-bottom: 35px;
    }

    .titulo-mensajes h2 {
        color: #1e293b;
        font-size: 2.5rem;
        font-weight: 800;
    }

    .titulo-mensajes p {
        color: #64748b;
        font-size: 1.1rem;
    }

    /* Tarjeta */
    .mensajes-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: none;
    }

    .mensajes-card-header {
        background: linear-gradient(135deg, #6366f1, #a855f7);
        color: white;
        padding: 20px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .mensajes-card-header h4 {
        margin: 0;
        font-weight: 700;
    }

    .contador {
        background: white;
        color: #7c3aed;
        padding: 7px 15px;
        border-radius: 50px;
        font-weight: 700;
    }

    /* Tabla */
    .tabla-mensajes {
        margin: 0;
    }

    .tabla-mensajes thead {
        background: #f8fafc;
    }

    .tabla-mensajes th {
        color: #334155;
        font-weight: 700;
        padding: 18px;
        border-bottom: 2px solid #e2e8f0;
    }

    .tabla-mensajes td {
        padding: 18px;
        vertical-align: middle;
        color: #475569;
    }

    .tabla-mensajes tbody tr {
        transition: 0.2s;
    }

    .tabla-mensajes tbody tr:hover {
        background: #faf5ff;
        transform: scale(1.002);
    }

    /* ID */
    .id-mensaje {
        background: #ede9fe;
        color: #7c3aed;
        font-weight: 700;
        border-radius: 10px;
        padding: 7px 11px;
        display: inline-block;
    }

    /* Tipo */
    .tipo-mensaje {
        background: linear-gradient(135deg, #c084fc, #ec4899);
        color: white;
        padding: 7px 14px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    /* Correo */
    .correo {
        color: #7c3aed;
        text-decoration: none;
        font-weight: 500;
    }

    .correo:hover {
        color: #ec4899;
    }

    /* Mensaje */
    .texto-mensaje {
        max-width: 350px;
        line-height: 1.5;
    }

    /* Sin mensajes */
    .sin-mensajes {
        padding: 60px 20px;
        text-align: center;
        color: #94a3b8;
    }

    .sin-mensajes .icono {
        font-size: 4rem;
        margin-bottom: 15px;
    }

    /* Responsive */
    @media (max-width: 768px) {

        .mensajes-hero h1 {
            font-size: 2.3rem;
        }

        .mensajes-hero p {
            font-size: 1rem;
        }

        .titulo-mensajes h2 {
            font-size: 2rem;
        }

        .mensajes-card-header {
            flex-direction: column;
            gap: 12px;
            text-align: center;
        }
    }
</style>


<div class="mensajes-page">

    {{-- HERO --}}
    <section class="mensajes-hero">

        <h1>💌 Mensajes recibidos 💌</h1>

        <p>
            📩 Aquí puedes consultar los mensajes enviados por nuestros clientes
        </p>

    </section>


    {{-- CONTENIDO --}}
    <div class="mensajes-container">

        <div class="titulo-mensajes">

            <h2>✨ Bandeja de mensajes ✨</h2>

            <p>
                Revisa las consultas y comentarios de tus clientes
            </p>

        </div>


        {{-- TARJETA --}}
        <div class="mensajes-card">

            <div class="mensajes-card-header">

                <h4>
                    💬 Mensajes de clientes
                </h4>

                <span class="contador">
                    {{ count($mensajes) }} mensajes
                </span>

            </div>


            <div class="table-responsive">

                <table class="table tabla-mensajes">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Mensaje</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($mensajes as $mensaje)

                            <tr>

                                <td>
                                    <span class="id-mensaje">
                                        #{{ $mensaje->id }}
                                    </span>
                                </td>

                                <td>
                                    <strong>
                                        {{ $mensaje->nombres }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $mensaje->apellidos }}
                                </td>

                                <td>
                                    <a
                                        href="mailto:{{ $mensaje->correo }}"
                                        class="correo"
                                    >
                                        📧 {{ $mensaje->correo }}
                                    </a>
                                </td>

                                <td>
                                    <span class="tipo-mensaje">
                                        {{ $mensaje->tipo }}
                                    </span>
                                </td>

                                <td>
                                    <div class="texto-mensaje">
                                        {{ $mensaje->mensaje }}
                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6">

                                    <div class="sin-mensajes">

                                        <div class="icono">
                                            📭
                                        </div>

                                        <h4>
                                            No hay mensajes todavía
                                        </h4>

                                        <p>
                                            Cuando un cliente envíe un mensaje,
                                            aparecerá aquí.
                                        </p>

                                    </div>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
