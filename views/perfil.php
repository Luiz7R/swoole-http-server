<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User <?= $user['name'] ?></title>
</head>
<body>
    <ul>
        <li>
            <?= $user['id'] ?>
            <?= $user['name'] ?>
            <?= $user['email'] ?>
        </li>
    </ul>
</body>
</html>