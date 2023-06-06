<?php

session_start();

// echo "<h1>hello {$_COOKIE["email"]}</h1>"

     echo "<h1>hello {$_SESSION['email']} </h1>"  

?>