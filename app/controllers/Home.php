<?php

class Home extends Controller{
    public function __construct(){
        //MODELS CAN BE CALLED HERE
    }
    
    public function index(){
        
        $data = [
            "title" => "PHP MVC FRAMEWORK",
            "subtitle" => "This is the entry point of the framework. Please reference to the README.md for additional usage.<br><h5>Usage</h5>This framework calls pages based on the url in the following definition: project/page/method/variables1/variable2...<br><ul><li><b>page</b>: A page is a file located under the app/controllers folder. Note that the entry point is Home.php. To alter the entry point, locate the source code libraries/Core.php and modify the variable '<b>currentController</b>'. A Controller is a page, and to access a controller, provide the name of the file in the url. All controllers must have a default function called <b>'index()'</b> which calls its initial view. A view must be defined under the folder app/views. It would be of good practice to have one folder in <b>app/views</b> per controller.</li><li><b>method:</b> A method is the function that will load a particular appearance or provide an interaction to a page. By default this framework automatically calls a method <b>index</b> per controller, that means all controllers must have an index function predefined.</li></ul><h5>Database Testing</h5><br>There are two controllers in this project that demonstrate how to perform an insert and show records from a database 'DatabaseInsert' and 'DatabaseSelect'. Accessing them is as easy as providing the required file in the url i.e. <b>'project_name/DatabaseInsert'</b>. Before using these samples you must create a database called 'mvc', the proceed to create an entity products with the following attributes:<ul><li> id_product int</li><li>product text</li><li>qty int</li><li>img text</li></ul>Dont forget to modify the <b>config.php</b> located in the <b>config</b> folder and provide your database credentials.<br><br><h5>Source Code Modification</h5><br>The source code of this page can be found under Controller/Home.php under the method index. To provide diferent views for a page, append a new function and call it in the url. For example<ul><li>New method: page</li><li>Url: Home/page</li></ul>Go ahead and give it a try, the method has been precreated for you."
        ];
        
        $this->view("home/index", $data);
    }
    
    public function page(){
        $data = [
            "title" => "PHP MVC FRAMEWORK",
            "subtitle" => "This is the new view function."
        ];
        
        $this->view("home/page", $data);
    }
    
}
