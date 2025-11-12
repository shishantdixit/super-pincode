<?php
/**
 * Template Name: SuperPincode Full Width
 * Description: Full-width custom page template for SuperPincode (No Header/Footer)
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <?php wp_head(); ?>

<style>
/* Reset WordPress/Theme Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    margin: 0 !important;
    padding: 0 !important;
    overflow-x: hidden;
}

/* Hide theme elements */
.ast-container,
.site-header,
.site-footer,
#masthead,
#colophon,
.entry-header,
.entry-content > .alignwide,
.entry-content > .alignfull {
    display: none !important;
}

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

/* Global Styles for SuperPincode */
.superpincode-wrapper {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    background-attachment: fixed;
    min-height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
}

/* Navigation Bar */
.superpincode-nav {
    background: rgba(102, 126, 234, 0.95);
    padding: 1rem 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.superpincode-nav .navbar-brand {
    color: white !important;
    font-weight: 700;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
}

.superpincode-nav .logo-img {
    height: 40px;
    width: 40px;
    margin-right: 0.5rem;
    transition: transform 0.3s ease;
}

.superpincode-nav .logo-img:hover {
    transform: rotate(10deg) scale(1.1);
}

/* Hero Section */
.hero-section {
    background: transparent;
    padding: 4rem 0 3rem;
    color: white;
    text-align: center;
}

.hero-section h1 {
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    animation: fadeInDown 0.8s ease-in-out;
    margin-bottom: 1rem;
}

.hero-section p {
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    animation: fadeInUp 0.8s ease-in-out;
}

.hero-logo {
    height: 100px;
    width: 100px;
    animation: logoFloat 3s ease-in-out infinite;
    filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
    margin-bottom: 1.5rem;
}

@keyframes logoFloat {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

/* Main Container */
.superpincode-content {
    padding: 2rem 1rem 4rem;
    max-width: 100%;
}

/* Card Styling */
.superpincode-wrapper .card {
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: fadeIn 0.6s ease-in-out;
    border: none;
}

.superpincode-wrapper .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.superpincode-wrapper .card-header {
    border-radius: 15px 15px 0 0 !important;
    padding: 1.5rem;
    background: white;
    border-bottom: none;
}

/* Tab Pills */
.nav-pills .nav-link {
    padding: 0.75rem 1.25rem;
    border-radius: 10px;
    font-weight: 600;
    color: #6c757d;
    background: #f8f9fa;
    margin: 0.25rem;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.nav-pills .nav-link:hover {
    background: #e9ecef;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.nav-pills .nav-link.active {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(102, 126, 234, 0.4);
}

.nav-pills .nav-link i {
    margin-right: 0.5rem;
    font-size: 1rem;
}

/* Input Styling */
.input-group-lg .form-control {
    border: 2px solid #e0e0e0;
    transition: all 0.3s ease;
    font-size: 1rem;
}

.input-group-lg .form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.input-group-text {
    border: 2px solid #e0e0e0;
    border-right: none;
    background: #f8f9fa;
}

.input-group .btn {
    padding: 0.5rem 1.5rem;
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
}

.detail-item strong {
    font-size: 1.1rem;
    color: #333;
}

/* Post Office Cards */
#postOfficesList .card {
    border-left: 4px solid var(--primary-color);
}

#postOfficesList .card:hover {
    border-left-width: 8px;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section {
        padding: 2rem 0 1.5rem;
    }

    .hero-section h1 {
        font-size: 1.75rem;
    }

    .hero-logo {
        height: 80px;
        width: 80px;
    }

    .nav-pills .nav-link {
        padding: 0.6rem 0.8rem;
        font-size: 0.875rem;
        margin: 0.2rem;
    }

    .superpincode-content {
        padding: 1rem 0.5rem 2rem;
    }
}

@media (max-width: 576px) {
    .hero-section h1 {
        font-size: 1.5rem;
    }

    .hero-logo {
        height: 70px;
        width: 70px;
    }

    .input-group-lg .form-control {
        font-size: 0.95rem;
    }

    .nav-pills {
        flex-direction: column;
    }

    .nav-pills .nav-link {
        margin: 0.25rem 0;
    }
}

/* Footer */
.superpincode-footer {
    background: rgba(0, 0, 0, 0.2);
    color: white;
    text-align: center;
    padding: 2rem 0;
    margin-top: 3rem;
}

.superpincode-footer p {
    margin: 0;
}
</style>
</head>

<body <?php body_class('superpincode-page'); ?>>

<div class="superpincode-wrapper">
    <!-- Navigation -->
    <nav class="superpincode-nav">
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="navbar-brand">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/superpincode-assets/logo.svg" alt="SuperPincode Logo" class="logo-img">
                <span>SuperPincode</span>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/superpincode-assets/logo.svg" alt="SuperPincode Logo" class="hero-logo">
            <h1 class="display-5 fw-bold">Pincode & Location Finder</h1>
            <p class="lead">Search by pincode or location to get complete address details instantly</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="superpincode-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Search Tabs Card -->
                    <div class="card shadow-lg mb-4">
                        <div class="card-header">
                            <ul class="nav nav-pills nav-fill justify-content-center" id="searchTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pincode-tab" data-bs-toggle="pill" data-bs-target="#pincode-search" type="button" role="tab">
                                        <i class="bi bi-pin-map-fill"></i> <span class="d-none d-sm-inline">Search by </span>Pincode
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="location-tab" data-bs-toggle="pill" data-bs-target="#location-search" type="button" role="tab">
                                        <i class="bi bi-geo-alt-fill"></i> <span class="d-none d-sm-inline">Search by </span>Location
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="db-tab" data-bs-toggle="pill" data-bs-target="#db-search" type="button" role="tab">
                                        <i class="bi bi-database-fill"></i> <span class="d-none d-sm-inline">Search from </span>DB
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body p-3 p-md-4">
                            <div class="tab-content">
                                <!-- Pincode Search Tab -->
                                <div class="tab-pane fade show active" id="pincode-search" role="tabpanel">
                                    <form id="pincodeForm">
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">
                                                <i class="bi bi-pin-map"></i>
                                            </span>
                                            <input type="text" class="form-control" id="pincodeInput" placeholder="Enter 6-digit pincode (e.g., 110001)" maxlength="6" pattern="[0-9]{6}" required>
                                            <button class="btn btn-primary px-3 px-md-4" type="submit" id="searchBtn">
                                                <i class="bi bi-search"></i> <span class="d-none d-sm-inline">Search</span>
                                            </button>
                                        </div>
                                        <div class="form-text">
                                            <i class="bi bi-info-circle"></i> Enter a valid 6-digit Indian pincode
                                        </div>
                                    </form>
                                </div>

                                <!-- Location Search Tab -->
                                <div class="tab-pane fade" id="location-search" role="tabpanel">
                                    <form id="locationForm">
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">
                                                <i class="bi bi-geo-alt"></i>
                                            </span>
                                            <input type="text" class="form-control" id="locationInput" placeholder="Enter post office or location name" required>
                                            <button class="btn btn-primary px-3 px-md-4" type="submit" id="locationSearchBtn">
                                                <i class="bi bi-search"></i> <span class="d-none d-sm-inline">Search</span>
                                            </button>
                                        </div>
                                        <div class="form-text">
                                            <i class="bi bi-info-circle"></i> Enter a post office name, city, or location
                                        </div>
                                    </form>
                                </div>

                                <!-- DB Search Tab -->
                                <div class="tab-pane fade" id="db-search" role="tabpanel">
                                    <form id="dbForm">
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">
                                                <i class="bi bi-database"></i>
                                            </span>
                                            <input type="text" class="form-control" id="dbInput" placeholder="Enter 6-digit pincode (e.g., 110001)" maxlength="6" pattern="[0-9]{6}" required>
                                            <button class="btn btn-primary px-3 px-md-4" type="submit" id="dbSearchBtn">
                                                <i class="bi bi-search"></i> <span class="d-none d-sm-inline">Search</span>
                                            </button>
                                        </div>
                                        <div class="form-text">
                                            <i class="bi bi-info-circle"></i> Search pincode from local database
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Loading Spinner -->
                    <div id="loadingSpinner" class="text-center my-4" style="display: none;">
                        <div class="spinner-border text-light" role="status" style="width: 3rem; height: 3rem;">
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
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <small class="text-muted d-block">Post Office</small>
                                            <strong id="postOffice">-</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <small class="text-muted d-block">District</small>
                                            <strong id="district">-</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <small class="text-muted d-block">State</small>
                                            <strong id="state">-</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <small class="text-muted d-block">Region</small>
                                            <strong id="region">-</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <small class="text-muted d-block">Division</small>
                                            <strong id="division">-</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                            <div id="postOfficesList" class="row g-3">
                                <!-- Will be populated dynamically -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="superpincode-footer">
        <div class="container">
            <p><i class="bi bi-geo-alt"></i> SuperPincode - Pincode Verification System</p>
            <small>Made with <i class="bi bi-heart-fill text-danger"></i></small>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
    if (pincode.length !== 6 || !/^\d{6}$/.test(pincode)) {
        showError('Please enter a valid 6-digit pincode');
        return;
    }
    searchFromDB(pincode);
});

// Search pincode function
async function searchPincode(pincode) {
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
            showError('No data found for pincode: ' + pincode);
        }
    } catch (error) {
        loadingSpinner.style.display = 'none';
        searchBtn.disabled = false;
        showError('Failed to fetch data. Please check your internet connection.');
        console.error('Error:', error);
    }
}

// Search location function
async function searchLocation(location) {
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
            showError('No data found for location: "' + location + '"');
        }
    } catch (error) {
        loadingSpinner.style.display = 'none';
        locationSearchBtn.disabled = false;
        showError('Failed to fetch data. Please check your internet connection.');
        console.error('Error:', error);
    }
}

// Load database from JSON file
async function loadDatabase() {
    if (pincodeDatabase) return pincodeDatabase;

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
    hideError();
    resultsSection.style.display = 'none';
    loadingSpinner.style.display = 'block';
    dbSearchBtn.disabled = true;

    try {
        const db = await loadDatabase();
        loadingSpinner.style.display = 'none';
        dbSearchBtn.disabled = false;

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
    document.getElementById('resultPincode').textContent = pincode;
    const resultHeader = document.querySelector('#resultsSection h5');
    resultHeader.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i> Database Results';

    const firstRecord = records[0];
    document.getElementById('postOffice').textContent = firstRecord.officename || '-';
    document.getElementById('district').textContent = firstRecord.district || '-';
    document.getElementById('state').textContent = firstRecord.statename || '-';
    document.getElementById('region').textContent = firstRecord.regionname || '-';
    document.getElementById('division').textContent = firstRecord.divisionname || '-';

    const postOfficesList = document.getElementById('postOfficesList');
    postOfficesList.innerHTML = '';

    const allPostOfficesHeader = document.querySelector('#allPostOffices h6');
    allPostOfficesHeader.innerHTML = `<i class="bi bi-mailbox"></i> All Post Offices (${records.length} results found)`;

    records.forEach((record) => {
        const officeCard = `
            <div class="col-md-6">
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

    resultsSection.style.display = 'block';
    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Display location results function
function displayLocationResults(location, postOffices) {
    document.getElementById('resultPincode').textContent = location.toUpperCase();
    const resultHeader = document.querySelector('#resultsSection h5');
    resultHeader.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i> Location Results';

    const firstOffice = postOffices[0];
    document.getElementById('postOffice').textContent = firstOffice.Name || '-';
    document.getElementById('district').textContent = firstOffice.District || '-';
    document.getElementById('state').textContent = firstOffice.State || '-';
    document.getElementById('region').textContent = firstOffice.Region || '-';
    document.getElementById('division').textContent = firstOffice.Division || '-';

    const postOfficesList = document.getElementById('postOfficesList');
    postOfficesList.innerHTML = '';

    const allPostOfficesHeader = document.querySelector('#allPostOffices h6');
    allPostOfficesHeader.innerHTML = `<i class="bi bi-mailbox"></i> All Post Offices (${postOffices.length} results found)`;

    postOffices.forEach((office) => {
        const officeCard = `
            <div class="col-md-6">
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

    resultsSection.style.display = 'block';
    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Display results function
function displayResults(pincode, postOffices) {
    document.getElementById('resultPincode').textContent = pincode;
    const resultHeader = document.querySelector('#resultsSection h5');
    resultHeader.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i> Pincode Details';

    const firstOffice = postOffices[0];
    document.getElementById('postOffice').textContent = firstOffice.Name || '-';
    document.getElementById('district').textContent = firstOffice.District || '-';
    document.getElementById('state').textContent = firstOffice.State || '-';
    document.getElementById('region').textContent = firstOffice.Region || '-';
    document.getElementById('division').textContent = firstOffice.Division || '-';

    const postOfficesList = document.getElementById('postOfficesList');
    postOfficesList.innerHTML = '';

    const allPostOfficesHeader = document.querySelector('#allPostOffices h6');
    allPostOfficesHeader.innerHTML = '<i class="bi bi-mailbox"></i> All Post Offices in this Area';

    postOffices.forEach((office) => {
        const officeCard = `
            <div class="col-md-6">
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

<?php wp_footer(); ?>
</body>
</html>
