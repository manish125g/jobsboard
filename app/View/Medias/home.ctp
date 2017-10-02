</section>
</div>
<div class="main-grids">
    <div class="top-grids">
        <div class="recommended-info">
            <h2 class="text-center" style="margin: 20px;">Recent Videos</h2>
        </div>
        <?php if (!empty($medias)) {
            $count = 1;
            foreach ($medias as $media) {
                if($count == 4){
                    $count = 1;
                    echo "</div>";
                    echo "<div class='clearfix'></div>";
                    echo "<div class='row'>";
                } else if($count==1){
                    echo "<div class='row'>";
                }
                ?>
                <div class="col-md-4 resent-grid recommended-grid slider-top-grids text-center" style="padding: 4px;">
                    <div class="resent-grid-img recommended-grid-img">
                        <?php
                        if (file_exists(WWW_ROOT . "/files/video/" . $media['Media']['id'] . '/' . $media['Media']['file'])) {
                            $image = $this->Html->image("/files/video/" . $media['Media']['id'] . '/' . $media['Media']['file'],
                                array('alt' => $media['Media']['name'], 'style' => ' max-height:200px;'));
                        } else {
                            $image = $this->Html->image("/media/images/t1.jpg");
                        }
                        echo $this->Html->link($image, array('controller' => 'medias', 'action' => 'single',$media['Media']['id']), array('escape' => false)); ?>
                        <div class="clck">
                            <span class="fa fa-clock-o" aria-hidden="true"></span>
                           <b style="color: #ffffff"><?php echo date('Y-m-d h:i A', strtotime($media['Media']['created']))?></b>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info">
                        <h3><a href="single" class="title title-info"><?php echo $media['Media']['name']; ?></a></h3>
                        <ul>
                            <li><p class="author author-info"><a href="#"
                                                                 class="author"><?php echo $media['Admin']['name'] ?></a>
                                </p>
                            </li>
                            <li class="right-list"><p class="views views-info"><?php echo $media['Media']['views'] ?>
                                    views</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                $count++;
            }
        } ?>
        <div class="clearfix"></div>
    </div>
</div>
