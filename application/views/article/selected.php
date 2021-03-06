                        <!-- PAGE TITLE
                        =============== -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3 class="primary"><?=ucwords(str_replace('-',' ', $this->uri->segment(3)));?> </h3>     
                                                <p class="secondary"><a href="<?=base_url();?>category/<?=str_replace(' ','-', $this->uri->segment(2));?>"><?=ucwords(str_replace('-',' ', $this->uri->segment(2)));?></a></p>
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
                                                
                                                <!-- BREAKING NEWS -->
                                                <section class="breaking-news">
                                                        <header>
                                                                <h4>Breaking News</h4>
                                                                <i class="triangle"></i>
                                                        </header>
                                                        <div class="content">
                                                                <ul>
                                                                    <?php foreach($breaknews->result() as $brkrow): ?>
                                                                        <li><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $brkrow->articletypename);?>/<?=str_replace(' ','-', $brkrow->headline);?>"><i class="fa fa-angle-double-right"></i> <?=$brkrow->headline;?> </a></li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                        </div>
                                                </section>                                                
                                                
                                                <!-- POST CONTENT -->
                                                <?php foreach($theselectnews->result() as $selectrows):?>
                                                <article class="article-large hentry">      
                                                        <!--Image-->
                                                        <div class="frame thick clearfix">
                                                                <a href="<?=base_url();?>uploads/<?=$selectrows->picture;?>" class="image" data-lightbox title="<?=$selectrows->headline;?>">
                                                                        <figure class="image-holder">
                                                                                <img src="<?=base_url();?>uploads/<?=$selectrows->picture;?>" alt="<?=$selectrows->headline;?>">
                                                                        </figure>
                                                                        <div class="image-light"></div>
                                                                </a>
                                                                <div class="icons entry-footer">
                                                                        <span class="vcard">
                                                                            <?php if($selectrows->adminphoto != ''):?>
                                                                                <a href="#" class="url fn" title="<?=$selectrows->screenname;?>"><span class="hidden"><?=$selectrows->screenname;?></span><img src="<?=base_url();?>uploads/<?=$selectrows->adminphoto;?>" alt="<?=$selectrows->screenname;?>"></a>
                                                                            <?php endif;?>
                                                                        </span>
                                                                        <a href="#" title="Post format image"><i class="dashicons dashicons-format-image"></i></a>
                                                                        <a href="#" title="<?php 
                                                                                                                                                $this->db->where('commentarticleid', $selectrows->article_id);
                                                                                                                                                $this->db->from('comments');
                                                                                                                                                echo $this->db->count_all_results();
                                                                                            ?>">
                                                                                                                                            <i class="fa fa-comments"></i><span class="comment"><?php 
                                                                                                                                                $this->db->where('commentarticleid', $selectrows->article_id);
                                                                                                                                                $this->db->from('comments');
                                                                                                                                                echo $this->db->count_all_results();
                                                                                                                                            ?></a></span></a>
                                                                </div>
                                                                <p class="post-meta entry-footer pull-right">
                                                                        <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2014-01-08T11:42:20+00:00">Source: <?=$selectrows->picturesource;?> (<?=date_format(date_create($selectrows->dateposted), 'F j, Y');?>)</time></a>
                                                                </p>
                                                        </div>
                                                        <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">                                                        
                                                                        
                                                        <header class="hidden">
                                                                <h1 class="entry-title"><?=$selectrows->headline;?></h1>
                                                        </header>                                                        
                                                        
                                                        <div class="entry-content">
                                                                <!-- <p> -->
                                                                        
                                                                <!-- </p> -->
                                                                <p>
                                                                        <?=$selectrows->body;?>
                                                                </p>
                                                        </div><!-- .entry-content -->                                                        
                                                                                             
                                                </article><!-- .hentry -->
                                                
                                                <!-- SHARE POST -->                        
                                                <!-- <section class="share-post clearfix">
                                                        <h5>Share:</h5> 
                                                        <ul>
                                                                <li><a href="blog-detail.html#"><i class="sc-sm sc-facebook"></i><span>426</span></a></li>
                                                                <li><a href="blog-detail.html#"><i class="sc-sm sc-twitter"></i><span>526</span></a></li>
                                                                <li><a href="blog-detail.html#"><i class="sc-sm sc-pinterest"></i><span>283</span></a></li>
                                                                <li><a href="blog-detail.html#"><i class="sc-sm sc-linkedin"></i><span>329</span></a></li>
                                                                <li><a href="blog-detail.html#"><i class="sc-sm sc-googleplus"></i><span>429</span></a></li>
                                                        </ul>
                                                </section> -->

                                                

                                                <!-- ADS -->
                                                <section class="widget">
                                                        <!-- Widget Header -->
                                                        <header class="clearfix"><h4>Advertisement</h4></header>

                                                        <!-- Widget Content -->
                                                        <div class="frame thick">                                
                                                                <a href="http://themeforest.net/user/friskamax/portfolio?ref=friskamax" target="_blank">
                                                                        <img src="http://placehold.it/728x90/f0f0f9" alt="ads">
                                                                </a>                                
                                                        </div>
                                                        <img src="<?=base_url();?>img/shadow.png" alt="shadow" class="shadow">                                                        
                                                </section>

                                                <!-- RELATED POSTS -->
                                                <section class="widget">
                                                        <!--Widget header-->
                                                        <header class="clearfix"><h4>Related</h4></header>

                                                        <!--Widget Contents-->
                                                        <div class="row">
                                                            <?php foreach($notselectnews->result() as $notselect):?>
                                                                <div class="article-small col-md-3 col-sm-6">
                                                                        <a href="#" class="image">
                                                                                <figure class="image-holder">
                                                                                        <img src="<?=base_url();?>uploads/<?=$notselect->picture;?>" alt="<?=$notselect->headline;?>">
                                                                                </figure>
                                                                                <div class="image-light"></div>
                                                                                <span class="dashicons dashicons-format-image"></span>
                                                                        </a>
                                                                        <h5><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $notselect->articletypename);?>/<?=str_replace(' ','-', $notselect->headline);?>"><?=$notselect->headline;?></a></h5>
                                                                        <p class="post-meta">
                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $notselect->articletypename);?>/<?=str_replace(' ','-', $notselect->headline);?>"><span class="fa fa-clock-o"></span> <?=date_format(date_create($notselect->dateposted), 'M j, Y');?></a> &nbsp;
                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $notselect->articletypename);?>/<?=str_replace(' ','-', $notselect->headline);?>"><span class="fa fa-comments"></span> <?php 
                                                                                                                                                $this->db->where('commentarticleid', $notselect->article_id);
                                                                                                                                                $this->db->from('comments');
                                                                                                                                                echo $this->db->count_all_results();
                                                                                                                                            ?></a>
                                                                        </p>
                                                                        <hr class="visible-sm visible-xs">
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                </section>

                                                <!-- COMMENTS -->
                                                <section class="widget">
                                                        <!--Widget header-->
                                                        <header class="clearfix"><h4>Comments</h4></header>

                                                        <!--Widget content-->
                                                        <ol class="post-comments">
                                                            <?php if($comment->num_rows > 0):?>
                                                            <?php foreach($comment->result() as $commentrow):?>
                                                                <li>
                                                                        <div class="comment-container">                                                                                
                                                                                <div class="content">
                                                                                        <p class="comment-meta">
                                                                                                <?php if($commentrow->commentauthor == ''):?>
                                                                                                <a href="#"><i class="fa fa-user"></i> Anonymous</a> &nbsp;
                                                                                                <?php endif;?>
                                                                                                <?php if($commentrow->commentauthor != ''):?>
                                                                                                <a href="#"><i class="fa fa-user"></i> <?=$commentrow->commentauthor;?></a> &nbsp;
                                                                                                <?php endif;?>
                                                                                                <a href="#"><i class="fa fa-clock-o"></i> <?=date_format(date_create($commentrow->commentdate), 'F j, Y');?> at <?=$commentrow->commenttime;?></a>
                                                                                        </p>                                        
                                                                                        <div class="comment">
                                                                                                <p>
                                                                                                        <?=$commentrow->commentbody;?>
                                                                                                </p>
                                                                                                <i class="triangle"></i>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                            <?php endif; ?>
                                                            <?php if($comment->num_rows < 1):?>
                                                            <p>No Comments</p>
                                                            <?php endif;?>
                                                        </ol>
                                                </section>

                                                <!-- COMMENT FORM -->
                                                <section class="widget message-form">
                                                        <!--Widget header-->
                                                        <header class="clearfix"><h4>Leave a reply</h4></header>

                                                        <!--Widget content-->
                                                        <form method="post" action="<?=base_url();?>home/comment/<?=str_replace(' ','-', $this->uri->segment(2));?>/<?=str_replace(' ','-', $this->uri->segment(3));?>">
                                                                <div class="textarea input-group">
                                                                        <i class="fa fa-user"></i>
                                                                        <input type="text" name="commentauthor" placeholder="Your Name *"  required>
                                                                        
                                                                        <input type="hidden" name="article_id"  value='<?=str_replace('-',' ', $this->uri->segment(3));?>' required>
                                                                </div>
                                                                <div class="textarea">
                                                                        <textarea name="commentbody" placeholder="Your comment *" rows="12"  required></textarea>
                                                                </div>    
                                                                <button type="submit" class="btn btn-primary">Submit Comment</button>
                                                        </form>
                                                </section>         
                                                <?php endforeach; ?>                                       
                                        </main><!--#main-content-->