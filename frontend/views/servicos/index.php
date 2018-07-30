<?php
use app\models\Home;
use app\models\Blog;
use app\models\Servicos;
use app\models\Noticias;
use app\models\Outros;
use yii\helpers\Url;
use yii\helpers\Html;

$sobABC = Home::find()->select('*')->from('home')->orderBy('id DESC')->limit(1)->all();
$outrosDados = Outros::find()->select('*')->from('outros')->orderBy('id DESC')->limit(1)->all();
$servicos = Servicos::find()->select('*')->from('servicos')->orderBy('id DESC')->limit(6)->all();

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

                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo4.png" alt="" style="width:50px;">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li><a href="index.php">Home</a></li>
                            <li><a class="active" href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                            <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                            <li><a href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
                            <li><a href="<?php echo Url::to(['site/contact']); ?>">Contactos</a></li>
                    </ul>
                        </ul>
                        <a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-banner-section services-banner">
            <div class="container">
                <div class="page-banner-box">
                    <h1>O que fazemos</h1>
                </div>
            </div>
        </section>
        <!-- End page-banner section -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-list">
            <div class="container">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                </ul>
            </div>
        </section>
        <!--  page-banner section -->

        <!-- serviço section2
            ================================================== -->
        <section class="services-section2">
            <div class="container">

                <div class="services-box">
                    <div class="row">
                        <?php foreach ($servicos as $servec): ?>
                        <div class="col-lg-6">
                            <div class="services-post">
                                <div class="services-content">
                                    <h2><span><?= Html::img(Url::to(Yii::getAlias('@ImgUrl').'/'.$servec['icon']), ['style' => 'width: 40px']) ?></span><?php echo $servec['nome'] ?></h2>
                                    <p><?php echo $servec['descricao'] ?> </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
                
                <div class="center-area" >
                    <h1>Nós fornecemos melhores soluções</h1>
                    <?php foreach ($outrosDados as $soluc): ?>
                        <p style="text-align: center" > <?php echo $soluc['solucoes'] ?></p>
                        <a class="button-one" href="<?php echo Url::to(['contacto/index']); ?>">Contacte-nos</a>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
        <!-- section serviço -->

        <!-- O que fazemos
            ================================================== -->
        <section class="what-we-do">
            <div class="image-holder">
                <?php echo Html::img(Url::to('@web/upload/others/img2.jpg')) ?>
            </div>
            <div class="what-we-do-upper">
                <div class="container">
                    <div class="what-we-box">
                        <div class="inner-content">
                            <h1>O que nós somos</h1>
                            <?php foreach ($sobABC as $abc): ?>
                                  <p> <?php echo substr($abc['valores'], 0, 250) ?></p>
                            <!-- <ul>
                                <li>Nunc dignissim risus id metus.</li>
                                <li>Cras ornare tristique elit.</li>
                                <li>Vivamus vestibulum nulla nec ante.</li>
                                <li>Praesent placerat risus quis eros.</li>
                            </ul> -->
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--      -->

        <!--
            ================================================== -->
        <section class="what-we-do2">
            <?php echo Html::img(Url::to('@web/upload/others/img1.jpg')) ?>
            <div class="what-we-do-upper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="what-we-box">
                                <div class="inner-content">
                                    <h1>Explorar. Creatividade.</h1>
                                    <?php foreach ($outrosDados as $criat): ?>
                                        <p><?php echo $criat['criatividade'] ?> </p>
                                    <!-- <ul>
                                        <li>Nunc dignissim risus id metus.</li>
                                        <li>Cras ornare tristique elit.</li>
                                        <li>Vivamus vestibulum nulla nec ante.</li>
                                        <li>Praesent placerat risus quis eros.</li>
                                    </ul> -->
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================================== -->

    </div>
    <!-- fim Container -->

    <script src="js/arena-plugins.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en" type="text/javascript"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>