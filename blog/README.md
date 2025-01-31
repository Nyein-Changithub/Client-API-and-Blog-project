# Blog Project

## Overview
This is a Laravel-based web application for managing articles, comments, and categories. It is designed to showcase the power of Laravel's MVC architecture and RESTful API capabilities.

---

## Features
- Article management: Create, read, update, and delete articles.
- Commenting system for articles.
- Category management with API integration.

---

## Requirements
- PHP >= 8.1
- Composer >= 2.0
- MySQL >= 5.7
- Laravel 10.x or higher

---

## Setup Instructions

### Step 1: Clone the Repository
Clone the repository and navigate to the `blog` directory:
```bash
git clone <repository-url>

cd repository/blog
```
### Step 2: Install Dependencies
Install Laravel dependencies using Composer:

```bash
composer install
```

### Step 3: Configure Environment
Copy .`env.example` to `.env` and configure your database settings:

```bash
cp .env.example .env
php artisan key:generate
```

Update the following in `.env`:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### Step 4: Run Database Migrations
Run the migrations to set up the database schema:

```bash
php artisan migrate
```

### Step 5: Seed the Database (Optional)
Seed the database with sample data:

```bash
php artisan db:seed
```

### Step 6: Serve the Application
Start the Laravel development server:

```bash
php artisan serve
```
Your application will be available at `http://localhost:8000`.

---

## API Endpoints

**Categories API**

1.**GET** `/api/categories`: Fetch all categories.

2.**POST** `/api/categories`: Create a new category.

3.**PUT** `/api/categories/{id}`: Update an existing category.

4.**DELETE** `/api/categories/{id}`: Delete a category.

---

### Folder Structure

```plaintext
blog/
├── app/          # Laravel application files
├── database/     # Migrations and seeds
├── public/       # Public-facing assets
├── resources/    # Views and front-end files
├── routes/       # Application routes
├── storage/      # Logs and cached data
└── README.md     # Documentation
```
---

### Notes
- This project is designed to work alongside the App Project in the same repository.
- Make sure the App Project interacts with the Blog Project via its RESTful APIs.

---

### License
This project is licensed under the `MIT License`.

