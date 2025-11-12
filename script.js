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

// Load database from JSON file
async function loadDatabase() {
    if (pincodeDatabase) {
        return pincodeDatabase; // Return cached data if already loaded
    }

    try {
        const response = await fetch('PincodeData.json');
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

// Add Enter key support
pincodeInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        pincodeForm.dispatchEvent(new Event('submit'));
    }
});

// Example usage on page load (optional)
console.log('SuperPincode loaded successfully!');
console.log('Enter a pincode to verify address details');

// Auto-focus on input field
window.addEventListener('load', function() {
    pincodeInput.focus();
});
