<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roadmap</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Todo</h1><br/>

    <a href="CreateController.php">Create new!</a>

    <div class="wrapper">
    <!--for each checkpoints render checkpoint-->
        <?php  foreach($checkpoints as $checkpoint): ?>
            <div class="task <?= $checkpoint['is_completed'] ? 'completed' : 'todo' ?>">

                <h3><?= $checkpoint["title"] ?></h3>
                <?php if(!is_null($checkpoint["description"])): ?>
                    <p><?= $checkpoint["description"] ?></p>
                <?php endif; ?>
                <?php if($checkpoint['is_completed']): ?>
                    <span>Completed!</span>
                <?php else: ?>
                    <form action="/IndexController.php" method="post">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="task_id" value="<?= $checkpoint['id']?>">
                        <button type="submit" name="done">Done</button>
                    </form>
                <?php endif; ?>

                <form action="/IndexController.php" method="POST">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="task_id" value="<?= $checkpoint['id']?>">
                    <button type="submit" name="delete">Delete</button>
                </form>

                <a href="/EditController.php?taskId=<?= $checkpoint['id'] ?>" >Edit</a>


            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>