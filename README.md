# IC-b3-CI-Kubernetes Project

**Author:** Md. Al Imran Suvro

This Laravel-based web application demonstrates modern continuous integration (CI) practices. It features Docker-based containerization and is configured for efficient web development workflows.

## Features

- **Laravel Framework**: Robust PHP backend.
- **Vite**: Fast frontend asset bundling.
- **Environment Management**: `.env` files for configuration.
- **Unit Testing**: PHPUnit integration.
- **Database Support**: Configurable for multiple environments.
- **Dockerized**: Pre-configured `docker-compose` for local development.

## Project Structure

- `app/`: Application logic (controllers, models, middleware)
- `bootstrap/`: Application bootstrapping
- `config/`: Configuration files
- `database/`: Migrations and seeders
- `public/`: Public assets and entry point (`index.php`)
- `resources/`: Views, assets, localization
- `routes/`: Route definitions
- `storage/`: Logs, cache, generated files
- `tests/`: Unit and feature tests
- `vendor/`: Composer dependencies
- `docker-compose.yaml`: Docker Compose configuration
- `Dockerfile`: Container build instructions

## Prerequisites

- PHP >= 8.0
- Composer
- Node.js & npm
- Docker & Docker Compose

## Deployment Steps

1. **Install NGINX Ingress Controller:**
   ```sh
   kubectl apply -f https://raw.githubusercontent.com/kubernetes/ingress-nginx/controller-v1.8.0/deploy/static/provider/cloud/deploy.yaml
   kubectl get pods -n ingress-nginx -l app.kubernetes.io/name=ingress-nginx --watch
   ```

2. **Build and Load Docker Image (if not using a registry):**
   ```sh
   docker build -t k8s-ramadan:v1 .
   ```

3. **Deploy Application:**
   ```sh
   kubectl apply -f k8s/deploy.yaml
   ```

4. **Verify Deployment:**
   ```sh
   kubectl get all -n ns
   kubectl get ingress -n ns
   ```

5. **Update `/etc/hosts`:**
   ```
   127.0.0.1 my-app.local
   ```

6. **Access Application:**
   ```
   http://my-app.local
   ```