
<div class="page-header"><h2>Posts</h2>
</div>
<?php
    //$subcategori = new Sub_Category();
    //$subcategories = $subcategori->get();
    
    foreach ($subcategories as $subrow) {
    

?>
<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i>
        <?=$subrow->sub_category_name ?>
    </div>
    <div class="panel-body">
        <?php
            $article = new Article();
            $article->where('sub_category_id', $subrow->id);
            $articles = $article->get();
            foreach ($articles as $a){
        ?>

        <div class="row">
            
                        <!--<p><?//= //strip_tags(substr($a->content, 0, 200)) ?></p>-->
        
        <ul>
            
            <li class="list-unstyled">
                <a href="<?=base_url().'index.php/frontpage/detail/'.$a->id ?>">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                    <small> <?= $a->title ?></small>
                </a>
            </li>
            
        </ul>
            
        </div>

        <?php
            }

            //echo $this->pagination->create_links();
        ?>
    </div>
</div>
<?php
    }
?>


