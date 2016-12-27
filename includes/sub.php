

<link href="css/loginbody.css" type="text/css" rel="stylesheet">
<header>
		<div class="sub2">
		
        <ul class="nav nav-tabs">
		
          <li class="active"><a href="#tab1" data-toggle="tab">Over View</a></li>
          <li><a href="#tab2" data-toggle="tab">Profile</a></li>
		  <li><a href="#tab3" data-toggle="tab">Security</a></li>
		  
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab1">
            <p>Over View</p>
          </div>
          <div class="tab-pane" id="tab2">
		  <div id="frame2">
		  <div id=name1>
	         <label for="sid" class="col-sm-9 col-sm-offset-1 control-label"><?php if(isset($_SESSION['fullname']))echo $_SESSION['fullname']; ?></label>
	      </div>
	      <div id=name2>
	         <label for="sid" class="col-sm-9 col-sm-offset-1 control-label"><?php if(isset($_SESSION['email']))echo $_SESSION['email']; ?></label>
	      </div>
		  <div id=pro>
		  <img src ="#"></div>
		  
		  </div>
		  
		  
		  <div id="frame1">
 <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form2" action="#" method="post">
            <h4>Personal Information</h4>

  <div class="form-group">
            <label for="sid" class="col-sm-3 control-label">Student ID</label>
            <div class="col-sm-8">
                <input type="text" name="studentID" placeholder="Student ID" class="form-control" style="width:315px">
            </div>
        </div>
  <div class="form-group">
            <label for="fname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-8">
                <input type="text" name="firstname" placeholder="First Name" class="form-control" style="width:315px">
            </div>
        </div>
 <div class="form-group">
            <label for="lname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-8">
                <input type="text" name="lastname" placeholder="Last Name" class="form-control" style="width:315px">
            </div>
        </div>		
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" placeholder="Email" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-8">
                <input type="password" name="password" placeholder="Password" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="rePassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-8">
                <input type="password" name="rePassword" placeholder="Confirm Password" class="form-control" style="width:315px">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-8">
                <input type="date" name="birthDate" class="form-control" style="width:315px">
            </div>
        </div>
		  <div class="form-group">
            <div class="col-sm-5 col-sm-offset-3">
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </div>
        </div>
</form>	
</div>


			<div id="frame3">
			 <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form3" action="#" method="post">  
			 <h4>Change Password</h4>
  <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >Your mother's last name?</label>
            <div class="col-sm-8">
                <input type="text" name="mlname" placeholder="Mother's last name" class="form-control" style="width:315px">
            </div>
        </div>
 <div class="form-group">
            <label for="lname" class="col-sm-3 control-label">Your hobby?</label>
            <div class="col-sm-8">
                <input type="text" name="hobby" placeholder="Hobby" class="form-control" style="width:315px">
            </div>
        </div>		
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Where were you born?</label>
            <div class="col-sm-8">
                <input type="text" name="bplace" placeholder="Born place" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="password" class="col-sm-3 control-label">Your Favourite TV show</label>
            <div class="col-sm-8">
                <input type="text" name="TV" placeholder="Favourite TV show name" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="rePassword" class="col-sm-3 control-label">Your favourite celebrity name</label>
            <div class="col-sm-8">
                <input type="text" name="Cname" placeholder="Favourite celebrity name" class="form-control" style="width:315px">
            </div>
        </div><hr> 
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-3">
                <button type="submit" class="btn btn-success btn-block">Change</button>
            </div>
        </div>
    </form>
			
			
			</div>
          </div>
		  
		  
		  <div class="tab-pane" id="tab3">
            <p>Security</p>
          </div>
        </div>
        </div> 
		</div>

