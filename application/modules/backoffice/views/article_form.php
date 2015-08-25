<script type="text/javascript" src="<?=  base_url()?>assets/lib/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
                plugins : "emotions,spellchecker,advhr,insertdatetime,preview", 

                // Theme options - button# indicated the row# only
                theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
                theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code,preview,|,forecolor,backcolor",
                theme_advanced_buttons3 : "insertdate,inserttime,|,spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,emotions",      
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing : true
	});
   
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#datewritten").datepicker({
            dateFormat:"yy-mm-dd"
        });
    });
</script>

<div class="widget grid8">
    <div class="widget-header">
        <h2>New Article</h2>
        <hr>
    </div>
    <div class="widget-content">
        <form action="<?=  base_url().'index.php/backoffice/managearticle/save/'.$flaginsert?>" method="post" class="">
            <?php 
                echo validation_errors(); 
                
                if($flaginsert){//add new
            ?>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="userid" class="col-sm-2 control-label">Author</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="author" name="author" value="<?php echo set_value('author'); ?>">
                        <div id="msg"></div>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" id="datewritten" name="datewritten" value="<?php echo set_value('datewritten'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo set_value('title'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Tag</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="tag" name="tag" value="<?php echo set_value('tag'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10 col-lg-6">
                        <textarea name="content" id="content"><?php echo set_value('content'); ?></textarea>
                    </div>
                </div>                 
                <div class="form-group">                    
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-default" id="save" name="save" value="Save">
                        <input type="submit" class="btn btn-orange" id="cancel" name="cancel" value="Cancel">
                    </div>
                </div>
            </div>
            <?php   
                }else{//edit
            ?>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="userid" class="col-sm-2 control-label">Author</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="hidden" name="id" value="<?=$article->id ?>">
                        <input type="text" class="form-control" id="author" name="author" value="<?php echo $article->author ?>">
                        <div id="msg"></div>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" id="datewritten" name="datewritten" value="<?php echo $article->date_written ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $article->title ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Tag</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="tag" name="tag" value="<?php echo $article->tag ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10 col-lg-6">
                        <textarea name="content" id="content"><?php echo $article->content ?></textarea>
                    </div>
                </div>                 
                <div class="form-group">                    
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-default" id="save" name="save" value="Save">
                        <input type="submit" class="btn btn-orange" id="cancel" name="cancel" value="Cancel">
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </form>
    </div>
</div>

