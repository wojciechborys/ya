<?php $image = get_sub_field('image'); ?>
<?php $link = get_sub_field('link'); ?>
<?php $text = get_sub_field('text'); ?>
<a href="<?php echo $link ?> ">
    <div class="wrap wrap--wide"
         style="padding: 20px 0;    background-repeat: no-repeat;    background-size: cover;display: flex;   align-items: center;                  justify-content: center;   min-height: 300px;background-image: url('<?php echo $image['url'] ?>')">


        <span style="color: #1D81B7;     font-family: Rubik, Helvetica, Arial, sans-serif;font-size: 20px;"><?php echo $text ?></span>

    </div>
</a>