                        <!-- PAGE TITLE -->
                        <div id="title">
                                <div class="image-light"></div>
                                <div class="container">
                                        <div class="title-container">
                                                <h3 class="primary">Not just another news, but your news</h3>     
                                                <p class="secondary">You Can Talk</p>
                                        </div>
                                </div>
                        </div>
                </header>

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
                                                
                                                <!-- CAROUSEL  -->
                                                <section class="widget no-mobile"> 
                                                        <div class="frame thick">
                                                                <div id="carousel-medium" class="carousel slide carousel-medium" data-ride="carousel">
                                                                        <!-- Carousel contents -->
                                                                        <div class="carousel-inner">
                                                                            <?php foreach($slidernewsone->result() as $slrow):?>
                                                                                <div class="item active">
                                                                                    <div data-src="<?=base_url();?>uploads/<?=$slrow->picture?>" data-alt="<?=$slrow->headline;?>"></div>
                                                                                    <div class="carousel-caption">
                                                                                                <div><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $slrow->articletypename);?>/<?=str_replace(' ','-', $slrow->headline);?>"><h1><?=$slrow->headline;?></h1></a></div>
                                                                                                <div class="hidden-xs">
                                                                                                    <p>
                                                                                                                <?=$slrow->leadstory?>...
                                                                                                    </p>
                                                                                                </div>                             
                                                                                    </div>
                                                                                </div>
                                                                            <?php endforeach;?>
                                                                            <?php foreach($slidernews->result() as $sliderrow):?>
                                                                                <div class="item">
                                                                                    <div data-src="<?=base_url();?>uploads/<?=$sliderrow->picture?>" data-alt="<?=$sliderrow->headline;?>"></div>
                                                                                    <div class="carousel-caption">
                                                                                                <div><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $sliderrow->articletypename);?>/<?=str_replace(' ','-', $sliderrow->headline);?>"><h1><?=$sliderrow->headline?></h1></a></div>
                                                                                                <div class="hidden-xs">
                                                                                                    <p>
                                                                                                                <?=$sliderrow->leadstory;?>...
                                                                                                    </p>
                                                                                                </div>                             
                                                                                    </div>
                                                                                </div>
                                                                            <?php endforeach;?>
                                                                        </div>

                                                                        <!-- Light -->
                                                                        <div class="image-light"></div>

                                                                        <!-- Carousel Controls -->
                                                                        <a class="left carousel-control" href="#carousel-medium" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
                                                                        <a class="right carousel-control" href="#carousel-medium" data-slide="next"><span class="fa fa-chevron-right"></span></a>
                                                                </div>
                                                        </div>
                                                        <img src="<?=base_url();?>img/shadow.png" class="shadow" alt="shadow">
                                                </section>
                                                
                                                <!-- ARTICLES V1 WIDGET -->
                                                <section class="widget articles-v1">
                                                        <!-- Widget Header -->
                                                        <header class="clearfix">
                                                                <h4>Headline</h4>
                                                                <!-- <a href="#" class="control"><i class="fa fa-plus"></i></a> -->
                                                        </header>

                                                        <!-- Widget Contents: Articles-->
                                                    <?php foreach($headnews->result() as $headrow):?>
                                                        <div class="article-medium">
                                                                <div class="row">
                                                                        <!--Image-->
                                                                        <div class="col-sm-6">
                                                                                <div class="frame">
                                                                                        <a class="image" href="<?=base_url();?>selected/<?=str_replace(' ','-', $headrow->articletypename);?>/<?=str_replace(' ','-', $headrow->headline);?>">
                                                                                                <figure class="image-holder">
                                                                                                        <img src="<?=base_url();?>uploads/<?=$headrow->picture;?>" alt="<?=$headrow->headline;?>">
                                                                                                </figure>
                                                                                                <div class="image-light"></div>
                                                                                                <span class="dashicons dashicons-format-image"></span>
                                                                                        </a>
                                                                                </div>
                                                                                <img src="<?=base_url()?>img/shadow.png" class="shadow" alt="shadow">                                    
                                                                        </div>

                                                                        <!--Content-->
                                                                        <div class="col-sm-6">
                                                                                <h4><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $headrow->articletypename);?>/<?=str_replace(' ','-', $headrow->headline);?>"><?=$headrow->headline;?></a></h4>
                                                                                <p class="post-meta">
                                                                                        <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $headrow->articletypename);?>/<?=str_replace(' ','-', $headrow->headline);?>"><span class="fa fa-clock-o"></span> <?=date_format(date_create($headrow->dateposted), 'M j, Y');?></a> &nbsp;
                                                                                        <a href="<?=base_url();?>category/<?=str_replace(' ','-',$headrow->articletypename);?>"><span class="fa fa-folder"></span> <?=$headrow->articletypename;?></a> &nbsp;
                                                                                        <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $headrow->articletypename);?>/<?=str_replace(' ','-', $headrow->headline);?>"><span class="fa fa-comments"></span> <?php 
                                                                                                                                                $this->db->where('commentarticleid', $headrow->article_id);
                                                                                                                                                $this->db->from('comments');
                                                                                                                                                echo $this->db->count_all_results();
                                                                                                                                            ?>
                                                                                        </a> &nbsp;
                                                                                        <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $headrow->articletypename);?>/<?=str_replace(' ','-', $headrow->headline);?>"><span class="fa fa-eye"></span> <?=$headrow->counter;?></a>
                                                                                </p>
                                                                                <p>
                                                                                        <?=$headrow->leadstory;?>
                                                                                </p>    
                                                                                <div class="read-more" style='margin-bottom:20px'>
                                                                                        <a href='<?=base_url();?>selected/<?=str_replace(' ','-', $headrow->articletypename);?>/<?=str_replace(' ','-', $headrow->headline);?>' class="btn btn-primary btn-sm">Read</a> 
                                                                                </div>                                
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <hr>
                                                    <?php endforeach; ?>
                                                </section>

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
                                                                                              
                                                <div class="row">
                                                    <?php foreach($arttypenews->result() as $arttyperows): ?>
                                                        <?php   
                                                                        $this->db->where('articletype', $arttyperows->articletype_id);
                                                                        $therearticles = $this->db->get('article');
                                                        ?>
                                                        <?php if($therearticles->num_rows() > 0):?>
                                                        <!-- ARTICLES V3 WIDGET -->
                                                        
                                                        <section class="widget articles-v3 col-sm-6">
                                                                <!-- Widget header -->
                                                                <header class="clearfix">
                                                                        <h4><?=ucwords($arttyperows->articletypename);?></h4>
                                                                        <div class="read-more" style='margin-bottom:20px'>
                                                                            <a href='<?=base_url();?>category/<?=str_replace(' ','-', $arttyperows->articletypename);?>' class="btn btn-primary btn-sm">Read</a> 
                                                                        </div>
                                                                </header>

                                                                <?php   
                                                                        $this->db->select('*');     
                                                                        $this->db->from('article');
                                                                        $this->db->order_by('article_id', 'DESC');
                                                                        $this->db->limit(2);
                                                                        $this->db->join('articletype', 'articletype.articletype_id = article.articletype');
                                                                        $this->db->where('articletype', $arttyperows->articletype_id);
                                                                        $thearticles = $this->db->get();
                                                                        foreach($thearticles->result() as $theartrow)
                                                                        {
                                                                ?>
                                                                <div class="article-tiny">
                                                                        <!--image-->
                                                                        <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $theartrow->articletypename);?>/<?=str_replace(' ','-', $theartrow->headline);?>" class="image">
                                                                                <figure class="image-holder">
                                                                                        <img src="<?=base_url();?>uploads/<?=$theartrow->picture;?>" alt="<?=$theartrow->headline;?>">
                                                                                </figure>
                                                                                <div class="image-light"></div>
                                                                                <span class="dashicons dashicons-format-image"></span>
                                                                        </a>
                                                                        
                                                                        <!--content-->
                                                                        <h5><a href="<?=base_url();?>selected/<?=str_replace(' ','-', $theartrow->articletypename);?>/<?=str_replace(' ','-', $theartrow->headline);?>"><?=$theartrow->headline;?></a></h5>
                                                                        <p class="post-meta">
                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $theartrow->articletypename);?>/<?=str_replace(' ','-', $theartrow->headline);?>"><span class="fa fa-clock-o"></span> <?=date_format(date_create($theartrow->dateposted), 'M j, Y');?></a> &nbsp;
                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $theartrow->articletypename);?>/<?=str_replace(' ','-', $theartrow->headline);?>" title='Comments'><span class="fa fa-comments"></span> <?php 
                                                                                                                                        $this->db->where('commentarticleid', $theartrow->article_id);
                                                                                                                                        $this->db->from('comments');
                                                                                                                                        echo $this->db->count_all_results();
                                                                                                                                    ?>
                                                                                        </a> &nbsp;
                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $theartrow->articletypename);?>/<?=str_replace(' ','-', $theartrow->headline);?>" title='Views'><span class="fa fa-eye"></span> <?=$theartrow->counter;?></a>
                                                                                <a href="<?=base_url();?>selected/<?=str_replace(' ','-', $theartrow->articletypename);?>/<?=str_replace(' ','-', $theartrow->headline);?>"></a>
                                                                        </p>
                                                                        <hr>
                                                                </div>
                                                                <?php 
                                                                        }
                                                                ?>
                                                        </section><!--.widget-->

                                                        <?php endif; ?>                                                    
                                                    
                                                    <?php endforeach;?>
                                                </div>
                                                 
                                        </main><!--#main-content-->

