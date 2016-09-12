<!DOCTYPE html>
<html id="page-404">
        <head>
                <title><?=$title;?></title>
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
                <header>
                        <!-- TOP NAVBAR
                        =============== -->
                        <nav class="navbar navbar-inverse" id="top-nav" role="navigation">
                                <div class="container">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav-collapse">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                </button>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="top-nav-collapse">
                                                <?php if($is_adminlogged_in != true && $is_logged_in != true):?>
                                                <ul class="nav navbar-nav">
                                                        <li><a href="<?=base_url();?>home/register">Register</a></li>
                                                        <li><a href="<?=base_url();?>home/signin">Sign In</a></li>
                                                </ul>
                                                <?php endif;?>
                                                <?php if($is_adminlogged_in == true):?>
                                                <ul class="nav navbar-nav">
                                                        <li><a href="<?=base_url();?>admin"> My Profile</a></li>
                                                        <li><a href="<?=base_url();?>admin/admins"> Admins</a></li>
                                                        <li><a href="<?=base_url();?>admin/articles"> Articles</a></li>
                                                        <li><a href="<?=base_url();?>admin/social"> Social Media</a></li>
                                                        <li><a href="<?=base_url();?>admin/changepassword"> Password</a></li>
                                                        <li><a href="<?=base_url();?>beheard_admin/logout"> Logout</a></li>
                                                </ul>
                                                <?php endif;?>

                                                <?php if($is_logged_in == true):?>
                                                <ul class="nav navbar-nav">
                                                        <li><a href="<?=base_url();?>profile"> My Profile</a></li>
                                                        <li><a href="<?=base_url();?>profile/articles"> Articles</a></li>
                                                        <li><a href="<?=base_url();?>profile/changepassword"> Password</a></li>
                                                        <li><a href="<?=base_url();?>home/logout"> Logout</a></li>
                                                </ul>
                                                <?php endif;?>

                                                <!-- <form class="navbar-form navbar-right" role="search">
                                                        <label class="sr-only" for="top_search_form">Search for</label>
                                                        <input id="top_search_form" type="search" placeholder="Search">
                                                        <button type="submit" >
                                                                <span class="fa fa-search"></span>
                                                                <span class="sr-only">Search/submit</span>
                                                        </button>
                                                </form> -->

                                                <ul class="nav navbar-nav navbar-right">
                                                        <?php $this->db->where('name','facebook');
                                                        $facebook = $this->db->get('social'); 
                                                        foreach($facebook->result() as $frow) 
                                                            {
                                                            echo "<li><a href='http://".$frow->link."' title='Facebook'><span class='sc-sm sc-dark sc-facebook'></span></a></li>";   
                                                            } 
                                                        ?>
                                                        <?php $this->db->where('name','twitter');
                                                        $twitter = $this->db->get('social'); 
                                                        foreach($twitter->result() as $trow) 
                                                            {
                                                            echo "<li><a href='http://".$trow->link."' title='Twitter'><span class='sc-sm sc-dark sc-twitter'></span></a></li>";   
                                                            } 
                                                        ?>
                                                        <?php $this->db->where('name','google plus');
                                                        $googleplus = $this->db->get('social'); 
                                                        foreach($googleplus->result() as $trow) 
                                                            {
                                                            echo "<li><a href='http://".$trow->link."' title='Google+'><span class='sc-sm sc-dark sc-googleplus'></span></a></li>";   
                                                            } 
                                                        ?>
                                                </ul>
                                        </div>
                                </div>
                        </nav><!-- #top-nav -->

                        <!-- MAIN NAVBAR
                        ================ -->
                        <nav class="navbar navbar-default" id="main-nav" role="navigation">
                                <div class="container">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="<?=base_url();?>"><img src="<?=base_url();?>img/logo.png" alt="logo"></a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="main-nav-collapse">
                                                <ul class="nav navbar-nav navbar-right">
                                                        <li class="active">
                                                            <a href="<?=base_url();?>">
                                                                <i class="fa fa-home"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?=base_url();?>" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?=base_url();?>category/politics/">Politics </a>
                                                        </li>
                                                        <li class="dropdown">
                                                                <a href="<?=base_url();?>category/business-and-economy/" class="dropdown-toggle" data-toggle="dropdown">Business <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="<?=base_url();?>category/business-economy">Business and Economy</a></li>
                                                                </ul>
                                                        <li>
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Environment <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="<?=base_url();?>category/crime-and-security/">Crime and Security</a></li>
                                                                        <li><a href="<?=base_url();?>category/infrastructural-development">Infrastructural development</a></li>
                                                                </ul>
                                                        <li>
                                                        <li>
                                                            <a href="<?=base_url();?>category/health/">Health</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?=base_url();?>category/others/">Others</a>
                                                        </li> 
                                                        <li>
                                                            <a href="<?=base_url();?>iheard">iHeard</a>
                                                        </li>       
                                                        <!-- <li> -->
                                                                <!-- <a href="<?=base_url();?>contact/">Contact</a> -->
                                                        <!-- </li> -->                
                                                </ul>
                                        </div>
                                </div>
                        </nav><!--#main-nav-->                        
                        <!-- PAGE TITLE -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3 class="primary">404</h3> 
                                                <p class="secondary">Not Found</p>
                                        </div>
                                </div>
                        </div>
                </header><!--header-->

                <!-- CONTENT
                ============ -->
                <div id="content"> 
                        <h1>404</h1>
                        <p>Sorry, the page you requested was not found.</p>
                        <a class="btn btn-primary" href='<?=base_url();?>'>Back to home page</a>
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