The project is an assignement whose description is at the footer.
To install and set up a Laravel project on your computer, follow these steps:

Prerequisites:

Make sure you have PHP, Composer, and a database (e.g., MySQL, PostgreSQL) installed on your computer.
Ensure that your system meets the minimum requirements to run Laravel. You can find the requirements in the official Laravel documentation.
Install Dependencies:

Open a terminal or command prompt and navigate to the project's root directory.
Run the following command to install the required dependencies using Composer: "composer install"
Generate a new application key by running the following command: "php artisan key:generate"
To create the required database tables, run the database migrations with the following command:"php artisan migrate"
You can use the built-in development server to run the application. Execute the following command:"php artisan serve"