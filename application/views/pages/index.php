
<div id="content" class="container content-bug">
    <div class="content-wrapper vuta">
        <div class="row content-title">
            <div class="pull-left" id="title">
                <span id="rudi"></span>
                <span id="post-title"><?php echo strtoupper($title);?></span>
                <?php /*<i class="text-danger fa fa-chevron-right"></i> <strong><span>QISWA CHA NABII</span></strong>*/?>
            </div>
            <div class="pull-right text-right" id="date"></div>
        </div><!-- END OF UPPERPART-->
		
        <div class="row content-details">
            <div class="row">
                <div class="col-xs-9 articles">
                    <?php
					
                    foreach($posts as $post){?>
                        <article id="<?php echo $post['post_id']?>-changua">
                            <div class="pull-right text-right" id="date">
                                
                                <h1 ><?php echo date('d',strtotime($post['created_date']));?></h1>
                                <p class="text-center"><?php echo date('M',strtotime($post['created_date']));?></p>
                            </div>

                            <h3 class="article-title-----"><?php echo ucwords(strtolower($post['title']));?></h3>
                            <div>
                                <div class="article-details">
                                    <article>
                                        <p>
                                            <?php echo word_limiter($post['content'],50,"...");?>
                                        </p>

                                    </article>
                                </div>
                                <p data-id="<?php echo $post['post_id'];?>" class="btn btn-rau pull-left soma-zaidi"><i class="fa fa-book"></i> Soma Zaidi</p>
                                <div class="article-actions pull-right">
                                    <?php /*
                                    <span><i class="fa fa-comment-o"></i><strong>20</strong> Comments</span>
                                    <span><i class="fa fa-share"></i><strong>23</strong> Shares</span>
                                    */?>
                                    <span><i class="fa fa-eye"></i> Imesomwa mara<strong> <?php echo $post['views']?></strong></span>
                                </div>
                            </div>
                        </article>
                        <br/>
                        <div class="article-separator"></div>
                    <?php } ?>
                </div>
                <div class="col-xs-3 random-articles">
                    <h4>Majarida ya wiki</h4>
                    <article>
                        <ul class="random-lists">
                            <?php for($i = 1 ; $i<9 ; $i++) { ?>
                            <li><i class="fa fa-book"></i> Jarida toleo la <?php echo $i?></li>
                            <?php } ?>
                        </ul>
                    </article>

                    <h4>Popular Articles</h4>
                    <article>
                        <ul class="random-lists">
                            <li><i class="fa fa-chevron-right"></i>Qiswa Chengine</li>
                            <li><i class="fa fa-chevron-right"></i>Qiswa Chengine</li>
                            <li><i class="fa fa-chevron-right"></i>Qiswa Chengine</li>
                            <li><i class="fa fa-chevron-right"></i>Qiswa Chengine</li>
                            <li><i class="fa fa-chevron-right"></i>Qiswa Chengine</li>
                            <li><i class="fa fa-chevron-right"></i>Qiswa Chengine</li>
                        </ul>
                    </article>

                    <h4>Matangazo</h4>
                    <article>
                        <ul class="random-lists">
                            <li><i class="fa fa-chevron-right"></i>Tangazo lengine</li>
                            <li><i class="fa fa-chevron-right"></i>Tangazo lengine</li>
                            <li><i class="fa fa-chevron-right"></i>Tangazo lengine</li>
                            <li><i class="fa fa-chevron-right"></i>Tangazo lengine</li>
                            <li><i class="fa fa-chevron-right"></i>Tangazo lengine</li>
                            <li><i class="fa fa-chevron-right"></i>Tangazo lengine</li>
                        </ul>
                    </article>
                </div>
            </div>
            


        </div><!-- END OF LOWERPART-->
    </div>
</div><!-- END OF CONTENT -->

