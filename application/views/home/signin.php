<!DOCTYPE html>
<html id="sign-in">
        <head>
                <title><?=$title?></title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <!--Import Google font-->
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
                
                <!-- Stylesheets -->     
                <link href="<?=base_url();?>css/style.min.css" rel="stylesheet">
                <link rel="stylesheet/less" type="text/css" href="<?=base_url();?>customizer/style.less">
                <link href="<?=base_url();?>css/custom.css" rel="stylesheet">
                
                <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
                     ie8.css and ie8.js custom style  and script that needed for IE8. -->
                <!--[if lt IE 9]>
                        <link href="css/ie8.css" rel="stylesheet">        
                        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                        <script src="js/ie8.js"></script>
                <![endif]-->
        </head>    
        
        <body>
                <!-- CONTENT
                ============ -->
                <div id="content"> 
                        <h4 class="text-center">Welcome Back</h4>
                        <?php if(isset($incorrectlogin)):?>
                        <div class="alert alert-danger">
                            <?=$incorrectlogin;?>
                        </div>
                        <?php endif; ?>    
                        <?php if(isset($loggedout)):?>
                        <div class="alert alert-success">
                            <?=$loggedout;?>
                        </div>
                        <?php endif; ?> 
                        <?php if(isset($correctreg)):?>
                        <div class="alert alert-success">
                            <?=$correctreg;?>
                        </div>
                        <?php endif; ?>                    
                        <hr>

                        <?php echo form_open('home/verifyuser', 'role="form"'); ?>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" id="exampleInputUsername1" name='username' placeholder="Username" required value='<?php echo set_value('adminusername'); ?>'>
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" id="exampleInputPassword1" name='password' placeholder="Password" required value='<?php echo set_value('adminpassword'); ?>'>
                                </div>    

                                <div class="form-group">
                                        <label>
                                                <a href='<?=base_url();?>'> Back to home page </a>
                                        </label>
                                </div>                    
                                <!-- <div class="checkbox">
                                        <label>
                                                <input type="checkbox"> Remember me
                                        </label>
                                </div> -->                        
                                <p>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </p>
                        <?php echo form_close(); ?>
                        
                </div><!--#content-->

                <!-- jQuery  -->
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>           
                
                <!-- Warta scripts -->
                <script src="<?=base_url();?>js/script.min.js"></script>        
                <script src="<?=base_url();?>js/initialize.js"></script>        

                <!-- CUSTOMIZER -->
                <div data-customizer></div>                            
        </body>         
</html>