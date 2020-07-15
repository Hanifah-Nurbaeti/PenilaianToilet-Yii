<?php

/* @var $this yii\web\View */

$this->title = 'Toilet Satisfaction';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Survei Kepuasan Pengguna Toilet</h1>
        <p class="lead">How is Our Toilet?</p>
    </div>
    
    <div class="body-content">
        <div class="row">
           
            <div class="col-lg-4">
                <h2>PUAS</h2>
                    <div class="thumbnail">
                        <a href="javascript:void();" onclick="get(1);"><img src="/penilaianToilet/frontend/web/assets/b8da33fc/img/puas.png" width="150" alt="Puas"></a>
                        <div class="caption"></div>
                    </div>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <h2>CUKUP</h2>
                    <div class="thumbnail">
                        <a href="javascript:void();" onclick="get(2);"><img src="/penilaianToilet/frontend/web/assets/b8da33fc/img/cukup.png" width="150" alt="Cukup"></a>
                        <div class="caption"></div>
                    </div>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>

            <div class="col-lg-4">
               <h2>TIDAK PUAS</h2>
                    <div class="thumbnail">
                        <a href="javascript:void();" onclick="get(3);"><img src="/penilaianToilet/frontend/web/assets/b8da33fc/img/tidak_puas.png" width="150" alt="Tidak Puas"></a>
                        <div class="caption"></div>
                    </div>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
