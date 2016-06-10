<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\Pjax;
use yii\web\View;

$this->title = 'Rabib Studios';
$template = "<label class='col-xs-12 col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2 col-lg-offset-1 col-lg-2 control-label'>{label}</label><div class='col-xs-offset-1 col-xs-10  col-sm-6 col-md-6 col-lg-6'>{input}</div>\n{hint}\n<div class='col-xs-offset-1 col-xs-10 col-sm-5 col-md-3 col-lg-3'>{error}</div>";

?>
<div class="site-index">
  <div id="about" class="scroll box">
    <div class="row">
      <div class="col-xs-8 col-sm-6 col-md-7 col-lg-7">
        <h4>
          Hi I am Ahmad Jamaly Rabib. Web developer from Sylhet, Bangladesh. I am 25 Years old. Woking as a backend web developer. I am learning full stack web development. I have Developed several web applications with PHP MVC on Yii,Laravel and Vanilla PHP.
        </h4>
      </div>
      <div class="col-xs-3 col-sm-6 col-md-offset-1 col-md-4 col-lg-offset-1 col-lg-4">
        <img class="image-border img-responsive" src="http://rabibstudios.com/images/OlL-uMZH.jpg">
      </div>
    </div>
    <div class="row">
      <div class="cos-xs-12 col-sm-7 col-md-7 col-lg-7">
        <div class="about-border">
        </div>
      </div>
      <h4>
        Web Developer - PHP - NodeJS
      </h4>
      <div class="cos-xs-12 col-sm-12">
        <a href="https://bd.linkedin.com/in/ahmad-jamaly-rabib-9bb05563" target="_blank"  class="btn btn-default">
          <i class="fa fa-linkedin fa-2x font-aws" aria-hidden="true">
          </i>
        </a>

        <a href="http://stackoverflow.com/users/3172218/rabib" target="_blank"  class="btn btn-default">
          <i class="fa fa-stack-overflow fa-2x font-aws" aria-hidden="true">
          </i>
        </a>

        <a href="https://github.com/rabibsust" target="_blank"  class="btn btn-default">
          <i class="fa fa-github fa-2x font-aws" aria-hidden="true">
          </i>
        </a>

        <a href="https://plus.google.com/u/0/+RabibAhmad" target="_blank" class="btn btn-default">
          <i class="fa fa-google-plus fa-2x font-aws" aria-hidden="true">
          </i>
        </a>

        <a href="https://twitter.com/rabibsust" target="_blank"  class="btn btn-default">
          <i class="fa fa-twitter fa-2x font-aws" aria-hidden="true">
          </i>
        </a>

      </div>
    </div>
    <br/><br/>
  </div>
  <div id="portfolio" class="scroll box">
    <div class="row">
      <div class="cos-xs-12">
        <h3 class="text-center portfolio-text">
          Projects
        </h3>
        <h4>
          This will be the showcase for my projects. currently the development is ongoing
        </h4>
      </div>
      <!--<div class="col-xs-12">
      <img src="http://rabibstudios.com/images/sup.JPG" class="img-thumbnail" alt="Cinque Terre" width="304" height="400">
      <img src="http://rabibstudios.com/images/qis.JPG" class="img-thumbnail" alt="Cinque Terre" width="304" height="400">
      </div>-->
      <!--<div class="col-xs-12">
      <img src="" class="img-thumbnail" alt="Cinque Terre" width="304" height="400">
      <img src="" class="img-thumbnail" alt="Cinque Terre" width="304" height="400">
      </div>
      <div class="col-xs-12">
      <img src="" class="img-thumbnail" alt="Cinque Terre" width="304" height="400">
      <img src="" class="img-thumbnail" alt="Cinque Terre" width="304" height="400">
      </div>
      -->
    </div>
  </div>
  <div id="contact" class="scroll box">
    <div class="row">
      <div class="cos-xs-12">
        <h3 class="text-center contact-text">
          Get in Touch
        </h3>
      </div>
      <div class="cos-xs-12 col-sm-offest-1 col-sm-6 col-md-offest-1 col-md-6 col-lg-offest-1 col-lg-6">
        <?php Pjax::begin(); ?>
        <?php $form = ActiveForm::begin([
            'id' => 'contact-form',
            'options' => ['class' => 'form-horizontal','enctype' => 'multipart/form-data'],
            'action' =>  ['site/contact'],
          ]); ?>
        <?= $form->field($model, 'name',[
            'template' => $template])->textInput(['maxlength' => true]);
        ?>
        <?= $form->field($model, 'email',[
            'template' => $template])->textInput(['maxlength' => true]);
        ?>
        <?= $form->field($model, 'comment',[
            'template' => $template])->textArea(['rows' => 6]);
        ?>
        <?= $form->field($model, 'verifyCode',[
            'template' => $template])->widget(Captcha::className(), [
            'template' => '<div class="row"><div class="col-lg-12">{image}</div><div class="col-lg-12">{input}</div></div>',
          ]) ?>

        <div class="form-group">
          <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <?php Pjax::end(); ?>
      </div>
      <div class="cos-xs-12 col-sm-5 col-md-5 col-lg-5">
        <h3 class="contact-texts">
          You can always contact with me. You can check my profile and ask for any project. I am here to solve your problems. I will reply you A.S.A.P. Happy Coding.
        </h3>
      </div>
    </div>
  </div>
</div>
<?php
$jsView = file_get_contents(Yii::getAlias('@webroot/js/index.js'));
$this->registerJs($jsView, View::POS_END);
?>