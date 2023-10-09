<?php
function showStartPage()
{
    global $baseUrl;
    global $statuses;
    $title = 'Start';

    ob_start();
    ?>

<div class="main">
    
    <!-- <?php // for ($i = 0; $i < sizeof($statuses); $i++) { ?> -->

            <div class="card">
                <h3>
                    Author
                </h3>
                <p>
                    Content
                </p>
                <span>
                    createdAt
                </span>
                <a href="<?= $baseUrl ?>">More</a>
            </div>
        </div>

    <?php // } ?>

    <?php
    $content = ob_get_clean();
    require "layout.php";
}
?>