<div class="show-top-grids">
    <div class="col-sm-8 single-left">
        <div class="song">
            <div class="song-info">
                <h3><?php echo $single['Media']['name'];?></h3>
            </div>
            <div class="video-grid">
                <iframe src="<?php echo $single['Media']['url']?>" allowfullscreen></iframe>
            </div>
        </div>
        <div class="song-grid-right">
            <div class="share">
                <h5>Share this</h5>
                <ul>
                    <li><a href="#" class="icon fb-icon">Facebook</a></li>
                    <li><a href="#" class="icon dribbble-icon">Dribbble</a></li>
                    <li><a href="#" class="icon twitter-icon">Twitter</a></li>
                    <li><a href="#" class="icon pinterest-icon">Pinterest</a></li>
                    <li><a href="#" class="icon whatsapp-icon">Whatsapp</a></li>
                    <li><a href="#" class="icon like">Like</a></li>
                    <li><a href="#" class="icon comment-icon">Comments</a></li>
                    <li class="view"><?php echo $single['Media']['views'];?> Views</li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="published">
            <script src="jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    size_li = $("#myList li").size();
                    x = 1;
                    $('#myList li:lt(' + x + ')').show();
                    $('#loadMore').click(function () {
                        x = (x + 1 <= size_li) ? x + 1 : size_li;
                        $('#myList li:lt(' + x + ')').show();
                    });
                    $('#showLess').click(function () {
                        x = (x - 1 < 0) ? 1 : x - 1;
                        $('#myList li').not(':lt(' + x + ')').hide();
                    });
                });
            </script>
            <div class="load_more">
                <ul id="myList">
                    <li>
                        <h4>Published on <?php echo $single['Media']['published_on']?></h4>

                        <p><?php echo $single['Media']['description']?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 single-right">
        <h3>Others </h3>
        <div class="single-grid-right">
            <?php if (!empty($medias)) {
                foreach ($medias as $media) {
                    ?>
                    <div class="col-md-4 single-right-grid-left" style="padding: 4px;">
                        <div class="resent-grid-img recommended-grid-img">
                            <?php
                            if (file_exists(WWW_ROOT . "/files/video/" . $media['Media']['id'] . '/' . $media['Media']['file'])) {
                                $image = $this->Html->image("/files/video/" . $media['Media']['id'] . '/' . $media['Media']['file'],
                                    array('alt' => $media['Media']['name'], 'style' => 'max-height:237px'));
                            } else {
                                $image = $this->Html->image("/media/images/t1.jpg");
                            }
                            echo $this->Html->link($image, array('controller' => 'medias', 'action' => 'single',$media['Media']['id']), array('escape' => false)); ?>
                        </div>
                    </div>
                    <div class="col-md-8 single-right-grid-right">
                        <?php echo $media['Media']['name']?>

                        <p class="author">
                            <a href="#" class="author"><?php echo $media['Admin']['name']?></a></p>

                        <p class="views"><?php echo $media['Media']['views']?> views</p>
                    </div>
                    <div class="clearfix"></div>
                    <?php
                }
            } ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //footer -->
