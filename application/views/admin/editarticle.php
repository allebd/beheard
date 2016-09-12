        
                        <!-- PAGE TITLE
                        =============== -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3>
                                                    <!-- <span class="secondary">Category:</span> -->
                                                    <span class="primary">Edit <?=str_replace('-',' ', $this->uri->segment(4));?> Article</span>
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
                                                <?php foreach($articleselect->result() as $adminrows):?>
                                                
                                                <article class="article-medium">                                                        

                                                        <div class="row">
                                                            <section class="widget">
                                                                <!-- Widget Header -->
                                                                <header class="clearfix">                                                                
                                                                        <a href="<?=base_url();?>admin/article/<?=$this->uri->segment(4);?>" class="control" title='Cancel'><i class="fa fa-times"></i></a>
                                                                </header>
                                                            </section>

                                                                <!--Content: sign up form-->
                                                            <form class="form-horizontal" role="form" action='<?=base_url();?>admin/editedarticle/<?=$this->uri->segment(4);?>' method='post' enctype='multipart/form-data'>
                                                                    <div class="form-group">
                                                                            <input type="hidden" name='article_id' value='<?=$adminrows->article_id?>' >                                                                            
                                                                    </div><!--Screen Name-->

                                                                    <div class="form-group">
                                                                            <label for="new-password" class="col-sm-2">Type of News</label>
                                                                            <div class="col-sm-10">
                                                                                    <select type="text" name="typeofnews" required>
                                                                                        <option value='<?=$adminrows->typeofnews?>' selected><?=$adminrows->typeofnews?></option>
                                                                                        <option value='National'>National</option>
                                                                                        <option value='International'>International</option>
                                                                                    </select>
                                                                            </div>
                                                                    </div><!--Type of News-->

                                                                    <div class="form-group">
                                                                            <label for="headline" class="col-sm-2">Headline</label>
                                                                            <div class="col-sm-10">
                                                                                    <input type="text" name="headline" id="headline" placeholder="Headline" value='<?=$adminrows->headline?>' required>
                                                                            </div>
                                                                    </div><!--Headline-->

                                                                    <div class="form-group">
                                                                            <label for="leadstory" class="col-sm-2">Lead Story</label>
                                                                            <div class="col-sm-10">
                                                                                    <textarea name="leadstory" id="leadstory" placeholder="Lead Story" required><?=$adminrows->leadstory?></textarea>
                                                                            </div>
                                                                    </div><!--Lead Story-->

                                                                    <div class="form-group">
                                                                            <label for="body" class="col-sm-2">Body</label>
                                                                            <div class="col-sm-10">
                                                                                    <textarea name="body" id="body" rows='10' placeholder="Type the story..." required><?=$adminrows->body?></textarea>
                                                                                    <script>
                                                                                        CKEDITOR.replace('body');
                                                                                    </script>
                                                                            </div>
                                                                    </div><!--body-->

                                                                    <input type='hidden' name="author" value="<?=$this->session->userdata('adminusername');?>" />

                                                                    <div class="form-group">
                                                                            <div class="col-sm-push-2 col-sm-10">
                                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                            </div>
                                                                    </div><!--submit-->
                                                            </form>
                                                            <!--Footer-->
                                                                <div class="footer">
                                                                </div>
                                                            <!--Footer-->
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
                                                                                        <li><a href="<?=base_url();?>admin"><i class="fa fa-angle-right"></i> My Profile</a></li>
                                                                                        <?php if($this->session->userdata('adminusername') == 'super admin'): ?>
                                                                                        <li><a href="<?=base_url();?>admin/admins"><i class="fa fa-angle-right"></i> Manage Admins</a></li>
                                                                                        <?php endif; ?>
                                                                                        <li><a href="<?=base_url();?>admin/articles"><i class="fa fa-angle-right"></i> Manage Articles</a></li>
                                                                                        <li><a href="<?=base_url();?>admin/social"><i class="fa fa-angle-right"></i> Manage Social Media Links</a></li>
                                                                                        <li><a href="<?=base_url();?>admin/changepassword"><i class="fa fa-angle-right"></i> Change Password</a></li>
                                                                                        <li><a href="<?=base_url();?>beheard_admin/logout"><i class="fa fa-angle-right"></i> Logout</a></li>
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