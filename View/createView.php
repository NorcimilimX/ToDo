<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>CreateCheckpoint</title>
</head>
<body>

<h1>Create New Task</h1>
<a href="/">Return to index</a>
<div>
    <form action="/CreateController.php" method="post">
        <div class="form-content">
            Title: <input type="text" name="title" value="" required>
            Description: <textarea rows="5" name="description"></textarea>
            Index Number: <input type="number" name="index_number" value="">
            <button type="submit">Create</button>
        </div>
    </form>
</div>


</body>
</html>
