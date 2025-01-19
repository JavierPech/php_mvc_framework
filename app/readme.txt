This folder will have the following
- Entire application
- MVC structure files
- Libraries
- Config Files
- Helpers

Folder Structure
- config
- controllers
- helpers
- libraries
- models
- views
- .htaccess
- bootstrap.php

[libraries]
- core.php: analyzing URLS and decoding data/calling the respective functions passing the information to the controller
- database.php: PDO class to insert, update, etc.
- controller.php: load models/views

[.htaccess]
- Line 1 blocks all access to app folder

[bootstrap.php]
- Is in charge of loading essential files to make our app work.