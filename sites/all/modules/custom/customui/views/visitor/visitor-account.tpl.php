<?php
global $base_url;
global $user;

?>






<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"><a
                    href="<?php echo $base_url; ?>/profile?uid=<?php echo $user->uid; ?>&iframe=1"
                    target="listing-view-item-iframe">Profile</a></li>
            <li role="presentation"><a
                    href="<?php echo $base_url; ?>/messages?uid=<?php echo $user->uid; ?>&iframe=1"
                    target="listing-view-item-iframe">Messages</a></li>
            <li role="presentation"><a
                    href="<?php echo $base_url; ?>/friends?uid=<?php echo $user->uid; ?>&iframe=1"
                    target="listing-view-item-iframe">Friends</a></li>
            <li role="presentation"><a
                    href="<?php echo $base_url; ?>/places?uid=<?php echo $user->uid; ?>&iframe=1"
                    target="listing-view-item-iframe">Places</a></li>
            <li role="presentation"><a
                    href="<?php echo $base_url; ?>/visitor-photo-gallery?uid=<?php echo $user->uid; ?>&iframe=1"
                    target="listing-view-item-iframe">Photo gallery</a></li>
            <li role="presentation"><a
                    href="<?php echo $base_url; ?>/visitor-video-gallery?uid=<?php echo $user->uid; ?>&iframe=1"
                    target="listing-view-item-iframe">Video gallery</a></li>
            <li role="presentation"><a
                    href="<?php echo $base_url; ?>/review?uid=<?php echo $user->uid; ?>&iframe=1"
                    target="listing-view-item-iframe">Reviews</a></li>
        </ul>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <iframe class="listing-view-item-iframe" scrolling="no"
                src="<?php echo $base_url; ?>/basic-listing-view-item?nid=1&iframe=1"
                name="listing-view-item-iframe"></iframe>
    </div>
    <div class="col-md-1"></div>
</div>
