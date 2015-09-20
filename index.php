<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>USA Clock With Timezones</title>
  <link rel="stylesheet" type="text/CSS" href="styles.css">
  <?php require 'logic.php'; ?>
</head>
<body class="<?=$bclass?>">
<h1> It's <?=$today?> </h1>
<h2>Timezone: <?=$tz?></h2>
<form method='GET' action='index.php'>
<select name="timezone">
<option value="America/New_York">Eastern</option>
<option value="America/Chicago">Central</option>
<option value="America/Denver">Mountain</option>
<option value="America/Phoenix">Mountain no DST</option>
<option value="America/Los_Angeles">Pacific</option>
<option value=" America/Anchorage">Alaska</option>
<option value="America/Adak">Hawaii</option>
<option value="Pacific/Honolulu">Hawaii no DST</option>
</select>
    <input type='submit' value='Set New Timezone'>
	</form>
<img src="http://making-the-internet.s3.amazonaws.com/<?=$bimage?>">
</body>
</html>
