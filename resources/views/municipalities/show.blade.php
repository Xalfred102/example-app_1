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

    /* Sidebar */
.sidebar {
    height: 100%;
    width: 400px;
    position: fixed;
    top: 0;
    left: -400px;
    background-color: #f8f9fa;
    padding: 20px;
    transition: 0.3s;
    z-index: 1001;
}

/* Open Sidebar */
.sidebar.open {
    left: 0;
}

/* Overlay */
.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0; left: 0;
    background: rgba(0,0,0,0.5);
    backdrop-filter: blur(5px);
    z-index: 1000;
}

/* Sidebar Toggle Button */
.sidebar-toggle {
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 1002;
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

 <!-- Sidebar -->
<div id="sidebar" class="sidebar">
   
    <!-- Domain Dropdown inside Sidebar with images -->
    <div class="mb-3">
        <label class="form-label">Select Domain</label>
        <select id="domainSelectSidebar" class="form-control mb-2">
            <option value="">-- Select Domain --</option>
            <option value="cultural_sites">Cultural Sites Domain</option>
            <option value="performing_arts">Performing Arts Domain</option>
            <option value="creative_services">Creative Services Domain</option>
            <option value="digital_media">Digital Interactive Media Domain</option>
            <option value="publishing">Publishing and Printed Media Domain</option>
            <option value="traditional">Traditional Cultural Expressions Domain</option>
            <option value="visual_arts">Visual Arts Domain</option>
            <option value="design">Design Domain</option>
            <option value="audiovisual">Audiovisual Media Domain</option>
        </select>
        
        <!-- Domain Preview Image -->
        <div id="domainPreview" class="text-center my-2" style="display: none;">
            <img id="domainImage" src="" alt="Domain Preview" class="img-fluid rounded" style="max-height: 100px; width: auto;">
        </div>
    </div>

    <!-- Sector Dropdown inside Sidebar -->
    <div class="mb-3">
        <label class="form-label">Select Sector</label>
        <select id="sectorSelectSidebar" class="form-control mb-2">
            <option value="">-- Select Sector --</option>
        </select>
    </div>
    
    <!-- Upload Form (below sector select) -->
    <form id="uploadForm" action="/upload-image" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="domain" id="hiddenDomain">
        <input type="hidden" name="sector" id="hiddenSector">

        <div class="mb-2">
            <label for="imageUpload" class="form-label">Upload Image</label>
            <input type="file" name="image" id="imageUpload" class="form-control" required>
        </div>

        <div class="mb-2">
            <label for="imageTitle" class="form-label">Image Title</label>
            <input type="text" name="title" id="imageTitle" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Upload</button>
    </form>

    <!-- Gallery Section with Filtering -->
    <div class="mt-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5>Gallery</h5>
            <div>
                <select id="galleryFilter" class="form-control form-control-sm">
                    <option value="all">All Images</option>
                    <option value="domain">Current Domain</option>
                    <option value="sector">Current Sector</option>
                </select>
            </div>
        </div>
        
        <div id="imageGallery" class="row g-2">
            <!-- Images will be displayed here -->
        </div>
    </div>
</div>


<!-- Overlay for blur -->
<div id="overlay" class="overlay" onclick="closeSidebar()"></div>

<!-- Sidebar Toggle Button -->
<button onclick="openSidebar()" class="btn btn-dark sidebar-toggle">Creative|Domains</button>

<!-- The Modal -->
<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImage">
  <div id="imageCaption"></div>
</div>

<!-- Add this CSS to your stylesheet -->
<style>
    /* Image Gallery Styles */
    #imageGallery img {
        width: 100%;
        height: 100px;
        object-fit: cover;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 5px;
    }

    #imageGallery img:hover {
        opacity: 0.7;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1050;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        max-height: 80vh;
        object-fit: contain;
    }

    #imageCaption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: auto;
    }

    .modal-content, #imageCaption {  
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {transform: scale(0.1)} 
        to {transform: scale(1)}
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
</style>

<!-- JavaScript for Sector Filtering -->
<script>
    // Complete sector data with all domains and subsectors
    const sectors = {
        cultural_sites: {
            name: "Cultural Sites Domain",
            image: "{{ asset('storage/sectors/cultural_sites.jpg') }}",
            subsectors: [
                "Galleries and Museums",
                "Libraries",
                "Creative Cities",
                "Performing Arts Venues",
                "Cultural Exhibition",
                "Heritage Sites"
            ]
        },
        performing_arts: {
            name: "Performing Arts Domain",
            image: "{{ asset('storage/sectors/performing_arts.jpg') }}",
            subsectors: [
                "Live Music",
                "Theater",
                "Musical Theater",
                "Dance",
                "Live Events",
                "Opera",
                "Circus",
                "Spoken Word",
                "Puppetry",
                "Cinema and Movie Theater"
            ]
        },
        creative_services: {
            name: "Creative Service Domain",
            image: "{{ asset('storage/sectors/creative_services.jpg') }}",
            subsectors: [
                "Advertising and marketing",
                "Services Research and Development",
                "Cultural and Recreational Services",
                "Live Creative Experience",
                "Communication and Graphic"
            ]
        },
        digital_media: {
            name: "Digital Interactive Media Domain",
            image: "{{ asset('storage/sectors/digital_media.jpg') }}",
            subsectors: [
                "Software and Mobile Applications",
                "Video Games",
                "Computer Games",
                "Digital Content Streaming Platforms",
                "Mobile Games",
                "Virtual, Augmented or Mixed Reality Games",
                "Digitized Creative Content",
                "Web Design and UI/UX"
            ]
        },
        publishing: {
            name: "Publishing and Printed Media Domain",
            image: "{{ asset('storage/sectors/publishing.jpg') }}",
            subsectors: [
                "Books and Textbooks",
                "Blogs",
                "Comics",
                "Graphic Novels",
                "Physical Print",
                "Editorial and Commentaries",
                "Magazines",
                "Newspaper",
                "Other Published Media"
            ]
        },
        traditional: {
            name: "Traditional Cultural Expressions Domain",
            image: "{{ asset('storage/sectors/traditional.jpg') }}",
            subsectors: [
                "Arts and Crafts",
                "Gastronomy",
                "Culinary Practices",
                "Cultural Festival",
                "Celebration",
                "Cultural Education"
            ]
        },
        visual_arts: {
            name: "Visual Arts Domain",
            image: "{{ asset('storage/sectors/visual_arts.jpg') }}",
            subsectors: [
                "Paintings",
                "Drawings",
                "Sculpture",
                "Photography",
                "Antiques",
                "Performance Art",
                "Fine Arts",
                "Art Toys",
                "Collages",
                "Other Decorative Material"
            ]
        },
        design: {
            name: "Design Domain",
            image: "{{ asset('storage/sectors/design.jpg') }}",
            subsectors: [
                "Architecture",
                "Urban Landscaping",
                "Environmental Planning",
                "Interior and Spacial Planning",
                "Product Design",
                "Fashion and Accessory Making",
                "Textile Development",
                "Furniture Making",
                "Jewelry Making",
                "Toy Making"
            ]
        },
        audiovisual: {
            name: "Audiovisual Media Domain",
            image: "{{ asset('storage/sectors/audiovisual.jpg') }}",
            subsectors: [
                "Film",
                "Broadcasting Content and Production",
                "Animated Film Production",
                "Vlogs",
                "Recorded Music",
                "Music Scores",
                "Motion Graphics 2D/3D",
                "Technology and Animatronics",
                "Compositions for Recording",
                "Podcasts",
                "Educational Content"
            ]
        }
    };

    // Initialize Sector Carousel
    function handleSectorSelection(sectorSelectId) {
        const sectorSelect = document.getElementById(sectorSelectId);

        sectorSelect.addEventListener('change', function() {
            const selectedSubsector = this.value;

            if (selectedSubsector) {
                filterCarouselBySubsector(selectedSubsector);
                loadImagesForSector(selectedSubsector);
            } else {
                initSectorCarousel(); // If walay subsector, reset tanan
                loadAllImages();
            }
        });
    }

    function filterCarouselBySubsector(subsectorName) {
        const carouselInner = document.getElementById('sectorCarouselInner');
        if (!carouselInner) return;
        
        carouselInner.innerHTML = '';

        let activeSet = false;
        for (const domain in sectors) {
            const sector = sectors[domain];
            if (sector.subsectors.includes(subsectorName)) {
                const item = document.createElement('div');
                item.className = `carousel-item ${!activeSet ? 'active' : ''}`;

                item.innerHTML = `
                    <img src="${sector.image}" alt="${sector.name}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 p-3 rounded">
                        <h5>${sector.name}</h5>
                        <ul class="text-start ps-4">
                            <li>${subsectorName}</li> <!-- Only selected subsector ra i-display -->
                        </ul>
                    </div>
                `;
                carouselInner.appendChild(item);
                activeSet = true;
                break; // Only show once ang matching sector
            }
        }
    }

    // Fill Sector Dropdown Based on Domain Selected
    function populateSectorDropdown(domainSelectId, sectorSelectId) {
        const domainSelect = document.getElementById(domainSelectId);
        const sectorSelect = document.getElementById(sectorSelectId);
        const domainPreview = document.getElementById('domainPreview');
        const domainImage = document.getElementById('domainImage');

        domainSelect.addEventListener('change', function() {
            const selectedDomain = this.value;
            sectorSelect.innerHTML = '<option value="">-- Select Sector --</option>';

            if (selectedDomain && sectors[selectedDomain]) {
                // Show domain image preview
                domainImage.src = sectors[selectedDomain].image;
                domainPreview.style.display = 'block';
                
                // Populate sectors
                sectors[selectedDomain].subsectors.forEach(subsector => {
                    const option = document.createElement('option');
                    option.value = subsector;
                    option.textContent = subsector;
                    sectorSelect.appendChild(option);
                });
                sectorSelect.disabled = false;
                
                // Filter gallery by domain if filter is set to domain
                const galleryFilter = document.getElementById('galleryFilter');
                if (galleryFilter.value === 'domain') {
                    loadImagesForDomain(selectedDomain);
                }
            } else {
                // Hide domain preview
                domainPreview.style.display = 'none';
                sectorSelect.disabled = true;
                
                // Reset gallery based on current filter
                applyGalleryFilter();
            }

            // Optional: Filter Carousel if you select Domain
            if (typeof initSectorCarousel === 'function') {
                initSectorCarousel(selectedDomain || null);
            }
        });
    }

    // Handle Sidebar Controls
    function openSidebar() {
        document.getElementById("sidebar").classList.add("open");
        document.getElementById("overlay").style.display = "block";
    }

    function closeSidebar() {
        document.getElementById("sidebar").classList.remove("open");
        document.getElementById("overlay").style.display = "none";
    }

    // Initialize image gallery
    function initImageGallery() {
        // This is a placeholder for the actual image loading function
        // In a real implementation, you would fetch images from the server
        loadAllImages();
    }

    // Load all images from the server/storage
    function loadAllImages() {
        const gallery = document.getElementById('imageGallery');
        gallery.innerHTML = '';
        
        // Get images from session storage (in a real app, this would be from a database)
        let storedImages = JSON.parse(sessionStorage.getItem('galleryImages') || '[]');
        
        // If no stored images, create some demo images
        if (storedImages.length === 0) {
            // Add demo images for each domain
            Object.keys(sectors).forEach((domain, domainIndex) => {
                const domainName = sectors[domain].name;
                
                // Add one image for each sector in this domain
                sectors[domain].subsectors.forEach((sector, sectorIndex) => {
                    if (sectorIndex < 2) { // Limit to 2 sectors per domain for demo
                        const imageData = {
                            src: `https://via.placeholder.com/150?text=${domain}_${sector.substring(0, 3)}`,
                            title: `${sector}`,
                            description: `Demo image from ${domainName}, ${sector}`,
                            domain: domain,
                            sector: sector,
                            domainName: domainName,
                            sectorName: sector,
                            uploadDate: new Date().toLocaleString()
                        };
                        
                        storedImages.push(imageData);
                    }
                });
            });
            
            // Save demo images to session storage
            sessionStorage.setItem('galleryImages', JSON.stringify(storedImages));
        }
        
        // Display all images or show empty message
        if (storedImages.length === 0) {
            gallery.innerHTML = '<div class="col-12 text-center p-4"><em>No images available. Upload some!</em></div>';
            return;
        }
        
        // Display images sorted by most recent first
        storedImages.sort((a, b) => new Date(b.uploadDate) - new Date(a.uploadDate))
            .forEach(img => {
                addImageToGallery(img.src, img.title, img.description);
            });
    }

    // Load images for a specific domain
    function loadImagesForDomain(domain) {
        const gallery = document.getElementById('imageGallery');
        gallery.innerHTML = '';
        
        // Get all images
        let storedImages = JSON.parse(sessionStorage.getItem('galleryImages') || '[]');
        
        // Filter by domain
        const domainImages = storedImages.filter(img => img.domain === domain);
        
        // Display domain name as heading
        const domainName = sectors[domain] ? sectors[domain].name : 'Unknown Domain';
        
        // Display filtered images or show empty message
        if (domainImages.length === 0) {
            gallery.innerHTML = `<div class="col-12 text-center p-4">
                <em>No images for ${domainName}. Upload some!</em>
            </div>`;
            return;
        }
        
        // Display images sorted by most recent first
        domainImages.sort((a, b) => new Date(b.uploadDate) - new Date(a.uploadDate))
            .forEach(img => {
                addImageToGallery(img.src, img.title, img.description);
            });
    }

    // Load images for a specific sector
    function loadImagesForSector(sector) {
        const gallery = document.getElementById('imageGallery');
        gallery.innerHTML = '';
        
        // Get all images
        let storedImages = JSON.parse(sessionStorage.getItem('galleryImages') || '[]');
        
        // Filter by sector
        const sectorImages = storedImages.filter(img => img.sector === sector);
        
        // Display filtered images or show empty message
        if (sectorImages.length === 0) {
            gallery.innerHTML = `<div class="col-12 text-center p-4">
                <em>No images for ${sector}. Upload some!</em>
            </div>`;
            return;
        }
        
        // Display images sorted by most recent first
        sectorImages.sort((a, b) => new Date(b.uploadDate) - new Date(a.uploadDate))
            .forEach(img => {
                addImageToGallery(img.src, img.title, img.description);
            });
    }

    // Add an image to the gallery
    function addImageToGallery(src, title, description) {
        const gallery = document.getElementById('imageGallery');
        
        const col = document.createElement('div');
        col.className = 'col-6';
        
        const img = document.createElement('img');
        img.src = src;
        img.alt = title;
        img.dataset.description = description;
        img.className = 'img-fluid gallery-img';
        
        // Add click event to open modal
        img.onclick = function() {
            openImageModal(this);
        };
        
        col.appendChild(img);
        gallery.appendChild(col);
    }

    // Open image modal
    function openImageModal(img) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const captionText = document.getElementById('imageCaption');
        
        modal.style.display = "block";
        modalImg.src = img.src;
        captionText.innerHTML = img.alt + '<br><small>' + img.dataset.description + '</small>';
    }

    // Apply gallery filter based on selected option
    function applyGalleryFilter() {
        const galleryFilter = document.getElementById('galleryFilter');
        const domainSelect = document.getElementById('domainSelectSidebar');
        const sectorSelect = document.getElementById('sectorSelectSidebar');
        
        const filterValue = galleryFilter.value;
        
        if (filterValue === 'all') {
            loadAllImages();
        } else if (filterValue === 'domain' && domainSelect.value) {
            loadImagesForDomain(domainSelect.value);
        } else if (filterValue === 'sector' && sectorSelect.value) {
            loadImagesForSector(sectorSelect.value);
        } else {
            // Default to all if conditions aren't met
            loadAllImages();
        }
    }

    // Load images with visual helpers
    function loadImagesWithVisualHelpers(images) {
        const gallery = document.getElementById('imageGallery');
        gallery.innerHTML = '';
        
        if (images.length === 0) {
            // No images found
            gallery.innerHTML = '<div class="col-12 text-center p-4"><em>No images found for this filter.</em></div>';
            return;
        }
        
        images.forEach(img => {
            addImageToGallery(img.src, img.title, img.description);
        });
    }

    // Initialize everything
    document.addEventListener('DOMContentLoaded', function() {
        populateSectorDropdown('domainSelectSidebar', 'sectorSelectSidebar');
        if (typeof initSectorCarousel === 'function') {
            initSectorCarousel();
        }
        handleSectorSelection('sectorSelectSidebar');
        initImageGallery();

        const domainSelect = document.getElementById('domainSelectSidebar');
        const sectorSelect = document.getElementById('sectorSelectSidebar');
        const hiddenDomain = document.getElementById('hiddenDomain');
        const hiddenSector = document.getElementById('hiddenSector');
        const imageUpload = document.getElementById('imageUpload');
        const galleryFilter = document.getElementById('galleryFilter');

        function updateHiddenInputs() {
            hiddenDomain.value = domainSelect.value;
            hiddenSector.value = sectorSelect.value;
        }

        domainSelect.addEventListener('change', updateHiddenInputs);
        sectorSelect.addEventListener('change', updateHiddenInputs);
        
        // Apply gallery filtering when changed
        galleryFilter.addEventListener('change', applyGalleryFilter);
        
        // Handle sector selection filtering
        sectorSelect.addEventListener('change', function() {
            if (galleryFilter.value === 'sector' && this.value) {
                loadImagesForSector(this.value);
            }
        });

        // Handle form submission with AJAX
        const uploadForm = document.getElementById('uploadForm');
        uploadForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!domainSelect.value || !sectorSelect.value) {
                alert('Please select both Domain and Sector before uploading an image.');
                return;
            }
            
            if (!imageUpload.files[0]) {
                alert('Please select an image to upload.');
                return;
            }

            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading...';
            submitBtn.disabled = true;
            
            // In a real implementation, you would send the form data to the server
            // For demo purposes, we'll simulate a successful upload
            const formData = new FormData(this);
            
            // Simulate server processing
            setTimeout(function() {
                const newImageSrc = URL.createObjectURL(imageUpload.files[0]);
                const imageTitle = document.getElementById('imageTitle').value;
                const domainName = sectors[domainSelect.value].name;
                const sectorName = sectorSelect.options[sectorSelect.selectedIndex].text;
                
                // Store the image data (in a real app this would be in a database)
                const imageData = {
                    src: newImageSrc,
                    title: imageTitle,
                    description: `Uploaded to ${sectorName}`,
                    domain: domainSelect.value,
                    sector: sectorSelect.value,
                    domainName: domainName,
                    sectorName: sectorName,
                    uploadDate: new Date().toLocaleString()
                };
                
                // Add to our "database" (session storage for demo)
                let allImages = JSON.parse(sessionStorage.getItem('galleryImages') || '[]');
                allImages.push(imageData);
                sessionStorage.setItem('galleryImages', JSON.stringify(allImages));
                
                // Add the newly uploaded image to the gallery if it matches the current filter
                const currentFilter = galleryFilter.value;
                if (currentFilter === 'all' || 
                    (currentFilter === 'domain' && domainSelect.value === imageData.domain) ||
                    (currentFilter === 'sector' && sectorSelect.value === imageData.sector)) {
                    addImageToGallery(imageData.src, imageData.title, imageData.description);
                }
                
                // Reset the form
                uploadForm.reset();
                
                // Reset button
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                
                // Hide domain preview after upload
                document.getElementById('domainPreview').style.display = 'none';
                
                // Show success message
                const successMsg = document.createElement('div');
                successMsg.className = 'alert alert-success mt-2';
                successMsg.innerHTML = 'Image uploaded successfully!';
                uploadForm.appendChild(successMsg);
                
                setTimeout(() => {
                    successMsg.remove();
                }, 3000);
            }, 1000);
        });
        
        // Handle modal close button
        const closeBtn = document.getElementsByClassName("close")[0];
        closeBtn.onclick = function() {
            document.getElementById('imageModal').style.display = "none";
        }
        
        // Close modal when clicking outside the image
        const modal = document.getElementById('imageModal');
        modal.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
        
        // Handle keyboard events for modal
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && modal.style.display === 'block') {
                modal.style.display = 'none';
            }
        });
    });
</script>

    <a href="{{ route('municipality.index') }}" class="btn btn-secondary mt-3 d-block mx-auto" style="max-width: 200px;">Back to Map</a>
</div>

@endsection


