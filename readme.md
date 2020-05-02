
### About:

PHP AUTH: This is a simple boilerplate for PHP Auth.
* Login
* Register
* Logout
* Password Reset

### Installation/Info:

 - Run this command for cloning the project (otherwise you can download as .zip)
 ```
 git clone https://github.com/boolfalse/php-tcpdf.git
 ```
 
 - Create MySQL 5.* DB
 - Copy the "env-example.php" as "env.php" and configure DB credentials
 - Unzip "tcpdf-backup.zip" and move all the extracted resources to the "tcpdf" folder
 - Cop and paste necessary font files (.php, .z)
 - Config your host on root folder (probably it'll be hosted on \'index.php\' by default)
 - Run necessary migrations via web page "/setup.php"
 - Run necessary seeders via web page "/seeds.php"
 - Open the page "/login"
 - For User page you can go to the "/welcome.php"
 
### Sources:

- [tutorialrepublic](https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php)
- [image in tcpdf](https://stackoverflow.com/a/19565455/7574023)
- [fonts](https://stackoverflow.com/a/12304671/7574023)
- [jsfiddle resume html](http://jsfiddle.net/KampD/jz8257qt/15/)
- [armenian fonts](http://www.museum.am/font/font_a.php)
- [How to implement custom fonts in TCPDF](https://stackoverflow.com/questions/5263588/how-to-implement-custom-fonts-in-tcpdf)
- [Creating PDFs using TCPDF that supports all languages especially CJK](https://stackoverflow.com/questions/9426983/creating-pdfs-using-tcpdf-that-supports-all-languages-especially-cjk)
- [arm-fonts.com](https://arm-fonts.com/)
- [pararani.com](http://pararani.com/armenian-fonts-2/)
- [ttf font to fpdf or tcpdf online conversion](https://www.xml-convert.com/en/convert-tff-font-to-afm-pfa-fpdf-tcpdf)
- [TCPDF font converter e.g. for Magento Extension pdfPRINT](http://fonts.snm-portal.com/)
- [Using Unicode with TCPDF](https://stackoverflow.com/questions/18200919/using-unicode-with-tcpdf)
- [encode-utf-8-in-tcpdf](https://stackoverflow.com/questions/52286964/how-to-encode-utf-8-in-tcpdf)
- [Font changed](https://stackoverflow.com/a/55722814/7574023)

### TODOs

- Check Auth functionality with uncommenting these code blocks
```
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
```
