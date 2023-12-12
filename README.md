# Vacant Room Finder

This project is a vacant room finder or classroom occupancy system for schools. It provides a visual representation of the school layout, with buttons representing classrooms and status colors indicating their availability.

## Project Structure

The project consists of the following files and folders:

### Sketch

- `sketch_dec7b.ino`: Arduino sketch for the vacant room finder.

### PHP Files

- `getUID.php`: PHP script for retrieving UID information.
- `UIDContainer.php`: PHP script for UID container.
- `database`: Folder containing database-related files.
  - `appsdev.sql`: SQL script for creating the database.
  - `database-connection.php`: PHP script for database connection.
- `functions`: Folder containing various PHP functions.
  - `get-color-classroom.php`: PHP script for getting the color of a classroom.

### Layout

- `school-layout.css`: CSS styles for the school layout.
- `school-layout.php`: PHP script for rendering the school layout.
- `zoom.css`: CSS styles for zoom functionality.
- `zoom.js`: JavaScript file for zoom functionality.
- `zoom.php`: PHP script for zoom functionality.

### Mock

- `sidebar`: Folder containing sidebar-related files.
  - `sidebar.css`: CSS styles for the sidebar.
  - `sidebar.js`: JavaScript file for sidebar functionality.
  - `sidebar.php`: PHP script for rendering the sidebar.

### Validation

- `loginValidation.php`: PHP script for login validation.
- `timer.js`: JavaScript file for timer functionality.
- `validation.css`: CSS styles for validation.
- `validation.js`: JavaScript file for validation functionality.
- `validation.php`: PHP script for rendering validation components.

### Main

- `index.php`: Main entry point for the application.

## Usage

1. Set up the database using `appsdev.sql`.
2. Configure database connection in `database-connection.php`.
3. Upload Arduino sketch (`sketch_dec7b.ino`) to the appropriate hardware.
4. Access the application through `index.php` and explore the vacant room finder system.

Feel free to customize and extend the functionality as needed.
