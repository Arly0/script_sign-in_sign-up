# script_sign-in_sign-up
 Login script and registration on the site. Asks to enter your login and password on the site, checks them from the database. If you are not in the database, you go to the registration page and write you to the database.

This script works with the database. In my case it's a DB with id, login and password.
Next will explain the script just in case :)

  In connection.php (which is in the db folder), a connection to the database is made and the use of this file in all others
via include (same). In the index.php form to log in and send the entered data to db.php. 
Next is sending data to the database and checking for the presence of such a login and password there.
If everything is okay, print
echo 'Hello!)';
If not, then a form is created to register the user to the database. 
The data is transferred to db_connect.php and there it is stored in the database.

P.S.:
Don`t forget to enter your database data in connection.php
