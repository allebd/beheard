        
                        <!-- PAGE TITLE
                        =============== -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3>
                                                    <!-- <span class="secondary">Category:</span> -->
                                                    <span class="primary">Admins</span>
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
                                                
                                                 <!-- TABLES -->
                                                <section class="widget">
                                                        <!--Header-->
                                                        <header class="clearfix">
                                                            <a href='<?=base_url();?>admin/addadmin' class="control"><i class="fa fa-plus"></i></a>
                                                        </header>

                                                        <!--Unbordered Table-->
                                                        <table class="table table-hover table-striped">                                
                                                                <thead>
                                                                        <tr>
                                                                                <th>No</th>
                                                                                <th>Name</th>
                                                                                <th>Screen Name</th>
                                                                                <th>Phone / Matric</th>
                                                                                <th></th>
                                                                                <th></th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>                                                                         
                                                                        <?php $serial = 0; ?>
                                                                        <?php if($alladmins->num_rows() > 0):?>
                                                                        <?php foreach($alladmins->result() as $adminsrows):?>                                                                        
                                                                        <?php $serial = $serial + 1; ?>
                                                                        <tr>
                                                                                <td><?=$serial;?></td>
                                                                                <td><?=ucwords($adminsrows->adminsurname);?> <?=ucwords($adminsrows->adminfirstname);?></td>
                                                                                <td><?=ucwords($adminsrows->screenname);?></td>
                                                                                <td><?=$adminsrows->adminnumber;?></td>
                                                                                <td><a href='<?=base_url();?>admin/editadmin/<?=$adminsrows->admin_id;?>'>Edit</a></td>
                                                                                <td><a href='<?=base_url();?>admin/deleteadmin/<?=$adminsrows->admin_id;?>'>Delete</a></td>
                                                                        </tr>
                                                                        <?php endforeach; ?>
                                                                        <?php endif; ?> 
                                                                        <?php if($alladmins->num_rows() < 1):?>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>No Admin added.</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <?php endif; ?>
                                                                </tbody>
                                                        </table> 

                                                        <!--Footer-->
                                                                <div class="footer">
                                                                        <ul class="tags">
                                                                                <li></li>
                                                                        </ul> 
                                                                        <div class="read-more">
                                                                                <a href='<?=base_url();?>admin/addadmin' class="btn btn-primary btn-sm">Add Admin</a> 
                                                                        </div>
                                                                </div>                                                       
                                                </section>
                                        </main><!--#main-content-->

                                        <!-- SIDEBAR 
                                        ============ -->
                                        <aside class="col-md-4">
                                                <div class="row">
                                                        <!-- TABS: CATEGORIES AND TAGS -->
                                                        <section class="col-sm-6 col-md-12 widget">
                                                                <!-- Widget header: tab menu -->
                                                                <ul class="nav nav-tabs">
                                                                        <li><a href="#categories" data-toggle="tab">Menu</a></li>
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