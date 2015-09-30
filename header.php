<!doctype html>
<html lang="en" ng-app="App">
<head ng-controller="AppController as App">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title ng-bind="App.name"></title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo TEMPLATE_DIR; ?>/style.css"/>
    <?php wp_head(); ?>
</head>

<body id="page" class="page{{tab}}" ng-controller="AppController as App">
<header>
    <div class="wrapper">
        <h1 class="title"><span>Skill</span>touch</h1>
        <i class="fa fa-bars"></i>
        <ul id="nav">
            <?php $allPages   = get_pages(); ?>
            <?php $page_order = st_get_page_order($allPages); ?>
            <?php st_build_nav($page_order, $allPages); ?>
            <li class="call"><span><a href="tel:4048673431">Call</a></span></li>
        </ul>
    </div>
</header>