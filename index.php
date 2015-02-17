<?php
putenv("PATH=".getenv("PATH").PATH_SEPARATOR."/usr/local/bin");
ini_set('include_path', '/usr/local/bin');
if ( ! empty($_POST["url"])){
    $url = $_POST["url"];
	$cmd = 'LC_ALL=en_US.UTF-8 /usr/local/bin/youtube-dl -x -k -o' . escapeshellarg('%(id)s.%(ext)s') . ' ' . escapeshellarg($url) . ' 2>&1 ';
    $pos = strpos($url, "?")+3;
    $vrl = substr($url, $pos, -1);  
    $vrl .= ".mp4";
    $vrl = "./".$vrl;
    $arl = substr($url, $pos, -1);
    $arl .= ".m4a";  
    $arl = "./".$arl;
    // echo($vrl);
	// echo($cmd);
	exec($cmd, $output, $ret);
	// echo 'Output : ';
	// var_export($output);
	// echo "\nReturn : ";
	// var_export($ret);
	echo "<div id=\"ok\">DONE! Download: <a href = $vrl>Video</a>  <a href = $arl>Audio</a></div>";
} else {
}

?> 
<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css">
  
  <!--favicons-->
  <link href="assets/favicon.ico" rel="shortcut icon" type="image/ico">
</head>
<body>
    <div class="container">
        <!-- Centered inside whatever sized container  -->
        <div class="outer">
            <div class="inner">
                <div class="centered">
                    <div id="root">srinivas.gs/video</div>

                    <div id = "maintext">
                        <form action="index.php" method="post" class="fc">
						<input type="text" name="url" id ="url"><br>
						<input type="Submit">
						</form>

                    </div>
                    <div id = "ok"></div>

                </div>
            </div>
        </div>
    </div>

</body>
</html> 