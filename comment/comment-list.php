<?php
/**
 * This script is to list the comments in a nested order.
 */
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Phppot\DataSource;
require_once __DIR__ . '/DataSource.php';
$database = new DataSource();
// $id = $_POST['id'];

$sql = "SELECT * FROM blog_comments  ORDER BY parent_comment_id ASC, comment_id ASC";

$result = $database->select($sql);
echo json_encode($result);