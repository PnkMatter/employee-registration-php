# Employee Registration System

This is a simple web application built with PHP that allows users to register employee information through a web form. The system includes basic server-side validation and a clean interface styled with Bootstrap.

## 📌 Features

- Employee registration form
- Server-side validation (e.g., name, CPF, role, and email)
- Dynamic message alerts (success or error)
- Structured layout using Bootstrap
- Code separation for modularity (`funcionario.php` for logic, `cadastrar.php` for interface)

## 🧱 Tech Stack

- 🐘 PHP 8+
- 💅 Bootstrap 5
- 🌐 HTML5
- ⚙️ Procedural PHP with basic modularity

## 📁 File Structure

project-root/
├── cadastrar.php # Main page with the form
├── funcionario.php # Logic for form processing and validation
├── README.md # Project documentation

## 🚀 How to Run

1. Clone the repository:
```bash
git clone https://github.com/PnkMatter/employee-registration-php.git
````
Place the project in your web server's root directory (e.g., htdocs for XAMPP or www for WAMP).

Start your local server (Apache via XAMPP, WAMP, etc.).

Open your browser and navigate to:
```bash
http://localhost/employee-registration-php/cadastrar.php
````

🛠️ To-Do / Future Improvements
Save employee data in a database (MySQL or SQLite)

Improve validation (client-side + server-side)

Add user authentication (admin area, login/logout)

Internationalization support (i18n)

📬 Contact
Feel free to reach out or open an issue if you have any feedback or suggestions.
