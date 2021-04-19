<?php

function addon_tables($title, $table) {
    global $dict;
    ?>
    <h4 class="subsection-title"><?php echo $title; ?></h4>
    <table class="addon-table">
        <thead><tr>
                <th class="addon-name"><?php echo $dict['addon-name'] ?></th>
                <th class="addon-details"><?php echo $dict['addon-details'] ?></th>
                <th class="addon-version"><?php echo $dict['addon-version'] ?></th>
                <th class="addon-download"><?php echo $dict['addon-download'] ?></th>
            </tr></thead>
        <tbody>
            <?php foreach ($table as $val) { ?>
                <tr>
                    <td class="addon-name"><?php echo $val['title']; ?></td>
                    <td class="addon-details"><?php echo $val['details-' . TW_LANGUAGE]; ?></td>
                    <td class="addon-version"><?php echo $val['version']; ?></td>
                    <td class="addon-download"><?php echo $val['download'] ? get_link_remote($val['download'], $dict['addon-download2']) : ''; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>              
    <?php
}
