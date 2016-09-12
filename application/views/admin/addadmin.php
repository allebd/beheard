        
                        <!-- PAGE TITLE
                        =============== -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3>
                                                    <!-- <span class="secondary">Category:</span> -->
                                                    <span class="primary">Add Admin</span>
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
                                                
                                                <article class="article-medium">                                                        

                                                        <div class="row">
                                                            <section class="widget">
                                                                <!-- Widget Header -->
                                                                <header class="clearfix">                                                                
                                                                        <a href="<?=base_url();?>admin/admins" class="control" title='Cancel'><i class="fa fa-times"></i></a>
                                                                </header>
                                                            </section>

                                                                <!--Content: sign up form-->
                                                            <form class="form-horizontal" role="form" action='<?=base_url();?>admin/addedadmin' method='post'>
                                                                     <div class="form-group">
                                                                            <label for="new-password" class="col-sm-2">Username</label>
                                                                            <div class="col-sm-10">
                                                                                    <input type="text" name="adminusername" id="new-username" placeholder="Username *" value='<?php echo set_value('adminusername'); ?>' required>
                                                                            </div>
                                                                    </div><!--Username-->
                                                                    <?php echo form_error('adminpassword', '<div class="form-group"> <label for="new-password" class="col-sm-2"></label><div class="alert alert-danger col-sm-8">', '</div></div>'); ?>
                                                                    <?php echo form_error('admincpassword', '<div class="form-group"> <label for="new-password" class="col-sm-2"></label><div class="alert alert-danger col-sm-8">', '</div></div>'); ?>
                                                                    <div class="form-group">                                                                                                                                                       
                                                                            <label for="new-password" class="col-sm-2">Password</label>
                                                                            <div class="col-sm-5">
                                                                                    <input type="password" name="adminpassword" id="new-password" placeholder="Password *" required>
                                                                            </div>
                                                                            <div class="col-sm-5">                                                                                    
                                                                                    <input type="password" name="admincpassword" id="new-password" placeholder="Confirm Password *" value='' required>
                                                                            </div>
                                                                    </div><!--Password-->

                                                                    <div class="form-group">
                                                                            <label for="new-screen-name" class="col-sm-2">Screen Name</label>
                                                                            <div class="col-sm-10">
                                                                                    <input type="text" name="screenname" id="new-screen-name" placeholder="Screen Name *" value='<?php echo set_value('screenname'); ?>' required>
                                                                            </div>
                                                                    </div><!--Screen Name-->

                                                                    <div class="form-group">
                                                                            <label for="new-first-name" class="col-sm-2">Name</label>
                                                                            <div class="col-sm-5">
                                                                                    <input type="text" name="adminfirstname" id="new-first-name" placeholder="First Name *" value='<?php echo set_value('adminfirstname'); ?>' required>
                                                                            </div>  
                                                                            <div class="col-sm-5">
                                                                                    <input type="text" name="adminsurname" id="new-last-name" placeholder="Last Name *"  value='<?php echo set_value('adminsurname'); ?>' required>
                                                                            </div>  
                                                                    </div><!--name-->

                                                                    <div class="form-group">
                                                                            <label for="new-email" class="col-sm-2 ">Email</label>
                                                                            <div class="col-sm-10">
                                                                                    <input type="email" name="adminemail" id="new-email" placeholder="Email address *" value='<?php echo set_value('adminemail'); ?>' required>
                                                                            </div>
                                                                    </div><!--email-->


                                                                    <div class="form-group">
                                                                            <label for="new-phone" class="col-sm-2">Phone / matric</label>
                                                                            <div class="col-sm-10">
                                                                                    <input type="text" name="adminnumber" id="new-phone" placeholder="Phone number *" value='<?php echo set_value('adminnumber'); ?>' required>
                                                                            </div>
                                                                    </div><!--phone-->

                                                                    <div class="form-group">
                                                                            <label for="new-description" class="col-sm-2">Description</label>
                                                                            <div class="col-sm-10">
                                                                                    <textarea name="admindescription" id="new-description" placeholder="Brief Decription *" required><?php echo set_value('admindescription'); ?></textarea>
                                                                            </div>
                                                                    </div><!--description-->

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