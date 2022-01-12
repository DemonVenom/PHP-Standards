<?php

    $dvon = new DateTime('August 1, 1972');
    $spike = new DateTime('August 13, 1970');

    if ($dvon < $spike) {
        echo '<p>D-Von is older than Spike</p>';
    }
    else {
        echo '<p>Spike is older than D-Von</p>';
    }

    $diff = $dvon->diff($spike);

    echo $diff->format("<p>There is %y years, and %months and %d days between Spike and D-Von</p>");

?>