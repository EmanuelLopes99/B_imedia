<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use app\models\Home;
use app\models\Blog;
use app\models\Servicos;
use app\models\Noticias;
use app\models\Contact;
use yii\bootstrap\ActiveForm;

$sobABC = Home::find()->select('*')->from('home')->orderBy('id DESC')->limit(1)->all();
$sobContact = Contact::find()->select('*')->from('contact')->orderBy('id DESC')->limit(1)->all();
$postRecente = Blog::find()->select('*')->from('blog')->orderBy('id DESC')->limit(3)->all();
$postImagem = Blog::find()->select('*')->from('blog')->orderBy('id DESC')->limit(6)->all();
$noticiasR = Noticias::find()->select('*')->from('noticias')->orderBy('id DESC')->limit(1)->all();

/*$subscricao = new Subscricao();
if($subscricao->load(Yii::$app->request->post())){
    $subscricao->save();
}*/
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
     <link rel="stylesheet" href="css/arena-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="images/logo4.png" rel="shortcut icon">

    <script src="js/arena-plugins.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en" type="text/javascript"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>

    <title>Africa Business Consult</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Container -->
<div id="container">
    <?=$content ?>

    <!-- footer
            ================================================== -->
        <footer>
            <div class="container">

                <div class="up-footer">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget text-widget"><!-- Sobre ABC -->
                                <h2>Nós ABC</h2>
                                    <?php foreach ($sobContact  as $abc): ?>
                                        <p><?php echo $abc['endereco'] ?> <br>
                                    <?php echo $abc['telefone'] ?></p>
                                <?php endforeach ?>
                            </div><!-- Fim de sobre ABC -->

                            <div class="footer-widget social-widget">
                                <h3>Redes Sociais</h3>
                                <ul class="social-icons">
                                    <li><a class="facebook" href="<?php echo Url::to('http://www.facebook.com'); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="<?php echo Url::to('https://twitter.com/entrar?lang=pt'); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="dribbble" href="<?php echo Url::to('https://dribbble.com/'); ?>"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a class="pinterest" href="<?php echo Url::to('https://br.pinterest.com/login/'); ?>"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a class="google" href="<?php echo Url::to('https://www.google.cv/'); ?>"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Fim de redes socias -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget recent-widget">
                                <h3>Posts Recente</h3>
                                    <ul class="recent-posts">
                                        <?php foreach ($postRecente  as $posts): ?>
                                        <li>
                                            <h2><a href="<?= Url::to(['blog/view', 'id' => $posts['id']]) ?>"><?php echo $posts['nomeB'] ?> </a></h2><!-- Ver todos os comentarios desse post -->
                                        </li>
                                         <?php endforeach ?>
                                    </ul>
                            </div>
                        </div><!-- Fim de post recentes -->

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget insta-widget">
                                <h3>Post de imagem</h3>
                                    <ul class="instagram-list">
                                       <?php foreach ($postImagem  as $postImg): ?>
                                        <li><a href="<?= Url::to(['blog/view', 'id' => $postImg['id']]) ?>"><?= Html::img(Url::to(Yii::getAlias('@ImgUrl'). '/'.$postImg['post']))?></a></li><!-- Pegar imgem do banco -->
                                        <?php endforeach ?>
                                    </ul>
                            </div>
                        </div><!-- Fim de post de imagem -->

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget newsletter-widget">
                                <h3>Ultimas Notícias</h3>
                                   <?php foreach ($noticiasR  as $notic): ?>
                                       <a href="<?php echo Url::to(['noticias/view', 'id' => $notic['id']]) ?>"> <p><?php echo substr($notic['descricao'],0,150) ?> ...</p></a>
                                    <?php endforeach ?>
                                    <!--?php $form = ActiveForm::begin(); ?>
                                        <div class="col-lg-12 ">
                                        <!?= $form->field($subscricao, 'email')->textInput() ?>
                                        <div class="form-group">
                                            <!?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
                                        </div> </div>
                                    <!?php ActiveForm::end() ?-->
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <p class="copyright-line">copyright &copy; by iMedia 2018</p>
        </footer>
        <!--  footer -->

</div>
<!--  Container -->

<script type="text/javascript">
    var tpj=jQuery;
    var revapi202;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_202_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_202_1");
        } else {
            revapi202 = tpj("#rev_slider_202_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        enable: true,
                        style: 'zeus',
                        tmp: '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 35
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 35
                        }
                    },
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    bullets: {

                        enable: true,
                        style: 'persephone',
                        tmp: '',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 55,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    }
                },
                responsiveLevels: [1140, 1024, 778, 480],
                visibilityLevels: [1140, 1024, 778, 480],
                gridwidth: [1140, 1024, 778, 480],
                gridheight: [700, 700, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
