<?php define('MAIN_INCLUDED', 1); ?>
<?php
$_arguments = array();
if(count($_POST) > 0){
	$_arguments = $_POST;
}else if(count($_GET) > 0){
	$_arguments = $_GET;
}

if(isset($_arguments["do"])&& ($_arguments["do"] != "")){
	if(($_arguments["do"] == "add_classroom")){//RD-250-add_classroom
		$page = "model/add_classroom.php";
	}else if(($_arguments["do"] == "add_grade")){//RD-250-add_grade
		$page = "model/add_grade.php";
	}else if(($_arguments["do"] == "add_subject")){//RD-250-add_subject
		$page = "model/add_subject.php";
	}else if(($_arguments["do"] == "add_teacher")){//RD-250-add_teacher
		$page = "model/add_teacher.php";
	}else if(($_arguments["do"] == "update_teacher")){//RD-250-update_teacher
		$page = "model/update_teacher.php";
	}else if(($_arguments["do"] == "add_subject_routing")){//RD-250-add_subject_routing
		$page = "model/add_subject_routing.php";
	}else if(($_arguments["do"] == "add_timetable")){//RD-250-add_timetable
		$page = "model/add_timetable.php";
	}else if(($_arguments["do"] == "update_timetable")){//RD-250-update_timetable
		$page = "model/update_timetable.php";
	}else if(($_arguments["do"] == "add_student")){//RD-250-add_student
		$page = "model/add_student.php";
	}else if(($_arguments["do"] == "update_student")){//RD-250-update_student
		$page = "model/update_student.php";
	}else if(($_arguments["do"] == "add_student_payment")){//RD-250-add_student_payment
		$page = "model/add_student_payment.php";
	}else if(($_arguments["do"] == "add_exam")){//RD-250-add_exam
		$page = "model/add_exam.php";
	}else if(($_arguments["do"] == "add_emarks_range_grade")){//RD-250-add_emarks_range_grade
		$page = "model/add_emarks_range_grade.php";
	}else if(($_arguments["do"] == "add_exam_timetable")){//RD-250-add_exam_timetable
		$page = "model/add_exam_timetable.php";
	}else if(($_arguments["do"] == "update_exam_timetable")){//RD-250-update_exam_timetable 
		$page = "model/update_exam_timetable.php";
	}else if(($_arguments["do"] == "add_student_exam_mark")){//RD-250-add_student_exam_mark 
		$page = "model/add_student_exam_mark.php";
	}else if(($_arguments["do"] == "add_student_exam_mark1")){//RD-250-add_student_exam_mark1 
		$page = "model/add_student_exam_mark1.php";
	}else if(($_arguments["do"] == "update_student_exam_mark")){//RD-250-update_student_exam_mark
		$page = "model/update_student_exam_mark.php";
	}else if(($_arguments["do"] == "update_student_exam_mark2")){//RD-250-update_student_exam_mark2
		$page = "model/update_student_exam_mark2.php";
	}else if(($_arguments["do"] == "add_teacher_salary")){//RD-250-add_teacher_salary add_attendents
		$page = "model/add_teacher_salary.php";
	}else if(($_arguments["do"] == "add_attendance")){//RD-250-add_attendance
		$page = "model/add_attendance.php";
	}else if(($_arguments["do"] == "user_login")){//RD-250-user_login
		$page = "model/user_login.php";
	}else if(($_arguments["do"] == "add_dkash")){//RD-250-add_dkash
		$page = "model/add_dkash.php";
	}else if(($_arguments["do"] == "add_events")){//RD-250-add_events 
		$page = "model/add_events.php";
	}else if(($_arguments["do"] == "update_events")){//RD-250-update_events
		$page = "model/update_events.php";
	}else if(($_arguments["do"] == "update_admin_profile")){//RD-250-update_admin_profile  
		$page = "model/update_admin_profile.php";
	}else if(($_arguments["do"] == "update_teacher_profile")){//RD-250-update_teacher_profile
		$page = "model/update_teacher_profile.php";
	}else if(($_arguments["do"] == "update_student_profile")){//RD-250-update_student_profile
		$page = "model/update_student_profile.php";
	}else if(($_arguments["do"] == "update_parents_profile")){//RD-250-update_parents_profile
		$page = "model/update_parents_profile.php";
	}else if(($_arguments["do"] == "add_group_message")){//RD-250-add_group_message
		$page = "model/add_group_message.php";
	}																				
}else{
	header("Location: view/login.php");
}
require $page;

?>


