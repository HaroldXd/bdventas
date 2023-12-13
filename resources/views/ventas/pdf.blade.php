<!doctype html>
<html lang="en">

<head>
    <title>Ventas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        /* Custom styles for your table */
        body {
            background-color: #f8f9fa;
        }

        table {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        th,
        td {
            text-align: center;
            padding: 15px;
        }

        thead {
            background-color: #343a40;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<table>
    <thead class="thead-light">
        <tr>
            <td>Fecha</td>

            <td>{{ $ventas->fecha_venta }}</td>
        </tr>
        <tr>
            <td colspan="2">
                @if ($ventas->tipo_id =="1")
                FACTURA

                
                @else
                
                BOLETA

                @endif


            </td>
        </tr>
        <tr>
            <td>N°</td>

            <td>{{ $ventas->nrodoc }}</td>
        </tr>
    </thead>
</table>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Señor</th>
            <td colspan="3" bgcolor="grey">{{ $ventas->clientes->nombres }}</td>


        </tr>
       
        <tr>
            <th scope="col">Direccion</th>
            <td bgcolor="grey">{{ $ventas->clientes->direccion }}</td>
            <th scope="col">DNI</th>
            <th scope="col" bgcolor="grey">{{ $ventas->clientes->ruc_dni }}</th>
        </tr>

    </thead>
</table>

<body>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cantidad</th>

                <th scope="col">Descripción</th>
               
                <th scope="col">Categoria</th>
                <th scope="col">Unidad</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @if (is_countable($ventas) && count($ventas) <= 0)
                <tr>
                    <td colspan="3">No hay registros</td>
                </tr>
            @else
                @foreach ($dt as $detalle)
                    <tr>
                        <td>{{ $detalle->cantidad }}</td>

                        <td>{{ $detalle->productos->descripcion }}</td>

                        <td>{{ $detalle->productos->categorias->descripcion }}</td>
                        <td>{{ $detalle->productos->precio }}</td>
                        <td>{{ $detalle->productos->precio * $detalle->cantidad }}</td>
                    <tr>
                @endforeach
            @endif






            </tr>


        </tbody>
        <tfoot>
            <tr hidden>
                <td colspan="3"></td>
                <td colspan="1">Subtotal:</td>
                <td >{{$ventas->subtotal}}</td>
            </tr>
            <tr hidden>
                <td colspan="3"></td>
                <td colspan="1">IGV:</td>
                <td >{{$ventas->igv}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td colspan="1">Total:</td>
                <td >{{$ventas->total}}</td>
            </tr>
            
        </tfoot>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
