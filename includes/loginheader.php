<link rel="stylesheet" href="Bootstrap/dist/3.3.6/cssbootstrap.min.css">
  <script type="text/javascript" src="Bootstrap/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="Bootstrap/dist/js/bootstrap.min.js"></script>
<link href="css/loginheader.css" type="text/css" rel="stylesheet"> 

  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class = "container">
   
  <div class="navbar-header"> 
 
	  <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
	 
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  </button>
	  
	          
      <ul class="nav nav-pills pull-left">
      <li>
	  <div id="imaginary_container">
	   <div id = "sbutton"><a id="logo" class="navbar-brand" href="index.php"><img src="img/logo1.png" width="50" height="50"></a></div>
	  <div class="input-group stylish-input-group">
	  
                    <input type="text" class="form-control"  placeholder="Search">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div></div>
	  </li>
		</ul>
			   <h5 style="color:white;"><?php if(isset($_SESSION['fname']))echo 'Hi, '.$_SESSION['fname']; ?></h5>
			
	</div>  
	  
	  <div class = "collapse navbar-collapse navHeaderCollapse">

	    <ul class = "nav navbar-nav navbar-right">
			
		   <li><a id="acc4" href="#"><img src="img/globe.png" width="15"> English</a></li>
		   <li><a id="acc4" href="#">About Us</a></li>
		   <li><a id="acc4"href="#">Contact Us</a></li>
		   <li><a id="acc4"href="logout.php">Log out</a></li>
		</ul>
	   
     </div> 

	 </div>
	 </div>