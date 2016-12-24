<?php require 'functions/connection.php'; ?>
<?php require 'includes/header.php'; ?>
<html>
<head>

<link href="Bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="Bootstrap/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="Bootstrap/dist/js/bootstrap.min.js"></script>

<script>function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(250)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
			 

        }</script>
</head>
<body>

<div class="row">
 <div class="col-md-3"></div>
  <div class="col-md-6">
<div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
		</div>
 <div class="col-md-3"></div>
</div>
 <input id="myInput" type="file" name="proFileP" onchange="readURL(this);" style="visibility:hidden">
 <div class="row">
 <div class="col-md-2"></div>
  <div class="col-md-8">
 <div class="logo2"><center>
 
    <figure><img src="img/upload.gif" width="250"></figure>
        </center></div>
 <div class="logo1"><center>
 
  <figure><a href="#" onclick="$('#myInput').click();">
    <img id="blah" src="img/logo1.png" alt="people"  width="250"/></a>
  </figure>                      
   
					</center></div>
 </div>
 <div class="col-md-2"></div>
 </div>

 

</body>
</html>