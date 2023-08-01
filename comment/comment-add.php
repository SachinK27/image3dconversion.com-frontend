<?php
/**
 * This script is to add the comment to database.
 */
use Phppot\DataSource;
require_once __DIR__ . '/DataSource.php';
$database = new DataSource();
$sql = "INSERT INTO blog_comments(parent_comment_id, comment, article_id, comment_sender_name) VALUES (?,?,?,?)";
$paramType = 'isis';
if (isset($_POST['name'])) {
    $paramValue = array(
        $_POST["comment_id"],
        $_POST["comment"],
        $_POST["article_id"],
        $_POST["name"]
    );
    $result = $database->insert($sql, $paramType, $paramValue);
    echo $result;
}