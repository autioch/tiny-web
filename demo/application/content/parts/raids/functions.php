<?php foreach ($groups as $id => $group): ?>
    <div class="raid-group">
        <h4 class="raid-group-title"><?php echo $group['title'] ?></h4>
        <?php foreach ($group['comp'] as $name => $members): ?>
            <div class="raid-role">
                <h5 class="raid-role-title"><?php echo $name ?></h5>
                <ul>
                    <?php foreach ($members as $nick => $class) : ?>
                        <li><?php armory_char($nick, $class) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
        <ul class="raid-class">            
            <?php foreach ($classes as $key => $val) : ?>
                <li class="raid-class-item <?php echo $key ?>">
                    <span class="class-icon-container raid-class-icon">
                        <?php echo get_image('classes/classes.png', $val, 'class-icon ' . $key . '-icon') ?>
                    </span>
                    <span class="sum <?php echo $key ?>"></span>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="clear"></div>
    </div>
<?php endforeach; ?>
<script type="text/javascript">
    window.wowClasses = [];
<?php foreach ($classes as $key => $val) : ?>
        window.wowClasses.push('<?php echo $key ?>');
<?php endforeach; ?>
</script>    
