<!--  NAV TOP  -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    
	<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-brand" href="#">Logo</a> -->
	  
	  <img height="80px" width="80px" src="<?php echo base_url('assets/images/logo1.png')?>" >
	  
    </div>
	<div class="navbar-text" style="margin-top:0px;padding-top:0px">
		<h3>Programming Lab Management System</h3>
		<h5>King Mongkut's Institute of Technolygy Ladkrabang</h5>
	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right" style="padding-top:15px;">
		<li><a href="<?php echo site_url('supervisor/index'); ?>">Home</a></li>
		<li><a href="<?php echo site_url($_SESSION['role'].'/exercise_show'); ?>" title="Exercise Management">Exercise</a></li>
		<!-- <li class="dropdown">
			<a href="<?php echo site_url($_SESSION['role'].'/exercise_show'); ?>" class="dropdown-toggle" data-toggle="dropdown" title="Exercise Management">Exercise <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/show_lab_exercise'); ?>"><i class="icon-list"></i> Show Exercise</a>
				</li>
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/add_exercise_form'); ?>"><i class="icon-support"></i> Add Exercise</a>
				</li>
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/exercise_edit'); ?>"><i class="icon-support"></i> Edit Exercise</a>
				</li>
			</ul>
		</li> -->

		<li class="dropdown">
			<a  class="dropdown-toggle" data-toggle="dropdown" title="Exercise Mangement">Monitering <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/show_lab_exercise' ); ?>" disabled><i class="icon-list"></i> Show Layout</a>
				</li>
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/add_exercise_form' ); ?> " disabled><i class="icon-support"></i> Show ECC-704</a>
				</li>
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/add_exercise_form' ); ?> " disabled><i class="icon-support"></i> Show ECC-706</a>
				</li>
			</ul>
		</li>
		
		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Student ">Student List<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/student_show/19'); ?>"><i class="icon-list"></i> กลุ่ม 19 </a>
				</li>
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/student_show/all'); ?>"><i class="icon-support"></i> All Student </a>
				</li>
				<li>
					<a href="<?php echo site_url($_SESSION['role'].'/student_add/'); ?>" disable><i class="icon-support"></i> Bulk Add Student</a>
				</li>
			</ul>
		</li>
		
		
        
		<li><a href="<?php echo site_url($_SESSION['role'].'/edit_profile_form'); ?>">Edit profile</a></li>
	    <li><a href="#">Help</a></li>
		<li><a href="#">About</a></li>
        <li><a  class="btn btn-default btn-lg"  href="<?php echo site_url("auth/logout") ?>"> 
          <span class="glyphicon glyphicon-log-out"></span> Log out </a></li>
      </ul>
    </div>
  </div>
  
</nav>
<!-- /. NAV TOP  -->
 

 <!-- Page Contents -->
<div class="container-fluid text-center" id="page-content" style="background-color:GhostWhite">	
	<!-- row content -->
	<div class="row">
		<div class="row row-content col-2">
			<p> เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
</p>
		</div>
		<div class="row row-content col-10">
			<p> เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
			 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
			เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
			 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
			เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
			 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
			เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
			 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
			เพื่อให้นักศึกษาสามารถเขียนโปรแกรมได้ตรงตามโครงสร้างของภาษา
			 2. เพื่อให้นักศึกษาสามารถเขียนโปรแกรมเพื่อแสดงข้อมูลในหน้าจอได้ตรงตามความต้องการ
			</p>
		</div>
	</div>
</div>
