<!DOCTYPE html>
<html lang="en">
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<meta charset="UTF-8">
	<title>Add Product</title>
</head>
<body>

<form action="store" method="POST">
<div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static"></p>	 
  </div>
  <div class="form-group">
    <label for="imagePath">Image Path</label>
    <input type="text" class="form-control" name="imagePath" id="imagePath" placeholder="Enter URL to save image">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter a name for product">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3" input type="text" name="description" id=description placeholder="Enter product description"></textarea>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

<form class="form-inline">
  <input type="submit" name="submit" id="Submit">
  
  </form>
</form>





</body>
</html>