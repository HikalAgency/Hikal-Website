<?php
?>
<div class="holderCircle">
    <div class="round"></div>
    <div class="dotCircle">
        <?php
        foreach ($services as $index => $service) {
            echo '<div class="itemDot itemDot' . $index . ' ' . ($index === 2 ? 'active' : 'primary-text') . '" data-tab="' . $index . '">';
            echo '<div class="forActive">' . $service['icon'] . '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="contentCircle p-4">
        <?php
        foreach ($services as $index => $service) {
            echo '<div class="CirItem title-box ' . ($index === 2 ? 'active' : '') . ' CirItem' . $index . '">';
            echo '<h6 class="gold-grad-anim font-500" style="text-transform: uppercase;">' . $service['title'] . '</h6>';
            echo '<p style="font-size: small;">' . $service['subtitle'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>