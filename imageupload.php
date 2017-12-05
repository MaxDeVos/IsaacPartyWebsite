<!DOCTYPE html>
<html>
<head>
	<meta content="application/xhtml+xml; charset=utf-8" http-equiv="content-type">
	<title>Upload Image</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<audio controls="controls" id="player" style="display: none;"><source src="css/media/oof.ogg" type="audio/ogg"> <source src="css/media/oof.mp3" type="audio/mpeg"> Your browser does not support the audio element.</audio>
	<script type="text/javascript" src="js/scripts.js">
	</script>
	
</head>
<body>
	<div id="container" onclick="playOof();">
		<b><p class="title">R U A RoBit?</p></b>
		<p class="bodytext"> UPLOAD A PIC OF YOSELF </p>
    <form action="imageupload.php" method="post" enctype="multipart/form-data">
    
    Wats ur nayme <input type="text" name="personName" id="personName" required><br> 
    Wats ur email <input type="text" name="email" id="email" required><br> 
    Choose a picktre <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Whooooosh" name="submit">
        </form>

    <?php
        include 'php/uploadHandler.php';
    ?>
    

    </div>
</body>
</html>
