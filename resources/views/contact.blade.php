@extends('layouts.body')

@section('title', $pageTitle)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

@endsection

@section('content')


<div class="content">
    <div class="contactImage">
        <img src="{{ asset('assets/contact.svg') }}" alt="Contacto">
    </div>
    <div class="contactForm">
        <div class="container">
            <h2>Contáctanos</h2>
            <form id="formulario-contacto">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>


@endsection




@section('scripts')
    <script>
        document.getElementById('archivos').addEventListener('change', function(e) {
            var lista = document.getElementById('archivo-lista');
            lista.innerHTML = '';
            for (var i = 0; i < this.files.length; i++) {
                lista.innerHTML += this.files[i].name + '<br>';
            }
        });

        document.getElementById('formulario-contacto').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí iría el código para enviar el formulario
            console.log('Formulario enviado');
            alert('Formulario enviado con éxito!');
        });
    </script>
@endsection
