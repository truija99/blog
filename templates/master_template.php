<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/components/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery UI core CSS -->
    <link href="vendor/components/jqueryui/themes/base/jquery-ui.min.css" rel="stylesheet">

    <!-- Site core CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        body {
            padding-top: 70px;
        }
    </style>


    <!-- jQuery -->
    <script src="vendor/components/jquery/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js?<?php echo COMMIT_HASH;?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js?<?php echo COMMIT_HASH;?>"></script>
    <![endif]-->


</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-dark bg-dark mb-3 navbar-expand-lg navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><?php echo PROJECT_NAME; ?></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item<?php echo $controller == 'posts' ? ' active"' : '"' ?>>
                    <a class="nav-link" href="<?php echo BASE_URL;?>posts">Posts</a>
                </li>
                <li class="nav-item<?php echo $controller == 'tags' ? ' active"' : '"' ?>>
                    <a class="nav-link" href="<?php echo BASE_URL;?>tags">Tags</a>
                </li>
                <li class="nav-item<?php echo $controller == 'users' ? ' active"' : '"' ?>>
                    <a class="nav-link" href="<?php echo BASE_URL;?>users">Users</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['language']; ?> <b
                                class="caret"></b></a>
                    <div class="dropdown-menu">
                        <?php foreach ($supported_languages as $language): ?>
                            <a class="dropdown-item" href="<?php echo $controller; ?>?language=<?php echo $language; ?>"
                               class="<?php echo $language == $_SESSION['language'] ? 'active' : '' ?>"><?php echo $language; ?></a>

                        <?php endforeach ?>
                    </div>
                </li>
                <li><a href="settings"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
                <li title="<?php echo __('Log out')?> <?php echo $auth->name; ?>"><a href="logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <?php if (!file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/' . $controller . '/' . $controller . '_' . $action . '.php</i> does not exist. Create that file.'); ?>
    <?php @require "views/$controller/{$controller}_$action.php"; ?>

</div>
<!-- /container -->

<?php require 'templates/partials/error_modal.php'; ?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="vendor/components/bootstrap/js/bootstrap.min.js?<?php echo COMMIT_HASH;?>"></script>
<script src="vendor/components/jqueryui/jquery-ui.min.js?<?php echo COMMIT_HASH;?>"></script>
<script src="assets/js/main.js?<?php echo COMMIT_HASH;?>"></script>
</body>
</html>
<?php require 'system/error_translations.php' ?>
