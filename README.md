## Repository: Multi-Project Setup (App & Blog)

### Table of Contents
1. [Project Description](#project-description)
2. [Technologies Used](#technologies-used)
3. [Folder Structure](#folder-structure)
4. [Setup and Installation](#setup-and-installation)
5. [Usage Instructions](#usage-instructions)
6. [API Documentation](#api-documentation)
7. [Contributing](#contributing)
8. [License](#license)

---

## Project Description

This repository contains **two projects**: 

1. **Blog Project**  
   A Laravel-based project that allows users to view articles, leave comments, and manage categories.  

2. **App Project**  
   A JavaScript-based project (using HTML, CSS, JS) that communicates with the Blog Project's API to perform CRUD operations on the categories.  

The **App Project** fetches category data from the **Blog Project** via API calls, enabling seamless category management.

---

## Technologies Used

### Blog Project:
- **Framework**: Laravel 11.x  
- **Database**: MySQL  
- **Backend Language**: PHP  

### App Project:
- **Frontend**: HTML, CSS, JavaScript  
- **APIs**: RESTful API calls to Blog Project  

---

## Repository Overview

### Folder Structure

```plaintext
repository/
│
├── app/              # App Project (Frontend)
│   ├── index.html    # Main entry point
│   ├── css/          # Stylesheets
│   ├── js/           # JavaScript files
│   └── README.md     # App-specific README
│
├── blog/             # Blog Project (Laravel)
│   ├── app/          # Laravel application files
│   ├── database/     # Database migrations and seeds
│   ├── public/       # Public-facing assets
│   └── README.md     # Blog-specific README
│
└── README.md         # Main repository README
```

---

## Setup and Installation

### Prerequisites
Before proceeding, ensure you have the following installed:

- **PHP** >= 8.1  
- **Composer** >= 2.0  
- **MySQL** >= 5.7  
- A web server like **Apache** or **Nginx**  

---

## Blog Project (Laravel Setup)

Follow these steps to set up the Blog project:

**1. Navigate to the blog folder:**
```bash
cd blog
```

**2. Install dependencies using Composer:**
```bash
composer install
```

**3. Copy the `.env.example` file to `.env`:**
```bash
cp .env.example .env

php artisan key:generate
```

**4. Set up your database in the `.env` file:**

Update the following lines with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

**5. Run the database migrations:**
```bash
php artisan migrate
```
**6. Seed the database with sample data (optional):**
If you want to populate the database with sample data:
```bash
php artisan db:seed
```

**7.Authentication UI Install:**
```bash
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run dev
```

**8. Start the Laravel development server:**
```bash
php artisan serve
```

The project will be available at:  
[http://localhost:8000](http://localhost:8000)

---

## App Project Setup (JavaScript Frontend)
Follow these steps to set up the Frontend App:

**1.Navigate to the app folder:**

```bash
cd repository/app
```

**2.Open the 1index.html` file in your browser:**
- This project does not require a development server; it runs as a static frontend app.
  
**3.Connect to the Blog Project:**
- Ensure the Blog Project is running, as the App Project interacts with its API for CRUD operations on categories.

---

## Usage Instructions

### Blog Project:
1.Access the Blog Project via the browser at `http://localhost:8000`.

2.Features available:
- View articles.
- Add articles.
- Add comments.
- Manage categories through the admin panel.

 ### App Project:
1.Open the index.html file in a browser.

2.Features available:
- View a list of categories.
- Create, update, and delete categories.
- All actions are synchronized with the Blog Project via its RESTful API.

---

### API Documentation
The Blog Project exposes the following API endpoints for managing categories:

1.**GET** `/api/categories`

Fetch all categories.
**Response Example:**
```json
[
    { "id": 1, "name": "Technology" },
    { "id": 2, "name": "Lifestyle" }
]
```

2.**POST** `/api/categories`

Create a new category.
**Request Body Example:**
```json
{
    "name": "Health"
}
```

3.**PUT** `/api/categories/{id}`

Update an existing category.
**Request Body Example:**
```json
{
    "name": "Updated Category Name"
}
```

4.**DELETE** `/api/categories/{id}`

Delete a specific category by ID.

---

## Additional Notes

### Environment Configuration
For advanced configuration, refer to the Laravel documentation:  
[https://laravel.com/docs](https://laravel.com/docs)

### Troubleshooting
If you encounter any issues, make sure to:
1. Verify that all prerequisites are installed.
2. Check the `.env` file for correct configurations.
3. Run `php artisan config:cache` to refresh configuration settings.

### Contribution
If you want to contribute:
- Fork the repository.
- Create a new branch for your feature or bug fix.
- Submit a pull request with a clear description of changes.

---

## License

This project is licensed under the [MIT License](LICENSE). See the LICENSE file for more details.



