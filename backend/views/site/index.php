<?php

/* @var $this yii\web\View */
use \yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
     <!-- Visão geral do site -->
      <div class="panel panel-default">
           <div class="list-group-item active">
                <h3 class="panel-title">Visão Geral Do Site</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                         <?php print_r($contarUsuario)?>
                    </h2>
                    <h4>Usuarios</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                         <?php print_r($contarPost) ?>
                    </h2>
                    <h4>Posts</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt " aria-hidden="true"></span> 
                        <?php print_r($contarComentarios)?>
                    </h2>
                    <h4>Comentarios</h4>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Ultimos Postagem -->
            <div class="panel panel-default">
              <div class="list-group-item active">
                <h3 class="panel-title">Ultimos Postagens</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                      <thead>
                          <tr>
                            <td>Nome</td>
                            <td>Categoria</td>
                            <td>Imagem</td>
                          </tr> 
                      </thead>
                      <tbody>
                        <?php foreach ($mostrarPost as $post): ?>
                            <tr>
                                <td><?php echo $post['nome'] ?></td>
                                <td><?php echo $post['categoria'] ?></td>
                                <td><?= Html::img(Yii::getAlias('@ImgUrl'). '/' .$post['post'],
                                ['style'=>'width:70px', 'height:55px']) ?>
                                </td>
                              </tr>
                          <?php endforeach ?>
                      </tbody>
                </table>
              </div>
              <div class="panel-footer btn btn-block bb"><a href="index.php?r=blog/index">Ver Todos</a></div>
            </div>

            <!--Mostar comentario -->
            <div class="col-md-13">
                  <div class="panel panel-default">
                       <div class="list-group-item active">
                            <h3 class="panel-title">Ultimos Comentarios</h3>
                        </div>

                        <div class="panel-body">
                             <table class="table table-striped table-hover">
                                  <thead>
                                      <tr>
                                        <td><span class="glyphicon glyphicon-user"> Usuarios</span></td>
                                        <td><span class="glyphicon glyphicon-list-alt"> Comentarios</span></td>
                                        </tr> 
                                  </thead>
                                  <tbody>
                                    <?php foreach ($mostrarComentario as $key => $coment): ?>
                                        <tr>
                                            <td><?php echo $coment['nome'] ?></td>
                                            <td><?php echo $coment['comentario'] ?></td>
                                          </tr>
                                  <?php endforeach ?>
                                  </tbody>
                            </table>
                        </div>
                         <div class="panel-footer btn btn-block bb"><a href="index.php?r=comentario/index">Ver Todos</a></div>
                    </div>
            </div>
</div>

