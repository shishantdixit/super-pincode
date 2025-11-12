<?php
/**
 * Template Name: SuperPincode Search
 * Description: Custom page template for SuperPincode pincode search functionality
 */

get_header();
?>

<!-- SuperPincode Custom Styles -->
<style>
/* SuperPincode - Custom Styles */

/* Root Variables */
:root {
    --primary-color: #0d6efd;
    --secondary-color: #6c757d;
    --success-color: #198754;
    --danger-color: #dc3545;
    --light-bg: #f8f9fa;
    --shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
}

/* Global Styles for SuperPincode Section */
.superpincode-container {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    background-attachment: fixed;
    min-height: 100vh;
    padding: 2rem 0;
}

/* Hero Section */
.hero-section {
    background: transparent;
    padding: 3rem 0 2rem;
    color: white;
    text-align: center;
}

.hero-section h1 {
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    animation: fadeInDown 0.8s ease-in-out;
}

.hero-section p {
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    animation: fadeInUp 0.8s ease-in-out;
}

.hero-logo {
    height: 120px;
    width: 120px;
    animation: logoFloat 3s ease-in-out infinite;
    filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
}

@keyframes logoFloat {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Card Styling */
.superpincode-container .card {
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: fadeIn 0.6s ease-in-out;
}

.superpincode-container .card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg) !important;
}

.superpincode-container .card-header {
    border-radius: 15px 15px 0 0 !important;
    padding: 1rem 1.5rem;
}

/* Tab Pills Styling */
.nav-pills .nav-link {
    padding: 1rem 1.5rem;
    border-radius: 10px;
    font-weight: 600;
    color: #6c757d;
    background: #f8f9fa;
    margin: 0 0.5rem;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.nav-pills .nav-link:hover {
    background: #e9ecef;
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.nav-pills .nav-link.active {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(102, 126, 234, 0.4);
    border-color: transparent;
}

.nav-pills .nav-link i {
    margin-right: 0.5rem;
    font-size: 1.1rem;
}

.tab-content {
    padding-top: 1rem;
}

/* Input Styling */
.input-group-lg .form-control {
    border-radius: 0;
    border: 2px solid #e0e0e0;
    transition: all 0.3s ease;
    font-size: 1.1rem;
}

.input-group-lg .form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    transform: scale(1.02);
}

.input-group-text {
    border: 2px solid #e0e0e0;
    border-right: none;
}

.input-group .btn {
    border-radius: 0 10px 10px 0;
    padding: 0.5rem 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.input-group .btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Detail Items */
.detail-item {
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
    height: 100%;
}

.detail-item:hover {
    background: #e9ecef;
    transform: translateX(5px);
}

.detail-item small {
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.5rem;
}

.detail-item strong {
    font-size: 1.1rem;
    color: #333;
}

/* Post Office Cards */
#postOfficesList .card {
    border-left: 4px solid var(--primary-color);
    transition: all 0.3s ease;
}

#postOfficesList .card:hover {
    border-left-width: 8px;
    transform: translateX(5px);
}

/* Loading Spinner */
#loadingSpinner {
    animation: fadeIn 0.3s ease-in-out;
}

.spinner-border {
    width: 3rem;
    height: 3rem;
    border-width: 0.3rem;
}

/* Alert Styling */
.alert {
    border-radius: 10px;
    border-left: 5px solid;
    animation: slideInRight 0.4s ease-in-out;
}

.alert-danger {
    border-left-color: var(--danger-color);
}

/* Results Section */
#resultsSection {
    animation: fadeInUp 0.6s ease-in-out;
}

#resultsSection h5,
#resultsSection h6 {
    font-weight: 600;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2rem;
    }

    .hero-section p {
        font-size: 1rem;
    }

    .hero-logo {
        height: 90px;
        width: 90px;
    }

    .nav-pills .nav-link {
        padding: 0.75rem 1rem;
        margin: 0.25rem;
        font-size: 0.9rem;
    }

    .input-group .btn {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }

    .card-body {
        padding: 1rem !important;
    }
}

@media (max-width: 576px) {
    .hero-section {
        padding: 2rem 0 1rem;
    }

    .hero-section h1 {
        font-size: 1.75rem;
    }

    .hero-logo {
        height: 80px;
        width: 80px;
    }

    .input-group-lg .form-control {
        font-size: 1rem;
    }
}
</style>

<!-- SuperPincode Content -->
<div class="superpincode-container">
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/superpincode-assets/logo.svg" alt="SuperPincode Logo" class="hero-logo mb-4">
                    <h1 class="display-4 fw-bold mb-3">Pincode & Location Finder</h1>
                    <p class="lead mb-4">Search by pincode or location to get complete address details instantly</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container my-5" id="search">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Search Tabs Card -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-white border-0 pt-4">
                        <ul class="nav nav-pills nav-fill" id="searchTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pincode-tab" data-bs-toggle="pill" data-bs-target="#pincode-search" type="button" role="tab" aria-controls="pincode-search" aria-selected="true">
                                    <i class="bi bi-pin-map-fill"></i> Search by Pincode
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="location-tab" data-bs-toggle="pill" data-bs-target="#location-search" type="button" role="tab" aria-controls="location-search" aria-selected="false">
                                    <i class="bi bi-geo-alt-fill"></i> Search by Location
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="db-tab" data-bs-toggle="pill" data-bs-target="#db-search" type="button" role="tab" aria-controls="db-search" aria-selected="false">
                                    <i class="bi bi-database-fill"></i> Search from DB
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body p-4">
                        <div class="tab-content" id="searchTabContent">
                            <!-- Pincode Search Tab -->
                            <div class="tab-pane fade show active" id="pincode-search" role="tabpanel" aria-labelledby="pincode-tab">
                                <form id="pincodeForm">
                                    <div class="input-group input-group-lg mb-3">
                                        <span class="input-group-text bg-light">
                                            <i class="bi bi-pin-map"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="pincodeInput"
                                            placeholder="Enter 6-digit pincode (e.g., 110001)"
                                            maxlength="6"
                                            pattern="[0-9]{6}"
                                            required
                                        >
                                        <button class="btn btn-primary px-4" type="submit" id="searchBtn">
                                            <i class="bi bi-search"></i> Search
                                        </button>
                                    </div>
                                    <div class="form-text">
                                        <i class="bi bi-info-circle"></i> Enter a valid 6-digit Indian pincode
                                    </div>
                                </form>
                            </div>

                            <!-- Location Search Tab -->
                            <div class="tab-pane fade" id="location-search" role="tabpanel" aria-labelledby="location-tab">
                                <form id="locationForm">
                                    <div class="input-group input-group-lg mb-3">
                                        <span class="input-group-text bg-light">
                                            <i class="bi bi-geo-alt"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="locationInput"
                                            placeholder="Enter post office or location name (e.g., Connaught Place)"
                                            required
                                        >
                                        <button class="btn btn-primary px-4" type="submit" id="locationSearchBtn">
                                            <i class="bi bi-search"></i> Search
                                        </button>
                                    </div>
                                    <div class="form-text">
                                        <i class="bi bi-info-circle"></i> Enter a post office name, city, or location
                                    </div>
                                </form>
                            </div>

                            <!-- DB Search Tab -->
                            <div class="tab-pane fade" id="db-search" role="tabpanel" aria-labelledby="db-tab">
                                <form id="dbForm">
                                    <div class="input-group input-group-lg mb-3">
                                        <span class="input-group-text bg-light">
                                            <i class="bi bi-database"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="dbInput"
                                            placeholder="Enter 6-digit pincode (e.g., 110001)"
                                            maxlength="6"
                                            pattern="[0-9]{6}"
                                            required
                                        >
                                        <button class="btn btn-primary px-4" type="submit" id="dbSearchBtn">
                                            <i class="bi bi-search"></i> Search
                                        </button>
                                    </div>
                                    <div class="form-text">
                                        <i class="bi bi-info-circle"></i> Search pincode from local database (PincodeData.json)
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loading Spinner -->
                <div id="loadingSpinner" class="text-center my-4" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-2 text-white">Fetching pincode details...</p>
                </div>

                <!-- Error Alert -->
                <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <strong>Error!</strong> <span id="errorMessage"></span>
                    <button type="button" class="btn-close" onclick="hideError()"></button>
                </div>

                <!-- Results Section -->
                <div id="resultsSection" style="display: none;">
                    <h5 class="mb-3 text-white">
                        <i class="bi bi-check-circle-fill text-success"></i> Pincode Details
                    </h5>

                    <!-- Summary Card -->
                    <div class="card border-success mb-3 shadow">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">
                                <i class="bi bi-pin-angle-fill"></i> Pincode: <span id="resultPincode"></span>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="detail-item">
                                        <small class="text-muted d-block">Post Office</small>
                                        <strong id="postOffice">-</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="detail-item">
                                        <small class="text-muted d-block">District</small>
                                        <strong id="district">-</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="detail-item">
                                        <small class="text-muted d-block">State</small>
                                        <strong id="state">-</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="detail-item">
                                        <small class="text-muted d-block">Region</small>
                                        <strong id="region">-</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="detail-item">
                                        <small class="text-muted d-block">Division</small>
                                        <strong id="division">-</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="detail-item">
                                        <small class="text-muted d-block">Country</small>
                                        <strong id="country">India</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- All Post Offices -->
                    <div id="allPostOffices" class="mt-4">
                        <h6 class="mb-3 text-white">
                            <i class="bi bi-mailbox"></i> All Post Offices in this Area
                        </h6>
                        <div id="postOfficesList" class="row">
                            <!-- Will be populated dynamically -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SuperPincode JavaScript -->
<script>
// SuperPincode - JavaScript for API Integration

// API Configuration
const API_URL = 'https://api.postalpincode.in/pincode/';
const LOCATION_API_URL = 'https://api.postalpincode.in/postoffice/';

// Get form and elements
const pincodeForm = document.getElementById('pincodeForm');
const pincodeInput = document.getElementById('pincodeInput');
const searchBtn = document.getElementById('searchBtn');

const locationForm = document.getElementById('locationForm');
const locationInput = document.getElementById('locationInput');
const locationSearchBtn = document.getElementById('locationSearchBtn');

const dbForm = document.getElementById('dbForm');
const dbInput = document.getElementById('dbInput');
const dbSearchBtn = document.getElementById('dbSearchBtn');

const loadingSpinner = document.getElementById('loadingSpinner');
const errorAlert = document.getElementById('errorAlert');
const errorMessage = document.getElementById('errorMessage');
const resultsSection = document.getElementById('resultsSection');

// Store loaded DB data
let pincodeDatabase = null;

// Add event listener for form submission
pincodeForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const pincode = pincodeInput.value.trim();

    // Validate pincode
    if (pincode.length !== 6 || !/^\d{6}$/.test(pincode)) {
        showError('Please enter a valid 6-digit pincode');
        return;
    }

    searchPincode(pincode);
});

// Only allow numbers in input
pincodeInput.addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9]/g, '');
});

// Add event listener for location form submission
locationForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const location = locationInput.value.trim();

    // Validate location
    if (location.length < 3) {
        showError('Please enter at least 3 characters for location search');
        return;
    }

    searchLocation(location);
});

// Only allow numbers in DB input
dbInput.addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9]/g, '');
});

// Add event listener for DB form submission
dbForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const pincode = dbInput.value.trim();

    // Validate pincode
    if (pincode.length !== 6 || !/^\d{6}$/.test(pincode)) {
        showError('Please enter a valid 6-digit pincode');
        return;
    }

    searchFromDB(pincode);
});

// Search pincode function
async function searchPincode(pincode) {
    // Hide previous results and errors
    hideError();
    resultsSection.style.display = 'none';
    loadingSpinner.style.display = 'block';
    searchBtn.disabled = true;

    try {
        const response = await fetch(API_URL + pincode);
        const data = await response.json();

        loadingSpinner.style.display = 'none';
        searchBtn.disabled = false;

        if (data[0].Status === 'Success' && data[0].PostOffice) {
            displayResults(pincode, data[0].PostOffice);
        } else {
            showError('No data found for pincode: ' + pincode + '. Please check and try again.');
        }
    } catch (error) {
        loadingSpinner.style.display = 'none';
        searchBtn.disabled = false;
        showError('Failed to fetch data. Please check your internet connection and try again.');
        console.error('Error:', error);
    }
}

// Search location function
async function searchLocation(location) {
    // Hide previous results and errors
    hideError();
    resultsSection.style.display = 'none';
    loadingSpinner.style.display = 'block';
    locationSearchBtn.disabled = true;

    try {
        const response = await fetch(LOCATION_API_URL + encodeURIComponent(location));
        const data = await response.json();

        loadingSpinner.style.display = 'none';
        locationSearchBtn.disabled = false;

        if (data[0].Status === 'Success' && data[0].PostOffice && data[0].PostOffice.length > 0) {
            displayLocationResults(location, data[0].PostOffice);
        } else {
            showError('No data found for location: "' + location + '". Please try a different location name.');
        }
    } catch (error) {
        loadingSpinner.style.display = 'none';
        locationSearchBtn.disabled = false;
        showError('Failed to fetch data. Please check your internet connection and try again.');
        console.error('Error:', error);
    }
}

// Load database from JSON file
async function loadDatabase() {
    if (pincodeDatabase) {
        return pincodeDatabase; // Return cached data if already loaded
    }

    try {
        const response = await fetch('<?php echo get_stylesheet_directory_uri(); ?>/superpincode-assets/PincodeData.json');
        const data = await response.json();
        pincodeDatabase = data;
        return pincodeDatabase;
    } catch (error) {
        console.error('Error loading database:', error);
        throw new Error('Failed to load database file');
    }
}

// Search from DB function
async function searchFromDB(pincode) {
    // Hide previous results and errors
    hideError();
    resultsSection.style.display = 'none';
    loadingSpinner.style.display = 'block';
    dbSearchBtn.disabled = true;

    try {
        // Load database if not already loaded
        const db = await loadDatabase();

        loadingSpinner.style.display = 'none';
        dbSearchBtn.disabled = false;

        // Search for matching records
        const matchingRecords = db.records.filter(record => record.pincode === pincode);

        if (matchingRecords.length > 0) {
            displayDBResults(pincode, matchingRecords);
        } else {
            showError('No data found for pincode: ' + pincode + ' in local database.');
        }
    } catch (error) {
        loadingSpinner.style.display = 'none';
        dbSearchBtn.disabled = false;
        showError('Failed to search database. Please ensure PincodeData.json exists.');
        console.error('Error:', error);
    }
}

// Display DB results function
function displayDBResults(pincode, records) {
    // Update pincode
    document.getElementById('resultPincode').textContent = pincode;

    // Change header text
    const resultHeader = document.querySelector('#resultsSection h5');
    resultHeader.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i> Database Results';

    // Display first record details
    const firstRecord = records[0];
    document.getElementById('postOffice').textContent = firstRecord.officename || '-';
    document.getElementById('district').textContent = firstRecord.district || '-';
    document.getElementById('state').textContent = firstRecord.statename || '-';
    document.getElementById('region').textContent = firstRecord.regionname || '-';
    document.getElementById('division').textContent = firstRecord.divisionname || '-';

    // Display all matching records
    const postOfficesList = document.getElementById('postOfficesList');
    postOfficesList.innerHTML = '';

    // Show count of results
    const allPostOfficesHeader = document.querySelector('#allPostOffices h6');
    allPostOfficesHeader.innerHTML = `<i class="bi bi-mailbox"></i> All Post Offices (${records.length} results found)`;

    records.forEach((record, index) => {
        const officeCard = `
            <div class="col-md-6 mb-3">
                <div class="card h-100 border-primary">
                    <div class="card-body">
                        <h6 class="card-title text-primary">
                            <i class="bi bi-building"></i> ${record.officename}
                        </h6>
                        <p class="card-text small mb-1">
                            <i class="bi bi-pin-map text-muted"></i>
                            <strong>Pincode:</strong> ${record.pincode || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-geo-alt text-muted"></i>
                            <strong>District:</strong> ${record.district || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-map text-muted"></i>
                            <strong>State:</strong> ${record.statename || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-tags text-muted"></i>
                            <strong>Circle:</strong> ${record.circlename || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-building-fill text-muted"></i>
                            <strong>Office Type:</strong> ${record.officetype || '-'}
                        </p>
                        <p class="card-text small mb-0">
                            <i class="bi bi-mailbox text-muted"></i>
                            <strong>Delivery:</strong> ${record.delivery || '-'}
                        </p>
                    </div>
                </div>
            </div>
        `;
        postOfficesList.innerHTML += officeCard;
    });

    // Show results section with animation
    resultsSection.style.display = 'block';
    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Display location results function
function displayLocationResults(location, postOffices) {
    // Update header to show search query
    document.getElementById('resultPincode').textContent = location.toUpperCase();

    // Change header text and color
    const resultHeader = document.querySelector('#resultsSection h5');
    resultHeader.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i> Location Results';

    // Display first post office details
    const firstOffice = postOffices[0];
    document.getElementById('postOffice').textContent = firstOffice.Name || '-';
    document.getElementById('district').textContent = firstOffice.District || '-';
    document.getElementById('state').textContent = firstOffice.State || '-';
    document.getElementById('region').textContent = firstOffice.Region || '-';
    document.getElementById('division').textContent = firstOffice.Division || '-';

    // Display all post offices
    const postOfficesList = document.getElementById('postOfficesList');
    postOfficesList.innerHTML = '';

    // Show count of results
    const allPostOfficesHeader = document.querySelector('#allPostOffices h6');
    allPostOfficesHeader.innerHTML = `<i class="bi bi-mailbox"></i> All Post Offices (${postOffices.length} results found)`;

    postOffices.forEach((office, index) => {
        const officeCard = `
            <div class="col-md-6 mb-3">
                <div class="card h-100 border-primary">
                    <div class="card-body">
                        <h6 class="card-title text-primary">
                            <i class="bi bi-building"></i> ${office.Name}
                        </h6>
                        <p class="card-text small mb-1">
                            <i class="bi bi-pin-map text-muted"></i>
                            <strong>Pincode:</strong> ${office.Pincode || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-geo-alt text-muted"></i>
                            <strong>District:</strong> ${office.District || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-map text-muted"></i>
                            <strong>State:</strong> ${office.State || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-building-fill text-muted"></i>
                            <strong>Branch Type:</strong> ${office.BranchType || '-'}
                        </p>
                        <p class="card-text small mb-0">
                            <i class="bi bi-mailbox text-muted"></i>
                            <strong>Delivery Status:</strong> ${office.DeliveryStatus || '-'}
                        </p>
                    </div>
                </div>
            </div>
        `;
        postOfficesList.innerHTML += officeCard;
    });

    // Show results section with animation
    resultsSection.style.display = 'block';
    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Display results function
function displayResults(pincode, postOffices) {
    // Update pincode
    document.getElementById('resultPincode').textContent = pincode;

    // Change header text back to Pincode Details
    const resultHeader = document.querySelector('#resultsSection h5');
    resultHeader.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i> Pincode Details';

    // Display first post office details
    const firstOffice = postOffices[0];
    document.getElementById('postOffice').textContent = firstOffice.Name || '-';
    document.getElementById('district').textContent = firstOffice.District || '-';
    document.getElementById('state').textContent = firstOffice.State || '-';
    document.getElementById('region').textContent = firstOffice.Region || '-';
    document.getElementById('division').textContent = firstOffice.Division || '-';

    // Display all post offices
    const postOfficesList = document.getElementById('postOfficesList');
    postOfficesList.innerHTML = '';

    // Reset header for post offices list
    const allPostOfficesHeader = document.querySelector('#allPostOffices h6');
    allPostOfficesHeader.innerHTML = '<i class="bi bi-mailbox"></i> All Post Offices in this Area';

    postOffices.forEach((office, index) => {
        const officeCard = `
            <div class="col-md-6 mb-3">
                <div class="card h-100 border-primary">
                    <div class="card-body">
                        <h6 class="card-title text-primary">
                            <i class="bi bi-building"></i> ${office.Name}
                        </h6>
                        <p class="card-text small mb-1">
                            <i class="bi bi-geo-alt text-muted"></i>
                            <strong>Branch Type:</strong> ${office.BranchType || '-'}
                        </p>
                        <p class="card-text small mb-1">
                            <i class="bi bi-mailbox text-muted"></i>
                            <strong>Delivery Status:</strong> ${office.DeliveryStatus || '-'}
                        </p>
                        <p class="card-text small mb-0">
                            <i class="bi bi-pin-map text-muted"></i>
                            <strong>Pincode:</strong> ${office.Pincode || '-'}
                        </p>
                    </div>
                </div>
            </div>
        `;
        postOfficesList.innerHTML += officeCard;
    });

    // Show results section with animation
    resultsSection.style.display = 'block';
    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Show error function
function showError(message) {
    errorMessage.textContent = message;
    errorAlert.style.display = 'block';
    errorAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Hide error function
function hideError() {
    errorAlert.style.display = 'none';
}

console.log('SuperPincode loaded successfully!');
</script>

<?php
get_footer();
?>
