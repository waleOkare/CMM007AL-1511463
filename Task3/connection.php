<!--- This is the connection file to the Sql database.

<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b6ec05aff05f02');
define('DB_PASSWORD', '6889ce42');
define('DB_DATABASE', 'CMM007ALDB-1511463');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db) {

    echo "Successful Connection to the database";
} else {

    echo "Failed to connect to the database";
}

?>


