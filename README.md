# LaravelPad
A <a target="_blank" href="https://dontpad.com/">DontPad</a> clone built with Laravel

# Technologies Used

  - PHP 8.3
  - Laravel 12
  - Tailwind

# Requirements
**Before getting started, make sure you have the following tools installed**:
  - PHP 8.3 ou superior
  - Composer
  - Node.js

# Installation
1. Clone the Repository::
```
git clone https://github.com/LmarDark/ImpressaoRapida
```

2. Navigate to the Project Directory:
```
cd LaravelPad
```

3. Install the Dependencies:
```
composer install
npm install
```

4. Copy the .env.example file to a new .env file:
```
cp .env.example .env
```

5. Create the database.sqlite file:
```
touch ./database/database.sqlite
```

7. Configure the database connection and session driver in the .env file:
```
DB_CONNECTION=sqlite
```

8. Make the migration:
```
php artisan migrate
```

9. Generate the Application Key:
```
php artisan key:generate
```


10. Start the Development Server:
```
composer run dev
```
The application will be available at http://localhost:8000.

## 📄 License
This project is licensed under the MIT License.
