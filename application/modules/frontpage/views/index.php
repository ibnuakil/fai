<html lang="en">
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>FAI</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?=  base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="<?=  base_url()?>assets/css/styles.css" rel="stylesheet">
        <script src="<?=  base_url()?>assets/js/jquery-1.9.1.js"></script>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
            <a class="navbar-brand" rel="home" href="#">FAI</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
            </div>
            <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                            <li><a href="<?= base_url()?>">Home</a></li>                            
                            <li><a href="<?= base_url()?>index.php/frontpage/frontpage/registrasi">Registrasi</a></li>
                        <?php   $page = new StaticPage();
                                $result = $page->get();
                                foreach ($result as $row){ ?>
                            <li><a href="<?= base_url().$row->link.$row->id ?>"><?=$row->menu_name ?></a></li>
                                <?php   }   ?>
                            
                            <li class="dropdown">
                  <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>-->
                </li>
                    </ul>
                    <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                      </div>
                    </form>
                    </div>
            </div>
        </nav>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <div class="logo">
                                <img src="<?=base_url()?>assets/img/logo_fai2.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4">                    
            
                            <div class="row">

                            <h1 class="text-shadow">Forum Akademisi Indonesia</h1>
                            <h4 class=""><em>Satukan Tekad, Ilmu dan Hati Bersama Kami</em> </h4>                                            

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        <div class="container-fluid">
            <!--left-->
            <div class="col-sm-3">
                
                <div class="list-group">
                    <div class="list-group-item list-group-item-success"><h4 class="text-inset-head">Category</h4></div>
                    <?php 
                    $category = new Category();
                    $categories = $category->get();
                    foreach($categories as $row){?>

                    <a href="<?=base_url().'index.php/frontpage/frontpage/listbycategory/'.$row->id ?>" class="list-group-item text-inset"><?= $row->category_name ?></a>

                    <?php } ?>
                    <a href="<?=base_url().'index.php/frontpage/frontpage/download/' ?>" class="list-group-item text-inset"> Downloads</a>
                </div>
                    
                <hr>
                
                <div class="list-group">
                    <div class="list-group-item list-group-item-success"><h4 class="text-inset-head">New Posts</h4></div>
                    <?php 
                    $article = new Article();
                    $article->order_by('date_written', 'desc');
                    //$articles2 = new ArrayObject();
                    $articles2 = $article->get();
                    $iterator = $articles2->getIterator();
                    //print_r($iterator);
                    for($i=1;$i<=5;$i++){
                        if($iterator->valid()){
                            $row = $iterator->current(); 
                        
                        ?>

                    <a href="<?=base_url().'index.php/frontpage/detail/'.$row->id ?>" class="list-group-item text-inset">
                        
                        <h4 class="small text-shadow text-capitalize"><?= $row->title?></h4>
                    
                        <p class="small">
                            <?php $content = substr(strip_tags($row->content), 0, 100) ; echo $content.'...'; ?></p>
                    </a>
                    <?php
                        }
                        $iterator->next();
                    } ?>    
                </div>
            </div>
            
            <!--center-->
            <div class="col-sm-6">
                <?php $this->load->view($view) ?>
            </div>
            
            <!--right-->            
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Follow Us</div>
                    <div class="panel-body">
                        <a href="https://www.facebook.com/ForumAkademisiIndonesia"><img src="<?= base_url()?>assets/img/facebook.png"></img></a>
                        <a href="http://twitter.com/F_AkademisiID"><img src="<?= base_url()?>assets/img/twitter.png"></img></a>
                        <a href="https://instagram.com/f_akademisiid/"><img src="<?= base_url()?>assets/img/instagram.png"></img></a>
                        <a href="#" title="forum.akademisiindonesia@gmail.com"><img src="<?= base_url()?>assets/img/email.png"></img></a>
                    </div>
                </div>
                <div class="panel panel-default">
         	<div class="panel-heading">Login</div>
                <div class="panel-body">
                    <?php   if($this->session->userdata('session_status')!=TRUE){   ?>
                    <form role="form" action="<?=base_url().'index.php/frontpage/frontpage/dologin'?>" method="POST">
                        
                        <div class="form-group">

                          <label for="exampleInputEmail1">User Id</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user glyphicon-white"></i></div>
                            <input type="text" name="userid" id="userid" class="form-control input-sm" placeholder="User Id">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="glyphicon glyphicon-lock glyphicon-white"></i></div>
                          <input type="password" name="pass" id="pass" class="form-control input-sm" placeholder="Your password">
                          </div>
                        </div>                    

                        <button type="submit" class="btn btn-default">Login</button>
                      </form>
                    <?php   }else{ ?>
                        <div class="form-group">

                          <label for="exampleInputEmail1">User Name</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="glyphicon glyphicon-user glyphicon-white"></i> <label class="label label-success"><?=  strtoupper($this->session->userdata('session_name')) ?></label></div>
                            
                          </div>
                        </div>
                    <a href="<?=base_url().'index.php/frontpage/frontpage/dologout'?>" class="btn btn-default">Logout</a>
                    <?php   } ?>
                </div>
                </div>
                <hr>
            </div>
        </div>
        
        <!-- footer -->
    <div class="footer">
        <div class="container">
        <p class="text-center text-inset">Copyright Forum Akademisi Indonesia 2015</p>
        
        <div class="col-lg-3 col-sm-3">
            <h3>Follow Us</h3>
        <p>
            <a href="https://www.facebook.com/ForumAkademisiIndonesia"><img src="<?= base_url()?>assets/img/facebook.png"></img></a>
            <a href="http://twitter.com/F_AkademisiID"><img src="<?= base_url()?>assets/img/twitter.png"></img></a>
            <a href="https://instagram.com/f_akademisiid/"><img src="<?= base_url()?>assets/img/instagram.png"></img></a>
            <a href="#" title="forum.akademisiindonesia@gmail.com"><img src="<?= base_url()?>assets/img/email.png"></img></a>
            
        </p>
        </div>
        <div class="col-lg-3 col-sm-3 pull-right">
            <h3>Sekretariat FAI</h3>
            <p class="text-inset">
                Jl. Dewi Sartika No.77, Cawang, Jakarta Timur
                <br>
                Phone: (021) 8005721
                <br>
                Email: forum.akademisiindonesia@gmail.com
            </p>
        </div>
        
        </div>
      
    </div><!-- end .footer -->
    <!-- script references -->
            
            <script src="<?=  base_url()?>assets/js/bootstrap.min.js"></script>
            
            <script src="<?=  base_url()?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    </body>
</html>