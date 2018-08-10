<?php 
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Home;
use app\models\Blog;
use app\models\Fotografia;

$this->title = $model->id;

$sobABC = Home::find()->select('*')->from('home')->orderBy('id DESC')->limit(1)->all();
$blogcategoria = Blog::find()->select('*')->from('blog')->limit(3)->all();
$blogpost = Blog::find()->select('*')->from('blog')->orderBy('id DESC')->limit(4)->all();
$galeriaFoto = Fotografia::find()->select('*')->from('fotografia')->orderBy('id DESC')->all();
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
                            <li><a href="<?php echo Url::to(['blog/index']); ?>">Blog</a></li>
                            <li><a class="active" href="#">Fotografia</a></li>
                            <li><a href="<?php echo Url::to(['site/contact']); ?>">Contactos</a></li>
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
                    <h1>Fotografias</h1>
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
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="search-widget widget">
                                <form>
                                    <input type="search" placeholder="Pesquisar ..."/>
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="text-widget widget">
                                <h2>Sobre ABC</h2>
                                   <?php foreach ($sobABC as $abc): ?>
                                      <p><?php echo substr($abc['missao'], 0, 200) ?></p>
                                    <?php endforeach ?>
                            </div>

                            <div class="category-widget widget">
                                <h2>Categorias</h2>
                                    <ul class="category-list">
                                        <?php foreach ($blogcategoria  as $blog): ?>
                                        <li><a href="<?= Url::to(['blog/view', 'id' => $blog['id']]) ?>"><?php echo $blog['categoria'] ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                            </div>

                            <div class="popular-widget widget">
                                <h2>Post</h2>
                                    <ul class="popular-list">
                                       <?php foreach ($blogpost  as $post): ?>
                                        <li>
                                            <?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$post['post']))?> <!-- Pegar imgem do banco -->
                                            <div class="side-content">
                                                <h2><a href="<?= Url::to(['blog/view', 'id' => $post['id']]) ?>"><?php echo substr($post['nomeB'], 0, 100) ?></a></h2>
                                                <span><?php echo $post['data_blog'] ?></span>
                                            </div>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                            </div><!-- Fim de post -->

                            <div class="tags-widget widget">
                                <h2>Tags</h2>
                                <ul class="tags-list">
                                    <li><a href="<?php echo Url::to(['blog/projet']); ?>">Design</a></li>
                                    <li><a href="<?php echo Url::to(['blog/video']); ?>">video</a></li>
                                    <li><a href="<?php echo Url::to(['blog/foto']); ?>">Fotografia</a></li>
                                </ul>
                            </div><!-- Fim de tags -->

                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="blog-box">
                            <?php foreach ($galeriaFoto  as $foto): ?>
                                <div class="blog-post">
                                    <?= Html::img(Url::to(Yii::getAlias('@ImgUrl').'/'.$foto['image'])) ?>
                                    <div class="post-content">
                                    <h2><?php echo $foto['nome']?></a></h2>
                                    <p><?php echo $foto['descricao']?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
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