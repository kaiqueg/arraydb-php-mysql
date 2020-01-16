<?php
include_once "config.php";

\ArrayDB\Database\Settings::setConnectionConfig(connectorSettings);

$db = new \ArrayDB\Database\Connector(table);

$create = $db->createSchema("new_table_test__" . floor(rand(0,999))) ? "Y" : "N";

echo "<b>Created</b>: $create";
echo "<br/><b>Table name</b>: {$db->getTable()}";