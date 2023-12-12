# [VFRS - Real-Time Vacant Room Finder System](https://github.com/Jgarette0/appsDev)

Click the title to go to the [code repository files](https://github.com/Jgarette0/appsDev) for this project.

# Welcome to AppsDev Project Repository

This repository contains the foundation for our AppsDev project. Feel free to explore, contribute, or test the functionalities outlined below.

## Instructions to Run the Code

1. **Database Setup:**

   - Create a database named 'appsdev'.
   - Import the file `appsdev.sql` into the created 'appsdev' database.

2. **Database Connection Setup:**

   - Navigate to `database-connection.php`.
   - Locate the password field and remove 'jilian' from it.

   ```php
   // Before
   $password = 'jilian';

   // After
   $password = '';
   ```

## Folder Structure

### `database`

- `database-connection.php`: File handling the database connection.
- `appsdev.sql`: Database script for the project.

### `functions`

- `classroom-status.php`: Displays the current status of classrooms.

### `layout`

- `school-layout.php`: Renders the school layout resembling a blueprint.
- `school-layout.css`: Styles for the school layout.
- `zoom.php`: Displays the school layout with zoom functionality.
- `zoom.css`: Styles for the zoom layout.
- `zoom.js`: JavaScript for zoom functionality.

### `sidebar`

- `sidebar.php`: Displays a sidebar with teachers' names.
- `sidebar.css`: Styles for the sidebar.
- `sidebar.js`: JavaScript for sidebar functionality.

### `validation`

- `validation.php`, `validation.css`, `validation.js`: Files handling form validation and modals.
- `timer.js`: JavaScript file for timer functionality.

## Contribution

Feel free to suggest enhancements, report issues, or directly contribute to the project by forking and creating pull requests.

Let's collaborate and innovate together!

Happy coding!
