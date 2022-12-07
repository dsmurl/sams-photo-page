<?php
function endsWith($haystack, $needle)
{
	$length = strlen($needle);
	if ($length == 0) {
		return true;
	}

	$start  = $length * -1; //negative

	return (substr($haystack, $start) === $needle);
}


function renderImageDirectory()
{
  // The glob reading creates an array sorted by file name so camera pictures appear sequential.
	foreach (glob('./images/*') as $filename) {
		if ($filename != "." && $filename != "..") {
			if ((endsWith(strtolower($filename), ".jpg")) ||
				(endsWith(strtolower($filename), ".png")) ||
				(endsWith(strtolower($filename), ".jpeg"))
			) {
				echo "<img src='./$filename' width='900px'><br><br>";
			}
		}
	}
}
?>


<style>
	body {
		background-color: #269;
		background-image:
			linear-gradient(rgba(255, 255, 255, .5) 2px, transparent 2px),
			linear-gradient(90deg, rgba(255, 255, 255, .5) 2px, transparent 2px),
			linear-gradient(rgba(255, 255, 255, .28) 1px, transparent 1px),
			linear-gradient(90deg, rgba(255, 255, 255, .28) 1px, transparent 1px);
		background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px;
		background-position: -2px -2px, -2px -2px, -1px -1px, -1px -1px;
	}
</style>
<styles>

	<body>
		<div>
			<center>
				<span style="color: #F0F8FF; background-color: #269; font-family: Impact, Charcoal, sans-serif; font-size:30pt;">
					Title Of Page
				</span>

				<br><br>

				<?php renderImageDirectory(); ?>
			</center>
		</div>
	</body>