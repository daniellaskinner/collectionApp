<?php
require_once 'functions.php';

?>

<!--write the form with inputs-->
<html>
    <head>

    </head>

    <body>
        <form>
            <input type="text" name="name" placeholder="Cheese Name" formmethod="POST">
            <input type="text" name="name" placeholder="Cheese Name" formmethod="POST">
            <input type="text" name="name" placeholder="Cheese Name" formmethod="POST">
            <input type="text" name="name" placeholder="Cheese Name" formmethod="POST">
            <input type="text" name="name" placeholder="Cheese Name" formmethod="POST">
            <button type="submit" name="add">Add to collection</button>
        </form>
    </body>
</html>


<?php
//submit the form data to another php file (action= add.php, method=post)

//grab the data from $post superglobal array

//call the sanitising function- unit test these

//create a db connection

//

//create a function to add to the db params will be data to be added
//bindParam() these bits of data


//boot back to home page using header function