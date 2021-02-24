<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roadmap</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Roadmap from fool to senir in week)</h1><br/>

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
                    <form method="post">
                        <input type="hidden" name="task_id" value="task_id">
                        <button name="done">Done</button>
                    </form>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>



</body>
</html>