<?php
$menuList = array('about', 'news', 'progress', 'raids', 'rules', 'addons', 'recruitment');
?>
<div  id="menu-container">
    <div class="content-box">
        <ul id="menu">
            <?php foreach ($menuList as $item): ?>
                <li class="menu-item"><?php echo_link($item, $dict[$item], '', 'menu-link') ?></li>
            <?php endforeach; ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>