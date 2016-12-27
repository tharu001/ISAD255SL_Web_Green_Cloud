 <link href="includes/header.css" type="text/css" rel="stylesheet">

  <link href="Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="Bootstrap/dist/js/jquery.min.js"></script>
      <script type="text/javascript" src="Bootstrap/dist/js/bootstrap.min.js"></script>
<div class="sub1">
   <div class="navbar navbar-fixed-top">
   	
              <div class="tabbable tabs-left nav-justified">

              <div class="tabbable tabs-left nav-justified">
			  <ul class="nav nav-tabs">	
          <li class="active"><a id="photo" href="#a" data-toggle="tab"><div id="icon"><img src="img/folder.png"></div></a></li>
          <li><a id="photo" href="#b" data-toggle="tab"><div id="icon"><img src="img/document.png"></div></a></li>
          <li><a id="photo" href="#c" data-toggle="tab"><div id="icon"><img src="img/image.jpg"></div></a></li>
		  <li><a id="photo" href="#d" data-toggle="tab"><div id="icon"><img src="img/video.gif"></div></a></li>
		  <li><a id="photo" href="#e" data-toggle="tab"><div id="icon"><img src="img/settings1.png"></div></a></li>
        </ul>
		</div>
            
		
		<div class="tab-content">
		<div class="tab-pane active" id="a">
		
		  <div id="c1"><img src="img/cloud.png" width="230" height="100">Folders</div>
      
 	    <div id="bar2"><button class="btn btn-danger"><span class="glyphicon glyphicon-level-up"></span> New Folder</button>
		               <button class="btn btn-danger"><span class="glyphicon glyphicon-cloud-upload"></span> Upload Files</button></div>
		<div id="bar3"></div>
		 </div>
         <div class="tab-pane" id="b">
		  <div id="c2"><img src="img/cloud.png" width="230" height="100">Documents</div>

        <div id="bar2"><button class="btn btn-primary"><span class="glyphicon glyphicon-level-up"></span> New Folder</button>
		               <button class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload"></span> Upload Files</button></div>
		<div id="bar3"></div>		  
		 </div>
		 
         <div class="tab-pane" id="c">
		 <div id="c3"><img src="img/cloud.png" width="230" height="100">Images</div>
		 
		 <div id="bar2"><button class="btn btn-success"><span class="glyphicon glyphicon-level-up"></span> New Folder</button>
		               <button class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> Upload Files</button></div>
		 <div id="bar3"></div>
		
		 </div>
         <div class="tab-pane" id="d">
		 <div id="c4"><img src="img/cloud.png" width="230" height="100">Videos</div>
		 
		 <div id="bar2"><button class="btn btn-warning"><span class="glyphicon glyphicon-level-up"></span> New Folder</button>
		               <button class="btn btn-warning"><span class="glyphicon glyphicon-cloud-upload"></span> Upload Files</button></div>
		 <div id="bar3"></div>
		
		 </div>
		 
		 
		 <div class="tab-pane" id="e">
		 <div id="c5"><img src="img/cloud.png" width="230" height="100">Settings</div>
		 
		 <div id="bar2"></div>
		 <div id="bar3"></div>
		 <?php require 'includes/sub.php'; ?>
		
		 </div>
  
      </div>
	
       </div>
</div>

</div>