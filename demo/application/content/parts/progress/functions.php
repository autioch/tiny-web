<?php
foreach ($raids as $key => $val) {
    $r = strtolower(str_replace(' ', '', $key));
    ?>
    <h3 class="progress-title">
        <?php echo_image('banners/' . $r . '.png', $key, 'progress-image') ?>
    </h3>
    <table class="progress-table <?php echo $r; ?>">
        <thead>
            <tr>
                <th class="encounter-title">Boss</th>
                <th class="encounter">10n</th>
                <th class="encounter">10hc</th>
                <th class="encounter">25n</th>
                <th class="encounter">25hc</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td class="encounter-title sum_boss"></td>
                <td class="encounter sum_n10"></td>
                <td class="encounter sum_h10"></td>
                <td class="encounter sum_n25"></td>
                <td class="encounter sum_h25"></td>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($val as $boss => $diff) { ?>
                <?php $b = strtolower(str_replace(' ', '', $boss)); ?>
                <tr>
                    <td class="encounter-title">
                        <?php echo get_image('bosses/' . $r . '/' . $b . '.jpg', $boss, 'encounter-icon'); ?>
                        <?php echo $boss ?>
                    </td>
                    <td class="encounter n10"><?php echo boss($diff['10n']) ?></td>
                    <td class="encounter h10"><?php echo boss($diff['10h']) ?></td>
                    <td class="encounter n25"><?php echo boss($diff['25n']) ?></td>
                    <td class="encounter h25"><?php echo boss($diff['25h']) ?></td>
                </tr>    
            <?php } ?>
        </tbody>
    </table>
<?php
}