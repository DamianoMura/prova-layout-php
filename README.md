# prova-layout-php

we create a main scaffolding in php to create a template layout:

### considerations

we want as standard layout, just 3 main sections...

1. navbar
2. main
3. footer

the index contain the static part of the page,
Inside the < main > we include a php file that sets up the view of the page called core/pageBuilder.php
this php file contains functions to find the path of the file we are looking for and checks if it exists
if so it includes that page into the html
and the method view($view) does exactly that
