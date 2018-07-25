<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Blog;

$blogcategoria = Blog::find()->select('*')->from('blog')->all();
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
    <link href="@web/images/logo4.png" rel="shortcut icon">

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
                        <?php echo Html::img(Url::to('@web/images/logo4.png'), ['style' => 'width:50px;']) ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="<?php echo Url::to(['servicos/index']); ?>">Serviços</a></li>
                            <li><a href="<?php echo Url::to(['about/index']); ?>">Sobre Nós</a></li>
                            <li><a href="<?php echo Url::to(['site/contact']); ?>">Contactos</a></li>
                            <li><a class="active" href="<?php echo Url::to(['blog/postagens']); ?>">Posts</a></li>
                        </ul>

                        <a href="#" class="open-close-menu" style="display: none;"><i class="fa fa-align-justify"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <!--  Header -->

        <!---banner-section
            ================================================== -->
        <section class="page-banner-section blog-banner">
            <div class="container">
                <div class="page-banner-box">
                    <h1>Blog</h1>
                </div>
            </div>
        </section>
        <!-- -banner section -->

        <!-- -banner-section
            ================================================== -->
        <section class="page-list">
            <div class="container">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="<?php echo Url::to(['blog/index']);?>">blog</a></li>
                </ul>
            </div>
        </section>
        <!-- -banner section -->

        <!-- blog-section
            ================================================== -->
        <section class="blog-section">
            <div class="container">
                <div class="blog-box">
                <div class="row">
                <!-- Comesa o id do blog a ser apresentado e seus conteudos -->
                 <?php foreach ($blogcategoria  as $post): ?>
                     <div class="col-lg-4">
                        <div class="blog-post">
                            <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$post['post']))?>
                                <div class="post-content">
                                    <h3><a href="<?= Url::to(['blog/view', 'id' => $post['id']]) ?>"><?php echo$post['nome'] ?></a></h3><!-- Ver todos os dados do blog numa view ta certo kkk -->
                                    <p><?php echo substr($post['descricao'], 0, 100) ?> ...</p>
                                </div>
                        </div> 
                    </div>
                <?php endforeach ?>     
                </div>
            </div>
        </div>
        </section>
        <!-- blog section -->

    </div>
    <!--  Container -->

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