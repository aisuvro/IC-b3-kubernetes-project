# IC-b3-CI-Assignment-1

**Author**: Md. Al Imran Suvro

This project is a Laravel-based web application designed to demonstrate continuous integration (CI) practices. It includes a variety of features and configurations to support modern web development workflows, including Docker for containerized deployment.

## Features

- **Laravel Framework**: Built on the powerful Laravel PHP framework.
- **Vite Integration**: Modern frontend tooling with Vite for asset bundling.
- **Environment Configuration**: `.env` files for managing environment-specific settings.
- **Unit Testing**: PHPUnit for robust testing of application logic.
- **Database Support**: Configurable database connections for development and production environments.
- **Docker Support**: Pre-configured `docker-compose` setup for containerized development.

## Project Structure

- `app/`: Contains the core application logic, including controllers, models, and middleware.
- `bootstrap/`: Handles application bootstrapping.
- `config/`: Configuration files for the application.
- `database/`: Database migrations and seeders.
- `public/`: Publicly accessible files, including the entry point (`index.php`).
- `resources/`: Views, assets, and localization files.
- `routes/`: Application route definitions.
- `storage/`: Logs, cached files, and other generated content.
- `tests/`: Unit and feature tests.
- `vendor/`: Composer dependencies.
- `docker-compose.yaml`: Docker Compose configuration for containerized development.
- `Dockerfile`: Dockerfile for building the application container.

## Prerequisites

- PHP >= 8.0
- Composer
- Node.js and npm
- Docker and Docker Compose

## Installation

### Local Development (Without Docker)

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd IC-b3-CI-Assignment-1