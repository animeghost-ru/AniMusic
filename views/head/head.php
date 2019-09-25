<?

function headOutput($title, $version)
{
    echo
'<!-- App-Version - '.$version.' -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>'.$title.'</title>
        <link href="/public/main.css" rel="stylesheet">
    </head>
';
}