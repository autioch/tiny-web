<table class="recruitment-table">
    <tbody>
        <?php foreach ($recruit as $class => $option) { ?>

            <?php $c = str_replace(' ', '', $class); ?>
            <?php $s = 0; ?>
            <tr>
                <td class="title"><?php echo get_image('classes/' . strtolower($c) . '.png', $c, 'class_small'), $class; ?></td>
                <?php foreach ($option as $spec => $need) { ?>
                    <td class="recruit-<?php echo $need ? 'need' : 'pass' ?>">
                        <?php
                        $s++;
                        echo get_image('classes/' . strtolower($c) . $s . '.png', $c, 'class_small'), $spec;
                        ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>