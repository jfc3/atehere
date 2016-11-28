<?php
$slct = htmlspecialchars($_GET['slct']);
if ($slct != "" && $slct != "xxx") {
	// copy file content into a string var
	$json_file = file_get_contents('./cty/'.$slct.'.json');
	// convert the string to a json object
	$jfo = json_decode($json_file);
	// read the title value
	$city = $jfo->result->city;
	// copy the posts array to a php var
	$posts = $jfo->result->posts;	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>John F Croston III Ate Here<?php if ($city != "") { echo " in ".$city;} ?></title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" /> 
	<style>
		html, body, div, span, h1, h2, h3, p, a, strong, form, label, select { margin: 0; padding: 0; border: 0; outline: 0; font-weight: inherit; font-style: inherit; font-size: 100%; font-family: inherit; vertical-align: baseline;}
		select, input[type="submit"] { border: solid 1px #000; }
		select:focus, select:active, input[type="submit"]:focus, input[type="submit"]:active { outline: solid 2px #000;}
		
		body { background: #BEFF9E; color: #000; font-family: Helvetica, Verdana, Arial, sans-serif; line-height: 1;}
		#wrap { margin: 0 auto;}
		#hdr { background: #ACC7FF;}
		#cntnt, #ftr { padding: 1em; background: #fff;}
		#cntnt, #ftr , #ftr { border-top: 1px solid #000;}

		a, h1, h2, h3, strong { font-weight: bold;}
		h2, h3 { margin: .5em 0;}
		h1 { font-size: 2em; padding: .25em .5em;}
		h1 a { text-decoration: none;}
		h1 a:hover, h1 a:focus, h1 a:active { text-decoration: underline;}
		h2 { font-size: 1.75em;}
		h3 { font-size: 1.5em;}
		h4 { font-size: 1.25em;}		
		a:hover, a:focus, a:active, table a:hover, table a:focus{ text-decoration: none;}
		p { margin: 1em 0; line-height: 1.25em;}
		a, a:visited { color: #000;}
		hr { margin: .75em 0 .5em 0;}
		
		form { margin: 1em 0;}
		label, select, input[type="submit"] { padding: .25em 0; font-size: 1.5em;}
		label { position: relative; display: block;}
		select { width: 100%; margin: 0 .5em 0 0;}
		input[type="submit"] { font-size: 1em; font-weight: bold; padding: .5em; background: #BEFF9E; margin: .75em 0 .25em 0;}

		.scrn-rdr { position: absolute; left: -10000px; top: auto;}		
		.error-msg { color: #f00; font-weight: bold; font-size: 1.5em;}	
		
		/* tablet and larger */	
		@media screen and (min-width: 520px) {
			#wrp { width: 100%;}
			#hdr, #cntnt, #ftr { margin: 0 auto; padding: 1em; width: 80%; max-width: 560px; border: 1px solid #000;}
			#cntnt { padding-top: 0;}
			#hdr, #cntnt { border-bottom: 0;}
			h2, h3, h4 { padding: .5em 0 0 0;}
			h1 { font-size: 2.5em; text-align: center; padding: 0;}
			h2 { font-size: 2em; padding: 0 .5em 0 0;}
			h3 { font-size: 1.5em;}
			h4 { font-size: 1.25em;}
			p { line-height: 1.5em;}
			label { display: inline;}
			select { width: 12.5em;}
		}
	</style>
</head>
<body>
<div id="wrap">
	<div id="hdr" role="banner">
		<h1><a href="/atehere/index.php">jfciii Ate Here</a></h1>
	</div>
	<div id="cntnt" role="main" tabindex="0">
		<?php		
		 if ($slct == "xxx") {
			echo "<p class='error-msg'>Please select a city, state, or location.</p>";
		}	?>
		<form name="RequestForm" method="get" action="index.php" role="form">
			<label for="slct" class="scrn-rdr">Choose a location</label>
			<select id="slct" name="slct">
				<option value="xxx">Select a location</option>
				<option value="ann">Annapolis, MD</option>
				<option value="alt">Atlanta, GA</option>
				<option value="aus">Austin, TX</option>
				<option value="bal">Baltimore, MD</option>
				<option value="bos">Boston, MA</option>
				<option value="buf">Buffalo, NY</option>
				<option value="cle">Cleveland, PA</option>
				<option value="col">Columbus, OH</option>
				<option value="de">Delaware</option>
				<option value="ky">Kentucky</option>
				<option value="las">Las Vegas, NV</option>
				<option value="md">Maryland</option>
				<option value="mem">Memphis, TN</option>
				<option value="ms">Mississippi</option>
				<option value="bna">Nashville, TN</option>
				<option value="msy">New Orleans, LA</option>
				<option value="nyc">New York, NY</option>
				<option value="nva">Northern Virginia</option>
				<option value="ocnj">Ocean City, NJ</option>
				<option value="phl">Philadelphia, PA</option>
				<option value="pdx">Portland, OR</option>
				<option value="roc">Rochester, NY</option>
				<option value="san">San Deigo, CA</option>
				<option value="syr">Syracuse, NY</option>
				<option value="dca">Washington, DC</option>
			</select>
			<input class="submit" type="submit" value="Submit">
		</form>
	<?php
	if ($_GET['slct'] == "" || $_GET['slct'] == "xxx") {
	?>
		<h2>Welcome</h2>
		<p>You've found a small website <a href="http://jfciii.com">John F Croston III</a> (<a href="https://twitter.com/jfc3">@jfc3</a>) built to allow myself and others to select a city, state, or location and find restaurants in those places to eat.</p>
		</p>These are the places I recommend to eat at or ones my friends whose food recommendations I trust, TV shows, blog posts, articles, etc.</p>
		<p>In the future, I'm planning on creating and application that people can keep track places they want to eat when the travel.</p>
	<?php } else { ?>
			<h2><?php echo $city; ?></h2>
			<p>All the restaurants with an asterisk (<strong>*</strong>) next to them are places I would like to visit that friends, blog posts, articles, TV shows, etc. recommend I eat.</p>
    <?php foreach ($posts as $post) { ?>
		<div class="vcard">
		<?php if ($post->url != "") { ;?>
			<h3 class="fn"><a href="<?php echo $post->url; ?>" class="url"><?php echo $post->name; ?></a></h3>
			<?php } else { ?>
			<h3 class="fn"><?php echo $post->name; ?></h3>
	    <?php } ?>
			<p><strong>Address - </strong><span class="adr"><span class="street-address"><?php echo $post->add1; ?> <?php if ($post->add2 != "") { echo $post->add2.",";} ?></span> <span class="locality"><?php echo $post->cty; ?></span>, <span class="region"><?php echo $post->stt; ?></span> <span class="postal-code"><?php echo $post->zpcd; ?></span></span></p>
			<?php if ($post->phn != "") { echo "<p><strong>Phone - </strong>".$post->phn."</p>";} ?>
			<p><?php if ($post->note != "") { echo $post->note;} ?></p>
		</div>
		<hr>
    <?php	}	?>
		<p><a href="#cntnt">Return to Top of Page</a></p>
	<?php	}	?>
	</div>
	<div id="ftr" role="contentinfo">
		<p role="contentinfo">&copy; 2016 - Created by <a href="http://jfciii.com">jfciii.com</a> / <a href="https://twitter.com">@jfc3</a> <a href="https://github.com/jfc3/atehere">GitHub</a></p>		
	</div>
</div>
<script src="../js/google.js"></script>
</body>
</html>