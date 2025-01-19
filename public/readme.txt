PUBLIC folder will contain
- the main entry of our app (index.php)
- .htaccess for routing
- static assessts(css, js, jQuery, etc)

.htaccess
- Lines 1 - 9 are for routing
  * Line 2 avoids going deeper into a folder ex /public/test and will pass test as a variable
  * 3 - 4 all routing will go to this folder
  * 6 - 7 if a particular file is not found, go to index.php