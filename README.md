# Pixel Positions

A job board application built with Laravel that helps users find their next career opportunity.

## About

Pixel Positions is a modern job board platform where employers can post job openings and job seekers can browse and search for positions. The application features:

- Job listings with featured positions
- Tag-based categorization system
- Responsive design with Tailwind CSS
- Employer profiles and job management

## Tech Stack

- **Backend**: Laravel 11, PHP 8.2+
- **Frontend**: Vite, Tailwind CSS, Blade Templates
- **Database**: SQLite (default)
- **Testing**: Pest, PHPUnit

## Getting Started

### Prerequisites

- PHP ^8.2
- Composer
- Node.js and npm
- SQLite (or another database system)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/pixel-positions.git
   cd pixel-positions
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install Node dependencies:

   ```bash
   npm install
   ```

4. Set up the environment file:

   ```bash
   cp .env.example .env
   ```

5. Generate application key:

   ```bash
   php artisan key:generate
   ```

6. Create and set up the database:

   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

7. (Optional) Seed the database with sample data:

   ```bash
   php artisan db:seed
   ```

### Running the Application

To start the development server, run:

```bash
composer run dev
```

This command will start:

- Laravel development server
- Queue worker
- Log listener
- Vite frontend development server

The application will be available at `http://localhost:8000`.

### Building for Production

To build the frontend assets for production:

```bash
npm run build
```

## Project Structure

- `app/` - Laravel application code (Models, Controllers, Policies)
- `database/` - Migrations, seeders, and factories
- `resources/` - Views, CSS, and JavaScript
- `routes/` - Web routes
- `tests/` - Unit and feature tests

## Key Components

- **Job Listings**: Browse featured and recent job postings
- **Tag System**: Filter jobs by skill tags
- **Employer Profiles**: Companies can manage their job postings
- **Responsive UI**: Works on desktop and mobile devices

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
