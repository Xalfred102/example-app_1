@extends('layouts.app')

@section('content')
    <div id="map-container">
        <div class="container text-center">
            <h2 class="text-black mb-4">Lanao del Norte Creative Mapping</h2>  <!-- Changed text color to black -->
            <div id="map" style="height: 600px; width: 100%; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);"></div>
        </div>
    </div>

    <script>
        var map = L.map('map').setView([8.125, 124.125], 10);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        var municipalities = @json($municipalities);
        municipalities.forEach(function(mun) {
    if (!mun.latitude || !mun.longitude || isNaN(parseFloat(mun.latitude)) || isNaN(parseFloat(mun.longitude))) return;
    var url = `/municipalities/${mun.id}`;
    console.log('URL:', url);  // Debugging
    var popupContent = `<b style="color: black;">${mun.name}</b><br>Population: ${mun.population}<br>Barangays: ${mun.barangays}<br>
                        <a href="${url}" class="btn btn-secondary btn-sm text-white">See More</a>`;
    L.marker([parseFloat(mun.latitude), parseFloat(mun.longitude)]).addTo(map).bindPopup(popupContent);
});

    </script>
@endsection
