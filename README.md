# bulkemail
To send bulk email with laravel queue

1. First run composer command in project directory.
composer install

2. Execute below database command of migration and seeder.
php artisan migrate 
php artisan db:seed

3. Run project using below link.
http://localhost/bulkemail/
Email -choldasd@gmail.com
Password - Choldas@123

4. Add emails in textarea and click on send email button then run below command.

5. To run jobs using worker - 
php artisan queue:work --stop-when-empty

6. If jobs fails and you want retry all failed jobs - 
php artisan queue:retry all
