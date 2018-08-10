<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use app\models\Home;
use app\models\Contact;

$sobABC = Home::find()->select('*')->from('home')->orderBy('id DESC')->limit(1)->all();
$sobContact = Contact::find()->select('*')->from('contact')->orderBy('id DESC')->limit(1)->all();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>Africa Business Consulting</title>
    <?php $this->head() ?>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="images/logo4.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/arena-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<?php $this->beginBody() ?>
    <!-- Container -->
    <div id="container">
        <!-- Header
            ================================================== -->
        <header class="clearfix">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">

                    <a class="navbar-brand" href="index.php">
                        <?php echo Html::img(Url::to('@web/images/logo4.png'), ['style' => 'width:50px;'])?>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                            <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                            <li><a href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
                            <li><a class="active" href="<?php echo Url::to(['site/contact']); ?>">Contactos</a></li>
                        </ul>
                        <a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <!--fim Header -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-banner-section contact-banner">
            <div class="container">
                <div class="page-banner-box">
                    <h1>Entrar em contacto</h1>
                </div>
            </div>
        </section>
        <!-- fim page-banner section -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-list">
            <div class="container">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="<?php echo Url::to(['site/contact']); ?>">contactos</a></li>
                </ul>
            </div>
        </section>
        <!-- fim page-banner section -->

        <!-- contactos-section
            ================================================== -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-box">
                    <div class="row">
                        <div class="col-md-8">

                            <div id="map" class="border">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.2197061293!2d-23.5103337857064!3d14.924847973050598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935991dd4eb82ed%3A0x42fda7cb17d390e3!2sAFRICA+BUSINESS+CONSULTING!5e0!3m2!1sen!2scv!4v1530104310418" width="728" height="498" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="contact-details">
                                <h2>Sobre ABC</h2>
                                <?php foreach ($sobABC as $home): ?>
                                     <p> <?php echo $home['missao'] ?></p>
                                <?php endforeach ?>
                            </div>
                            <div class="contact-details">
                                <h2>Contactos detalhados</h2>
                                <?php foreach ($sobContact as $contact): ?>
                                    <ul class="info-list">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <?php echo $contact['endereco'] ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <?php echo ('(+238) '), $contact['telefone'] ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <?php echo $contact['email'] ?>
                                        </li>
                                    </ul>
                                 <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row center">
                <div class="col-lg-8 ">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <h2>Envia sua mensagem!</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($model, 'name')->textInput() ?>
                            </div>
                            <div class="col-md-6">
                                 <?= $form->field($model, 'email') ?>
                             </div>
                        </div>
                        <?= $form->field($model, 'subject') ?>
                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>
                        <div class="form-group">
                            <?= Html::submitButton('Enviar Menssagem', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        </section>
        <!-- fim da sessão contacto -->
    </div><!-- Fim de contener -->

    <script src="js/arena-plugins.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
