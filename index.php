<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cofee - Home</title>
</head>
<body>
    <a href="http://localhost/fblive/cofee?action=0">Stop</a>
    <a href="http://localhost/fblive/cofee?action=1">Start</a>
<pre>
 <?php

if(isset($_GET['action'])){
    $action = $_GET['action'];


     if($action){
        echo "<h1>Recording</h1>";
        shell_exec('ffmpeg -f gdigrab -framerate 30 -i desktop output.mkv 2>&1');
     }
     else{
        // echo shell_exec('taskkill /F /IM "ffmpeg.exe" 2>&1');
        // echo shell_exec('dir 2>&1');
        echo shell_exec('taskkill /F /IM ffmpeg.exe 2>&1');
        // die("Stoped");
        
     }
}
 


//  function startRecording(){

//     shell_exec('ffmpeg -f gdigrab -framerate 30 -i desktop output.mkv 2>&1');

//  }


 
 ?>
</pre>
</body>
</html>