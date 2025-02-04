# Entity Logger Laravel

Entity Logger Laravel is a simple logging system that automatically logs CRUD (Create, Read, Update, Delete) operations performed on models in Laravel-based projects.

## Getting Started

### 1️. Clone the Repository
```bash
git clone https://github.com/username/entity-logger-laravel.git
cd entity-logger-laravel
```

### 2️. Install Dependencies
```bash
composer install
```

### 3️. Configure Environment Variables
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

### 4️. Set Up the Database
```bash
php artisan migrate
```

### 5️. Start the Project
```bash
php artisan serve
```

You can now access the project at [http://localhost:8000](http://localhost:8000).

## Features
- Logs **create**, **update**, and **delete** operations on models.
- Stores data before and after changes.
- Simple and easy to integrate.

## Usage
To enable logging in a new model, simply add the following trait:

```php
use App\Traits\LogsActivity;

class Post extends Model
{
    use LogsActivity;
}
```

## Example Data
You can create, update, and delete posts to generate log records. Here are some examples:

### Create a New Post
```php
Post::create([
    'title' => 'First Post',
    'content' => 'This is a sample post.'
]);
```

### Update a Post
```php
$post = Post::find(1);
$post->update([
    'title' => 'Updated Post Title'
]);
```

### Delete a Post
```php
$post = Post::find(1);
$post->delete();
```

### Sample Log Record
A sample log entry in the `logs` table might look like this:

```json
{
  "id": 1,
  "model": "App\\Models\\Post",
  "model_id": 1,
  "before": {"title": "First Post", "content": "This is a sample post."},
  "after": {"title": "Updated Post Title", "content": "This is a sample post."},
  "action": "updated",
  "created_at": "2025-02-04T12:00:00Z",
  "updated_at": "2025-02-04T12:00:00Z"
}
```

## 📄 License
This project is licensed under the MIT License.

