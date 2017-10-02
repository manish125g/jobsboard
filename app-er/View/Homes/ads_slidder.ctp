<ul id="demo1">
    <?php if(!empty($sliderImages)){
        foreach($sliderImages as $image){?>
            <li>
                <?php $imageFile = '/files/ads/'.$image['Advertise']['id'].'/'.$image['Advertise']['image'];
                $image = $this->Html->image($imageFile, array('alt' =>''));
                echo $this->Html->link($image, '#', array('escape' => false, 'id' =>'img1'));?>
            </li>
        <?php }
    }?>

</ul>
<script>
    $(function() {
        var demo1 = $("#demo1").slippry({
            controls : true,
            pager: false
            // transition: 'fade',
            // useCSS: true,
            // speed: 1000,
            // pause: 3000,
            // auto: true,
            // preload: 'visible',
            // autoHover: false
        });

        $('.stop').click(function () {
            demo1.stopAuto();
        });

        $('.start').click(function () {
            demo1.startAuto();
        });

        $('.prev').click(function () {
            demo1.goToPrevSlide();
            return false;
        });
        $('.next').click(function () {
            demo1.goToNextSlide();
            return false;
        });
        $('.reset').click(function () {
            demo1.destroySlider();
            return false;
        });
        $('.reload').click(function () {
            demo1.reloadSlider();
            return false;
        });
        $('.init').click(function () {
            demo1 = $("#demo1").slippry();
            return false;
        });
    });
</script>