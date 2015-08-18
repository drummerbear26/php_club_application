;<?php
    $raw_file = 'Hobbies.csv';
    
    if(isset($_POST['submitted'])){
        $new_line = "\n";
        // for each category the next two lines //
        $new_line .= $_POST['card_name'];
        $new_line .= ",";
        //end for each category //
        echo $new_line;
        file_put_contents($raw_file, $new_line, FILE_APPEND);
    }
    
    $file = file_get_contents("Hobbies.csv");
    $hobby = str_getcsv($file, "\n");
    array_splice($hobby, 0, 1);
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div></div>
    </body>
    
    <!-- go below form and create a div -->
    <div class="list">
        <table>
            <tr>
                <td>TCG</td>
                <td>Board Games</td>
                <td>Video Games</td>
                <td>RPGs</td>
                <td>MMOs</td>
                <td>Hobbies</td>
            </tr>
            <?php
                // loop through all the rows
                foreach ($hobby as $row) {
                    $parts = explode(',', $row);
                    echo "<tr>";
                    // loop through each part
                    foreach ($parts as $element) {
                    echo "<td>".$element."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</html>