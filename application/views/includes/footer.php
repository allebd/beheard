<?php if(!isset($adminlanding)): ?>
<?php if($page_title != 'signin'): ?>
                <?php if($page_title == 'register' || $page_title == 'signin'){ ?>
                <?php }else{ ?>
                                        <!-- SIDEBAR 
                                        ============ -->
                                        <aside class="col-md-4">
                                                <div class="row">
                                                        <!-- SEARCH WIDGET -->
                                                        <!-- <section class="col-sm-6 col-md-12 widget"> -->
                                                                <!-- Widget header -->
                                                                <!-- <header class="clearfix"><h4>Search Widget</h4></header>  --> 

                                                                <!-- Widget content -->
                                                                <!-- <form method="get" action="home-version-1.html">
                                                                        <input type="search" placeholder="Enter keywords">
                                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                                </form> -->
                                                       <!--  </section> -->

                                                        <!-- TABS WIDGET -->
                                                        <section class="col-sm-6 col-md-12 widget">
                                                                <!-- Tab menus -->
                                                                <ul class="nav nav-tabs">
                                                                        <li class="active"><a href="#popular-aside" data-toggle="tab">Popular</a></li>
                                                                        <li><a href="#recent-aside" data-toggle="tab">Recent</a></li>
                                                                        <li><a href="#comments-aside" data-toggle="tab">Comments</a></li>
                                                                </ul>

                                                                <!-- Tab contents -->
                                                                <div class="tab-content">
                                                                        <!--Popular-->
                                                                        <div class="tab-pane active fade in" id="popular-aside">
                                                                            <?php foreach($popularnews->result() as $popnewsrow):?>
                                                                                <div class="article-tiny">
                                                                                        <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $popnewsrow->articletypename);?>/<?=str_replace(' ','-', $popnewsrow->headline);?>" class="image">
                                                                                                <figure class="image-holder">
                                                                                                        <img src="<?=base_url();?>uploads/<?=$popnewsrow->picture;?>" alt="<?=$popnewsrow->headline;?>" >
                                                                                                </figure>
                                                                                                <div class="image-light"></div>
                                                                                                <span class="dashicons dashicons-format-image"></span>
                                                                                        </a>
                                                                                        <h5><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $popnewsrow->articletypename);?>/<?=str_replace(' ','-', $popnewsrow->headline);?>"><?=$popnewsrow->headline;?></a></h5>
                                                                                        <p class="post-meta">
                                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $popnewsrow->articletypename);?>/<?=str_replace(' ','-', $popnewsrow->headline);?>"><span class="fa fa-clock-o"></span> <?=date_format(date_create($popnewsrow->dateposted), 'M j, Y');?></a> &nbsp;
                                                                                                <a href="<?=base_url();?>category/<?=str_replace(' ','-', $popnewsrow->articletypename);?>"><span class="fa fa-folder"></span> <?=$popnewsrow->articletypename;?></a>
                                                                                        </p>
                                                                                </div>
                                                                                <hr>
                                                                            <?php endforeach;?>
                                                                        </div>

                                                                        <!--Recent-->
                                                                        <div class="tab-pane fade" id="recent-aside">
                                                                            <?php foreach($recentnews->result() as $recnewsrow):?>                                                                            
                                                                                <div class="article-tiny">
                                                                                        <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $recnewsrow->articletypename);?>/<?=str_replace(' ','-', $recnewsrow->headline);?>" class="image">
                                                                                                <figure class="image-holder">
                                                                                                        <img src="<?=base_url();?>uploads/<?=$recnewsrow->picture;?>" alt="<?=$recnewsrow->headline;?>" >
                                                                                                </figure>
                                                                                                <div class="image-light"></div>
                                                                                                <span class="dashicons dashicons-format-image"></span>
                                                                                        </a>
                                                                                        <h5><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $recnewsrow->articletypename);?>/<?=str_replace(' ','-', $recnewsrow->headline);?>"><?=$recnewsrow->headline;?></a></h5>
                                                                                        <p class="post-meta">
                                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $recnewsrow->articletypename);?>/<?=str_replace(' ','-', $recnewsrow->headline);?>"><span class="fa fa-clock-o"></span> <?=date_format(date_create($recnewsrow->dateposted), 'M j, Y');?></a> &nbsp;
                                                                                                <a href="<?=base_url();?>category/<?=str_replace(' ','-', $recnewsrow->articletypename);?>"><span class="fa fa-folder"></span> <?=$recnewsrow->articletypename;?></a>
                                                                                        </p>
                                                                                </div>
                                                                                <hr>
                                                                            <?php endforeach;?>
                                                                        </div>

                                                                        <!--Comments-->
                                                                        <div class="tab-pane fade" id="comments-aside">
                                                                                <ul class="recent-comments clearfix">
                                                                                    <?php foreach($commentnews->result() as $comnewsrow):?> 
                                                                                        <li>
                                                                                                <div class="avatar">
                                                                                                        <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $comnewsrow->articletypename);?>/<?=str_replace(' ','-', $comnewsrow->headline);?>" class="light">
                                                                                                                <img src="<?=base_url();?>uploads/<?=$comnewsrow->picture;?>" alt="<?=$recnewsrow->headline;?>" width='70' height='70'>
                                                                                                                <div class="layer"></div>
                                                                                                        </a>
                                                                                                </div>
                                                                                                <div class="content">
                                                                                                        <div class="comment-content">
                                                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $comnewsrow->articletypename);?>/<?=str_replace(' ','-', $comnewsrow->headline);?>"><?=$comnewsrow->commentbody;?></a>
                                                                                                        </div>
                                                                                                        <div class="comment-meta">
                                                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $comnewsrow->articletypename);?>/<?=str_replace(' ','-', $comnewsrow->headline);?>"><i class="fa fa-user"></i> <?=$comnewsrow->commentauthor;?></a>&nbsp;
                                                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $comnewsrow->articletypename);?>/<?=str_replace(' ','-', $comnewsrow->headline);?>"><i class="fa fa-clock-o"></i> <?=date_format(date_create($comnewsrow->commentdate), 'M j, Y');?></a>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </li>
                                                                                    <?php endforeach; ?>
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </section>

                                                        <!-- SOCIALS WIDGET -->
                                                        <!-- <section class="col-sm-6 col-md-12 widget"> -->
                                                                <!-- Widget header -->
                                                                <!-- <header class="clearfix"><h4>Socials Media</h4></header> -->

                                                                <!-- Widget content -->
                                                                <!-- <ul class="social clearfix">
                                                                        <li><a href="home-version-2.html#" title="Facebook "><span class="sc-md sc-facebook"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Twitter"><span class="sc-md sc-twitter"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="YouTube"><span class="sc-md sc-youtube"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="LinkedIn"><span class="sc-md sc-linkedin"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Google+"><span class="sc-md sc-googleplus"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Instagram"><span class="sc-md sc-instagram"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Pinterest"><span class="sc-md sc-pinterest"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="SoundCloud"><span class="sc-md sc-soundcloud"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Flickr"><span class="sc-md sc-flickr"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Myspace "><span class="sc-md sc-myspace"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="deviantART"><span class="sc-md sc-deviantart"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Vimeo"><span class="sc-md sc-vimeo"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="XING"><span class="sc-md sc-xing"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Last.fm"><span class="sc-md sc-lastfm"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Tumblr"><span class="sc-md sc-tumblr"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Behance"><span class="sc-md sc-behance"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="GitHub"><span class="sc-md sc-github"></span></a></li>
                                                                        <li><a href="home-version-2.html#" title="Dribbble "><span class="sc-md sc-dribbble"></span></a></li>
                                                                </ul> -->
                                                        <!-- </section> -->

                                                        <!-- ADS WIDGET -->
                                                        <section class="widget col-sm-6 col-md-12 no-mobile">
                                                                <!-- Widget Header -->
                                                                <header class="clearfix"><h4>Advertisement</h4></header>

                                                                <!-- Widget Content -->
                                                                <div class="frame thick">
                                                                        <a href="home-version-2.html#"><div data-src="http://placehold.it/300x250/f0f0f9" data-alt="Banner image"></div></a>
                                                                </div>
                                                                <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">
                                                        </section>

                                                        <!-- VIMEO WIDGET -->
                                                        <section class="col-sm-6 col-md-12 widget">
                                                                <!-- Widget header -->
                                                                <header class="clearfix"><h4>Vimeo Video</h4></header>

                                                                <!-- Widget content: Vimeo embed code -->
                                                                <iframe src="http://player.vimeo.com/video/83480879" width="360" height="203" allowfullscreen></iframe> 
                                                        </section>

                                                        <!-- ADS WIDGET -->
                                                        <section class="widget col-sm-6 col-md-12 no-mobile">
                                                                <!-- Widget Header -->
                                                                <header class="clearfix"><h4>Advertisement</h4></header>

                                                                <!-- Widget Content -->
                                                                <div class="frame thick">
                                                                        <a href="home-version-2.html#"><div data-src="http://placehold.it/300x250/f0f0f9" data-alt="Banner image"></div></a>
                                                                </div>
                                                                <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">
                                                        </section>

                                                        <!-- TABS: CATEGORIES AND TAGS -->
                                                        <section class="col-sm-6 col-md-12 widget">
                                                                <!-- Widget header: tab menu -->
                                                                <ul class="nav nav-tabs">
                                                                        <li class="active"><a href="#categories" data-toggle="tab">Categories</a></li>
                                                                </ul><!--.nav-tabs-->

                                                                <!-- Tab contents -->
                                                                <div class="tab-content">     
                                                                        <!-- Categories-->
                                                                        <div class="tab-pane active fade in" id="categories">
                                                                                <ul class="categories">
                                                                                    <?php foreach($gennews->result() as $gennewsrow):?>
                                                                                        <li><a href="<?=base_url();?>category/<?=str_replace(' ','-', $gennewsrow->articletypename);?>"><i class="fa fa-angle-right"></i> <?=$gennewsrow->articletypename;?> 
                                                                                            <span class="post-counts">
                                                                                                <?php 
                                                                                                        $this->db->where('articletype', $gennewsrow->articletype_id);
                                                                                                        $this->db->from('article');
                                                                                                        echo $this->db->count_all_results();
                                                                                                    ?>
                                                                                            </span></a></li>
                                                                                    <?php endforeach; ?>
                                                                                </ul>
                                                                        </div>      
                                                                </div><!--.tab-content-->
                                                        </section>

                                                        <!-- ADS WIDGET -->
                                                        <section class="widget col-sm-6 col-md-12 no-mobile">
                                                                <!-- Widget Header -->
                                                                <header class="clearfix"><h4>Advertisement</h4></header>

                                                                <!-- Widget Content -->
                                                                <div class="frame thick">
                                                                        <a href="home-version-2.html#"><div data-src="http://placehold.it/300x250/f0f0f9" data-alt="Banner image"></div></a>
                                                                </div>
                                                                <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">
                                                        </section>

                                                        <!-- FEEDBURNER WIDGET -->
                                                        <section class="col-sm-6 col-md-12 widget feedburner">
                                                                <!-- Widget Header -->
                                                                <header class="clearfix"><h4>Newsletter</h4></header>

                                                                <!-- Widget Content -->
                                                                <form action    ="http://feedburner.google.com/fb/a/mailverify" 
                                                                      method    ="post" 
                                                                      target    ="popupwindow" 
                                                                      onsubmit  ="window.open(
                                                                                        'http://feedburner.google.com/fb/a/mailverify?uri=YOUR_FEEDBURNER_URI', // Change YOUR_FEEDBURNER_URI with your actual FeedBurner URI.
                                                                                        'popupwindow', 
                                                                                        'scrollbars=yes,width=550,height=520'
                                                                                );return true"
                                                                >
                                                                        <div class="input-group">
                                                                                <i class="fa fa-envelope"></i>
                                                                                <input type="text" name="email" placeholder="Enter your email address" />                                        
                                                                        </div>
                                                                        <input type="hidden" value="YOUR_FEEDBURNER_URI" name="uri"/><!-- Change YOUR_FEEDBURNER_URI with your actual FeedBurner URI. -->
                                                                        <input type="hidden" name="loc" value="en_US"/>
                                                                        <input type="submit" value="Subscribe" />   
                                                                </form>
                                                        </section>
                                                </div><!--.row-->
                                        </aside>                                
                                </div><!--.row-->
                        </div><!--.container-->
                </div><!--#content-->
                <?php } ?>
                
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
                <script src="<?=base_url();?>js/script.min.js"></script>        
                <script src="<?=base_url();?>js/initialize.js"></script>        

                <!-- CUSTOMIZER -->
                <!-- <div data-customizer></div> -->
                        
        </body>     
</html>
<?php endif; ?>
<?php endif; ?>