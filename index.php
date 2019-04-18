<html>
<head>
</head>
<body>
    Avatar URL: <?php 
        require 'SteamAvatar.php';
        echo getAvatar("76561198068462075"); 
    ?>
        <img src="<?php echo getAvatar("76561198068462075"); ?>">
    <br>
    Wrong id:
        <img src="<?php echo getAvatar("0"); ?>">
    <br>
    Correct ID:
    <img src="<?php echo getAvatar("76561198068462075"); ?>">
</body>
</html> 
