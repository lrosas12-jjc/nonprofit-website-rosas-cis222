<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./content/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <?php
        $hour = date("H")

        if($hour < 12)
            {
                $greeting = "Morning!"
            }
        elseif($hour <18)
            {
                $greeting = "Afternoon!"
            }
        else
            {
                $greeting = "Evening!"
            }

        echo "<p>Hello and " . $greeting " from the Internet!</p>"
        echo "<p>Today is: " . date(f j, Y, " at " H:S) . "</p>"

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

