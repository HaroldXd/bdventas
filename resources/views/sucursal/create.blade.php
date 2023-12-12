@extends('layouts.plantilla')
@section('contenido')
    <div class="container-fluid">
        <h1>Registro Nuevo</h1>
        <form method="POST" enctype="multipart/form-data" action="{{ route('sucursales.store') }}">
            @csrf
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Descripcion</span>
                <input type="text" class="form-control" placeholder="descripcion" aria-label="descripcion"
                    aria-describedby="addon-wrapping" @error('descripcion') isinvalid @enderror" id="descripcion"
                    name="descripcion">
                @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Direccion</span>
                <input type="text" class="form-control" placeholder="direccion" aria-label="direccion"
                    aria-describedby="addon-wrapping" @error('direccion') isinvalid @enderror" id="direccion"
                    name="direccion">
                @error('direccion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br><br>


            <div class="flex flex-col justify-around h-full">
                <livewire:dropdowns />

                <div class="card body" style="font-size: 20px">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Ventas</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Servicio Tecnico</label>
                        </div>
                    </div>
                </div>

                <div>
                    <input hidden type="text" class="form-control" placeholder="direccion" aria-label="direccion"
                        aria-describedby="addon-wrapping" id="aea" name="aea">
                    <input hidden type="text" class="form-control" placeholder="direccion" aria-label="direccion"
                        aria-describedby="addon-wrapping" id="aea1" name="aea1">


                    <input type="text" class="form-control" placeholder="servicios" aria-label="idservicios"
                        aria-describedby="addon-wrapping" id="idservicio" name="idservicio" readonly>

                </div>








                <div class="card body" style="font-size: 20px">
                    <label for="">Horario de Atención</label>


                </div>
                <div class="card body" style="font-size: 20px">
                    <textarea cols="10" rows="5"id="idhorario" name="idhorario"></textarea>


                </div>
                <div class="card body" style="font-size: 20px">
                    <label for="">Ubicación</label>
                    <script type="text/javascript"
                        src="https://maps.googleapis.com/maps/api/js?key={{ 'AIzaSyDMnioCAZRgXGxucFzwdzJtOW1kQCCD_dc' }}"></script>
                    <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
                    <style type="text/css">
                        #map {
                            width: 100%;
                            height: 480px;
                        }
                    </style>



                    <div id="map"></div>
                    <br>
                    <button hidden type="button" class="btn btn-outline-secondary"
                        id="confirmPosition">Seleccionar</button>
                    <br>

                    <div hidden class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">ubicacion</span>
                        <input type="text" class="form-control" placeholder="ubicacion" aria-label="ubicacion"
                            aria-describedby="addon-wrapping" @error('ubicacion') isinvalid @enderror" id="ubicacion"
                            name="ubicacion">
                        @error('ubicacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <p hidden><span id="onIdlePositionView"></span></p>
                    <p hidden>On click position: <span id="onClickPositionView"></span></p>

                    <script>
                        // Get element references
                        var confirmBtn = document.getElementById('confirmPosition');
                        var onClickPositionView = document.getElementById('onClickPositionView');

                        var onIdlePositionView1 = document.getElementById('onIdlePositionView');

                        // Initialize locationPicker plugin
                        var lp = new locationPicker('map', {
                            setCurrentPosition: true, // You can omit this, defaults to true
                        }, {
                            zoom: 15 // You can set any google map options here, zoom defaults to 15
                        });

                        // Listen to button onclick event
                        confirmBtn.onclick = function() {
                            // Get current location and show it in HTML
                            var location = lp.getMarkerPosition();
                            onClickPositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
                        };

                        // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
                        google.maps.event.addListener(lp.map, 'idle', function(event) {
                            // Get current location and show it in HTML
                            var location = lp.getMarkerPosition();
                            //onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
                            onIdlePositionView1.innerHTML = location.lat + ',' + location.lng;
                            $('#ubicacion').val(location.lat + ',' + location.lng);
                        });

                        const someCheckbox = document.getElementById('checkbox1');
                        var firstName = "";
                        var lastName = "";
                        someCheckbox.addEventListener('change', e => {
                            if (e.target.checked === true) {
                                console.log("Checkbox is checked - boolean value: ", e.target.checked)
                                $('#aea').val('Ventas');
                                firstName = $('#aea').val();
                                $('#idservicio').val(firstName + ' ' + lastName);
                            }
                            if (e.target.checked === false) {
                                console.log("Checkbox is not checked - boolean value: ", e.target.checked)
                                $('#aea').val('');
                                firstName = $('#aea').val();
                                $('#idservicio').val(firstName + ' ' + lastName);
                            }
                        });

                        const someCheckbox1 = document.getElementById('checkbox2');

                        someCheckbox1.addEventListener('change', e1 => {
                            if (e1.target.checked === true) {
                                console.log("Checkbox is checked - boolean value: ", e1.target.checked)
                                $('#aea1').val('Servicio Tecnico');
                                lastName = $('#aea1').val();
                                $('#idservicio').val(firstName + ' ' + lastName);
                            }
                            if (e1.target.checked === false) {
                                console.log("Checkbox is not checked - boolean value: ", e1.target.checked)
                                $('#aea1').val('');
                                lastName = $('#aea1').val();
                                $('#idservicio').val(firstName + ' ' + lastName);
                            }
                        });
                    </script>

                    <div>
                        <button type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
                        <a href="{{ route('cancelar_suc') }}" class="btn btndanger"><i class="fas fa-ban"></i>
                            Cancelar</button></a>

                    </div>

                </div>


        </form>
    
    @endsection

    @section('js')
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key={AIzaSyA-Z9C4EET1yaSUaOFJktv35lVbbrMyss4}"></script>
        <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
        
        @endsection
