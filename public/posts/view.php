<?php
include '../../core/db_connect.php';

$input = filter_input_array(INPUT_GET);
$email = preg_replace("/[^a-z0-9-]+/", "", $input['email']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
$stmt->execute([$email]);
$row = $stmt->fetch();



$content=<<<EOT
<h1>{$row['first_name']}</h1>
{$row['last_name']}<br>
{$row['email']}<br>
{$row['created']}

<div>
<a class="btn btn-link" href="add.php?id={$row['id']}">Add</a>
<a class="btn btn-link" href="edit.php?id={$row['id']}">Edit</a>
<a class="btn btn-link" href="delete.php?id={$row['id']}">Delete</a>
</div>



EOT;
echo $content;

