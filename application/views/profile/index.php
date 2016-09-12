        
                        <!-- PAGE TITLE
                        =============== -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3>
                                                    <!-- <span class="secondary">Category:</span> -->
                                                    <span class="primary">My Profile</span>
                                                </h3>  
                                        </div>
                                </div>
                        </div>                        
                </header><!--header-->   
                
                <!-- CONTENT
                ============ -->
                <div id="content">            
                        <div class="container">
                                <div class="row">
                                        <!-- MAIN CONTENT
                                        ================= -->
                                        <main id="main-content" class="col-md-8">                                                                                                                                    
                                                
                                                <!-- ADS WIDGET -->
                                                <!-- <section class="widget"> -->
                                                        <!-- Widget Content -->
                                                        <!-- <div class="frame thick">                                
                                                                <a href="http://themeforest.net/user/friskamax/portfolio?ref=friskamax" target="_blank">
                                                                        <img src="http://placehold.it/728x90/f0f0f9" alt="ads">
                                                                </a>                                
                                                        </div>
                                                        <img src="img/shadow.png" alt="shadow" class="shadow">                                                        
                                                </section> -->
                                                <?php foreach($users->result() as $userrows):?>

                                                <section class="widget">
                                                        <!-- Widget Header -->
                                                        <header class="clearfix">                                                                
                                                                <a href='<?=base_url();?>profile/editprofile' class="control" title='Edit'><i class="fa fa-edit"></i></a>
                                                        </header>

                                                </section>
                                                
                                                
                                                <article class="article-medium">
                                                        <div class="row">
                                                                <!--Image-->
                                                                <div class="col-sm-6">
                                                                        <div class="frame">
                                                                                <a class="image" href="blog-version-2.html#">
                                                                                        <figure class="image-holder">
                                                                                            <?php if($userrows->userphoto == '') :?>
                                                                                                <img src="<?=base_url();?>uploads/imagis.jpg" alt="Profile Photo">
                                                                                            <?php endif;?>
                                                                                            <?php if($userrows->userphoto != '') :?>
                                                                                                <img src="<?=base_url();?>uploads/<?=$userrows->userphoto;?>" alt="Profile Photo">
                                                                                            <?php endif;?>
                                                                                        </figure>
                                                                                        <div class="image-light"></div>
                                                                                        <span class="dashicons dashicons-format-gallery"></span>
                                                                                </a>
                                                                        </div>
                                                                        <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">                                    
                                                                </div>                                                                

                                                                <!--Content-->
                                                                <div class="col-sm-6">
                                                                        <h4><?=ucwords($userrows->surname);?> <?=ucwords($userrows->firstname);?> (<?=ucwords($userrows->screenname);?>)</h4>
                                                                        <p class="post-meta">
                                                                                <span><?=$userrows->email;?></span><br>
                                                                                <span><?=$userrows->phone;?></span>
                                                                        </p>
                                                                        <p>
                                                                                <?=$userrows->description;?>
                                                                        </p>                                   
                                                                </div>
                                                        </div>

                                                        <!--Footer-->
                                                                <div class="footer">
                                                                        <ul class="tags">
                                                                                <li><a href="<?=base_url();?>profile/editpicture">Change Picture</a></li>
                                                                        </ul> 
                                                                        <div class="read-more">
                                                                                <a href='<?=base_url();?>profile/editprofile' class="btn btn-primary btn-sm">Edit Profile</a> 
                                                                        </div>
                                                                </div>

                                                </article>
                                                <?php endforeach; ?> 
                                        </main><!--#main-content-->

                                        <!-- SIDEBAR 
                                        ============ -->
                                        <aside class="col-md-4">
                                                <div class="row">
                                                        <!-- TABS: CATEGORIES AND TAGS -->
                                                        <section class="col-sm-6 col-md-12 widget">
                                                                <!-- Widget header: tab menu -->
                                                                <ul class="nav nav-tabs">
                                                                        <li class="active"><a href="#categories" data-toggle="tab">Menu</a></li>
                                                                </ul><!--.nav-tabs-->

                                                                <!-- Tab contents -->
                                                                <div class="tab-content">     
                                                                        <!-- Categories-->
                                                                        <div class="tab-pane active fade in" id="categories">
                                                                                <ul class="categories">
                                                                                        <li><a href="<?=base_url();?>profile"><i class="fa fa-angle-right"></i> My Profile</a></li>
                                                                                        <li><a href="<?=base_url();?>profile/articles"><i class="fa fa-angle-right"></i> Manage Articles</a></li>
                                                                                        <li><a href="<?=base_url();?>profile/changepassword"><i class="fa fa-angle-right"></i> Change Password</a></li>
                                                                                        <li><a href="<?=base_url();?>home/logout"><i class="fa fa-angle-right"></i> Logout</a></li>
                                                                                </ul>
                                                                        </div>      
                                                                </div><!--.tab-content-->
                                                        </section>

                                                        <!-- ADS WIDGET -->
                                                       <!--  <section class="widget col-sm-6 col-md-12 no-mobile"> -->
                                                                <!-- Widget Header -->
                                                                <!-- <header class="clearfix"><h4>Advertisement</h4></header>
 -->
                                                                <!-- Widget Content -->
                                                                <!-- <div class="frame thick">
                                                                        <a href="blog-version-2.html#"><div data-src="http://placehold.it/300x250/f0f0f9" data-alt="Banner image"></div></a>
                                                                </div>
                                                                <img src="img/shadow.png" class="shadow" alt="shadow"> -->
                                                        <!-- </section> -->
                                                </div>
                                        </aside>
                                        
                                </div>
                        </div>
                </div><!--#content-->

                <footer>                                        

                        <!-- FOOTER BOTTOM 
                        ================== -->
                        <div id="footer-bottom">
                                <div class="container">
                                        <p>Copyright &copy; <?=date('Y');?> - <strong>Beheard</strong></p>
                                        <ul>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Terms</a></li>
                                                <li><a href="#">Privacy</a></li>
                                                <li><a href="#">Policy</a></li>
                                                <li><a href="#">Advertising</a></li>
                                                <li><a href="#">Contact</a></li>
                                        </ul>
                                </div>
                        </div><!--#footer-bottom-->                        
                </footer><!--footer-->

                <!-- jQuery  -->
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>           
                
                <!-- Warta scripts -->
                <script src="js/script.min.js"></script>        
                <script src="js/initialize.js"></script>        

                <!-- CUSTOMIZER -->
                <div data-customizer></div>
        </body>           
</html>