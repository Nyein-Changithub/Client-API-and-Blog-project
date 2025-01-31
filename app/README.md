# App Project

## Overview
This is a static HTML, CSS, and JavaScript-based frontend application designed to interact with the Blog Project's RESTful API for managing categories.

---

## Features
- Fetch and display categories from the Blog Project.
- Perform CRUD (Create, Read, Update, Delete) operations on categories.
- Responsive UI design using Vanilla JavaScript.

---

## Setup Instructions

### Prerequisites
- A browser (e.g., Chrome, Firefox).
- Blog Project running locally or on a server.

### Steps

1.Clone the repository and navigate to the `app` directory:***
   ```bash
   git clone <repository-url>
   cd repository/app
   ```

2.Open the `index.html` file in your browser:

- Double-click the file, or
- Serve the folder using a local server (optional).

3.Ensure the Blog Project is running, as the App Project depends on its API.***

### Folder Structure

```plaintext
app/
├── index.html    # Main entry point
├── css/          # Stylesheets
├── js/           # JavaScript files
└── README.md     # Documentation
```
---
### API Endpoints Used
This app uses the following endpoints from the Blog Project:

1.**GET** `/api/categories`: Fetch all categories.

2.**POST** `/api/categories`: Create a new category.

3.**PUT** `/api/categories/{id}`: Update an existing category.

4.**DELETE** `/api/categories/{id}`: Delete a category.

---

### Notes
- This app is a static application and does not require a backend to serve its files.
- Ensure the Blog Project API is accessible for full functionality.

---

### License
This project is licensed under the `MIT License`.

