<?php
/**
 * Created by PhpStorm.
 * User: Sid
 * Date: 2017-05-19
 * Time: 8:09 PM
 */

$blue_thumb_text = get_field('blue-thumb-text');
$white_thumb_text = get_field('white-thumb-text');
$grey_thumb_text = get_field('grey-thumb-text');
?>

<div id="grid-container">
    <div id="container">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="speaker" id="speaker-thumb">
                <?php if(!empty($blue_thumb_text)) echo $blue_thumb_text; ?>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="bio" id="bio-thumb">
                <?php if(!empty($white_thumb_text)) echo $white_thumb_text; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="testimonial" id="testimonial-thumb">
                <?php if(!empty($grey_thumb_text)) echo $grey_thumb_text; ?>
            </div>
        </div>
    </div>
        </div>
</div>
