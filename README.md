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
- **Framework**: Laravel 10.x  
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
