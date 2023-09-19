# repairCafe
Our project is a dynamic web application built with Bootstrap, CSS, HTML, PHP, JavaScript, and MySQL. It offers a responsive and visually appealing user interface that adapts to various devices. JavaScript enhances interactivity, while PHP and MySQL handle secure data storage and retrieval. 

## Installation

Follow these steps to set up the project on your local server:

1. **Download the Project**: Download the entire project folder.

2. **Place in XAMPP `htdocs`**: Navigate to your XAMPP installation directory and find the `htdocs` folder (e.g., `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS). Place the project folder inside the `htdocs` directory.

3. **Start XAMPP**: Run XAMPP and start the Apache and MySQL services.

4. **Create a Database**:
   - Open your web browser and go to `http://localhost/phpmyadmin/`.
   - Log in to phpMyAdmin.
   - Click on the "Databases" tab.
   - Enter a name for your database (e.g., `my_project_db`) and click "Create."

5. **Import Database Schema**:
   - In phpMyAdmin, select your newly created database.
   - Click the "Import" tab.
   - Click "Choose File" and select the database SQL file provided with the project.
   - Click "Go" to import the database schema.

6. **Configure Database Connection**:
   - In your project folder, locate the configuration file (e.g., `config.php`) and open it with a text editor.
   - Update the database connection settings with your MySQL username, password, and database name.

7. **Run the Project**:
   - Open your web browser.
   - Type `http://localhost/your_project_folder` in the address bar.
   - Your project should now be accessible and ready to use.

