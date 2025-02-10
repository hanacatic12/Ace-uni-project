# ACE - Online Marketplace Platform

ACE is a modern web-based marketplace platform that allows users to discover and list various items for sale across multiple categories including cars, houses, phones, shoes, and laptops.

## Features

- **Multi-category Support**: Browse and list items in various categories:
  - Cars
  - Houses
  - Phones
  - Shoes
  - Laptops

- **Advanced Filtering**: Each category comes with specific filters to help users find exactly what they're looking for
- **Responsive Design**: Fully responsive interface that works on desktop and mobile devices
- **Search Functionality**: Powerful search feature to find listings quickly
- **User Authentication**: Secure user registration and login system

## Technology Stack

- **Frontend**:
  - HTML
  - CSS
  - JavaScript

- **Backend**:
  - PHP
  - MySQL Database


## Setup Requirements

1. PHP 7.0 or higher
2. MySQL Server
3. Web server (Apache/Nginx)

## Installation

1. Clone the repository to your web server directory
2. Create a MySQL database named 'ace'
3. Import the database schema (contact administrator for the schema file)
4. Configure the database connection in `includes/db_connection.php`:
   ```php
   $db_host = 'localhost';
   $db_user = 'your_username';
   $db_pass = 'your_password';
   $db_name = 'ace';
   ```
5. Ensure your web server has proper permissions to read/write to the project directory


## File Structure Overview

- `public/index.php`: Main entry point and homepage
- `includes/db_connection.php`: Database configuration and connection
- `css/general.css`: Base styles and utilities
- `css/style.css`: Main stylesheet
- `css/media.css`: Responsive design rules
- `js` folder: JavaScript scripts
- `includes` folder: Helper functions and configuration
- `public` folder: All publicly available pages
- `filters` folder: Search filters implementation

## Security

- User passwords are securely hashed
- SQL injection protection through prepared statements
- Session-based authentication
- Input validation and sanitization
