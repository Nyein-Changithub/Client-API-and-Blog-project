# Repository: Multi-Project Setup (App & Blog)

## Table of Contents
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

## Folder Structure

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

---
## Setup and Installation

### Prerequisites:
Before proceeding, ensure you have the following installed:
- PHP >= 8.1  
- Composer >= 2.0    
- MySQL >= 5.7  
- A web server like Apache or Nginx  

---

## Blog Project (Laravel Setup)
1.### Navigate to the blog folder:
`cd blog`

2.### Install dependencies using Composer:
`composer install`

3.### Copy the .env.example file to .env:
`cp .env.example .env`

4.### Set up your database in the .env file:
`DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password`

5.### Run the database migrations:
`php artisan migrate`

6.### Seed the database with sample data (optional):
`php artisan db:seed`

7.### Start the Laravel development server:
`php artisan serve`

The project will be available at `http://localhost:8000.`






