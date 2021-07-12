<!--
 █████╗ ███╗   ██╗ ██████╗ ███╗   ██╗    ██╗  ██╗██╗███████╗██╗   ██╗
██╔══██╗████╗  ██║██╔═══██╗████╗  ██║    ██║  ██║██║██╔════╝██║   ██║
███████║██╔██╗ ██║██║   ██║██╔██╗ ██║    ███████║██║█████╗  ██║   ██║
██╔══██║██║╚██╗██║██║   ██║██║╚██╗██║    ██╔══██║██║██╔══╝  ██║   ██║
██║  ██║██║ ╚████║╚██████╔╝██║ ╚████║    ██║  ██║██║███████╗╚██████╔╝
╚═╝  ╚═╝╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═══╝    ╚═╝  ╚═╝╚═╝╚══════╝ ╚═════╝ 
--->                                                                    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang chưa được cài đặt</title>
    <link rel="shortcut icon" href="https://www.iconpacks.net/icons/1/free-settings-icon-778-thumb.png" />
    <meta name="description" content="Trang web chưa được cài đặt">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet'>
    <?php 
    
  function generateRandomString($length = 6) {
    $characters = '0123456789ABCDEF';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
    $love = generateRandomString();
    $love1 = generateRandomString();
?>

<body style="background: <?php echo '#'.$love; ?>;">

    <style>
    body {
        font-family: 'Dancing Script';
        font-size: 50px;
    }

    #mydiv {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }
    </style>
    <div id="mydiv">Under Construction<img src="https://i.imgur.com/By6muTH.gif" style="width:100px;height:100px;"><br>
        <font
            style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:<?php echo '#'.$love1;?>; text-shadow: 0pt 0pt 0.9em rgb(250, 75, 212), 0pt 2pt 0.9em rgb(255, 74, 210);">
            <b>Reload to change color !!!</b>
        </font>
    </div>

</body>
</head>

</html>