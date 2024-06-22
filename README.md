# WebBuilder

Welcome to the WebBuilder repository. This document provides a comprehensive guide to setting up and running the project locally.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Running the Project](#running-the-project)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Ensure you have the following software installed on your machine:

- [PHP 8.2+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/)

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/YuketsuSh/web-builder.git
   cd web-builder
   ```

2. **Install PHP dependencies:**

   ```bash
   composer install
   ```

3. **Install Node.js dependencies:**

   ```bash
   npm install
   ```

## Configuration

1. **Environment Variables:**

   Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

2. **Generate Application Key:**

   ```bash
   php artisan key:generate
   ```

3. **Set up your `.env` file:**

   Configure your database and other environment settings in the `.env` file.

   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

   # Other configurations...
   ```

## Database Setup

1. **Run Migrations:**

   Make sure your database is created, then run the migrations:

   ```bash
   php artisan migrate
   ```

2. **Seed the Database (Optional):**

   If you have seeders, run them to populate your database with initial data:

   ```bash
   php artisan db:seed
   ```

## Running the Project

1. **Compile Assets:**

   Compile your assets (CSS, JavaScript):

   ```bash
   npm run build
   ```

2. **Start the Development Server:**

   Start the Laravel development server:

   ```bash
   php artisan serve
   ```

   The application will be accessible at `http://localhost:8000`.

## Testing

Run the test suite to ensure everything is working correctly:

```bash
php artisan test
```

## Contributing

Thank you for considering contributing to Project Name! Please read the [contribution guidelines](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## Additional Notes

### Breeze Installation

This project uses Laravel Breeze for authentication scaffolding. Ensure you install and configure it as follows:

1. **Install Laravel Breeze:**

   ```bash
   composer require laravel/breeze --dev
   ```

2. **Install Breeze's backend and frontend scaffolding:**

   ```bash
   php artisan breeze:install
   npm install && npm run dev
   ```

3. **Run Migrations for Breeze:**

   ```bash
   php artisan migrate
   ```

### Spatie Roles and Permissions

This project uses Spatie's Laravel Permission package for role and permission management.

1. **Publish the configuration file:**

   ```bash
   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
   ```

2. **Run the Migrations:**

   ```bash
   php artisan migrate
   ```

3. **Clear Cache:**

   After setting up roles and permissions, clear the cache to reflect changes:

   ```bash
   php artisan cache:clear
   ```
---

Thank you for using my project ! If you have any questions or need further assistance, feel free to open an issue or contact me on [discord](https://discord.gg/w0nderland) or discord username (yuketsu).

