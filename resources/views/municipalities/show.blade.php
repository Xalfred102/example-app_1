@extends('layouts.app')

@section('content')

<style>
    .barangay-card {
        perspective: 1000px;
        width: 100%;
        height: 270px;
        margin-bottom: 20px;
        position: relative;
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .barangay-card-inner {
        width: 100%;
        height: 100%;
        transition: transform 0.8s ease-in-out;
        transform-style: preserve-3d;
        position: relative;
    }

    .barangay-card-front, .barangay-card-back {
        width: 100%;
        height: 100%;
        position: absolute;
        backface-visibility: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    .barangay-card-front {
        font-weight: bold;
        font-size: 1.3em;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: linear-gradient(135deg, #007bff, #00d4ff);
        position: relative;
    }

    .barangay-card-back {
        transform: rotateY(180deg);
        background-size: cover;
        background-position: center;
        color: white;
        font-weight: bold;
        position: relative;
        border-radius: 15px;
    }

    .barangay-card.flipped .barangay-card-inner {
        transform: rotateY(180deg);
    }

    .barangay-card-back::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        z-index: 1;
    }

    .barangay-card-back form {
        position: relative;
        z-index: 2;
    }

    .flip-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 35px;
        height: 35px;
        background: white;
        color: #007bff;
        border: none;
        border-radius: 50%;
        font-size: 18px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background 0.3s ease;
        z-index: 3;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

    .flip-btn:hover {
        background: #007bff;
        color: white;
    }

    .see-more-btn {
        margin-top: 10px;
        transition: all 0.3s ease;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .see-more-btn:hover {
        background: #0056b3;
        transform: scale(1.05);
    }
</style>

<div class="container mt-5">
    <div class="card p-4 mb-5" style="border-radius: 12px; background-color: #f7f9fc;">
        <h2 class="text-center text-primary">Municipality of {{ $municipality->name }}</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $municipality->image) }}" alt="Municipality Image" class="img-fluid rounded mb-3">
            </div>
            <div class="col-md-6">
                <p><strong>General Information:</strong> {{ $municipality->general_info }}</p>
                <p><strong>Population:</strong> {{ $municipality->population }}</p>
                <p><strong>Number of Barangays:</strong> {{ $municipality->barangays }}</p>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($municipality->barangayList as $barangay)
            <div class="col-md-4 mb-4">
                <div class="barangay-card">
                    <div class="barangay-card-inner">
                        <div class="barangay-card-front">
                            <h5>{{ $barangay->name }}</h5>
                            <p>Barangay Captain: {{ $barangay->captain }}</p>
                            <a href="#" class="btn btn-light mt-2 see-more-btn">See More Details</a>
                            <button class="flip-btn">&#x21bb;</button>
                        </div>
                        <div class="barangay-card-back" style="background-image: url('{{ asset('storage/' . $barangay->image) }}');">
                            <form action="{{ route('barangay.uploadImage') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="barangay_id" value="{{ $barangay->id }}">
                                <input type="file" name="barangay_image" class="form-control mb-2" required>
                                <button type="submit" class="btn btn-light w-100">Upload Picture</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a href="{{ route('municipality.index') }}" class="btn btn-secondary mt-4">Back to Map</a>
</div>

<script>
    document.querySelectorAll('.flip-btn').forEach(button => {
        button.addEventListener('click', function (event) {
            event.stopPropagation();
            let card = this.closest('.barangay-card');
            card.classList.toggle('flipped');
        });
    });
</script>

@endsection
