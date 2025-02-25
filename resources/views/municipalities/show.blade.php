@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4 mb-5" style="border-radius: 12px; background-color: #f7f9fc;">
        <h2 class="text-center text-primary">Municipality of {{ $municipality->name }}</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $municipality->image) }}" alt="Municipality Image" class="img-fluid rounded mb-3">
                <form action="{{ route('municipality.uploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="municipality_id" value="{{ $municipality->id }}">
                    <input type="file" name="municipality_image" class="form-control mb-2" required>
                    <button type="submit" class="btn btn-primary w-100">Upload Image</button>
                </form>
                
            </div>
            
            <div class="col-md-6">
                <p><strong>General Information:</strong> {{ $municipality->general_info }}</p>
                <p><strong>Population:</strong> {{ $municipality->population }}</p>
                <p><strong>Number of Barangays:</strong> {{ $municipality->barangays }}</p>
                

                <div class="p-4 mt-4" style="background-color: #edf2f7; border-radius: 12px;">
                    <h4 class="text-center text-primary">Cultural Highlights</h4>
                    <img src="{{ asset($municipality->image) }}" alt="Municipality Image" class="img-fluid rounded mb-3">
                    <p>{{ $municipality->culture }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h3 class="text-primary">Barangays</h3>
        <div class="row">
            @foreach($municipality->barangayList as $barangay)
                <div class="col-md-4">
                    <div class="card p-3 mb-4" style="border-radius: 12px;">
                        <img src="{{ asset('images/barangays/' . basename($barangay->image)) }}" alt="Barangay Image" class="img-fluid rounded mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Barangay: {{ $barangay->name }}</h5>
                            <p><strong>Population:</strong> {{ $barangay->population }}</p>
                            <p>{{ $barangay->culture }}</p>
                            <form action="{{ route('barangay.uploadImage') }}" method="POST" enctype="multipart/form-data" class="mt-2">
                                @csrf
                                <input type="hidden" name="barangay_id" value="{{ $barangay->id }}">
                                <input type="file" name="barangay_image" class="form-control mb-2" required>
                                <button type="submit" class="btn btn-primary w-100" style="transition: background-color 0.3s, transform 0.2s;">Upload Image</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <a href="{{ route('municipality.index') }}" class="btn btn-secondary mt-4">Back to Map</a>

</div>
@endsection