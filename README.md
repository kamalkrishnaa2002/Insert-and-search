# Insert-and-Search Application (PHP and JavaScript)

## Overview

This application allows for the insertion of test user data and facilitates the search for test users through a PHP and JavaScript-based system.

## Setup

### Database Configuration:

1. **Create Database:**
   - Create a MySQL database.

2. **Restore Database:**
   - Restore the provided database located in the `database` folder using the SQL file.

3. **Update Credentials:**
   - Modify the database credentials in the `connection.php` file to match your MySQL database settings.

### Access the Application:

- Launch the application by opening the `index.html` file in your preferred web browser.

## Usage Instructions

### Generate Test:

1. Click on the "Generate Test" button in the "ELTS Status" section.
2. In the popup, input the Name, Email, or Phone of the user.
3. Click the "Add" button to insert the data. An alert will confirm the successful insertion.

### Search Test:

1. Use the search bar labeled "Search" to find a specific test by typing the Name, Email, or Phone.
2. Real-time suggestions matching the input will be displayed below the search bar.
3. Click on a suggestion from the results to view the test details.

### Test Details:

- Details, including ID, Name/Email/Phone, and the date and time of addition, will be displayed.

**Note:** The ELTS elements are placeholders and do not affect the core functionality. Ensure JavaScript is enabled for interactive features. This application is designed for local development using WampServer. For deployment on a live server, adjust file paths and configurations accordingly.

