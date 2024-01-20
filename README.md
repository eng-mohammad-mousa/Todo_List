
# Todo List

> A simple and efficient Todo List application built with Vue.js and Laravel.

This project aims to provide a user-friendly web application for managing tasks and staying organized. It combines the power of Laravel on the backend with the flexibility and interactivity of Vue.js on the frontend.

<br>

## Features

- Add, and delete tasks easily.
- Mark tasks as complete or incomplete.
- Responsive design, ensuring a seamless experience across different devices.

<br>

## Technologies Used

- Vue.js
- Laravel
- MySQL

<br>    


## Prerequisites

Before running this project, make sure you have the following software installed:

- Node.js: [Download Node.js](https://nodejs.org)
- Composer: [Download Composer](https://getcomposer.org)

<br> 

## Installation

1. Create a new database named `1_todo_list_laravel_vue` to store the tasks.

2. Clone the repository:

```
git clone https://github.com/eng-mohammad-mousa/Todo_List.git
```

3. Navigate to the project directory:

```
cd Todo_List
```

4. Install the required dependencies:

```
composer install
npm install
```

5.  Copy the `.env.example` file and rename it to `.env`. Update the necessary database configurations in the `.env` file.
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=1_todo_list_laravel_vue
DB_USERNAME=root
DB_PASSWORD=
```

6. Generate a new application key:
```bash
php artisan key:generate
```
   
7. Run the database migrations:

```
php artisan migrate --seed
```

8. Build and compile the frontend assets:

```
npm run build
```

9. Start the development server:

```
php artisan serve
```

10. Access the application in your browser by visiting `http://localhost:8000`.

<br>

## Contributing

Contributions are welcome! If you have any ideas, suggestions, or bug reports, please open an issue on the GitHub repository.
