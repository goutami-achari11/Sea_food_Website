# 🦐 Seafood Ordering Website

## Project Overview

This project is a responsive **Seafood Ordering Website** designed to showcase fresh seafood items and allow users to browse products, add them to a cart, and place orders.
The website focuses on simplicity, clean UI, and smooth user interaction, making it suitable for small seafood businesses, restaurants, or academic web development projects.

The application is built using **HTML, CSS, Bootstrap, PHP, and MySQL**, following a modular structure for better maintainability.

---

## Features

* Clean and attractive seafood-themed UI
* Responsive layout for desktop, tablet, and mobile devices
* Dynamic seafood listing fetched from the database
* Add-to-cart functionality using PHP sessions
* Simple cart management (quantity handling)
* User-friendly navigation and layout

---

## Technologies Used

### Frontend

* **HTML5** – Page structure and semantic layout
* **CSS3** – Custom styling and visual enhancements
* **Bootstrap 5** – Responsive grid system and UI components

### Backend

* **PHP** – Server-side logic and session handling
* **MySQL** – Database for storing food items and cart data

---

## Bootstrap Usage Details

Bootstrap is used to ensure responsiveness and consistent styling across all pages.

### Bootstrap Components Used

* Grid system (`container`, `row`, `col-*`) for layout
* Cards for displaying seafood items
* Buttons (`btn`, `btn-primary`, `btn-outline-*`)
* Navbar for site navigation
* Forms for quantity selection and actions

### Bootstrap CDN

Bootstrap is included using a CDN link in the `<head>` section to simplify setup and improve load time.

Example:

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
```

---

## CSS Styling Approach

Custom CSS is used alongside Bootstrap to give the website a unique seafood-themed appearance.

### CSS Highlights

* Custom colors inspired by ocean and seafood tones
* Hover effects for cards and buttons
* Image styling to maintain consistent aspect ratios
* Margin and padding adjustments for better spacing
* Override of default Bootstrap styles where required

All custom styles are written in a separate CSS file to keep structure clean and readable.

---

## Project Structure

```
seafood-website/
│
├── index.php
├── db.php
├── cart.php
├── add_to_cart.php
│
├── css/
│   └── style.css
│
├── images/
│   └── seafood-images/
│
├── sql/
│   └── database.sql
│
└── README.md
```

---

## Database Description

The database contains tables for:

* **food_item** – stores seafood product details (name, price, image, description)
* **cart** – stores selected food items and quantities

PHP uses prepared statements to interact with the database securely.

---

## How to Run the Project

1. Install **XAMPP** or **WAMP**
2. Place the project folder inside the `htdocs` directory
3. Import the database using phpMyAdmin
4. Update database credentials in `db.php`
5. Start Apache and MySQL
6. Open browser and visit:

   ```
   http://localhost/seafood-website/
   ```

---

## Future Enhancements

* User login and registration
* Order history tracking
* Admin panel for managing seafood items
* Payment gateway integration
* Improved cart quantity update logic

---

## Purpose of the Project

This project was developed to demonstrate:

* Practical use of PHP with MySQL
* Integration of Bootstrap with custom CSS
* Dynamic web page rendering
* Clean frontend and backend separation

It can be used for **academic submissions**, **portfolio projects**, or **small business demos**.

---

## Author

**Goutami Achari**

---
