## Admin Panel

Ready to go Admin Panel

- Clone the project
- Create [.env](.env) file by copying [.env.example](.env.example) - Command: `cp .env.example .env`
- Set your database credentials in [.env](.env)
- Run `composer install` (This will install the PHP dependencies)
- Run `npm install` (This will install the Javascript dependencies)
- Run `php artisan migrate --seed` (This will migrate the database and will seed it with necessary data)
- Run `php artisan key:generate` (This will set the Application Key in [.env](.env) file)
- Run `npm run watch` (This will compile the JavaScript dependencies)

## Optional ( For File System Storage )
- Run `php artisan storage:link` (This will create a symbolic link of `storage/app/public` directory to `/assets/uploads` directory)