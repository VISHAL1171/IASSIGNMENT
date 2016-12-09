<!doctype html>
<html lang="en">
<head>
<meta charset="utf8">
<meta name="viewport"content="width=device-width initial-scale=1">
<link rel="stylesheet" href="
http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <title> Aparna Buildings</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center" style="background-color:yellow;">basic info form</h1>
<form method="POST" action="dealer.php">
<div class="form-group">
<label for="name">name:</label>
<input type="text" class="form-control"  name="name" id="name" placeholder="enter-name"></div>
<div class="form-group">
<label for="age">age:</label>
<input type="text" class="form-control" name="age" id="age" placeholder="enter ur age">
<label for="mobno.">mobno:</label>
<input type="text" class="form-control" name="mobno" id="mobno." placeholder="enter ur  contact no."></div>
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" name="email" id="email" placeholder="enter email">
</div>
<div class="form-group">
<label for="soi">source of income</label>
<select multiple class="form-control" name="soi" id="soi"><option value="govt job">govt.job</option>
<option value="pb">private buisness</option>
<option value="pension">retired from service</option>
<option value="os">other sources</option>
</select>
</div>
<div class="form-group">
<label for="mi">select the range of your monthly income</label>
<select multiple class="form-control" name="mi" id="mi">
<option value="75k">35k-1l<option>
<option value="1.5l">1lac-2lac</option>
<option value="2.5l">2lac-5lac</option>
<option value="8l">5lac-10lac</option></select></div>
<div class="form-group">
<label for="time">time:</label>
<input type="time" class="form-control"  name="time" id="date" placeholder="enter-time"></div>
<div class="form-group">
<label for="date">date</label>
<input type="date" class="form-control"  name="date" id="time" placeholder="enter-date"></div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>
