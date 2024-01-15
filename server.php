<?php
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus officia enim dignissimos nobis veniam.';
    $badword = $_GET["badword"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><strong>Filtered Paragraph:</strong> <?php echo str_replace($_GET["badword"], '***', $paragraph) ?></div>
</body>
</html>