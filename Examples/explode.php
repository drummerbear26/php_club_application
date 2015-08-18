<?php 
    $friends = file_get_contents('listoffriends.txt');
    $friends_array = explode(',', $friends);
    print_r($friends_array);
    echo "<pre>";
    foreach($friends_array as $friend){
        echo $friend .' is my friend'."\n";
    }
    echo "</pre>";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Explode</title>
    </head>
    <body>
        <div></div>
    </body>
</html>