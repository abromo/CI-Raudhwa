
<div id="content" class="container">
    <div class="content-wrapper">
        <div class="row content-title">
            <div class="pull-left" id="title"><span><?php echo strtoupper($title)?></span> <i class="text-danger fa fa-chevron-right"></i> <strong><span>QISWA CHA NABII</span></strong></div>
            <div class="pull-right text-right" id="date"><?php echo date('D, M d, Y');?> </div>
        </div><!-- END OF UPPERPART-->
        <div class="row content-details">
            <div class="row">
                <div class="col-xs-8 articles">
                    <?php
					
                    foreach($posts as $post){?>
                        <article id="23">
                            <div class="pull-right text-right" id="date">
                                <?php //echo "Fri 18 Feb, 2014";?>
                                <h1 >28</h1>
                                <p class="text-center">Feb</p>
                            </div>

                            <h3 class="article-title-----"><?php echo $post['title']?></h3>
                            <div>
                                <div class="article-details">
                                    <article>
                                        <p>
                                            <?php echo $post['content'];?>
                                        </p>

                                    </article>
                                </div>
                                <p class="btn btn-success pull-left "><i class="fa fa-book"></i> Read More</p>
                                <div class="article-actions pull-right">

                                    <span><i class="fa fa-comment-o"></i><strong>20</strong> Comments</span>
                                    <span><i class="fa fa-share"></i><strong>23</strong> Shares</span>
                                    <span><i class="fa fa-eye"></i><strong><?php echo $post['views']?></strong> views</span>
                                </div>
                            </div>
                        </article>
                        <br/>
                        <div class="article-separator"></div>
                    <?php } ?>
                </div>
                <div class="col-xs-4 random-articles">
                    <h3>Random Articles</h3>
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

                    <h3>Popular Articles</h3>
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

                    <h3>Matangazo</h3>
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
            <div class="row"></div>


        </div><!-- END OF LOWERPART-->
    </div>
</div><!-- END OF CONTENT -->

