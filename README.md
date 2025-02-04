# Entity Logger Laravel

Entity Logger Laravel is a simple logging system that automatically logs CRUD (Create, Read, Update, Delete) operations performed on models in Laravel-based projects.

## 🚀 Getting Started

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/username/entity-logger-laravel.git
cd entity-logger-laravel
```

### 2️⃣ Install Dependencies
```bash
composer install
```

### 3️⃣ Configure Environment Variables
```bash
cp .env.example .env
php artisan key:generate
```

Fill in the database information in the `.env` file:
```ini
DB_DATABASE=trapp
DB_USERNAME=root
DB_PASSWORD=secret
```

### 4️⃣ Set Up the Database
```bash
php artisan migrate
```

### 5️⃣ Start the Project
```bash
php artisan serve
```

You can now access the project at [http://localhost:8000](http://localhost:8000).

## 🗒️ Features
- Logs **create**, **update**, and **delete** operations on models.
- Stores data before and after changes.
- Simple and easy to integrate.

## ⚙️ Usage
To enable logging in a new model, simply add the following trait:

```php
use App\Traits\LogsActivity;

class Post extends Model
{
    use LogsActivity;
}
```

## 📄 License
This project is licensed under the MIT License.

