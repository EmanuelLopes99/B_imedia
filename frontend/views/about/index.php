<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use app\models\About;
use app\models\Equipe;
use app\models\Outros;
use app\models\Imagens;

$SobAbout = About::find()->select('*')->from('about')->orderBy('id DESC')->limit(1)->all();
$aboutImg = About::find()->select('*')->from('about')->orderBy('id DESC')->limit(3)->all();
$SobEquipa = Equipe::find()->select('*')->from('equipe')->orderBy('id DESC')->limit(4)->all();
$SobOutros = Outros::find()->select('*')->from('outros')->orderBy('id DESC')->limit(1)->all();
$sobImg = Imagens::find()->select('*')->from('imagens')->orderBy('id DESC')->limit(3)->all();
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
    
    <link rel="stylesheet" href="css/arena-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="images/logo4.png" rel="shortcut icon">

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
                      <!--   <img src="images/logo4.png" alt=""style="width:50px;"> -->
                        <?php echo Html::img('@web/images/logo4.png', ['style' => 'width:50px;']) ?>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                            <li><a class="active" href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                            <li><a href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
                            <li><a href="<?php echo Url::to(['site/contact']); ?>">Contactos</a></li>
                        </ul>
                        <a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Fim de Header -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-banner-section about-banner">
            <div class="container">
                <div class="page-banner-box">
                    <h1>Quem nós somos</h1>
                </div>
            </div>
        </section>
        <!-- Fim page-banner section -->

        <!-- page-banner-section
            ================================================== -->
        <section class="page-list">
            <div class="container">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre-nós</a></li>
                </ul>
            </div>
        </section>
        <!-- Fim page-banner section -->


        <!--section -Sobre-nós
            ================================================== -->
        <section class="about-section">
            <div class="container">
                <div class="about-box">
                    <div class="row">
                        <?php foreach ($SobAbout as $sobrenos): ?>
                               <div class="col-lg-6">
                                    <div class="about-post">
                                        <h2>Nossa Missão</h2>
                                        <p><?php echo $sobrenos['missao'] ?></p><br>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="about-post">
                                        <h2>Nossa Filosófia</h2>
                                        <p><?php echo $sobrenos['filosofia'] ?></p><br>
                                    </div>
                                </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="about-box">
                    <div class="row">
                         <?php foreach ($sobImg as $img): ?>
                            <div class="col-md-4">
                                <div class="about-post-image">
                                    <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$img['images']))?>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim de section sobre -->

        <!-- parceiros
            ================================================== -->
        <section class="team-section">
            <div class="container">
                <div class="title-section">
                    <h1>Conheça nossa equipa</h1>
                        <?php foreach ($SobOutros as $equipe): ?>
                            <p style="text-align: left;"><?php echo $equipe['desc_equipe'] ?></p>
                        <?php endforeach ?>
                </div>

                <!-- Mostrar equipes do ABC -->
                <div class="team-box owl-wrapper">
                    <div class="owl-carousel" data-num="4">
                            <?php foreach ($SobEquipa as $fotos): ?>
                            <div class="item">
                                <div class="team-post">
                                    <div class="inner-team-post">
                                        <div class="image-hover">
                                            <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$fotos['foto']))?>
                                        </div>
                                        <h2><?php echo $fotos['nome'] ?></h2>
                                        <p><?php echo $fotos['funcao'] ?></p>
                                        <ul class="social-icons">
                                            <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="https://twitter.com/login?lang=pt"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="google" href="https://www.google.fr/?hl=pt"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="pinterest" href="https://br.pinterest.com/login/"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        <?php endforeach ?>                        
                    </div>
                </div>

            </div>
        </section>
        <!-- fim da equipa -->

        <!-- clientes
            ================================================== -->
        <section class="clients-section">
            <div class="clients-box">
                <h2 class="text-center">-- Nossos Clientes --</h2>
                <ul class="client-list">
                    <p>Espaço para os clientes</p>
                    <?php echo Html::img("@web/image/logo-imedia1.png")?>
                    <?php echo Html::img("@web/image/logo-frut&pao1.png")?>
                    <?php echo Html::img("@web/image/logo-imoafrica1.png")?>
                </ul>
            </div>
        </section>
        <!-- clientes -->
    </div>
    <!-- fim Container -->

    <script src="js/arena-plugins.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>