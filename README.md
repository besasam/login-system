# login-system
A very simple registration and login system built with PHP and MySQL.

This was only made for practice purposes and is definitely not safe in any way, so please never actually use this.

## How to use (but really, don't)

You will need a MySQL database and a table called `users` with the following fields: (lengths are the ones I use, feel free to change them (but leave `id` and `password` long enough))
* `id` (INT11) primary key, auto increment
* `login` (VARCHAR45)
* `password` (VARCHAR255)
* `name` (VARCHAR45)

Then save your database login credentials in `/src/config.php` and you're good to go!
