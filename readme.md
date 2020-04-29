
### About:

PHP AUTH: This is a simple boilerplate for PHP Auth.
* Login
* Register
* Logout
* Password Reset

### Installation:

 - Run this command for cloning the project (otherwise you can download as .zip)
 ```
 git clone https://github.com/boolfalse/php-auth.git
 ```
 
 - Create MySQL 5.* DB
 - Copy the "env-example.php" as "env.php" and configure DB credentials
 - Unzip "tcpdf-backup.zip" and move all the extracted resources to the "tcpdf" folder
 - Config your host on root folder (probably it'll be hosted on \'index.php\' by default)
 - Run necessary migrations via web page "/setup.php"
 - Run necessary seeders via web page "/seeds.php"
 - Open the page "/login"
 - For User page you can go to the "/welcome.php"
 
### Sources:

- [tutorialrepublic](https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php)

### TODOs

- Check Auth functionality with uncommenting these code blocks
```
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
```
