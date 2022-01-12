<?php

/*

<?php

// $publishDate = $_POST['publish_date'];
$publishDate = '2014-08-24 09:14:00';

$localDateTime = new DateTime($publishDate, new DateTimeZone('America/New_York'));

$utcDateTime = clone $localDateTime;

utcDateTime->setTimeZone(new DateTimeZone('UTC'));

?>

<p>The UTC date/time is: <?= $utcDateTime->format("y-m-d H:i:s") ?></p>
<p>The New York date/time is: <?= $localDateTime->format("Y-m-d H:i:s") ?></p>

*/


    $utcDateTime = new DateTime('2014-08-24 13:14', new DateTimeZone('UTC'));

    $localDateTime = clone $utcDateTime;

    $localDateTime->setTimeZone(new DateTimeZone('America/New_York'));

?>

<p>The UTC date/time is: <?= $utcDateTime->format("y-m-d H:i:s") ?></p>
<p>The New York date/time is: <?= $localDateTime->format("Y-m-d H:i:s") ?></p>


