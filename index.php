<?php
$slct = htmlspecialchars($_GET['slct']);
$locs = array("", "ann", "atl", "aus", "bal", "bklyn", "bna", "bos", "buf", "ca", "chi", "cle", "col", "de", "fl", "ky", "las", "lax", "md", "mem", "ms", "msy", "nc", "nj", "nocal", "nyc","nva", "oak", "ocnj", "pa", "phl","pdx", "roc", "san", "sfo", "syr", "dca");
if (in_array($slct, $locs) && $slct != "") {
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
		html, body, div, span, h1, h2, h3, p, a, strong, form, label, select, img { margin: 0; padding: 0; border: 0; outline: 0; font-weight: inherit; font-style: inherit; font-size: 106.3%; font-family: inherit; vertical-align: baseline;}
		select, input[type="submit"] { border: solid 1px #000;}
		select:focus, select:active, input[type="submit"]:focus, input[type="submit"]:active { outline: solid 2px #000;}
		body { background: #BEFF9E; color: #000; font-family: Helvetica, Verdana, Arial, sans-serif; line-height: 1;}
		#wrap { margin: 0 auto;}
		#hdr { background: #ACC7FF;}
		#cntnt, #ftr { padding: 1em; background: #fff; border-top: 1px solid #000;}
		a, h1, h2, h3, strong { font-weight: bold;}
		h2, h3 { margin: .5em 0;}
		h1 { font-size: 2em; padding: .25em .5em;}
		h1 a { text-decoration: none;}
		h1 a:hover, h1 a:focus, h1 a:active { text-decoration: underline;}
		h2 { font-size: 1.75em;}
		h3 { font-size: 1.5em;}
		a:hover, a:focus, a:active { text-decoration: none;}
		p { margin: 1em 0; line-height: 1.25em;}
		#ftr p { margin: .75em 0;}
		a, a:visited { color: #000;}
		img { width: 100%;}
		form { margin: 1em 0;}
		label, select, input[type="submit"] { padding: .25em 0; font-size: 1.375em;}
		label { position: relative; display: block;}
		select { width: 100%; margin: 0 .5em 0 0;}
		input[type="submit"] { font-size: 1em; font-weight: bold; padding: .5em; background: #BEFF9E; margin: .75em 0 .25em 0;}
		.scrn-rdr { position: absolute; left: -10000px; top: auto;}
		.error-msg { color: #f00; font-weight: bold; font-size: 1.5em;}
		.rest-addr { font-weight: normal;}
		.vcard { border-bottom: solid 2px #000;}
		@media screen and (min-width: 32.5em) {
			#wrp { width: 100%;}
			#hdr, #cntnt, #ftr { margin: 0 auto; padding: 1em; width: 80%; max-width: 35em; border: 1px solid #000;}
			#cntnt { padding-top: 0;}
			#hdr, #cntnt { border-bottom: 0;}
			h2, h3 { padding: .25em 0 0 0;}
			h1 { font-size: 2.5em; text-align: center; padding: 0;}
			h2 { font-size: 2em; padding: 0 .5em 0 0;}
			h3 { font-size: 1.5em;}
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
	<div id="cntnt" role="main">
		<?php
		if (!in_array($slct, $locs) && $slct != "") {
			echo "<p class='error-msg'>Please select a city, state, or location.</p>";
		}	?>
		<form name="RequestForm" method="get" action="index.php">
			<label for="slct" class="scrn-rdr">Choose a location</label>
			<select id="slct" name="slct">
				<option value="xxx">Select a location</option>
				<option value="ann">Annapolis, MD</option>
				<option value="atl">Atlanta, GA</option>
				<option value="aus">Austin, TX</option>
				<option value="bal">Baltimore, MD</option>
				<option value="bos">Boston, MA</option>
				<option value="bklyn">Brooklyn, NY</option>
				<option value="buf">Buffalo, NY</option>
				<option value="ca">California</option>
				<option value="chi">Chicago, IL</option>
				<option value="cle">Cleveland, PA</option>
				<option value="col">Columbus, OH</option>
				<option value="de">Delaware</option>
				<option value="fl">Florida</option>
				<option value="ky">Kentucky</option>
				<option value="las">Las Vegas, NV</option>
				<option value="lax">Los Angeles, CA</option>
				<option value="md">Maryland</option>
				<option value="mem">Memphis, TN</option>
				<option value="ms">Mississippi</option>
				<option value="bna">Nashville, TN</option>
				<option value="nj">New Jersey</option>
				<option value="msy">New Orleans, LA</option>
				<option value="nyc">New York, NY</option>
				<option value="nc">North Carolina</option>
				<option value="nocal">Northern California</option>
				<option value="nva">Northern Virginia</option>
				<option value="oakj">Oakland, CA</option>
				<option value="ocnj">Ocean City, NJ</option>
				<option value="pa">Pennsylvania</option>
				<option value="phl">Philadelphia, PA</option>
				<option value="pdx">Portland, OR</option>
				<option value="roc">Rochester, NY</option>
				<option value="san">San Diego, CA</option>
				<option value="sfo">San Francisco, CA</option>
				<option value="syr">Syracuse, NY</option>
				<option value="dca">Washington, DC</option>
			</select>
			<input class="submit" type="submit" value="Submit">
		</form>
	<?php
	if (!in_array($slct, $locs) || $slct == "") {
	?>
		<h2>Welcome</h2>
		<p>You've found a small website <a href="http://jfciii.com">John F Croston III</a> (<a href="https://twitter.com/jfc3">@jfc3</a>) built to allow myself and others to select a city, state, or location and find restaurants in those places to eat.</p>
		</p>These are the places I recommend to eat at or ones my friends whose food recommendations I trust, TV shows, blog posts, articles, etc.</p>
		<p>In the future, I'm planning on creating and application that people can keep track places they want to eat when the travel.</p>
	<?php } else { ?>
			<h2><?php echo $city; ?></h2>
			<p id="not-eaten">All the restaurants with an asterisk (<strong>*</strong>) next to them are places I would like to visit that friends, blog posts, articles, TV shows, etc. recommend I eat.</p>
			<p id="ggl-mps"><strong>Note</strong>: All restaurant addresses link to Google maps.</p>
    <?php
		foreach ($posts as $post) {
			$rest_name = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $post->name)); 
	?>
		<div class="vcard">
		<?php if ($post->url != "") { ;?>
			<h3 class="fn" id="<?php echo $rest_name; ?>" tabindex="-1"><a href="<?php echo $post->url; ?>" class="url"><?php echo $post->name; ?><?php if ($post->eaten != "yes") { echo '<span aria-describedby="not-eaten"> *</span>';} ?></a></h3>
			<?php } else { ?>
			<h3 class="fn" id="<?php echo $rest_name; ?>" tabindex="-1"><?php echo $post->name; ?><?php if ($post->eaten != "yes") { echo '<span aria-describedby="not-eaten"> *</span>';} ?></h3>
	    <?php } ?>
			<p><a href="https://www.google.com/maps/place/<?php echo urlencode($post->add1.", ".$post->cty.", ".$post->stt.", ".$post->zpcd); ?>" class="rest-addr" aria-describedby="ggl-mps"><span class="adr"><span class="street-address"><?php echo $post->add1; ?></span><br /><?php if ($post->add2 != "") { echo '<span class="extended-address">'.$post->add2."</span><br />";} ?> <span class="locality"><?php echo $post->cty; ?></span>, <span class="region"><?php echo $post->stt; ?></span> <span class="postal-code"><?php echo $post->zpcd; ?></span></span></a></p>
			<?php if ($post->phn != "") { echo "<p>".$post->phn."</p>";} ?>
			<p><?php if ($post->note != "") { echo $post->note;} ?></p>
			<?php if ($post->photo != "kkk" || $post->cptn != "lll") { echo "<p><img src='".$post->photo."' alt='".$post->cptn."'></p>";} ?>
		</div>
    <?php	}	?>
		<p><a href="#cntnt">Return to Top of Page</a></p>
	<?php	}	?>
	</div>
	<div id="ftr" role="contentinfo">
		<p>&copy; 2016 - <?php echo date('Y'); ?> - Created by <a href="http://jfciii.com">jfciii.com</a> / <a href="https://twitter.com">@jfc3</a></p>
		<p><a href="mailto:jfc3atehere@jfciii.com?subject=Question from 10K Apart Entry">Questions?</a> <a href="https://github.com/jfc3/10kapart">GitHub</a></p>
	</div>
</div>
<script src="../js/google.js"></script>
</body>
</html>