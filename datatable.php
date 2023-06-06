
<?php
include "filehandler.php";

$users =get_all_users();
//var_dump($users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>RoomNo</th>
                <th>image</th>
              
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($users as $user){
           // var_dump($user);
                echo "<tr>";
              $userData = trim($user,"\n");
              $userData =explode(":",$user);
            //   var_dump($userData) ;
                foreach($userData as $field){
                    echo "<td>$field</td>";
                }
                echo "</tr>";
            }
            ?>
         
        </tbody>

    </table>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>