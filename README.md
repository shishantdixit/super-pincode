# SuperPincode - How to Run

## The Problem
Browsers block loading local JSON files when you open HTML files directly (file:// protocol) due to CORS security policy.

## Solution: Run a Local Web Server

### Method 1: Using the Batch File (Easiest)
1. Double-click `start-server.bat`
2. Open your browser and go to: `http://localhost:8000`
3. The website will now work with all features including "Search from DB"
4. Press `Ctrl+C` in the command window to stop the server

### Method 2: Manual Python Command
1. Open Command Prompt / Terminal
2. Navigate to the SuperPincode folder:
   ```
   cd "C:\Users\shish\OneDrive\Documents\Claude DAta\Projects\SuperPincode"
   ```
3. Run the command:
   ```
   python -m http.server 8000
   ```
4. Open browser: `http://localhost:8000`

### Method 3: Using Node.js (if you have it installed)
1. Install http-server globally:
   ```
   npm install -g http-server
   ```
2. Navigate to the SuperPincode folder
3. Run:
   ```
   http-server -p 8000
   ```
4. Open browser: `http://localhost:8000`

### Method 4: Using PHP (if you have it installed)
1. Navigate to the SuperPincode folder
2. Run:
   ```
   php -S localhost:8000
   ```
3. Open browser: `http://localhost:8000`

## Features
- **Search by Pincode** - Uses India Post Office API
- **Search by Location** - Search post offices by name
- **Search from DB** - Search from local database (165K+ records)

## Notes
- The database file (PincodeData.json) is 76 MB, so the first load may take a few seconds
- After the first search, data is cached for faster subsequent searches
- All three search methods work independently

Enjoy using SuperPincode!
