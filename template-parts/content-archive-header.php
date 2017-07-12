<!-- used as archive header and as category header  -->
<div class="post-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1 class="text-center text-uppercase"> <?php if(is_archive() || is_category()) { echo "news letters"; } ?> </h1>
                <h4 class="text-center"> <?= single_month_title(' ') ?></h4>
            </div>
        </div>
    </div>
</div>