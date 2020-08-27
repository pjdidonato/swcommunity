<!DOCTYPE html>
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> </title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $(function () {
            $("#menu").menu();
            
        });
        $(function () {
            $("#menu1").menu();
        });
    </script>
  
        
    <style>
        .ui-menu1 {
            width: 200px;
        }
        .popup1{
            position: fixed;
            display: none;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            z-index: 999999;
            background: rgba(0,0,0,.9);
            text-align: center;
        }
        .popup1 .image,.popup1 video{
            width: 250px;
            height: 250px;
            display: inline-block;
        }
        .popup1 .close{
            top: 10px;
            right: 10px;
            position: absolute;
        }
        .ui-menu {
            width: 200px;
        }
        .popup1{
            position: fixed;
            display: none;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            z-index: 999999;
            background: rgba(0,0,0,.9);
            text-align: center;
        }
        .popup1 .image,.popup1 video{
            width: 250px;
            height: 250px;
            display: inline-block;
        }
        .popup1 .close{
            top: 10px;
            right: 10px;
            position: absolute;
        }
    </style>

</head>
<?php 
    switch ($_GET["n"])
    {
        case "home" : 
            $heading = "Home";
            $body = "";
        break;
        case "register" :
            $heading = "Register";
        break;
        case "profile" :
            $heading = "customize your profile";
            $body = "edit your profile";
        break; 
        case "settings" :
            $heading = "Settings";
            $body = "NBA";
        break;
        
        default:
            $heading = "Welcome";
            $body = "welcome to my site";
            break;
    }
    ?>
<body>

<nav> 
    
</nav>



<div class="header"> <p> header </p> </div>



<div class="topnav"> 
    <a href="index.php?n=home"> Home </a>
    <a href="index.php?n=register">Register</a> 
    <a href="index.php?n=profile"> Profile</a> 
    <a href="index.php?n=settings"> Settings</a> 
    
    


</div>

<div class="popup">
</div>
<ul id="menu">

    <li>
        <div>Info</div>
        <ul>
            <li> <div class="img" data-img="military.mov"> Info</div>  </li>
            <li> <div class="img" data-img="HM.jpeg,spencers1.jpeg,FullSizeRender 4.jpeg,FullSizeRender 6.jpeg"> Info</div></li>
            <li><div class="img" data-img="friends.jpeg,austin.mov"> Info</div></li>
            <li><div class="img" data-img="kj1.jpeg,kj2.jpeg"> Info</div></li>
            <li><div> Info</div></li>
        </ul>
    </li>

    <li>
        <div>Info</div>
        <ul>
            <li> <div>Info</div></li>
            <li><div> Info</div></li>
            <li><div> Info</div></li>
            <li><div> Info</div></li>
        </ul>
    </li>
    <li><div>Info</div>
        <ul>
            <li>
                <div>Info</div>
                <ul>

                    <li><div class="music" data-music="01 Tigers Jaw - The Sun.mp3">Info</div></li>
                    <li> <div class="music" data-music="Duran DuranRio.mp3">Info</div></li>
                    <li><div class="music" data-music="Matt and Kim - Block After Block.mp3">Info</div></li>
                    <li><div class="music" data-music="Saweetie - Tap In (Lyrics).mp3">Info</div></li>
                    <li><div class="music" data-music="Turnstile - Death Grip.mp3">Info</div><li>
                </ul>
            </li>


            <li><div>Info</div>
                 <ul>
                    <li><div>Info</div></li>
                    <li><div> Info</div></li></u><li><div> Info</div></li>
                    <li><div> Info</div></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<script>
    audio = null;
    $(".music").click((e)=>{
        if (audio !== null){
            audio.pause();
        }
        target = e.target;
        music = $(target).data('music');
        audio = new Audio("music/"+music);
        audio.play();
    });
    $(document).on('click','.close',()=>{$('.popup').fadeOut();});
    $(".img").click((e)=>{
        target = e.target;
        assets = $(target).data('img').split(",");
        $('.popup').html(`<button class="close">close</button>`);
        for(asset in assets){
            if(assets[asset].indexOf('mov') > -1){
                $('.popup').append(`<video controls src="pictures/${assets[asset]}"></video>`)
            }else{
                $('.popup').append(`<img class="image" src="pictures/${assets[asset]}" />`)
            }
        }
        $('.popup').fadeIn();
    });
</script>
</div>







<div class="popup1">
</div>
<ul id="menu1">

    <li>
        <div>Info</div>
        <ul>
            <li> <div class="img" data-img="military.mov"> Info</div>  </li>
            <li> <div class="img" data-img="HM.jpeg,spencers1.jpeg,FullSizeRender 4.jpeg,FullSizeRender 6.jpeg"> Info</div></li>
            <li><div class="img" data-img="friends.jpeg,austin.mov"> Info</div></li>
            <li><div class="img" data-img="kj1.jpeg,kj2.jpeg"> Info</div></li>
            <li><div> Info</div></li>
        </ul>
    </li>

    <li>
        <div>Info</div>
        <ul>
            <li> <div>Info</div></li>
            <li><div> Info</div></li>
            <li><div> Info</div></li>
            <li><div> Info</div></li>
        </ul>
    </li>
    <li><div>Info</div>
        <ul>
            <li>
                <div>Info</div>
                <ul>

                    <li><div class="music" data-music="01 Tigers Jaw - The Sun.mp3">Info</div></li>
                    <li> <div class="music" data-music="Duran DuranRio.mp3">Info</div></li>
                    <li><div class="music" data-music="Matt and Kim - Block After Block.mp3">Info</div></li>
                    <li><div class="music" data-music="Saweetie - Tap In (Lyrics).mp3">Info</div></li>
                    <li><div class="music" data-music="Turnstile - Death Grip.mp3">Info</div><li>
                </ul>
            </li>


            <li><div>Info</div>
                 <ul>
                    <li><div>Info</div></li>
                    <li><div> Info</div></li></u><li><div> Info</div></li>
                    <li><div> Info</div></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>



 </div>

<div class='content'> 
<section>
  <?php
        
        if ($_GET['n'] == 'register') {
            include("register.php");
        } 
?>

<sectin>
</div> 
<div class="login">

</div>
</div>










</body>
</html>