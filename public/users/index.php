<?php
include '../../core/db_connect.php';

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"layout.php?email={$row['email']}\">{$row['first_name']}</a>";

}

$content=<<<EOT

<div>
<a class="btn btn-link" href="add.php?id={$row['id']}">Add A Post</a>
<a class="btn btn-link" href="../users/add.php?id={$row['id']}">Add A User</a>
</div>

EOT;
echo $content;


include '../../core/layout.php';