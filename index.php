<!DOCTYPE html>
<html lang="fa">
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<script type="text/javascript" src="jquery-2.2.0.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Important Exam</title>
	</head>
	<body>
		<div class="vertical-center">
			<div class="center-block">
				<h1>Days to Important Exam: </h1>
			</div>
		</div>
	</body>
	<script>
		var date1 = new Date;
		var date2 = new Date('April 21, 2017');
		var im = date2 - date1;
		var day = 1000*60*60*24
		$("h1").append("<strong>"+Math.round(im/day)+"</strong>");
	</script>
</html>
