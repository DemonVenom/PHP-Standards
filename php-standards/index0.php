<?php

    $date = new DateTime('2014, August 23');
    $date = new DateTime('2014-09-12');
    $date = new DateTime('+2 weeks');
    $date = new DateTime('next week');
    $date = new DateTime('tomorrow');

    $raw = '10. 11. 1968';
    $date = DateTime::createFromFormat('d. m. Y', $raw);



?>

<p>The output date is: <?php echo $date->format('m/d/Y')?></p>
