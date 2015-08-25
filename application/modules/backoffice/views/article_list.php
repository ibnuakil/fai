<div class="widget grid10">
    <div class="widget-header">
        <h2 class="page-title">
                <i class="fa fa-table"></i>Article List<span>All</span>
        </h2>        
        
    </div> <!-- /widget-header -->
    
    <div class="widget-header">
        <div class="mini-form">
            <form action="" method="post">
                <div class="dropdown">
                <?php   
                    $filter = array('author'=>'Author','title'=>'Title','content'=>'Content');
                    echo form_dropdown('filter', $filter,'','class="dropdown-select"');
                ?>
                </div>
                    <input type="text" name="keyword" placeholder="Keyword">                    
                    <button class="btn btn-tenax">Find</button>
                    <span><a href="<?=  base_url() ?>index.php/backoffice/managearticle/add" class="btn btn-tenax">Add</a></span>
            </form>
            
        </div>
        <div class="widget-controls">
                <div class="number-entries">
                        <input class="spinner" id="spinner-table" name="value" value="<?=$articles->count()?>" />
                </div>

        </div>
    </div>
        <table class="table table-bordered" id="media-table">
                  <thead>
                    <tr>
                        <th>Author</th>
                        <th>Post Date</th>
                        <th>Title</th>
                        <th>State</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php   foreach($articles as $a){ ?>
                    <tr>
                      <td>
                        <!--<img src="images/usr1.jpg" class="table-image">-->
                        <div class="table-name"><?=$a->author?></div>
                      </td>
                      
                      <td>
                            <?php 
                                $format = 'Y-m-d H:i:s';
                                $date = DateTime::createFromFormat($format, $a->date_written) 
                            ?>
                          <div class="table-date"><?= $date->format('M d, Y')?><br><span><?=$date->format('H:i:s') ?></span></div></td>
                      <td><?=$a->title?></td>
                      <td> 
                            <?php
                                $a->state->get();
                            ?>
                              <?=$a->state->state_name?>
                      </td>
                      <?php $a->category->get() ?>
                      <td><?=$a->category->category_name?></td>                      
                      <td>
                          <a href="<?= base_url().'index.php/backoffice/managearticle/remove/'.$a->id?>" title="Delete"><i class="fa fa-trash-o"></i></a>
                          <a href="<?= base_url().'index.php/backoffice/managearticle/edit/'.$a->id?>" title="Edit"><i class="fa fa-edit"></i></a>
                      </td>
                    </tr>
                    <?php   } ?>
                  </tbody>
        </table>	

</div><!-- /widget -->