                        <!-- PAGE TITLE
                        =============== -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3><span class="secondary">Category:</span><span class="primary">iHeard</span></h3>  
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
                                                                        <li><a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $brkrow->articletypename);?>/<?=str_replace(' ','-', $brkrow->headline);?>"><i class="fa fa-angle-double-right"></i> <?=$brkrow->headline;?> </a></li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                        </div>
                                                </section>                                                                                                   
                                                
                                                <!-- ADS WIDGET -->
                                                <section class="widget">
                                                        <!-- Widget Content -->
                                                        <div class="frame thick">                                
                                                                <a href="http://themeforest.net/user/friskamax/portfolio?ref=friskamax" target="_blank">
                                                                        <img src="http://placehold.it/728x90/f0f0f9" alt="ads">
                                                                </a>                                
                                                        </div>
                                                        <img src="<?=base_url();?>img/shadow.png" alt="shadow" class="shadow">                                                        
                                                </section>
                                                 <section class="widget">
                                                                <!-- Tab menus -->
                                                                <ul class="nav nav-tabs">
                                                                        <li><a href="#national" data-toggle="tab">National</a></li>
                                                                        <li class="active"><a href="#inter" data-toggle="tab">International</a></li>
                                                                </ul>

                                                                <!-- Tab contents -->
                                                                <div class="tab-content">
                                                                        <!--National-->
                                                                        <div class="tab-pane active fade in" id="national">
                                                                        <?php if($theselectnews->num_rows() > 0):?>
                                                                        <?php foreach($theselectnews->result() as $selectrows):?>
                                                                        <article class="article-medium">
                                                                                <div class="row">
                                                                                        <!--Image-->
                                                                                        <div class="col-sm-6">
                                                                                                <div class="frame">
                                                                                                        <a class="image" href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectrows->articletype);?>/<?=str_replace(' ','-', $selectrows->headline);?>/<?=$selectrows->article_id;?>">
                                                                                                                <figure class="image-holder">
                                                                                                                        <img src="<?=base_url();?>uploads/<?=$selectrows->picture;?>" alt="<?=$selectrows->headline;?>">
                                                                                                                </figure>
                                                                                                                <div class="image-light"></div>
                                                                                                                <span class="dashicons dashicons-format-image"></span>
                                                                                                        </a>
                                                                                                </div>
                                                                                                <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">                                    
                                                                                        </div>

                                                                                        <!--Content-->
                                                                                        <div class="col-sm-6">
                                                                                                <h4><a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectrows->articletype);?>/<?=str_replace(' ','-', $selectrows->headline);?>/<?=$selectrows->article_id;?>"><?=$selectrows->headline;?></a></h4>
                                                                                                <p class="post-meta">
                                                                                                        <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectrows->articletype);?>/<?=str_replace(' ','-', $selectrows->headline);?>/<?=$selectrows->article_id;?>"><span class="fa fa-clock-o"></span> <?=date_format(date_create($selectrows->dateposted), 'M j, Y');?></a> &nbsp;
                                                                                                        <a href="#"><span class="fa fa-user"></span> <?=$selectrows->author;?></a> &nbsp;
                                                                                                        <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectrows->articletype);?>/<?=str_replace(' ','-', $selectrows->headline);?>/<?=$selectrows->article_id;?>"><span class="fa fa-comments"></span> <?php 
                                                                                                                                                                        $this->db->where('commentarticleid', $selectrows->article_id);
                                                                                                                                                                        $this->db->from('comments');
                                                                                                                                                                        echo $this->db->count_all_results();
                                                                                                                                                                    ?></a> &nbsp;
                                                                                                        <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectrows->articletype);?>/<?=str_replace(' ','-', $selectrows->headline);?>/<?=$selectrows->article_id;?>"><span class="fa fa-eye"></span> <?=$selectrows->counter;?></a>
                                                                                                </p>
                                                                                                <p>
                                                                                                        <?=$selectrows->leadstory;?>
                                                                                                </p>                                    
                                                                                        </div>
                                                                                </div>

                                                                                <!--Footer-->
                                                                                <div class="footer">
                                                                                        <ul class="tags">
                                                                                                <li></li>
                                                                                        </ul> 
                                                                                        <div class="read-more">
                                                                                                <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectrows->articletype);?>/<?=str_replace(' ','-', $selectrows->headline);?>/<?=$selectrows->article_id;?>" class="btn btn-primary btn-sm">Read More</a> 
                                                                                        </div>
                                                                                </div>
                                                                        </article> 
                                                                        <?php endforeach; ?>
                                                                        <?php endif;?>     
                                                                        <?php if($theselectnews->num_rows() < 1):?>
                                                                        <p>No news for this category</p>
                                                                        <?php endif;?>
                                                                        </div>

                                                                        <!--International-->
                                                                        <div class="tab-pane fade" id="inter">
                                                                            <?php if($theselectednews->num_rows() > 0):?>
                                                                            <?php foreach($theselectednews->result() as $selectedrows):?>
                                                                            <article class="article-medium">
                                                                                    <div class="row">
                                                                                            <!--Image-->
                                                                                            <div class="col-sm-6">
                                                                                                    <div class="frame">
                                                                                                            <a class="image" href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectedrows->articletype);?>/<?=str_replace(' ','-', $selectedrows->headline);?>/<?=$selectedrows->article_id;?>">
                                                                                                                    <figure class="image-holder">
                                                                                                                            <img src="<?=base_url();?>uploads/<?=$selectedrows->picture;?>" alt="<?=$selectedrows->headline;?>">
                                                                                                                    </figure>
                                                                                                                    <div class="image-light"></div>
                                                                                                                    <span class="dashicons dashicons-format-image"></span>
                                                                                                            </a>
                                                                                                    </div>
                                                                                                    <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">                                    
                                                                                            </div>

                                                                                            <!--Content-->
                                                                                            <div class="col-sm-6">
                                                                                                    <h4><a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectedrows->articletype);?>/<?=str_replace(' ','-', $selectedrows->headline);?>/<?=$selectedrows->article_id;?>"><?=$selectedrows->headline;?></a></h4>
                                                                                                    <p class="post-meta">
                                                                                                            <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectedrows->articletype);?>/<?=str_replace(' ','-', $selectedrows->headline);?>/<?=$selectedrows->article_id;?>"><span class="fa fa-clock-o"></span> <?=date_format(date_create($selectedrows->dateposted), 'M j, Y');?></a> &nbsp;
                                                                                                            <a href="#"><span class="fa fa-user"></span> <?=$selectedrows->author;?></a> &nbsp;
                                                                                                            <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectedrows->articletype);?>/<?=str_replace(' ','-', $selectedrows->headline);?>/<?=$selectedrows->article_id;?>"><span class="fa fa-comments"></span> <?php 
                                                                                                                                                                            $this->db->where('commentarticleid', $selectedrows->article_id);
                                                                                                                                                                            $this->db->from('comments');
                                                                                                                                                                            echo $this->db->count_all_results();
                                                                                                                                                                        ?></a> &nbsp;
                                                                                                            <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectedrows->articletype);?>/<?=str_replace(' ','-', $selectedrows->headline);?>/<?=$selectedrows->article_id;?>"><span class="fa fa-eye"></span> <?=$selectedrows->counter;?></a>
                                                                                                    </p>
                                                                                                    <p>
                                                                                                            <?=$selectedrows->leadstory;?>
                                                                                                    </p>                                    
                                                                                            </div>
                                                                                    </div>

                                                                                    <!--Footer-->
                                                                                    <div class="footer">
                                                                                            <ul class="tags">
                                                                                                    <li></li>
                                                                                            </ul> 
                                                                                            <div class="read-more">
                                                                                                    <a href="<?=base_url();?>iheard/selected/<?=str_replace(' ','-', $selectedrows->articletype);?>/<?=str_replace(' ','-', $selectedrows->headline);?>/<?=$selectedrows->article_id;?>" class="btn btn-primary btn-sm">Read More</a> 
                                                                                            </div>
                                                                                    </div>
                                                                            </article> 
                                                                            <?php endforeach; ?>
                                                                            <?php endif;?>     
                                                                            <?php if($theselectednews->num_rows() < 1):?>
                                                                            <p>No news for this category</p>
                                                                            <?php endif;?>
                                                                        </div>
                                                                </div>
                                                </section>
                                                <!-- PAGINATION -->
                                                <!-- <ul class="pagination">
                                                        <li><a href="blog-version-2.html#" title="prev"><i class="fa fa-angle-double-left"></i></a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="blog-version-2.html#">1</a></li>
                                                        <li class="active"><a href="blog-version-2.html#">2</a></li>
                                                        <li><a href="blog-version-2.html#">3</a></li>
                                                        <li><a href="blog-version-2.html#">4</a></li>
                                                        <li><a href="blog-version-2.html#">5</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="blog-version-2.html#" title="next"><i class="fa fa-angle-double-right"></i></a></li>
                                                </ul> -->
                                        </main><!--#main-content-->