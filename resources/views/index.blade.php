<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Municipalities of Lanao del Norte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">Municipalities of Lanao del Norte</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Population</th>
                <th>Total Barangays</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($municipalities as $municipality)
                <tr>
                    <td>{{ $municipality->id }}</td>
                    <td>{{ $municipality->name }}</td>
                    <td>{{ $municipality->latitude }}</td>
                    <td>{{ $municipality->longitude }}</td>
                    <td>{{ $municipality->population }}</td>
                    <td>{{ $municipality->barangays }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
