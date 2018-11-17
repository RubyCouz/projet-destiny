<?php

 if (!empty($_COOKIE['gtCookies']) && !empty($_COOKIE['passwordCookies']))
 {
     header('Location: ../views/home.php');
 }

 