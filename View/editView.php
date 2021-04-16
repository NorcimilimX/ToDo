<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Edit Checkpoint</title>
</head>
<body>

    <h1>Edit task</h1>

    <a href="/">Return to index</a>

    <form action="/EditController.php" method="post">
        <div class="form-content">
            <input type="hidden" name="taskId" value="<?= $checkpoint['id']?>">
            Title: <input type="text" name="title" value="<?= $checkpoint['title']?>">
            Description: <textarea rows="5" name="description"><?= $checkpoint['description']?></textarea>
            Index Number: <input type="number" name="index_number" value="<?= $checkpoint['index_number']?>">
            <button type="submit">Edit</button>
        </div>
    </form>

</body>
</html>
