
# Movie Management Web Application

This project was developed as part of the **Web Programming II** course, where PHP and MySQL were used to create a dynamic web application. The application allows users to register, log in, and manage their list of favorite movies. Users can add, modify, and delete movies from their list and update their profile information.

## Features

- **User Registration and Login**: Users can create an account, log in, and log out securely.
- **Movie Management**: After logging in, users can add new movies to their list, modify existing entries, and delete movies.
- **Profile Management**: Users can view and update their profile information, including changing their password.

## File Structure

- `index.php`: The main entry point of the application.
- `login.php`, `login_form.php`: Handles user login functionality.
- `register.php`, `register_form.php`: Manages user registration.
- `logout.php`: Handles user logout.
- `filmekListaz.php`: Lists the movies added by the user.
- `filmHozzaadas.php`, `filmHozzaadas_form.php`: Allows users to add new movies.
- `filmTorles.php`: Allows users to delete movies from their list.
- `profilom.php`, `profilModositas.php`: Enables users to view and modify their profile information.
- `mydbms.php`: Manages the database connection and operations.
- `menu.php`, `tartalom.php`: Handles the dynamic content and menu generation.
- `beadandodb.sql`: SQL script to create the necessary database tables.

## Database Setup

To set up the database, follow these steps:

1. Create a new MySQL database.
2. Run the `beadandodb.sql` script to create the necessary tables.
3. Update the database connection details in `mydbms.php` if needed.

## How to Run

1. **Clone the repository** to your local machine.
2. **Set up the database** as described above.
3. **Configure the database connection** in `mydbms.php`.
4. Open `index.php` in your web browser to start using the application.

## License

This project is for educational purposes as part of the Web Programming II course.
