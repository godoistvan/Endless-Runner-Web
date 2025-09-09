Laravel migration scaffold for Endless-Runner-Web

This folder contains a Laravel-ready scaffold that ports your current PHP pages into controllers, routes, Blade views, and Eloquent models. You can copy these files into a new Laravel project and adjust as needed.

Quick steps

1) Install PHP 8.2+ and Composer
2) Create a new Laravel app
   composer create-project laravel/laravel endless-runner-laravel
3) Copy the contents of this `laravel_stub` into the new app, merging folders:
   - routes/web.php → merge (append routes)
   - app/Http/Controllers → add controllers
   - app/Models → add models
   - resources/views → add blades
4) Set DB in .env to your existing DB
   DB_DATABASE=endlessrunner1
   DB_USERNAME=root
   DB_PASSWORD=
5) Run the app
   php artisan serve

Testing

- Copy `laravel_stub/tests` into your Laravel project's `tests` folder.
- Run: `php artisan test`
- Tests internally switch to sqlite in-memory and create minimal tables on-the-fly, so they do NOT depend on your real DB. This ensures they are self-contained and safe.

Notes

- This scaffold replaces insecure MD5 password handling with Laravel’s bcrypt (`Hash::make`). You’ll need to re-hash existing user passwords or implement a one-time migration that accepts MD5 on first login and upgrades to bcrypt.
- Session cart is preserved using Laravel’s session. Items are read from `items` table like before.
- Leaderboard queries are moved to Eloquent with explicit models; adjust table/column names if they differ.
