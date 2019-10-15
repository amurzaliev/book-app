<?php

if (file_exists('db.env.php'))
    return include 'db.env.php';

return include "db.dist.php";
