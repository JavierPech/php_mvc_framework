FOLDER STRUCTURE
- This folder contains one php file per page on the system
- In you have an home, about and products page for the website,
  then you will have a home.php, about.php, products.php
  
[CONTROLLER STRUCTURE]
- each controller must be a class that extends to the core library Controller
- each controller must have a function defined with the value found in the Core.php file within the variable $currentMethod(index)
- any function in a controller will call its respective view i.e. about function will call the view about.php