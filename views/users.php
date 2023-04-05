<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Swoole</title>
    <link rel="icon" href="data:,">
</head>
<style>
table {
  border-collapse: collapse;
  width: 50%;
  margin-top: 2rem;
  margin-left: 20rem;
  margin-right: 20rem;
  margin-bottom: 2rem;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}
</style>
<body>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
      <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['email']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>