<div class="row">
    <div class="col-xs-12">
                <h2><?=$article->title ?></h2>
                <ul class="list-inline">
                    <li>Oleh <a href="#"><?=$article->author; ?></a></li>
                    <li><small class="text-muted">Posted On <?=$article->date_written ?></small></li>
                </ul>


                <p><?=$article->content ?></p>
                <hr>
                <h3>Comments:</h3>
<?php
    $comments = $article->comment->get();
    //print_r($comments);
    foreach ($comments as $comment){?>
                <p class="bg-info">
                <ul class="media-list">
                    <li class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?=  base_url() ?>assets/img/user1.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                          <div class="media-heading">
                              <span>
                                  <h4>
                                  <?php
                                        $comment->user->get();
                                        echo $comment->user->user_name;
                                    ?>
                                  </h4>
                                  <small class="text-muted">Comment's Date: <?=$comment->date_commented ?></small>
                              </span>                          
                              
                          </div>
                          <p class="">
                        <?php 
                            
                            echo $comment->comments;
                        ?>
                              </p>
                      </div>
                    </li>
                  </ul>
                
                </p>
                
    
<?php
    } ?>
        
<?php                
    if($this->session->userdata('session_status')){
?>
           
                <form action="<?=  base_url().'index.php/frontpage/frontpage/savecomment/'.$article->id ?>" method="post">
                    
                    
                    <div class="form-group">
                        <label for="comment" class="col-sm-2 control-label">Your Comment:</label>
                        <div class="col-sm-10">
                            <textarea name="comment" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-default" id="save" name="save" value="Save">
                        </div>
                    </div>
                </form>
            
    <?php   } ?>                
    </div>
</div>

