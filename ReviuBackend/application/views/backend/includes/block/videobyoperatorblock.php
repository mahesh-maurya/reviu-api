<section class="panel">

    <div class="panel-body">
        <ul class="nav nav-stacked">
            <li><a href="<?php echo site_url('site/editvideobyoperator?id=').$before->id; ?>">Video Details</a>
            </li>
            <li><a href="<?php echo site_url('site/viewvideotagbyoperator?id=').$before->id; ?>">Tags</a>
            </li>
            <li><a href="<?php echo site_url('site/viewvideopartbyoperator?id=').$before->id; ?>">Video Parts</a>
            </li>
        </ul>
    </div>
</section>