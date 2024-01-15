<?php
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus officia enim dignissimos nobis veniam.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <div><strong>Paragraph:</strong> <?php echo $paragraph; ?></div>
    <div><strong>Length:</strong> <?php echo strlen($paragraph); ?></div>
    <form action="server.php" method="get">
        <label for="badword">Let a Bad Word: </label>
        <input type="text" name="badword" id="badword">
        <button type="submit">Enter</button>
    </form>
</body>
</html>