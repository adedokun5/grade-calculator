let grading_system = document.querySelector('#grd_system');
let username = document.querySelector('#name');
let selected_operation = document.querySelector('#operation');
let num_courses = document.querySelector('#num_courses');
let msg = document.querySelector('#user_info_msg');
let next_btn = document.querySelector('#user_btn');

username.oninput = function () {
  userInfoNextBtn( grading_system, username, selected_operation, num_courses, msg, next_btn );
   validateName( username, msg );
}

grading_system.onchange = function () {
   userInfoNextBtn( grading_system, username, selected_operation, num_courses, msg, next_btn );
   validateGradingSystem( grading_system, msg );
}

selected_operation.onchange = function () {
   userInfoNextBtn( grading_system, username, selected_operation, num_courses, msg, next_btn );
   validateOperation( selected_operation, msg );
}

num_courses.oninput = function () {
   userInfoNextBtn( grading_system, username, selected_operation, num_courses, msg, next_btn );
   validateNumberOfCourse( num_courses, msg );
}

function validateGradingSystem( grd_system, msg ) 
{
  if ( grd_system.value == 4 || grd_system.value == 5 ) 
   {
    grd_system.style.border = '2px solid green';
    return 1;
   }
   else
   {
    msg.innerHTML = 'Please, select a grading system!';
    grd_system.style.border = '2px solid red';
    return 0;
   }
}

function validateName( name, msg ) 
{ 
  if ( name.value.match('[0-9]') || name.value.match('[,.!@#$%^&*()/|]') ) 
   {
    msg.innerHTML = 'Name should contain text only!';
    name.style.border = '2px solid red';
    return 0;
   } 
   else 
   {
    name.style.border = '2px solid green';
    return 1;
   }
}

function validateOperation( operation, msg ) 
{
  if ( ( operation.value == 'CGPA' || operation.value == 'SGPA' ) && operation.value.length > 0 ) 
  {
    operation.style.border = '2px solid green';
    return 1;
    } 
  else 
  {
    operation.style.border = '2px solid red';
    msg.innerHTML = 'Please, select an operation to perform';
    return 0;
  }
  }

function validateNumberOfCourse( num_course, msg ) 
{
  if ( num_course.value > 0 && num_course.value < 21 ) 
  {
    num_course.style.border = '2px solid green';
    return 1;
  } 
  else 
  {
    num_course.style.border = '2px solid red';
    msg.innerHTML = 'Number of course should be within the range of 1-20!';
    return 0;
  }
}


function userInfoNextBtn( system, name, operation, courses, msg, btn ) 
{ 
  msg.innerHTML = '';   
  
  if ( system.value.length > 0 && operation.value.length > 0 && ( name.value.length > 0 && !( name.value.match('[0-9]') || name.value.match('[,.!@#$%^&*()/|]') )) && ( courses.value.length > 0 && courses.value > 0 && courses.value < 21 ) ) 
  {
    btn.disabled = '';
    btn.style.backgroundColor = 'green';
    btn.style.color = 'white';
  }
  else
  {
    btn.disabled = 'disabled';
    btn.style.backgroundColor = 'red';
    btn.style.color = 'white';
  }
}
function backToTopBtn() 
{
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
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
     	document.getElementById('compute_btn').style.backgroundColor = 'red';
     	document.getElementById('compute_btn').style.color = 'white';
     	break;
  	} 	
 }
}