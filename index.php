<html>
<head>
<title>Bond Web Service Demo</title>
<style>
	body {font-family:georgia;}
</style>
<script src="https://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">
$(document).ready(function() {  

	$('.category').click(function(e){
        e.preventDefault(); //stop default action of the link
		cat = $(this).attr("href");  //get category from URL
		alert(cat);
	});
});	


</script>
</head>
	<body>
	<h1>Bond Web Service</h1>
		<a href="year" class="category">Bond Films By Year</a><br />
		<a href="box" class="category">Bond Films By International Box Office Totals</a>
		<h3 id="filmtitle">Title Will Go Here</h3>
		<div id="films">
			<p>Films will go here</p>
		</div>
		<div id="output">Results go here</div>
	</body>
</html>
