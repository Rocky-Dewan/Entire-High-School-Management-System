<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>

<style>

.noScroll{
	overflow-y:hidden;	
}

@media only screen and (max-width: 500px) {
	
	#divGender1, #divPhone1, #divEmail1{
		
	 	width:75%;
		
	}

}



@media print{

	body{
		
		visibility: hidden;
	
	}

	#modalINV{
		
	   visibility: visible;
	
	}

	#divPhoto{
		display:none;	
	}

}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.RD-set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.RD-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}
.image-error{
	border:1px solid #f44336;
	
}

.image-success{
	border:1px solid #009900;
	
}

.RD-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s

}

.RD-modal-content {
   position: absolute;
   left: 125px; 
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* #modalINV css  */

#modalINV .pdetail1 {
	padding:0;
	float:right;
	margin-right:7px; 
	
}

#modalINV .pdetail2 {
	float: right;
	
}


#modalINV .div-logo {
	float: left;
	height: 130px;
}

#modalINV .logo{
	float: left;
	width: 90px;
	height: 90px;
	margin-right: 10px;
	border-radius: 50%;
	text-align: center;
	background-color:#8860a7;
}

#modalINV .class-name{
	float: left;		
	margin-top:0;
	padding-top:0;			
}

#modalINV h1,#modalINV h2,#modalINV h3{
	margin-top:0;
	color:#8860a7;

}

#modalINV .class-address {
	float: left;
			
}

#modalINV .class-email {
	float: right;
	margin-right:15px;
	padding-right:0;
	color:white;
	background-color:#8860a7;
}

#modalINV th{			
	background-color:#8860a7;
	color:white;
}
#modalINV .std-name{
	color:#8860a7;
	font-size:16px;
}
#modalINV #h1{
display:none;	
}


@media print{

#modalINV .logo{
		background-color:#8860a7 !important;	
	}

#modalINV h1,#modalINV h2,#modalINV h3,#modalINV .std-name{
		color:#8860a7 !important;	
	}
	
	
#modalINV .table-bordered th{
			
		color:white!important;
		background-color:#8860a7 !important;		
				
	}
#modalINV .class-email {
		color:white!important;
		background-color:#8860a7 !important;
		
} 
	
#modalINV .panel{
		border:hidden!important;
}
#modalINV #btn1,#modalINV .panel-footer ,#modalINV .RD-heading {
		display:none;
			
}
	
#modalINV #h1{
		display:inline;	
}

#modalINV .close{
		display:none;	
}
	
@-moz-document url-prefix() {
		
	.panel{
		
		margin:0;
		padding:0;
	}
	#modalINV{
		
		margin:0!important;
		padding:0!important;
		position:absolute;
		left:-150px;
	}
	@page{
		margin:0;
		padding:0;	
	}

}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
     	<h1>
            Student
        	<small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Student</a></li>
        </ol>
	</section>

	  
    
    <!-- Main content -->
    <section class="content">
    	<div class="row">
            <div class="col-md-12">
              	<div class="box box-primary">
                	<div class="box-header with-border">
                  		<h3 class="box-title">Add Student</h3>
                	</div><!-- /.box-header -->
                   	<form role="form" action="../index.php" method="post"  enctype="multipart/form-data" id="form1" class="form-horizontal">
                		<div class="box-body" >
                        	<div class="row">
                        		<div class="col-md-6">
                                	<p class="alert-info ">Student Details </p>
                                    <div class="form-group" id="divIndexNumber">
                                        <div class="col-xs-3">
                                            <label for="exampleInputEmail1">Index Number</label>
                                        </div>
                                        <div class="col-xs-9" id="divIndexNumber1">
                                           <input type="text" class="form-control" placeholder="Enter index number" name="index_number" id="index_number" autocomplete="off">  
                                        </div>                    
                                    </div>
                                     <div class="form-group" id="divFullName">
                                        <div class="col-xs-3">
                                            <label for="exampleInputEmail1">Full Name</label>
                                        </div>
                                        <div class="col-xs-9" id="divFullName1">
                                           <input type="text" class="form-control" placeholder="Enter full name" name="full_name" id="full_name" autocomplete="off">  
                                        </div>                    
                                    </div>
                                    <div class="form-group" id="divIName">
                                        <div class="col-xs-3">
                                            <label for="exampleInputEmail1">Name With Initials</label>
                                        </div>
                                        <div class="col-xs-9" id="divIName1">
                                            <input type="text" class="form-control" placeholder="Enter name with initials" name="i_name" id="i_name" autocomplete="off">
                                        </div>                    
                                    </div>
                                    <div class="form-group" id="divAddress">
                                        <div class="col-xs-3">
                                           <label for="exampleInputEmail1">Address</label>
                                        </div>
                                        <div class="col-xs-9" id="divAddress1">
                                           <input type="text" class="form-control" placeholder="Enter address" name="address" id="address" autocomplete="off"> 
                                        </div>                    
                                    </div>
                                    <div class="form-group" id="divEmail">
                                        <div class="col-xs-3">
                                           <label for="exampleInputEmail1">Email</label>
                                        </div>
                                        <div class="col-xs-9" id="divEmail1">
                                           <input type="text" class="form-control" placeholder="Enter email address" name="email" id="email" autocomplete="off"> 
                                        </div>                    
                                    </div>
                                    <div class="row" >
                        				<div class="col-xs-7">
                                            
                                            <div class="form-group" id="divPhone">
                                                <div class="col-xs-5">
                                                    <label for="exampleInputEmail1">Phone</label>
                                                </div>
                                                <div class="col-xs-7" id="divPhone1">
                                                	<input type="text" class="form-control" id="phone" name="phone" placeholder="111-111-1111">
                                                </div> 
                                        	</div>  
                                            <div class="form-group" id="divDOB">
                                                <div class="col-xs-5">
                                                    <label for="exampleInputEmail1">Date of Birth</label>
                                                </div>
                                                <div class="col-xs-7" id="divDOB1">
                                                	<input type="text" class="form-control" id="b_date" name="b_date" >
                                                </div> 
                                        	</div>  
                                            <div class="form-group" id="divGender" >
                                                <div class="col-xs-5">
                                                    <label for="exampleInputEmail1">Gender</label>
                                                </div>
                                                <div class="col-xs-7" id="divGender1">
                                                 	<select name="gender" class="form-control" id="gender" >
                                                        <option>Select Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>                                          
                                                </div> 
                                        	</div> 
                                               	                   
                                    	</div>
                        			   	<div class="col-xs-5">
                                        	<div class="form-group" id="divPhoto">
                                                <div class="col-xs-3">
                                                    <label>Photo</label>
                                                </div>                            
                                                <div class="col-xs-3" id="divPhoto1" style="height:150px;">
                                                    <img id="output" style="width:130px;height:150px;" />
                                                    <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;"  />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                
                            	</div>
                                <div class="col-md-6">
                                	<p class="alert-info "> Guardian Details </p>
                                    <div class="form-group" id="divGIndexNumber">
                                        <div class="col-xs-3">
                                            <label for="exampleInputEmail1">Index Number</label>
                                        </div>
                                        <div class="col-xs-9" id="divGIndexNumber1">
                                           <input type="text" class="form-control" placeholder="Enter index number" name="g_index" id="g_index" autocomplete="off" readonly>  
                                        </div>                    
                                    </div>
                                     <div class="form-group" id="divGFullName">
                                        <div class="col-xs-3">
                                            <label for="exampleInputEmail1">Full Name</label>
                                        </div>
                                        <div class="col-xs-9" id="divGFullName1">
                                           <input type="text" class="form-control" placeholder="Enter full name" name="g_full_name" id="g_full_name" autocomplete="off">  
                                        </div>                    
                                    </div>
                                    <div class="form-group" id="divGIName">
                                        <div class="col-xs-3">
                                            <label for="exampleInputEmail1">Name With Initials</label>
                                        </div>
                                        <div class="col-xs-9" id="divGIName1">
                                            <input type="text" class="form-control" placeholder="Enter name with initials" name="g_i_name" id="g_i_name" autocomplete="off">
                                        </div>                    
                                    </div>
                                    <div class="form-group" id="divGAddress">
                                        <div class="col-xs-3">
                                           <label for="exampleInputEmail1">Address</label>
                                        </div>
                                        <div class="col-xs-9" id="divGAddress1">
                                           <input type="text" class="form-control" placeholder="Enter address" name="g_address" id="g_address" autocomplete="off"> 
                                        </div>                    
                                    </div>
                                    <div class="form-group" id="divGEmail">
                                        <div class="col-xs-3">
                                           <label for="exampleInputEmail1">Email</label>
                                        </div>
                                        <div class="col-xs-9" id="divGEmail1">
                                           <input type="text" class="form-control" placeholder="Enter email address" name="g_email" id="g_email" autocomplete="off"> 
                                        </div>                    
                                    </div>
                                    <div class="row" >
                        				<div class="col-xs-7">
                                            <div class="form-group" id="divGPhone">
                                                <div class="col-xs-5" >
                                                    <label for="exampleInputEmail1">Phone</label>
                                                </div>
                                                <div class="col-xs-7" id="divGPhone1">
                                                	<input type="text" class="form-control" id="g_phone" name="g_phone" placeholder="111-111-1111" >
                                                </div> 
                                        	</div>
                                            <div class="form-group" id="divGDOB">
                                                <div class="col-xs-5" >
                                                    <label for="exampleInputEmail1">Date of Birth</label>
                                                </div>
                                                <div class="col-xs-7" id="divGDOB1">
                                                	<input type="text" class="form-control" id="g_b_date" name="g_b_date" >
                                                </div> 
                                        	</div> 
                                            <div class="form-group" id="divGGender">
                                                <div class="col-xs-5">
                                                    <label for="exampleInputEmail1">Gender</label>
                                                </div>
                                                <div class="col-xs-7"  id="divGGender1">
                                                 	<select name="g_gender" class="form-control" id="g_gender" >
                                                        <option>Select Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>                                          
                                                </div> 
                                        	</div>   
                                             
                                               	                   
                                    	</div>
                        			   	<div class="col-xs-5">
                                        	<div class="form-group" id="divGPhoto">
                                                <div class="col-xs-3">
                                                    <label>Photo</label>
                                                </div>                            
                                                <div class="col-xs-3" id="divGPhoto1" style="height:150px;">
                                                    <img id="output1" style="width:130px;height:150px;" />
                                                    <input type="file" name="g_fileToUpload" id="g_fileToUpload" style="margin-top:7px;"  />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                
                            	</div>
                            </div><br>
                    	</div>
                       <div class="box-footer text-right">
                  			<input type="hidden" name="do" value="add_student"  />
                    		<button style="width:150px;" type="submit" class="btn text-right btn-success asd" id="btnSubmit">Next</button><br>
                             
<?php
/*
$current_day_no=date("d");
if($current_day_no > 25){
	//echo '<script>$(".asd").attr("disabled", true);///';
}
*/
?>
                  		</div>
                   </form>
				</div><!-- /.box -->
			</div>
		</div>
	</section><!-- End of form section -->
   
<!-- Form validate (Before submit the form) -->     
<script>

$("#index_number").keydown(function() {
				
	var $field = $(this);
	var beforeVal = $field.val();// this is the value before the keypress
	
	setTimeout(function() {
	
		var afterVal = $field.val();// this is the value after the keypress
		$("#g_index").val("G-"+afterVal);	
						
	}, 0);
						
}); 

$('#fileToUpload').change(function(){
	//RD-00098
			
	var fileSize = this.files[0].size;	
    var maxSize = 1000000;// bytes
	var ext = $('#fileToUpload').val().split('.').pop().toLowerCase();
	var imageNoError = 0;
	
	if($.inArray(ext, ['png','jpg','jpeg']) == -1){
		//RD-00099
		output.src="../uploads/error.png";
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"                                title="The file type is not allowed" ></span>');
		
	}else{

		if(fileSize > maxSize) {
			//RD-00100
			output.src="../uploads/error.png";
			$("#btnSubmit").attr("disabled", true);
			$('#divPhoto').addClass('has-error');
			$('#divPhoto1').addClass('has-feedback');	
			$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip" title="The file size is too large" ></span>');		
			
					
		}else{
			// RD-00101
			output.src = URL.createObjectURL(this.files[0]);	
			$("#btnSubmit").attr("disabled", false);	
			$('#divPhoto').removeClass('has-error');
			$('#spanPhoto').remove();// RD-00101
			
		}
	}
});

$('#g_fileToUpload').change(function(){
	//RD-00098
			
	var fileSize = this.files[0].size;	
    var maxSize = 1000000;// bytes
	var ext = $('#g_fileToUpload').val().split('.').pop().toLowerCase();
	var imageNoError = 0;
	
	if($.inArray(ext, ['png','jpg','jpeg']) == -1){
		//RD-00099
		output1.src="../uploads/error.png";
		$("#btnSubmit").attr("disabled", true);
		$('#divGPhoto').addClass('has-error');
		$('#divGPhoto1').addClass('has-feedback');
		$('#divGPhoto1').append('<span id="spanGPhoto" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"                                title="The file type is not allowed" ></span>');
		
	}else{

		if(fileSize > maxSize) {
			//RD-00100
			output1.src="../uploads/error.png";
			$("#btnSubmit").attr("disabled", true);
			$('#divGPhoto').addClass('has-error');
			$('#divGPhoto1').addClass('has-feedback');	
			$('#divGPhoto1').append('<span id="spanGPhoto" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip" title="The file size is too large" ></span>');		
			
					
		}else{
			// RD-00101
			output1.src = URL.createObjectURL(this.files[0]);	
			$("#btnSubmit").attr("disabled", false);	
			$('#divGPhoto').removeClass('has-error');
			$('#spanGPhoto').remove();// RD-00101
			
		}
	}
});


$("form").submit(function (e){
	//RD-000098-form submit
	
	var index_number = $('#index_number').val();
	var g_index_number = $('#g_index').val();
	var full_name = $('#full_name').val();
	var g_full_name = $('#g_full_name').val();
	var i_name = $('#i_name').val();
	var g_i_name = $('#g_i_name').val();
	var address = $('#address').val();
	var g_address = $('#g_address').val();
	var gender = $('#gender').val();
	var g_gender = $('#g_gender').val();
	var b_date = $('#b_date').val();
	var g_b_date = $('#g_b_date').val();
	var email = $('#email').val();
	var g_email = $('#g_email').val();
	var photo = $('#fileToUpload').val();
	var g_photo = $('#g_fileToUpload').val();
	var phone = $('#phone').val();
	var g_phone = $('#g_phone').val();
	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var telformat = /\d{3}[\-]\d{3}[\-]\d{4}$/;
	
	if(index_number == ''){
		//RD-00102-index_number 
		$("#btnSubmit").attr("disabled", true);
		$('#divIndexNumber').addClass('has-error has-feedback');
		$('#divIndexNumber').append('<span id="spanIndexNumber" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" 									 data-toggle="tooltip" title="The index number is required" ></span>');	
			
		$("#index_number").keydown(function(){
			//RD-00103-index_number 
			$("#btnSubmit").attr("disabled", false);	
			$('#divIndexNumber').removeClass('has-error has-feedback');
			$('#spanIndexNumber').remove();
				
		});
		
	}
	
	if(g_index_number == ''){
		//RD-00102-index_number 
		$("#btnSubmit").attr("disabled", true);
		$('#divGIndexNumber').addClass('has-error has-feedback');
		$('#divGIndexNumber').append('<span id="spanGIndexNumber" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" 									 data-toggle="tooltip" title="The index number is required" ></span>');	
			
		$("#g_index").keydown(function(){
			//RD-00103-index_number 
			$("#btnSubmit").attr("disabled", false);	
			$('#divGIndexNumber').removeClass('has-error has-feedback');
			$('#spanGIndexNumber').remove();
				
		});
		
	}
	
	if(full_name == ''){
		//RD-00102-full_name 
		$("#btnSubmit").attr("disabled", true);
		$('#divFullName').addClass('has-error has-feedback');
		$('#divFullName').append('<span id="spanFullName" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The full name is required" ></span>');	
		
		$("#full_name").keydown(function(){
			//RD-00103-full_name 
			$("#btnSubmit").attr("disabled", false);	
			$('#divFullName').removeClass('has-error has-feedback');
			$('#spanFullName').remove();
			
		});
		
	}
	
	if(g_full_name == ''){
		//RD-00102-full_name 
		$("#btnSubmit").attr("disabled", true);
		$('#divGFullName').addClass('has-error has-feedback');
		$('#divGFullName').append('<span id="spanGFullName" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The full name is required" ></span>');	
		
		$("#g_full_name").keydown(function(){
			//RD-00103-full_name 
			$("#btnSubmit").attr("disabled", false);	
			$('#divGFullName').removeClass('has-error has-feedback');
			$('#spanGFullName').remove();
			
		});
		
	}
	
	if(i_name == ''){
		//RD-00102-i_name
		$("#btnSubmit").attr("disabled", true);
		$('#divIName').addClass('has-error has-feedback');
		$('#divIName').append('<span id="spanIName" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The initials name is required" ></span>');	
		
		$( "#i_name" ).keydown(function() {
			//RD-00103-i_name
			$("#btnSubmit").attr("disabled", false);	
			$('#divIName').removeClass('has-error has-feedback');
			$('#spanIName').remove();
			
		});
	
	}
	
	if(g_i_name == ''){
		//RD-00102-i_name
		$("#btnSubmit").attr("disabled", true);
		$('#divGIName').addClass('has-error has-feedback');
		$('#divGIName').append('<span id="spanGIName" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The initials name is required" ></span>');	
		
		$( "#g_i_name" ).keydown(function() {
			//RD-00103-i_name
			$("#btnSubmit").attr("disabled", false);	
			$('#divGIName').removeClass('has-error has-feedback');
			$('#spanGIName').remove();
			
		});
	
	}
	
	if(address == ''){
		//RD-00102-address
		$("#btnSubmit").attr("disabled", true);
		$('#divAddress').addClass('has-error has-feedback');
		$('#divAddress').append('<span id="spanAddress" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The address is required" ></span>');	
		
		$("#address").keydown(function() {
			//RD-00103-address
			$("#btnSubmit").attr("disabled", false);	
			$('#divAddress').removeClass('has-error has-feedback');
			$('#spanAddress').remove();
			
		});
	
	}
	
	if(g_address == ''){
		//RD-00102-address
		$("#btnSubmit").attr("disabled", true);
		$('#divGAddress').addClass('has-error has-feedback');
		$('#divGAddress').append('<span id="spanGAddress" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The address is required" ></span>');	
		
		$("#g_address").keydown(function() {
			//RD-00103-address
			$("#btnSubmit").attr("disabled", false);	
			$('#divGAddress').removeClass('has-error has-feedback');
			$('#spanGAddress').remove();
			
		});
	
	}
	
	if(gender == 'Select Gender'){
		//RD-00102-gender
		$("#btnSubmit").attr("disabled", true);
		$('#divGender').addClass('has-error ');
		$('#divGender1').addClass('has-error has-feedback');
		$('#divGender1').append('<span id="spanGender" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The gender is required" ></span>');	
		
		$("#gender").change(function() {
			//RD-00103-gender
			$("#btnSubmit").attr("disabled", false);	
			$('#divGender').removeClass('has-error');
			$('#divGender1').removeClass('has-error has-feedback');
			$('#spanGender').remove();
			
		});
	
	}
	
	if(g_gender == 'Select Gender'){
		//RD-00102-gender
		$("#btnSubmit").attr("disabled", true);
		$('#divGGender').addClass('has-error ');
		$('#divGGender1').addClass('has-error has-feedback');
		$('#divGGender1').append('<span id="spanGGender" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The gender is required" ></span>');	
		
		$("#g_gender").change(function() {
			//RD-00103-gender
			$("#btnSubmit").attr("disabled", false);	
			$('#divGGender').removeClass('has-error');
			$('#divGGender1').removeClass('has-error has-feedback');
			$('#spanGGender').remove();
			
		});
	
	}
	
	if(b_date == ''){
		//RD-00102-address
		$("#btnSubmit").attr("disabled", true);
		$('#divDOB').addClass('has-error');
		$('#divDOB1').addClass('has-error has-feedback');
		$('#divDOB1').append('<span id="spanDOB" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The date of birth is required" ></span>');	
		
		$("#b_date").keydown(function() {
			//RD-00103-address
			$("#btnSubmit").attr("disabled", false);	
			$('#divDOB').removeClass('has-error');
			$('#divDOB1').removeClass('has-error has-feedback');
			$('#spanDOB').remove();
			
		});
	
	}
	
	if(g_b_date == ''){
		//RD-00102-address
		$("#btnSubmit").attr("disabled", true);
		$('#divGDOB').addClass('has-error');
		$('#divGDOB1').addClass('has-error has-feedback');
		$('#divGDOB1').append('<span id="spanGDOB" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The date of birth is required" ></span>');	
		
		$("#g_b_date").keydown(function() {
			//RD-00103-address
			$("#btnSubmit").attr("disabled", false);	
			$('#divGDOB').removeClass('has-error');
			$('#divGDOB1').removeClass('has-error has-feedback');
			$('#spanGDOB').remove();
			
		});
	
	}
	
	if(email == ''){
		//RD-00102-email	
		$('#divEmail').addClass('has-error has-feedback');
		$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The email address is required" ></span>');	
		
		$("#email").keydown(function() {
			//RD-00103-email
			$("#btnSubmit").attr("disabled", false);	
			$('#divEmail').removeClass('has-error has-feedback');
			$('#spanEmail').remove();
			
		});
			
	}else{
		if (mailformat.test(email) == false){ 
			//RD-00108-email
			$('#divEmail').addClass('has-error has-feedback');
			$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
			
			$("#email").keydown(function(){
				//RD-00109-email
				var $field = $(this);// this is the value before the keypress
				var beforeVal = $field.val();
	
				setTimeout(function() {
	
					var afterVal = $field.val();// this is the value after the keypress
					
						if (mailformat.test(afterVal) == true){
							//RD-00110-email
							$("#btnSubmit").attr("disabled", false);
							$('#divEmail').removeClass('has-error has-feedback');
							$('#spanEmail').remove();
							$('#divEmail').addClass('has-success has-feedback');
							$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-ok form-control-feedback"></span>');
							
						}else{
							//RD-00111-email
							$("#btnSubmit").attr("disabled", true);
							$('#spanEmail').remove();
							$('#divEmail').addClass('has-error has-feedback');
							$('#divEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
						
						}
					
				}, 0);
						
			});
			
		}else{
			
		}
			  
	}
	
	if(g_email == ''){
		//RD-00102-email	
		$('#divGEmail').addClass('has-error has-feedback');
		$('#divGEmail1').append('<span id="spanGEmail" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The email address is required" ></span>');	
		
		$("#g_email").keydown(function() {
			//RD-00103-email
			$("#btnSubmit").attr("disabled", false);	
			$('#divGEmail').removeClass('has-error has-feedback');
			$('#spanGEmail').remove();
			
		});
			
	}else{
		if (mailformat.test(g_email) == false){ 
			//RD-00108-email
			$('#divGEmail').addClass('has-error has-feedback');
			$('#divGEmail1').append('<span id="spanGEmail" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
			
			$("#g_email").keydown(function(){
				//RD-00109-email
				var $field = $(this);// this is the value before the keypress
				var beforeVal = $field.val();
	
				setTimeout(function() {
	
					var afterVal = $field.val();// this is the value after the keypress
					
						if (mailformat.test(afterVal) == true){
							//RD-00110-email
							$("#btnSubmit").attr("disabled", false);
							$('#divGEmail').removeClass('has-error has-feedback');
							$('#spanGEmail').remove();
							$('#divGEmail').addClass('has-success has-feedback');
							$('#divGEmail1').append('<span id="spanEmail" class="glyphicon glyphicon-ok form-control-feedback"></span>');
							
						}else{
							//RD-00111-email
							$("#btnSubmit").attr("disabled", true);
							$('#spanGEmail').remove();
							$('#divGEmail').addClass('has-error has-feedback');
							$('#divGEmail1').append('<span id="spanGEmail" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
						
						}
					
				}, 0);
						
			});
			
		}else{
			
		}
			  
	}
	
	if(photo == ''){
		//RD-00102-photo
		output.src="../uploads/error.png";
		
		$("#btnSubmit").attr("disabled", true);
		$('#divPhoto').addClass('has-error has-feedback ');
		$('#divPhoto1').addClass('has-feedback');
		$('#divPhoto1').append('<span id="spanPhoto" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The image is required" ></span>');	
		
	}
	
	if(g_photo == ''){
		//RD-00102-photo
		output1.src="../uploads/error.png";
		
		$("#btnSubmit").attr("disabled", true);
		$('#divGPhoto').addClass('has-error has-feedback ');
		$('#divGPhoto1').addClass('has-feedback');
		$('#divGPhoto1').append('<span id="spanGPhoto" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The image is required" ></span>');	
		
	}
	
	if(phone == ''){
		//RD-00102-phone
		$('#divPhone').addClass('has-error');
		$('#divPhone1').addClass('has-error has-feedback');
		$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The phone number is required" ></span>');	
				
		$("#phone").keydown(function() {
			//RD-00103-phone
			$("#btnSubmit").attr("disabled", false);	
			$('#divPhone').removeClass('has-error');
			$('#divPhone1').removeClass('has-error has-feedback');
			$('#spanPhone').remove();
			
		});
		
	}else{
		if (telformat.test(phone) == false){ 
			//RD-00104-phone
			$('#divPhone').addClass('has-error');
			$('#divPhone1').addClass('has-error has-feedback');
			$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid phone number" ></span>');
			
			$("#phone").keydown(function() {
				//RD-00105-phone
				var $field = $(this);
				var beforeVal = $field.val();// this is the value before the keypress
	
				setTimeout(function() {
	
					var afterVal = $field.val();// this is the value after the keypress
					
						if (telformat.test(afterVal) == true){
							//RD-00106-phone
							$("#btnSubmit").attr("disabled", false);
							$('#divPhone').removeClass('has-error');
							$('#divPhone1').removeClass('has-error has-feedback');
							$('#spanPhone').remove();
							$('#divPhone1').addClass('has-success has-feedback');
							$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-ok form-control-feedback"></span>');
							
						}else{
							//RD-00107-phone
							$("#btnSubmit").attr("disabled", true);
							$('#spanPhone').remove();
							$('#divPhone').addClass('has-error');
							$('#divPhone1').addClass('has-error has-feedback');
							$('#divPhone1').append('<span id="spanPhone" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid email address" ></span>');
					
						}
					
				}, 0);
						
			});
			
		}else{
			
		}
		
	}
	
	if(g_phone == ''){
		//RD-00102-phone
		$('#divGPhone').addClass('has-error');
		$('#divGPhone1').addClass('has-error has-feedback');
		$('#divGPhone1').append('<span id="spanGPhone" class="glyphicon glyphicon-remove form-control-feedback RD-set-width-tooltip" data-toggle="tooltip"    title="The phone number is required" ></span>');	
				
		$("#g_phone").keydown(function() {
			//RD-00103-phone
			$("#btnSubmit").attr("disabled", false);	
			$('#divGPhone').removeClass('has-error');
			$('#divGPhone1').removeClass('has-error has-feedback');
			$('#spanGPhone').remove();
			
		});
		
	}else{
		if (telformat.test(g_phone) == false){ 
			//RD-00112-g_phone
			$('#divGPhone').addClass('has-error');
			$('#divGPhone1').addClass('has-error has-feedback');
			$('#divGPhone1').append('<span id="spanGPhone" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid phone number" ></span>');
			
			$("#g_phone" ).keydown(function(){
				//RD-00113-g_phone
				var $field = $(this);
				var beforeVal = $field.val();// this is the value before the keypress
	
				setTimeout(function() {
	
					var afterVal = $field.val();// this is the value after the keypress
					
						if (telformat.test(afterVal) == true){
							//RD-00114-g_phone
							$('#spanGPhone').remove();
							$("#btnSubmit").attr("disabled", false);
							$('#divGPhone').removeClass('has-error');
							$('#divGPhone1').removeClass('has-error has-feedback');
							$('#divGPhone1').addClass('has-success has-feedback');
							$('#divGPhone1').append('<span id="spanGPhone" class="glyphicon glyphicon-ok form-control-feedback"></span>');
							
						}else{
							//RD-00115-g_phone
							$('#spanGPhone').remove();
							$("#btnSubmit").attr("disabled", true);
							$('#divGPhone').addClass('has-error');
							$('#divGPhone1').addClass('has-error has-feedback');
							$('#divGPhone1').append('<span id="spanGPhone" class="glyphicon glyphicon-remove form-control-feedback RD-set-color-tooltip" data-toggle="tooltip"    title="Enter valid phone number" ></span>');
					
						}
					
				}, 0);
						
			});
			
		}else{
			
		}			
	}
	
	if(index_number == '' || g_index_number == '' || full_name == '' || g_full_name == '' || i_name == '' || g_i_name == '' || address == '' || g_address == '' || gender == 'Select Gender' || g_gender == 'Select Gender' || b_date == '' || g_b_date == '' || email == '' || mailformat.test(email) == false || g_email == '' || mailformat.test(g_email) == false || telformat.test(phone) == false || telformat.test(g_phone) == false || photo == '' || g_photo == '' || phone == ''  || g_phone == '' ) {
		
		//RD-000098- form validation failed
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
	}

});

</script>


<!-- //RD-00122 modalSelectGrade -->      
    <div class="modal RD-fade" id="modalSelectGrade" tabindex="-1" role="dialog" aria-labelledby="modalSelectGrade" aria-hidden="true" data-backdrop="static" data-keyboard="false">  
		<div class="modal-dialog"><!--modal-dialog -->  
			<div class="container col-lg-6 RD-modal-content"><!--modal-content --> 
      			<div class="row">
          			<div class="panel panel-primary "><!--panel --> 
            			<div class="panel-heading ">
              				<h3 class="panel-title" id="hname">Select Grade</h3>
            			</div>
            			<div class="panel-body"><!--panel-body -->
              				<div class="row">
                				<div class="col-lg-3">
                                	<div class="form-group">
                                        <label for="">Grade</label>
                                        <select class="form-control" style="width:200px;" id="grade" name="grade">
                                            <option>Select Grade</option>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM grade";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?>                   				
                                            <option value="<?php echo $row["id"]; ?>" data-id=""><?php echo $row['name']; ?></option>
<?php }} ?>                                    
                                        </select>
                                    </div> 
                            	</div>        
                        	</div>             
              			</div><!--./panel-body -->
             		</div><!--./panel -->
            	</div>
			</div><!--./modal-content -->
		</div><!--./modal-dialog --> 
	</div><!--./modal--> 
    
    <div id="viewSubjectDiv"><!--RD-000126--> 
    	
    </div>
    <div id="insertSubjectDiv"><!--RD-000134--> 
    
    </div>

<!--run insert alert using PHP & JS/jQuery  --> 
<?php
if(isset($_GET["do"])&&($_GET["do"]=="alert_from_insert")){
  
$msg=$_GET['msg'];
$index=$_GET['index'];

	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#index_Duplicated');
			myModal.modal('show');			
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
						
			</script>
		";
	}

	if($msg==2){//RD-00120 
		echo"
			<script>
						
			var myModal1 = $('#modalSelectGrade');
			myModal1.data('id', '$index').modal('show');//RD-00121
						 
			</script>
		";
	
	}

	if($msg==3){
		echo"
			<script>
			
			var myModal = $('#connection_Problem');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==4){
		echo"
			<script>
			
			var myModal = $('#index_email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==5){
		echo"
			<script>
			
			var myModal = $('#email_Duplicated');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
	
	if($msg==6){
		echo"
			<script>
			
			var myModal = $('#upload_error1');
			myModal.modal('show');
			
			clearTimeout(myModal.data('hideInterval'));
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
				
    		}, 3000));
			
			</script>
		";
	
	}
}
?><!--./Insert alert --> 
  
<script>

$('#grade').change(function () {
	//RD-00123
	var grade = $('#grade').val();
	var index = $('#modalSelectGrade').data("id"); 
	var do1 = "view_subject";
	
	$('#modalSelectGrade').modal('hide');
	 
	var xhttp = new XMLHttpRequest();//RD-000124-Start Ajax 
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			document.getElementById('viewSubjectDiv').innerHTML=this.responseText;//RD-000125
			
			$("#modalViewSubject").modal('show');//RD-000127
						
    	}
			
  	};
	
  	xhttp.open("GET", "show_student_subject.php?id=" + grade + "&do="+do1+ "&index="+index, true);												
  	xhttp.send();//RD-000124-End Ajax
	

});

function showModalGrade(){
	//RD-000129
	$('#modalSelectGrade').modal('show');
	$('body').addClass('noScroll');
		
};

function insertSubject(){
	//RD-000131
	var index = $("#index1").val();
	var grade = $("#grade1").val();
	
    var yourArray = new Array();
     
	$("#checkbox:checked").each(function(){
		
		yourArray.push($(this).val());
		
	});

	var xhttp = new XMLHttpRequest();//RD-000132-Start Ajax 
  		xhttp.onreadystatechange = function() {
			
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('insertSubjectDiv').innerHTML=this.responseText;//RD-000133
				
				$('#modalSelectGrade').modal('hide');
				$('#modalViewSubject').modal('hide');
				$('#modalINV').modal('show');//RD-000135
				
			}
			
		};
		xhttp.open("GET", "student_first_payment.php?index=" + index + "&grade="+grade + "&id="+JSON.stringify(yourArray), true);												
		xhttp.send();//RD-000132-End Ajax
		
};

function addSPayment(){
	//RD-000139
	var index = $("#index").val();
	var totalSFee = $("#total_sfee").val();
	var aFee = $("#a_fee").val(); 
	var inv_num = $("#inv_num").val(); 
	
	var xhttp = new XMLHttpRequest();//RD-000140-Start Ajax 
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {//RD-000142
				
				var myArray = eval( xhttp.responseText );
				
				if(myArray[0] == 1){//RD-000144
					window.print();
					$("#modalINV").modal('hide');
					var myModal = $('#insert_Success');
					myModal.modal('show');//RD-000145
					
					myModal.data('hideInterval', setTimeout(function(){
    					myModal.modal('hide');
				
    				}, 3000));
					
				}

				if(myArray[0] == 2){//RD-000146
					var myModal = $('#connection_Problem');
					myModal.modal('show');//RD-000147
					
					myModal.data('hideInterval', setTimeout(function(){
    					myModal.modal('hide');
				
    				}, 3000));
				
				}
				
    		}
			
  		};	
		
    	xhttp.open("GET", "../model/add_student_first_payment.php?index=" + index + "&afee="+aFee + "&totalsfee="+totalSFee + "&inv_num="+inv_num , true);												
  		xhttp.send();//RD-000140-End Ajax	
	                                       
};

</script>

<script>$("[data-mask]").inputmask(); </script>

<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>


</div><!-- /.content-wrapper -->  
                            
<?php include_once('footer.php');?>
