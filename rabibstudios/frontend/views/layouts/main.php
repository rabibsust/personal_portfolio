<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Application Developer, Software Engineer, PHP Developer, Javascript Developer, Mobile Application Developer, Wordpress developer, Graduated from Shahjalal University of Science and Technology, Works for large medium and smale scale projects.">
		<meta name="keywords" content="Shafi Consultancy, SAS Consultancy, Shahjalal University of Science and technology, SUST, SAS programming support, Web Application, Software Engineer, Web application support, outsource, offshore, PHP, JAVA, JavaScript, Risk Based Source Data Verification, SDV, Rabib, Rabib Ahmad, Ahmad Jamaly Rabib, PHP programmer, Bangladesh, Sylhet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Tangerine'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Cinzel'>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    ?>
    <a class="navbar-brand" href="#"> RabibStudios </a>
    <?php
    
    if (Yii::$app->user->isGuest) {
    		$menuItems = [
	        ['label' => 'About', 'url' => ['#about']],
	        ['label' => 'Portfolio', 'url' => ['#portfolio']],
	        ['label' => 'Contact', 'url' => ['#contact']],
    		];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
    		$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Rabib Studios <?= date('Y') ?></p>

        <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
</html>
<?php $this->endPage() ?>
