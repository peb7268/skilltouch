<!doctype html>
<html lang="en" ng-app="App">
<head ng-controller="AppController as App">
    <meta charset="UTF-8">
    <title ng-bind="App.name"></title>

    <link rel="stylesheet" href="<?php echo TEMPLATE_DIR; ?>/style.css"/>
    <?php wp_head(); ?>
</head>

<body ng-controller="AppController as App">
<header>
    <div class="wrapper">
        <h1 class="title"><span>S</span>killtouch</h1>
        <ul id="nav" ng-init="tab = 1">
            <li><span ng-class="{active:tab===1}"><a href="#home" ng-click="tab = 1">Home</a></span></li>
            <li><span ng-class="{active:tab===2}"><a href="#gettoknowus" ng-click="tab = 2">Get to know us</a></span></li>
            <li><span ng-class="{active:tab===3}"><a href="#workwithus" ng-click="tab = 3">What we do</a></span></li>
            <li><span ng-class="{active:tab===4}"><a href="#getintouch" ng-click="tab = 4">Get in touch</a></span></li>
            <li class="call"><span><a href="tel:4048673431">Call</a></span></li>
        </ul>
    </div>
</header>