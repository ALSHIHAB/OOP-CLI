This script has been created using PHP and it is showing the object-oriented concepts and using a CLI tool.
The script accepts a string and does the following to it:
-	converts the string to uppercase and outputs it to stdout.
-	converts the string to alternate upper and lower case and outputs it to stdout.
-	creates a CSV file from the string by making each character a column in the CSV and then output "CSV created!" to stdout.
example:
Sample Input
hello world

Sample Output
HELLO WORLD
hElLo wOrLd
CSV created!

Note: a CSV file is created on the root directory which containing the following: 
h,e,l,l,o, ,w,o,r,l,d


Software requirements :-
1. PHP 7.0 or heigher
2. LAMP or WAMP or XAMP server

How to run on Windows (For WAMP or XAMP server):-
1. Download script file "oop_cli.php"
2. Go to the PHP installation directory, for example C:/xampp/htdocs
3. Create a project folder, for example "php_cli"
4. Paste "php_oop_cli.php" file in created folder.
5. Make sure running of the server
6. Open "xamp command prompt"
7. Go to the project folder, for example "cd C:/xampp/htdocs/php_cli"
8. Run following command "php oop_cli.php"


How to run on Linux (For LAMP server):-
1. Download script file "oop_cli.php"
2. Go to the PHP installation directory, for example /var/www/html
3. Create a project folder, for example "php_cli"
4. Paste "cli.php" file in created folder.
5. Make sure running of the server
6. Open command prompt
7. Go to the project folder, for example "cd /var/www/html/php_cli"
8. Run following command "php oop_cli.php"
	

Note :- Project root directory should have writable permission in order to generate and store CSV file. 
