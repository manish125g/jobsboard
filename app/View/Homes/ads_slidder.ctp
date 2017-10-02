
    <?php if(!empty($sliderImages)){
        foreach($sliderImages as $image){?>
            <div class="items">
                <?php $imageFile = '/files/ads/'.$image['Advertise']['id'].'/'.$image['Advertise']['image'];
                $image = $this->Html->image($imageFile, array('alt' =>''));
                echo $this->Html->link($image, '#', array('escape' => false, 'id' =>'img1'));?>
            </div>
        <?php }
    }?>