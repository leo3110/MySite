<?php if(strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'],"BR")) $_SESSION['lang']='pt-br';
else $_SESSION['lang']='en';
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>" dir="ltr">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f990165b2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/Style/css.css">
    <link rel="stylesheet" type="text/css" href="/Style/<?php echo $_SESSION['op'];?>.css">
    <link rel="stylesheet" type="text/css" href="/Style/<?php echo $_SESSION['op'];?>Anim.css">
    <script src="/Script/<?php echo $_SESSION['op'];?>.js"></script>
    <link rel="shortcut icon" href="/Img/d20.png">
    <link href='https://fonts.googleapis.com/css?family=Crimson Text' rel='stylesheet'>
    <title>DE Souza</title>
</head>
<body class="">
