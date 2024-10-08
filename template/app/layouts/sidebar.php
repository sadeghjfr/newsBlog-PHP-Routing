<div class="col-lg-4">
    <div class="sidebars-area">


        <?php if (isset($topSelectedPosts[0])){ ?>
        <div class="single-sidebar-widget editors-pick-widget">
            <h6 class="title">انتخاب سردبیر</h6>
            <div class="editors-pick-post">
                <div class="feature-img-wrap relative">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="<?= asset($topSelectedPosts[0]['image']) ?>" alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="<?= url('show-category')."/".$topSelectedPosts[0]['cat_id'] ?>"><?=$topSelectedPosts[0]['category']?></a></li>
                    </ul>
                </div>
                <div class="details">
                    <a href="<?= url('show-post')."/".$topSelectedPosts[0]['id'] ?>">
                        <h4 class="mt-20"><?=$topSelectedPosts[0]['title']?></h4>
                    </a>
                    <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-user"></span><?=$topSelectedPosts[0]['username']?></a></li>
                        <li><a href="#"><?=jalaliDate($topSelectedPosts[0]['title'])?><span class="lnr lnr-calendar-full"></span></a></li>
                        <li><a href="#"><?=$topSelectedPosts[0]['comments_count']?><span class="lnr lnr-bubble"></span></a></li>
                    </ul>

                </div>
            </div>

        </div>
        <?php } ?>


        <?php if (!empty($banner)) { ?>
            <!-- Start banner-ads Area -->
            <div class="single-sidebar-widget ads-widget">
                <a href="<?=$banner['url']?>" ><img class="img-fluid" src="<?=asset($banner['image'])?>" alt=""></a>
            </div>
            <!-- End banner-ads Area -->
        <?php } ?>

        <div class="single-sidebar-widget most-popular-widget">
            <h6 class="title">پر بحث ترین ها</h6>

            <?php foreach ($mostCommentNews as $news){ ?>
            <div class="single-list flex-row d-flex">
                <div class="thumb">
                    <img src="<?=asset($news['image'])?>" alt="" width="120" height="80">
                </div>
                <div class="details">
                    <a href="<?= url('show-post')."/".$news['id'] ?>">
                        <h6><?=$news['title']?></h6>
                    </a>
                    <ul class="meta">
                        <li><a href="#"><?=jalaliDate($news['title'])?><span class="lnr lnr-calendar-full"></span></a></li>
                        <li><a href="#"><?=$news['comments_count']?><span class="lnr lnr-bubble"></span></a></li>
                    </ul>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</div>