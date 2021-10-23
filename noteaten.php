<?php
$slct = strtolower(htmlspecialchars($_GET['slct']));
$locs = array("", "al", "ann", "ar", "atl", "aus", "avl", "az", "bal", "bhm", "bklyn", "bldr", "bli", "bna", "bos", "buf", "ca", "cak", "chs", "chi", "cin", "cle", "co", "col", "clt", "ct", "dal", "dca", "de", "den", "det", "fdk", "fl", "ga", "hou", "ilm", "in", "jan", "ky", "las", "lax", "lit", "lou", "md", "me", "mem", "mi", "mia", "ms", "msp", "msy", "nc", "nj", "nocal", "nyc", "ny", "nva", "oak", "ocnj", "oh", "or", "pa", "phl","pdx", "phx", "rdu", "roc", "san", "sav", "sc", "sea", "sfo", "socal", "stl", "syr", "tn", "tus", "tx", "tys", "ut", "va", "wa", "wi");
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
	<title>Places John F Croston III Have Not Eaten Here Yet<?php if ($city != "" && $city != "123") { echo " in ".$city;} ?></title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="<?php if ($city != "" && $city != "123") { echo "Here are the restaurants in ".$city. " area. ";} ?>Ate Here is the creation of John F Croston III who lives in the Washington, DC, area and works in accessibility along with being a lover of food when he travels." />
	<meta name="author" content="John F Croston III" />
	<meta name="robots" content="index,follow" />
	<meta property="og:type" content="article" />
	<meta property="article:author" content="John F Croston III" />
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
		ul, li { padding: 0;}
		li { list-style: none;}
		#ftr p { margin: .75em 0;}
		a, a:visited { color: #000;}
		img { width: 100%; height: auto;}
		form { margin: 1em 0;}
		label, select, input[type="submit"] { padding: .25em 0; font-size: 1.375em;}
		label { position: relative; display: block;}
		select { width: 100%; margin: 0 .5em 0 0;}
		input[type="submit"] { font-size: 1em; font-weight: bold; padding: .5em; background: #BEFF9E; margin: .75em 0 .25em 0;}
		.scrn-rdr { position: absolute; left: -10000px; top: auto;}
		.error-msg { color: #f00; font-weight: bold; font-size: 1.5em;}
		.rest-addr { font-weight: normal;}
		.vcard { border-bottom: solid 2px #000;}
		.not-eaten { font-weight: bold;}
		.notices { margin-top: .25em; border-top: 5px solid red; border-bottom: 5px solid red;}
		.notices h2 { font-size: 1.125em;}
		.notices p { margin: 0 0 .5em 0;}
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
			.notices { margin-top: .5em;}
		}
	</style>
</head>
<body>
<div id="wrap">
	<div id="hdr" role="banner">
		<h1><a href="noteaten.php" rel="me">jfciii Ate Here</a></h1>
	</div>
	<div id="cntnt" role="main">
		<?php
		if (!in_array($slct, $locs) && $slct != "") {
			echo "<p class='error-msg'>Please make sure to select a city, state, or location from the drop-down list.</p>";
		}	
		$filename = 'inc/notices.html';
		if (file_exists($filename)) {
			include 'inc/notices.html';
		}
		?>
		<form name="RequestForm" method="get" action="noteaten.php">
			<label for="slct" class="scrn-rdr">Choose a location</label>
			<select id="slct" name="slct">
				<option value="xxx">Select a location</option>
				<option value="cak">Akron, OH</option>
				<option value="al">Alabama</option>
				<option value="ann">Annapolis, MD</option>
				<option value="az">Arizona</option>
				<option value="ar">Arkansas</option>
				<option value="avl">Asheville, NC</option>
				<option value="atl">Atlanta, GA</option>
				<option value="aus">Austin, TX</option>
				<option value="bal">Baltimore, MD</option>
				<option value="bli">Bellingham, WA</option>
				<option value="bhm">Birmingham, AL</option>
				<option value="bos">Boston, MA</option>
				<option value="bldr">Boulder, CO</option>
				<option value="bklyn">Brooklyn, NY</option>
				<option value="buf">Buffalo, NY</option>
				<option value="ca">California</option>
				<option value="chs">Charleston, SC</option>
				<option value="clt">Charlotte, NC</option>
				<option value="chi">Chicago, IL</option>
				<option value="cin">Cincinnati, OH</option>
				<option value="cle">Cleveland, OH</option>
				<option value="co">Colorado</option>
				<option value="col">Columbus, OH</option>
				<option value="ct">Connecticut</option>
				<option value="dal">Dallas, TX</option>
				<option value="de">Delaware</option>
				<option value="den">Denver, CO</option>
				<option value="det">Detroit, MI</option>
				<option value="fl">Florida</option>
				<option value="fdk">Frederick, MD</option>
				<option value="ga">Georgia</option>
				<option value="hou">Houston, TX</option>
				<option value="in">Indiana</option>
				<option value="jan">Jackson, MS</option>
				<option value="ky">Kentucky</option>
				<option value="tys">Knoxville</option>
				<option value="las">Las Vegas, NV</option>
				<option value="lit">Little Rock, AR</option>
				<option value="lax">Los Angeles, CA</option>
				<option value="lou">Louisville, KY</option>
				<option value="me">Maine</option>
				<option value="md">Maryland</option>
				<option value="mem">Memphis, TN</option>
				<option value="mia">Miami, FL</option>
				<option value="mi">Michigan</option>
				<option value="msp">Minneapolis–Saint Paul, MN</option>
				<option value="ms">Mississippi</option>
				<option value="bna">Nashville, TN</option>
				<option value="nj">New Jersey</option>
				<option value="msy">New Orleans, LA</option>
				<option value="nyc">New York, NY</option>
				<option value="ny">New York State</option>
				<option value="nc">North Carolina</option>
				<option value="nocal">Northern California</option>
				<option value="nva">Northern Virginia</option>
				<option value="oak">Oakland, CA</option>
				<option value="ocnj">Ocean City, NJ</option>
				<option value="oh">Ohio</option>
				<option value="or">Oregon</option>
				<option value="pa">Pennsylvania</option>
				<option value="phl">Philadelphia, PA</option>
				<option value="phx">Phoenix, AZ</option>
				<option value="pdx">Portland, OR</option>
				<option value="rdu">Raleigh, NC</option>
				<option value="roc">Rochester, NY</option>
				<option value="san">San Diego, CA</option>
				<option value="sfo">San Francisco, CA</option>
				<option value="sav">Savannah, GA</option>
				<option value="sea">Seattle, WA</option>
				<option value="socal">Southern California</option>
				<option value="sc">South Carolina</option>
				<option value="stl">St. Louis, MO</option>
				<option value="syr">Syracuse, NY</option>
				<option value="tn">Tennessee</option>
				<option value="tx">Texas</option>
				<option value="tus">Tucson, AZ</option>
				<option value="ut">Utah</option>
				<option value="va">Virginia</option>
				<option value="wa">Washington</option>
				<option value="dca">Washington, DC</option>
				<option value="ilm">Wilmington, NC</option>
				<option value="wi">Wisconsin</option>
			</select>
			<input class="submit" type="submit" value="Submit">
		</form>
	<?php
		if (!in_array($slct, $locs) || $slct == "") {
	?>
		<h2>Welcome</h2>
		<p>You've found a small website <a href="http://jfciii.com">John F Croston III</a> (<a href="https://twitter.com/jfc3">@jfc3</a>) built to allow myself and others to select a city, state, or location and find restaurants in those places to eat.</p>
		<p>These are the places I recommend to eat at or ones my friends whose food recommendations I trust, TV shows, blog posts, articles, etc.</p>
		<p>In the future, I'm planning on creating and application that people can keep track places they want to eat when the travel.</p>
	<?php } else { ?>
		<h2><?php echo $city; ?> - Not Eaten Here Yet</h2>
		<p>All the restaurants with an asterisk (<strong>*</strong>) after the name and the text "<strong>Looking forward to eating here.</strong>" at the end of the note are places I would like to visit that friends, blog posts, articles, TV shows, etc. recommend I eat.</p>
		<p id="ggl-mps"><strong>Note</strong>: All restaurant addresses link to Google maps.</p>
		<ul role="list">
    <?php
		foreach ($posts as $post) {
			$rest_name = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $post->name)); 
			if ($post->eaten != "yes" && $post->eaten != "jjj") {
	?>
			<li>
				<div class="vcard">
				<?php if ($post->url != "" && $post->url != "hhh") { ;?>
					<h3 class="fn" id="<?php echo $rest_name; ?>" tabindex="-1"><a href="<?php echo $post->url; ?>" class="url"><?php echo $post->name; ?><?php if ($post->eaten != "yes" && $post->eaten != "jjj") { echo ' * <span class="scrn-rdr">Looking forward to eating here.</span>';} ?></a></h3>
				<?php } else { ?>
					<h3 class="fn" id="<?php echo $rest_name; ?>" tabindex="-1"><?php echo $post->name; ?><?php if ($post->eaten != "yes" && $post->eaten != "jjj") { echo ' * <span class="scrn-rdr">Looking forward to eating here.</span>';} ?></h3>
			    <?php } ?>
					<p><a href="https://www.google.com/maps/place/<?php echo urlencode($post->add1.",".$post->cty.",".$post->stt.",".$post->zpcd); ?>" class="rest-addr" aria-describedby="ggl-mps"><span class="adr"><span class="street-address"><?php echo $post->add1; ?></span><br /><?php if ($post->add2 != "" && $post->add2 != "ccc") { echo '<span class="extended-address">'.$post->add2."</span><br />";} ?> <span class="locality"><?php echo $post->cty; ?></span>, <span class="region"><?php echo $post->stt; ?></span> <span class="postal-code"><?php echo $post->zpcd; ?></span></span></a></p>
					<?php if ($post->phn != "" && $post->phn != "ggg") { echo "<p class='tel'>".$post->phn."</p>";} ?>
					<p class="note"><?php if ($post->note != "") { echo $post->note;} ?></p>
					<?php if ($post->eaten != "yes" && $post->eaten != "jjj") { echo '<p class="not-eaten">Looking forward to eating here.</p>';} ?>
					<?php if ($post->hrs != "" && $post->hrs != "uuu") { echo "<p>".$post->hrs."</p>";} ?>
					<?php if ($post->fdtyp != "" && $post->fdtyp != "rrr") { echo "<p>".$post->fdtyp."</p>";} ?>
					<?php if ($post->rcmmnd != "" && $post->rcmmnd != "vvv") { echo "<p>Recommended by ".$post->rcmmnd."</p>";} ?>
					<?php if ($post->photo != "kkk" || $post->cptn != "lll") { echo "<p><img src='".$post->photo."' alt='".$post->cptn."' width='320' height='240'></p>";} ?>
					<?php if ($post->photo2 != "mmm" || $post->cptn2 != "nnn") { echo "<p><img src='".$post->photo2."' alt='".$post->cptn2."' width='320' height='240'></p>";} ?>
					<?php if ($post->photo3 != "ooo" || $post->cptn3 != "ppp") { echo "<p><img src='".$post->photo3."' alt='".$post->cptn3."' width='320' height='240'></p>";} ?>
				</div>
			</li>
    <?php	}	}	?>
		</ul>
		<p><a href="#cntnt">Return to Top of Page</a></p>
	<?php	}	?>
	</div>
	<div id="ftr" role="contentinfo">
		<p>&copy; 2016 - <?php echo date('Y'); ?> - Created by <a href="http://jfciii.com" rel="me">jfciii.com</a> / <a href="https://twitter.com/jfc3" rel="me">@jfc3</a></p>
		<p><a href="mailto:jfc3atehere@jfciii.com?subject=Question from Ate Here<?php if ($slct != "" && $slct != "xxx") { echo " - ".$city." ($slct)";} ?>" rel="me">Questions?</a> <a href="https://github.com/jfc3/atehere" rel="me">GitHub</a></p>
	</div>
</div>
</body>
</html>