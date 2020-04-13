<?php

if(isset($_POST['stream_url'])){
    echo shell_exec('ffmpeg -f gdigrab -i desktop -pix_fmt yuv420p -c:v libx264 -b:v 1000k -g 30 -keyint_min 120 -profile:v baseline -preset veryfast -c:a aac -b:a 96k  -f flv "'. $_POST['stream_url'] .'" 2>&1');
    echo "<h1>". $_POST['stream_url'] ."</h1>";
}

?>