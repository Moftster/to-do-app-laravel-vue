To Do application utilising Laravel and Vue frameworks. 

This application will limit the number of items you can add per day to focus on getting things done.

Basic Setup (Windows)
Install Docker Desktop and WSL2
In project directory (accessed via WSL2 in ~/code/) run ./vendor/bin/sail up
In project directory (accessed via WSL2 in ~/code/) run ./vendor/bin/sail php artisan migrate --seed
In project directory (accessed via WSL2 in ~/code/) run npm run watch