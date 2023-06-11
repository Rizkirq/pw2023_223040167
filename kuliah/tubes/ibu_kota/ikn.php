<?php $style = '../style.css';
$home = "../index.php"; ?>
<?php require("../views/nav.php"); ?>
<?php require("../views/header.php"); ?>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    #video-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
    }

    #video-foreground {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
<div id="video-background">
    <video id="video-foreground" autoplay loop muted>
        <source src="../video/video.mp4" type="video/mp4">
    </video>
</div>