<?php

$paragraph = $_POST["paragraph"];
$paragraphLength = strlen($_POST["paragraph"]);
$toReplace = $_POST["censor"];
$wordToUse = '***';
$paragaphCensored = str_ireplace($toReplace, $wordToUse, $paragraph);
$paragaphCensoredLength = strlen($paragaphCensored);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        Your Paragraph:
        <p>
            <?php echo $paragraph; ?>
        </p>
        <div>
            Number of Characters: <?php echo $paragraphLength ?>
        </div>
        <h1>Hidden Paragraph:</h1>
        <p>
            <?php echo $paragaphCensored; ?>
        <div>
            Number of Characters: <?php echo $paragaphCensoredLength ?>
        </div>
        </p>
    </div>

</body>

</html>