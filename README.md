# php_mvc_framework
MVC Framework built with PHP + PDO for database interaction.

[CONFIGURATION]
- app/config/config.php: Change database credentials to suit your project. Make sure to define the SITENAME & URLROOT here. Example of URLROOT is provided.
- entry controller can be configured under Core/libraries. If you wish to use a different controller just change the value for __ENTRYPOINT and $currentController;
- line 4 of .htaccess inside public/ needs to be updated with the name of the project folder. If you don't change the project name, leave it as is.

[ACCESSING A PAGE]
- All pages are created under the folder controllers.
- To access a page, you will put the EXACT NAME of a controller WITHOUT THE .PHP extension in the address bar of your web browser, i.e. http://localhost/php_mvc_framework/Home

[SAMPLES]
There are 3 sample pages within this project, with Home controller being the entry point.
- Home: The source code of this sample can be found under controllers/Home.php. This sample shows how to configure a new page, that is, controller + view. Each controller must have a folder under views. It would be good practice to have the same name as the controller for the view folder that corresponds to the controller.
- DatabaseSelect: this sample shows how to do a select statement with the PDO class. Note as how the constructor for this controller is used to instantiate the Database connection.
- DatabaseInsert: documentation in progress.

[HOW TO CHANGE THE ENTRY POINT]
- The default entry point for the framework is Home.php controller.
- If you wish to modify the entry point to another file, you must edit $currentController variable which holds the default entry point. This needs to be the name of your new controller name WITHOUT THE .PHP extension. This variable is in libraries/Core.php line 12.

[HOW TO CREATE A PAGE]
- This framework uses the folder controllers to register pages.
- To create a new page, you must first create a new php file in the controllers folder. The PHP file MUST HAVE THE SAME name as its class i.e. Test.php -> class Test{ }
- Each controller class under controllers MUST EXTEND controller.
- Each controller class must have an index function defined. the "index" function will be the entry point for your new page.
- If you want to change entry function name from "index" to something like "start", you must update the $currentMethod variable located un Core.php to "start".
- Dont forget to append your constructor to your controllers as you need to call your models/db connection here.
- The entry function is used to call the respective view for a controller.
- Each controller must have its own folder under views, it would be good practice to have a similiar folder name as the name of the controller.
- To load a view, you can use the inherited method $this->view("view_dirr") to load its respective view. Make sure not to append the .php extension as its not required.
- The php file for a view must only contain whats inside the <body> tags of an html file as the header.php and footer.php already incorporate the necessary structure.
- To access a new page, simply call it in your addres bar with the same name of the file WITHOUT THE .PHP EXTENSIONS i.e: http://localhost/php_mvc_framework/Home

[How To Use Database Samples]
- Documentation in progress.


.htaccess
- Will automatically route all incoming requests to public/index.php