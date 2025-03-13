# Multi-Login School System

## Overview
This project is a multi-login school system that enables both students and administrators to log in and access their respective dashboards. The admin has the authority to manage student records and post school announcements, while students can view their personal details and attendance.

## Features
- **Multi-Login System:** Separate login forms for students and administrators with smooth toggle animations.
- **Student Dashboard:** View profile details and attendance records.
- **Admin Dashboard:** Manage student data, post announcements, and view attendance reports.
- **Secure Login:** Uses PHP with MySQL and prepared statements for secure authentication.
- **Simple Styling:** Uses custom CSS for a clean and responsive design.

## Directory Structure
```bash
SchoolSystem/ 
├── index.php 
├── login.php 
├── login_process.php 
├── student_dashboard.php 
├── admin_dashboard.php 
├── logout.php 
├── config.php 
├── css/ 
│ └── styles.css 
├── js/ 
│ └── script.js 
├── assets/ 
│ └── images/ 
└── README.md
```


## Setup Instructions

1. **Database Setup:**
   - Create a MySQL database named `school_system`.
   - Create two tables: `students` and `admins`.
   - Sample SQL for `students` table:
    ```sql
    CREATE TABLE students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );
    ```
   - Sample SQL for `admins` table:
     ```sql
     CREATE TABLE admins (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL
     );
     ```
   - Insert sample users using PHP’s `password_hash()` to store hashed passwords.

2. **Configuration:**
   - Update the `config.php` file with your MySQL database credentials.

3. **Deployment:**
   - Place the project files on your PHP-enabled web server.
   - Access the system via `index.php`.

## Future Enhancements
- **Messaging System:** You can integrate a messaging feature using technologies such as AJAX and WebSockets. For instance, you might create a messaging table in the database and use periodic AJAX calls to fetch and post messages between users.
- **Extended Dashboards:** Enhance the dashboards with more detailed reports and interactive elements.

## Note
This project is built using PHP, MySQL, simple CSS, and JavaScript. Adjustments might be needed to scale for production-level performance and security.


## Reachout

- **Author** Abbas Khan
- **Email** [abbas1795khan@gmali.com](mailto:abbas1795khan@gmail.com)
- **Github** [flickShot555](https://www.github.com/flickShot555/)
- **linkedin** [the-abbas-khan](https://www.linkedin.com/in/the-abbas-khan/)
- **Portfolio** [Aepostrophee](https://www.aepostrophee.kesug.com/)