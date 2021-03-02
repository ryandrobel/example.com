<?php
include '../../core/db_connect.php';
require '../../core/session.php';
checkSession();

$content=null;
$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a>";

}

$content=<<<EOT

<div>
<a class="btn btn-link" href="add.php?id={$row['id']}">Add A Post</a>
<a class="btn btn-link" href="../users/add.php?id={$row['id']}">Add A User</a>
</div>



EOT;
echo $content;


include '../../core/layout.php';