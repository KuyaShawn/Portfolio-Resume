# Dealership
This website serves as a virtual showroom made for our customers who want to buy a new or used car. It is also for those who want to get their car serviced at our in-house mechanic shop that will perform fixes and detailing work for customers with warranty. In the service area, the customer will be able to insert their personal information and car info for us to book them an appointment for servicing their car & if their car has fifty thousand miles or less, they apply for warranty services. After the information gets filled we check our data bases invoices to get that customer a day/week as to when we can book them.
# Authors
* Eashune Abenojar - Co-Founder/Developer
* David Pavlenko - Co-Founder/Developer
# Project Requirements
✔️ 1. Separates all database/business logic using the MVC pattern.
* Business logic and database under model folder
* All HTML files under views folder
* Routes to all the html files under the index.php
* index.php calls function in Controller to get data from model and return views.
* Classes under classes folder
* JSON and JavaScripts under scripts

✔️ 2. Routes all URLs and leverages a templating language using Fat-Free framework
* All routes are in the index.php and leverages a templating language using Fat-Free Framework

✔️ 3. Has a clearly defined database layer using PDO and prepared statements. You should have at least two related tables.
* All database layer is under model in data-layer.php. kidUser and creations are the related table (one to many relationship).

✔️ 4. Data can be viewed and added.
* Database layer uses PDO and prepared statements to add, retrieve, and delete from the database.

✔️ 5. Has a history of commits from both team members to a Git repository. Commits are clearly commented.
* Each teammate has over 30 commits, clearly commented.

✔️ 6. Uses OOP, and defines multiple classes, including at least one inheritance relationship.
* 3 classes. User, ProUser, and creation. User contains all fields such as name, grade, username, and password. ProUser extends User and contains all fields from user and subject. Creation contains fields such as name, description, type, and image to hold any creation made by user.

✔️ 7. Contains full Docblocks for all PHP files and follows PEAR standards.
* All PHP files contains DocBlock and Follows Pear Standards.

✔️ 8. Has full validation on the client side through JavaScript and server side through PHP.
* User and ProUser sign up, and Creation form has full validation on the client side through JavaScript (scripts/validate.js) and server side through PHP (model/validate.PHP).

✔️ 9. All code is clean, clear, and well-commented. DRY (Don't Repeat Yourself) is practiced.
* All functions and files are commented. Any code that was repeated was turned into a function and called upon instead of repeating code.

✔️ 10. Your submission shows adequate effort for a final project in a full-stack web development course.
* We learned quite a bit this quarter and we think our project was able to incorporate everything and then some! We definitely did not take the easy route!

BONUS: Incorporates Ajax that access data from a JSON file, PHP script, or API.
* Our project does not incorporate Ajax.

# UML Class Diagram
![UML Diagram](https://eabenojar.greenriverdev.com/328/dealership_project/diagram_img/UML.jpg)

# ER Database Diagram
![ER Diagram](https://eabenojar.greenriverdev.com/328/dealership_project/diagram_img/ER.jpg)

# Admin Page
* user: dealerAdmin
* pass: dealer@dmin
