# Notes App (Laravel)

A simple Laravel notes application with authentication and a basic chat feature.

## Quick start

1. Copy env and install dependencies:
    ```powershell
    cp .env.example .env
    composer install
    npm install
    ```

2. Create sqlite file (if using sqlite):
    ```powershell
    ni .\database\database.sqlite -Force
    ```

3. Generate app key and run migrations:
    ```powershell
    php artisan key:generate
    php artisan migrate
    ```

4. Run dev assets and serve:
    ```powershell
    npm run dev
    php artisan serve --host=127.0.0.1 --port=8000
    ```

5. Open http://127.0.0.1:8000, register and test Notes and Chat features.

## Features

- User registration, login, logout
- Notes per user (CRUD)
- Simple Chat: authenticated users can post messages
- Centralized layout and navigation (Blade layout + partials)

## Files of interest

- Routes: `routes/web.php`
- Main layout: `resources/views/layouts/app.blade.php`
- Nav partial: `resources/views/partials/nav.blade.php`
- Chat view: `resources/views/chat/index.blade.php`
- Chat controller: `app/Http/Controllers/ChatController.php`
- Chat model: `app/Models/Message.php`
- Where passwords are hashed:
    - `app/Http/Controllers/Auth/RegisteredUserController.php` (Hash::make)
    - `app/Models/User.php` (`password` cast => 'hashed')

## Troubleshooting

- If chat shows "no such table: messages", run `php artisan migrate`.
- If text is not visible on dark background, check `resources/views/layouts/app.blade.php` and view classes.

---
