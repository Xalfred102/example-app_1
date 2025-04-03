@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #f4f6f9;
    }

    .carousel-inner img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 10px;
    }

    .barangay-title {
        padding: 10px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #52796f;
        margin-bottom: 15px;
    }

    .upload-section {
        background: #fff;
        padding: 8px;
        border-radius: 8px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 280px;
        margin: 15px auto;
        text-align: center;
    }

    .upload-section h5 {
        font-size: 16px;
        margin-bottom: 8px;
    }

    .upload-section .form-control {
        font-size: 14px;
        padding: 4px;
    }

    .upload-section .btn {
        font-size: 14px;
        padding: 4px 10px;
    }

    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        overflow: hidden;
    }

    .image-container img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
</style>

<div class="container mt-4">
    <div class="card p-4 mb-4">
        <h2 class="text-center text-primary">Municipality of {{ $municipality->name }}</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="{{ asset('storage/' . $municipality->image) }}" alt="Municipality Image" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6">
                <p><strong>General Information:</strong> {{ $municipality->general_info }}</p>
                <p><strong>Population:</strong> {{ $municipality->population }}</p>
                <p><strong>Number of Barangays:</strong> {{ $municipality->barangays }}</p>

                <div class="upload-section">
                    <h5 class="text-success">Upload Municipality Image</h5>
                    <form action="{{ route('municipality.uploadImage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="municipality_id" value="{{ $municipality->id }}">
                        <input type="file" name="municipality_image" class="form-control" required>
                        <button type="submit" class="btn btn-secondary mt-2 w-100">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card p-3 mt-4 text-center" style="max-width: 400px; margin: auto;">
        <h4 class="barangay-title">Upload Barangay Image</h4>
        <select id="barangaySelect" class="form-control mb-2">
            <option value="">-- Select Barangay --</option>
            @foreach($municipality->barangayList as $barangay)
                <option value="{{ $barangay->id }}">{{ $barangay->name }}</option>
            @endforeach
        </select>
        
        <div id="uploadBarangaySection" class="upload-section mt-3" style="display: none;">
            <h5 class="text-success">Upload Image</h5>
            <form action="{{ route('barangay.uploadImage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="barangay_id" id="selectedBarangayId">
                <input type="file" name="barangay_image" class="form-control" required>
                <button type="submit" class="btn btn-secondary mt-2 w-100">Upload</button>
            </form>
        </div>
    </div>
    
    <script>
        document.getElementById('barangaySelect').addEventListener('change', function() {
            var barangayId = this.value;
            if (barangayId) {
                document.getElementById('uploadBarangaySection').style.display = 'block';
                document.getElementById('selectedBarangayId').value = barangayId;
            } else {
                document.getElementById('uploadBarangaySection').style.display = 'none';
            }
        });
    </script>

    <h4 class="barangay-title">Barangay Gallery</h4>
    <div id="barangayCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            @foreach($municipality->barangayList as $key => $barangay)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $barangay->image) }}" alt="{{ $barangay->name }} Image" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $barangay->name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#barangayCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#barangayCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Add this BELOW the Barangay Gallery section -->
<div class="card p-4 mt-4">
    <h4 class="barangay-title">Creative Sectors Gallery</h4>
    
    <!-- Sector Filter Dropdown -->
    <div class="text-center mb-4">
        <select id="sectorSelect" class="form-control" style="max-width: 300px; margin: auto;">
            <option value="">-- All Sectors --</option>
            <option value="audiovisual">Audiovisual Media Domain</option>
            <option value="design">Design Domain</option>
            <option value="visual_arts">Visual Arts Domain</option>
            <option value="digital">Digital Interactive Media Domain</option>
            <option value="publishing">Publishing and Printed Media Domain</option>
            <option value="traditional">Traditional Cultural Expressions Domain</option>
            <option value="creative_services">Creative Services Domain</option>
            <option value="performing_arts">Performing Arts Domain</option>
            <option value="cultural_sites">Cultural Sites Domain</option>
        </select>
    </div>
    
    <!-- Sector Carousel (Same structure as Barangay Gallery) -->
    <div id="sectorCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner" id="sectorCarouselInner">
            <!-- Dynamic content via JavaScript -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#sectorCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sectorCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>

<!-- JavaScript for Sector Filtering -->
<script>
    // Sample data (replace with your actual data structure)
    const sectors = {
        audiovisual: { name: "Audiovisual Media", image: "{{ asset('path/to/audiovisual-image.jpg') }}" },
        design: { name: "Design", image: "{{ asset('path/to/design-image.jpg') }}" },
        // Add all other sectors here...
    };

    // Initialize carousel with ALL sectors
    function initSectorCarousel(filter = null) {
        const carouselInner = document.getElementById('sectorCarouselInner');
        carouselInner.innerHTML = '';
        
        let activeSet = false;
        
        for (const [key, sector] of Object.entries(sectors)) {
            if (filter && key !== filter) continue;
            
            const item = document.createElement('div');
            item.className = `carousel-item ${!activeSet ? 'active' : ''}`;
            item.innerHTML = `
                <img src="${sector.image}" alt="${sector.name}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>${sector.name}</h5>
                </div>
            `;
            carouselInner.appendChild(item);
            activeSet = true;
        }
    }
    
    // Filter on dropdown change
    document.getElementById('sectorSelect').addEventListener('change', function() {
        initSectorCarousel(this.value || null);
    });
    
    // Initial load
    initSectorCarousel();
</script>

    <a href="{{ route('municipality.index') }}" class="btn btn-secondary mt-3 d-block mx-auto" style="max-width: 200px;">Back to Map</a>
</div>

@endsection
