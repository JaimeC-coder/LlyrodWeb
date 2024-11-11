<div class="sectionClients">
    <div class="containerClient">
        <div class="content">
            <div class="title">

                <h2>
                    Nuestros socios
                </h2>
<span></span>
            </div>
            <p class="description">
                “Evolucionamos juntos, trabajando en equipo, fortaleciendo nuestras
                <br>capacidades y creando valor a cada paso”
            </p>

            <div class="cardGrid">

                <div class="cardGrid">

                    @foreach ($cliens as $client)
                        <div class="card">
                            <div class="media">
                                <img src="{{ $client['imagen'] }}" alt="{{ $client['nombre'] }}" />
                            </div>
                            <div class="mediaMobil">
                                <img src="{{ $client['imagenResponsive'] }}" alt="{{ $client['nombre'] }}" />
                            </div>

                        </div>
                    @endforeach
                    @foreach ($cliens as $client) <!-- Duplicado para efecto de carrusel continuo -->
                        <div class="card">
                            <div class="media">
                                <img src="{{ $client['imagen'] }}" alt="{{ $client['nombre'] }}" />
                            </div>
                            <div class="mediaMobil">
                                <img src="{{ $client['imagenResponsive'] }}" alt="{{ $client['nombre'] }}" />
                            </div>

                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>


