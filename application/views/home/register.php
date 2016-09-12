                    
                        <!-- PAGE TITLE
                        =============== -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3 class="primary">Registration Form</h3>     
                                                <p class="secondary">And sign in form</p>
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
                                                <section class="widget">
                                                        <!--Header-->
                                                        <header class="clearfix"><h4>Sign Up</h4></header>

                                                        <!--Content: sign up form-->
                                                        <form class="form-horizontal" role="form" method='post' action="<?=base_url();?>home/newuser">
                                                                <div class="form-group">
                                                                        <label for="new-screen-name" class="col-sm-2">Screen Name</label>
                                                                        <div class="col-sm-10">
                                                                                <input type="text" name="screenname" id="new-screen-name" placeholder="Screen Name *" required>
                                                                        </div>
                                                                </div><!--Screen Name-->

                                                                <div class="form-group">
                                                                        <label for="new-first-name" class="col-sm-2">Username</label>
                                                                        <div class="col-sm-10">
                                                                                <input type="text" name="username" id="new-first-name" placeholder="Username *" required>
                                                                        </div>  
                                                                </div><!--name-->

                                                                <?php echo form_error('password', '<div class="form-group"> <label for="new-password" class="col-sm-2"></label><div class="alert alert-danger col-sm-8">', '</div></div>'); ?>
                                                                <?php echo form_error('cpassword', '<div class="form-group"> <label for="new-password" class="col-sm-2"></label><div class="alert alert-danger col-sm-8">', '</div></div>'); ?>
                                                                    

                                                                <div class="form-group">
                                                                        <label for="new-password" class="col-sm-2">Password</label>
                                                                        <div class="col-sm-5">
                                                                                <input type="password" name="password" id="new-password" placeholder="Password *" required>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                                <input type="password" name="cpassword" id="new-password-2" placeholder="Confirm password *" required>
                                                                        </div>
                                                                </div><!--password-->

                                                                <div class="form-group">
                                                                        <label for="new-first-name" class="col-sm-2">Name</label>
                                                                        <div class="col-sm-5">
                                                                                <input type="text" name="firstname" id="new-first-name" placeholder="First Name *" required>
                                                                        </div>  
                                                                        <div class="col-sm-5">
                                                                                <input type="text" name="surname" id="new-last-name" placeholder="Last Name *" required>
                                                                        </div>  
                                                                </div><!--name-->

                                                                <div class="form-group">
                                                                        <label for="new-email" class="col-sm-2 ">Email</label>
                                                                        <div class="col-sm-10">
                                                                                <input type="email" name="email" id="new-email" placeholder="Email address *" required>
                                                                        </div>
                                                                </div><!--email-->                                                                

                                                                <div class="form-group">
                                                                        <label for="new-phone" class="col-sm-2">Phone</label>
                                                                        <div class="col-sm-10">
                                                                                <input type="text" name="phone" id="new-phone" placeholder="Phone number *" required>
                                                                        </div>
                                                                </div><!--phone-->                  

                                                                <!-- <div class="form-group">
                                                                        <div class="col-sm-push-2 col-sm-10">
                                                                                <div class="checkbox">
                                                                                        <label>
                                                                                                <input type="checkbox"> I agree to the <a href="#">Terms</a> and <a href="#">privacy</a>. 
                                                                                        </label>
                                                                                </div>
                                                                        </div>
                                                                </div> --><!--term-->

                                                                <div class="form-group">
                                                                        <div class="col-sm-push-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-primary">Sign up</button>
                                                                        </div>
                                                                </div><!--submit-->
                                                        </form>
                                                </section>
                                        </main><!--#main-content-->

                                        <!-- SIDEBAR 
                                        ============ -->
                                        <aside class="col-md-4">   
                                                <section class="widget">
                                                        <!--Header-->
                                                        <header class="clearfix"><h4>Sign In</h4></header>

                                                        <!--Content: Sign in form-->
                                                        <form role="form" method='post' action='<?=base_url();?>home/verifyuser'>
                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Username</label>
                                                                        <input type="text" id="exampleInputEmail1" placeholder="Username" name='username' required>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="exampleInputPassword1">Password</label>
                                                                        <input type="password" id="exampleInputPassword1" placeholder="Password" name='password' required>
                                                                </div>
                                                                <!-- <div class="checkbox">
                                                                        <label>
                                                                                <input type="checkbox"> Remember me
                                                                        </label>
                                                                </div> -->
                                                                <p>
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                </p>
                                                        </form>

                                                       <!--  <p><a href="#">Forgot password?</a> <a href="#">Don't have account?</a></p> -->
                                                </section>                                                            
                                        </aside>
                                </div><!--.row-->
                        </div><!--.container-->
                </div><!--#content-->
                