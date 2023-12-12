@extends('layouts.plantilla')
@section('titulo')
    <title>Sistemas de Ventas - Sucursales</title>
@endsection
@section('contenido')
    <div class="card">
        <div class="card-header">
            <h3> LISTADO DE Sucursales </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa times"></i>
                </button>
            </div>


            <br>
            <a href="{{ route('sucursales.create') }}" class="btn btn-primary"><i class="fas faplus"></i> Nuevo Registro</a>


            <div>
                <nav class="navbar navbar-light float-right">
                    <form class="form-inline my-2 my-lg-0" method="GET">
                        <input name="buscarpor" class="form-control mr-sm2" type="search"
                            placeholder="Busqueda por descripcion" arialabel="Search" value="{{ $buscarpor }}">
                        <button class="btn btn-success my-2 my-sm0" type="submit">Buscar</button>
                    </form>
                    @if (session('datos'))
                        <div id="mensaje">
                            @if (session('datos'))
                                <div class="alert alert-warning alert-dismissible fade show mt3" role="alert">
                                    {{ session('datos') }}
                                    <button type="button" class="close" data-dismiss="alert" arialabel="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                    @endif

            </div>



        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Distrito</th>
                    <th scope="col">Servicios</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @if (count($sucursales) <= 0)
                    <tr>
                        <td colspan="3">No hay registros</td>
                    </tr>
                @else
                    @foreach ($sucursales as $itemsucursal)
                        <tr>
                            <td>{{ $itemsucursal->idsucursal }}</td>

                            <td>{{ $itemsucursal->descripcion }}</td>

                            <td>{{ $itemsucursal->direccion }}</td>

                            <td>{{ $itemsucursal->provincia->nombre }}</td>

                            <td>{{ $itemsucursal->distrito->nombre }}</td>

                            <td>{{ $itemsucursal->idservicio }}</td>

                            <td>{{ $itemsucursal->idhorario }}</td>

                            <td><a href="https://www.google.com/maps/dir/Current+Location/{{ $itemsucursal->ubicacion }}" target="_blank">Ubicación</a></td>

                           





                            <td><a href="{{ route('sucursales.edit', $itemsucursal->idsucursal) }}"
                                    class="btn btn-info btnsm"><i class="fas fa-edit"></i>
                                    Editar</a>
                                <a href="{{ route('sucursales.confirmar', $itemsucursal->idsucursal) }}"
                                    class="btn btn-danger btnsm"><i class="fas fa-trash"></i>
                                    Eliminar</a>
                            </td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $sucursales->links() }}
    </div>
@endsection

@section('script')
    <script>
        setTimeout(function() {
            document.querySelector('#mensaje').remove();
        }, 2000);
    </script>
@endsection

<section>
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2">
            <p><button class="btn btn-primary btn-sm" id="get-map-btn"><span>Map It</span></button></p>
        </div><!-- .col -->
        <div class="col-md-10 col-sm-10 col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">Location Response</div>
                <div class="panel-body">
                    <p>Enter Address: <input id="address" type="text" class="form-control"/></p>
                    <div id="map-canvas" style="min-height: 400px;"></div>
                </div>
            </div>
        </div><!-- .col -->
    </div><!-- .row -->
    
 
    <script>
        "use strict";
        var geocoder;
        var map;
        
        // setup initial map
        function initialize() {
            geocoder = new google.maps.Geocoder();							// create geocoder object
            var latlng = new google.maps.LatLng(40.6700, -73.9400);			// set default lat/long (new york city)
            var mapOptions = {												// options for map
                zoom: 8,
                center: latlng
            }
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);	// create new map in the map-canvas div
        }
        
        // function to geocode an address and plot it on a map
        function codeAddress(address) {
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);			// center the map on address
                    var marker = new google.maps.Marker({					// place a marker on the map at the address
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    
        google.maps.event.addDomListener(window, 'load', initialize);		// setup initial map
    
        $(document).ready(function() {
    
            // get map button functionality
            $("#get-map-btn").click(function(event){
                event.preventDefault();			
                var address = $("#address").val();							// grab the address from the input field
                codeAddress(address);										// geocode the address
            });
        });
    </script>
</section>
