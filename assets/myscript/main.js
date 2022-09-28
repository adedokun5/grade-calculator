function backToTopBtn() 
{
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function userInfoNextBtn()
{
 var current_value = document.getElementById('name').value;
 document.getElementById('user_info_msg').innerHTML = 'Name Field Takes Alphabets Only.';
 if ( current_value.match('[0-9]') || current_value.length <= 0 ) 
 {
  document.getElementById('save_user_btn').style.color = 'red';
  document.getElementById('save_user_btn').disabled = 'disabled';
  document.getElementById('save_user_btn').style.backgroundColor = '';
 }
 else
 {
  var grading_system = document.getElementById('grd_system').value;

  if ( grading_system == 4 || grading_system == 5 ) 
  {
   document.getElementById('save_user_btn').style.color = 'white';
   document.getElementById('save_user_btn').disabled = '';
   document.getElementById('save_user_btn').style.backgroundColor = 'green';
  }
  else
  {
   document.getElementById('save_user_btn').style.color = 'red';
   document.getElementById('save_user_btn').disabled = 'disabled'; 
   document.getElementById('save_user_btn').style.backgroundColor = ''; 	
  }
 }
}

function operationInfoBtn() 
{
  var oprtn = document.getElementById('operation').value; 
  var num_course = document.getElementById('num_courses').value;
 
  if ( oprtn == "CGPA" || oprtn == "SGPA" ) 
  {
    if ( oprtn == "CGPA" ) 
    {
      document.getElementById('instruction').style.display = "block";
      document.getElementById('instruction').innerHTML = 
      "Number of Courses Offered For the Session";

      if ( num_course.match('[a-zA-Z]') || num_course.length <= 0 || num_course < 1 || oprtn == '#' ) 
      {
        document.getElementById('operation_btn').style.color = 'red';
        document.getElementById('operation_btn').disabled = 'disabled';
        document.getElementById('operation_btn').style.backgroundColor = '';
      }
      else
      {
        document.getElementById('operation_btn').style.color = 'white';
        document.getElementById('operation_btn').disabled = '';
        document.getElementById('operation_btn').style.backgroundColor = 'green';
      }
    }
    else
    {
     document.getElementById('instruction').style.display = "block";
     document.getElementById('instruction').innerHTML = 
     "Number of Courses Offered For the Semester";

      if ( num_course.match('[a-zA-Z]') || num_course.length <= 0 || num_course < 1 || oprtn == '#' ) 
      {
        document.getElementById('operation_btn').style.color = 'red';
        document.getElementById('operation_btn').disabled = 'disabled';
        document.getElementById('operation_btn').style.backgroundColor = '';
      }
      else
      {
        document.getElementById('operation_btn').style.color = 'white';
        document.getElementById('operation_btn').disabled = '';
        document.getElementById('operation_btn').style.backgroundColor = 'green';
      }
    }
  }
  else
  {
    document.getElementById('operation_btn').style.color = 'white';
    document.getElementById('operation_btn').disabled = 'disabled';
    document.getElementById('operation_btn').style.backgroundColor = 'red';
    document.getElementById('instruction').innerHTML = " ";
  }
}

function computeBtn( total_row ) 
{
 for (var i = 1; i <= total_row; i++) 
 {
    var course_code = document.getElementById('course_code'+i).value;
    var credit_unit = document.getElementById('credit_unit'+i).value;
    var test_score = document.getElementById('test_score'+i).value;
    var exam_score = document.getElementById('exam_score'+i).value;

    if ( course_code.length == 6 && course_code.match('^[a-zA-Z]{3}') 
    	&& course_code.match('[0-9]{3}$') && credit_unit > 0 && test_score >= 0 
    	&& test_score < 41 && exam_score >= 0 && exam_score < 61 ) 
    {
    	document.getElementById('compute_btn').disabled = '';
     	document.getElementById('compute_btn').style.backgroundColor = 'green';
     	document.getElementById('compute_btn').style.color = 'white';
    } 
  	else 
  	{
    	document.getElementById('compute_btn').disabled = 'disabled';
     	document.getElementById('compute_btn').style.backgroundColor = '';
     	document.getElementById('compute_btn').style.color = 'red';
     	break;
  	} 	
 }
}