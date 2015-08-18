<?php
    //shortcut method for getting file content
    $myfile = file_get_contents("misc.txt");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Club Application Form</title>    
    </head>
    <body>
        <section>
            <h1>Short cut for getting file content</h1>
            <div><pre><?php echo $myfile; ?> </pre></div>
        </section>
    </body>
</html>