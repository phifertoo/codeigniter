<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
</head>
<body>
    <h1>
        <?php
        /* receives the $result variable from the $data 
        provided from the users controller */
        foreach($results as $object) {
            echo $object->password;
            echo $object->username;
        }

        $hello['a'] = "b";
        echo $hello['a'];
        ?>
    </h1>
</body>
</html>