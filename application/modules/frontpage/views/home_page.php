<div class="row carousel-holder">

    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img class="slide-image" src="<?=base_url() ?>assets/images/IMG_01.png" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="<?=base_url() ?>assets/images/IMG_02.png" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="<?=base_url() ?>assets/images/IMG_05.jpg" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="<?=base_url() ?>assets/images/IMG_06.jpg" alt="">
                </div>
                <div class="item">
                    <img class="slide-image" src="<?=base_url() ?>assets/images/IMG_07.jpg" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

</div>

<?php
    foreach ($articles as $a){
?>

<div class="row">
    <div class="col-xs-12">
        <div class="media">
                <h3><?= $a->title ?></h3>
                <div class="media-left">
                <img src="<?=$a->image_path ?>" class="media-object">
                <div class="media-body">
                    <p class="small"><?= substr(strip_tags($a->content), 0,200).'...' ?></p>
                <p class="lead">
                    <a href="<?=base_url().'index.php/frontpage/detail/'.$a->id ?>" class="btn btn-default">Read More</a>
                </p>
                </div>
                </div>
<!--<p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>-->
            <ul class="list-inline">
                <?php
                    $comments = $a->comment->get();
                    $count = $comments->count();
                ?>
                <li><a href="#"><?=$a->date_written ?></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-comment"></i> <?=$count?> Comments</a></li>
                <!--<li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li>-->
            </ul>
        </div>
    </div>
</div>

<?php
    }
    
    echo $this->pagination->create_links();
?>

