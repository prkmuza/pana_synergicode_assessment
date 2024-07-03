
Installation
=================================

This installation guide assumes you are running this solution on your local machine.

1) Requires (xampp) php ^8.1 and this is a laravel 10 solution.

2) I created a fresh laravel project by running composer in project root and installation was stored on my local machine.

3) Open database on xampp(http://localhost/phpmyadmin/) to create/import the needed DB to make solution work. The sql Database file("synergicodedg.sql") to create/import the database can be found in the project root. Run this file to create database.

4)  In your command line/git bash while in the project root, run the command "php artisan serve" to start the solution. In your browser go to http://127.0.0.1:8000/ . If all is good solution should start.
 
## Note: I have also attached a PDF of screenshots(AssessmentUI.pdf) showing the assessment UI in the project root, just in case you fail to install, in that case please do not hesitate to whatsapp me(+27761868619) and I will advise on installation.


How it works
=================================
1) I created a landing page http://127.0.0.1:8000/start_assessment . This Page uses some of the Laravel default css and some of my own in-line css, just wanted to show I have a basic understanding of styling.

2) After opening the landing page and clicking “Submit” If there is no name , the user will be asked to enter a name. This is the first validation.

3) If there is no email, the user will be asked to enter an email. This is the second validation.

4) If there is no comment, the user will be asked to enter a comment. This is the third validation.

5) If there is an email format error, the user will be asked to adjust their email. This is the fourth and final validation.

6) On a successful post, user is presented with 2 options, “Upload another user” button and “View uploaded users” button.

7)  “View uploaded users” button will show all the records uploaded in DB. “Upload another user” button just refreshes the page to start the process again.

8) I made 2 PHPunit tests which can be found here: pana_synergicode_assessment\tests\Unit\AssessmentControllerTest.php
To run Unit tests open the project root folder in the command line or using git bash.

Command to run unit tests:
vendor/bin/phpunit tests/Unit/AssessmentControllerTest.php


The first test basically checks if the landing page loads

The second test checks if the Post request to the database works, there is dummy data that will be added to your DB if the test runs successfully.

9) Data Storage: The database is called synergicodedb and the column used to save users is called user_data.
