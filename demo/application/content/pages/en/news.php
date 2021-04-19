<?php include partial('news/list') ?>
<div class="side-box">
    <h3 class="side-box-title"><?php echo $dict['important-news'] ?></h3>
    <ul class="side-box-list">
        <?php foreach ($news as $key => $val) : ?>
            <?php if (isset($val['important'])): ?>
                <li class="side-box-item"><a href="#<?php echo str_replace('.', '', $key) ?>"><?php echo $val['title'] ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>
<h3 class="section-title"><?php echo $dict['news'] ?></h3>
<?php
foreach ($news as $key => $val) {
    ?>
    <div class="news">
        <a name="<?php echo str_replace('.', '', $key) ?>"></a>
        <div class="news_date"><?php echo $key ?></div>
        <h4 class="subsection-title"><?php echo $val['title'] ?></h4>
        <p class="news_details"><?php echo $val['details'] ?></p>
        <div class="clear"></div>
    </div>
    <?php
}











