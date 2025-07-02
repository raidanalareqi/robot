# AI Robot Web Control System

A professional web application for controlling and monitoring an automated robot with artificial intelligence. Built with HTML, CSS, PHP, JavaScript, and MySQL. Features a modern 3D robot UI, action logging, and advanced filtering.

## Features

- **Home, About, Features, Contact**: Informational pages with modern design.
- **Motor Control**: Interactive 3D robot UI to send movement commands (up, down, left, right, forward, backward, stop).
- **Action Log**: View, filter (by date and time), and delete robot actions. Modern, responsive table.
- **Contact Form**: PHP-powered, sends messages to your email.
- **Database Integration**: All robot actions are logged in MySQL.
- **Responsive Design**: Works on desktop and mobile.

## Setup Instructions

### 1. Requirements
- XAMPP or any LAMP/WAMP stack (PHP 7+, MySQL)
- Web browser

### 2. Installation
1. **Clone or copy the project files** into your XAMPP `htdocs` directory:
   ```
   C:/xampp/htdocs/new/raidan/raidan_ai_robot/
   ```
2. **Create the database**:
   - Open phpMyAdmin (`http://localhost/phpmyadmin`)
   - Create a database named `ai_robot`
   - Run this SQL to create the actions table:
     ```sql
     CREATE TABLE robot_actions (
       id INT AUTO_INCREMENT PRIMARY KEY,
       action VARCHAR(50) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```
3. **Configure database connection**:
   - Edit `db.php` if your MySQL username/password is not `root`/blank.

4. **Set your contact email**:
   - In `contact.php`, replace `Raidan@example.com` with your real email address.

### 3. Usage
- Start Apache and MySQL in XAMPP.
- Visit `http://localhost/new/raidan/Raidan_ai_robot/` in your browser.
- Use the navigation to:
  - Control the robot via the Motor Control page
  - View and filter the Action Log
  - Send a message via the Contact page

### 4. File Structure
- `index.html` — Home page
- `about.html` — About the robot
- `features.html` — Robot features
- `contact.php` — Contact form (PHP)
- `motor_control.php` — 3D robot control interface (PHP, JS)
- `action_log.php` — Action log with filtering and delete (PHP)
- `db.php` — Database connection
- `style.css` — All styles (modern, responsive)
- `robot3d.js` — 3D robot interactivity and animation

### 5. Customization
- **Robot UI**: Edit `motor_control.php`, `style.css`, and `robot3d.js` for custom robot appearance or controls.
- **Action Log**: Extend filtering, export, or analytics as needed.
- **Security**: For production, add CSRF protection and sanitize all inputs.

### 6. Screenshots
Add screenshots of the Home, Motor Control, and Action Log pages here for your GitHub repo.

---

**Author:** [Raidan Alareqi]


