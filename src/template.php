<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?= $title ?></h1>
    <main>
        <form action="" method="post">
            <textarea name="description" cols=100 id="description" readonly>
This is a list of projects I want to get done in future.
If I forget this I want to be sure that I will be able to remember again.
            </textarea>
            <input type="submit" value="Save" hidden>
        </form>
    </main>
</body>
</html>