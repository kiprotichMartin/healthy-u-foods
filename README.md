This is a simple food ordering website built using laravel.

After cloning the repo, you will have to do the following:
1. Run: "composer u" to update all the dependencies
2. Run: "cp .env.example .env" to create a new (.env) containing a copy of the (.env.example)
3. Run: "php artisan key:generate" to generate a unique application key. It will appear in the (.env) file
4. Run: "php artisan migrate" to create the database. NOTE: make sure you edit the database name in the (.env) & (.env.example) files
5. Run: "php artisan serve" to start a development server

Good Luck!!

**I used Visual Studio Code as my editor for this. Hence, all of the above commands work on it's in-built terminal.
