<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2,h3{
            text-align:center;   
        }
    </style>
</head>
<body>
    <h2>GOBIERNO DE EL SALVADOR</h2>
    <h3>FC BARCELONA</h3>
    <p>Fecha: {{ now()->format('d/m/Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Proyecto</th>
                <th>Fuente de Fondos($)</th>
                <th>Monto Planificado($)</th>
                <th>Monto Patrocinado($)</th>
                <th>Monto de Fondos Propios($)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project['id'] }}</td>
                <td>{{ $project['nombre_proyecto'] }}</td>
                <td>{{ number_format($project['fuente_fondos']) }}</td>
                <td>{{ number_format($project['monto_planificado']) }}</td>
                <td>{{ number_format($project['monto_patrocinado']) }}</td>
                <td>{{ number_format($project['monto_fondos_propios']) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
