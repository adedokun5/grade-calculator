window.onscroll = function() 
{
   backToTopBtn();
}

function backToTopBtn() 
{
   if ( document.body.scrollTop > 60 || document.documentElement.scrollTop > 60 ) 
   {
  	   document.getElementById('toTopBtn').style.display = 'block';
   } 
   else 
   {
  	   document.getElementById('toTopBtn').style.display = 'none';
   }
}

let top_btn = document.querySelector('#toTopBtn');
top_btn.onclick = function () 
{
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
}

//User Info Section
let grading_sys = document.querySelector('#grd_system');
let name = document.querySelector('#name');
let operation = document.querySelector('#operation');
let no_course = document.querySelector('#num_course');
let no_course_div = document.querySelector('#num_course_div');
let next_btn = document.querySelector('#user_btn');

grading_sys.onchange = function () 
{
   validateGradeSystem( grading_sys, document.querySelector('#sys_info'), next_btn );
}

name.oninput = function () 
{
   validateName( name, document.querySelector('#name_info'), next_btn );
}

operation.onchange = function () 
{
   validateOperation( operation, document.querySelector('#oprtn_info'), next_btn );
}

no_course.oninput = function () 
{
   validateNumberCourse( no_course, document.querySelector('#course_info'), next_btn );
}

function validateGradeSystem( grading_sys, error_msg, next_btn ) 
{
   if ( grading_sys.value == 5 || grading_sys.value == 4 ) 
   {
      grading_sys.style.border = '1px solid green';
      error_msg.innerHTML = ''; 
   }
   else
   {
      grading_sys.style.border = '1px solid red';
      error_msg.innerHTML = 'Please, select a grading system.';
   }
   userSectionNxtBtn( grading_sys, name, operation, no_course, next_btn );
}

function validateName( name, error_msg, next_btn ) 
{
   if ( !name.value.match('[0-9]') && name.value.length > 0 ) 
   {
      name.style.border = '1px solid green';
      error_msg.innerHTML = ''; 
   }
   else
   {
      name.style.border = '1px solid red';
      error_msg.innerHTML = 'Please, enter texts only.';
   }
   userSectionNxtBtn( grading_sys, name, operation, no_course, next_btn );
}

function validateOperation( operation, error_msg, next_btn ) 
{
   if ( operation.value == 'CGPA' || operation.value == 'SGPA' ) 
   {
      operation.style.border = '1px solid green';
      error_msg.innerHTML = ''; 
   }
   else
   {
      operation.style.border = '1px solid red';
      error_msg.innerHTML = 'Please, select an operation to perform.';
   }
   userSectionNxtBtn( grading_sys, name, operation, no_course, next_btn );
}

function validateNumberCourse( no_course, error_msg, next_btn ) 
{
   if ( no_course.value > 0 && no_course.value <= 20 ) 
   {
      no_course.style.border = '1px solid green';
      error_msg.innerHTML = ''; 
   }
   else
   {
      no_course.style.border = '1px solid red';
      error_msg.innerHTML = 'Contain only numbers[1 - 20].';
   }
   userSectionNxtBtn( grading_sys, name, operation, no_course, next_btn );
}

function userSectionNxtBtn( grading_sys, name, operation, no_course, next_btn ) 
{  
   if ( grading_sys.value == '' || operation.value == '' || name.value.match('[0-9]') || name.value.length < 0  || no_course.value < 0 || no_course.value > 20  || no_course.value.length < 1 ) 
   {
      next_btn.disabled = 'disabled';
      next_btn.style.backgroundColor = 'red';
      next_btn.style.color = 'white';
   }
   else
   {
      next_btn.disabled = '';
      next_btn.style.backgroundColor = 'green';
      next_btn.style.color = 'white';
   }
}

//Input Section
function validateCourseCode( id, msg_id, btn_id, num_course )
{
   let course_code = document.querySelector('#'+id).value;
   let msg = document.querySelector('#'+msg_id);
   if ( course_code.match('^[a-zA-Z]{3}') && course_code.match('[0-9]{3}$') ) 
   {
      document.querySelector('#'+id).style.border = '1px solid green';
      msg.innerHTML = '';
   }
   else
   {
      document.querySelector('#'+id).style.border = '1px solid red';
      msg.innerHTML = 'invalid course code';
   }
   detailNextBtn( btn_id, num_course );
}

function validateCreditUnit( id, msg_id, btn_id, num_course )
{
   let credit_unit = document.querySelector('#'+id).value;
   let msg = document.querySelector('#'+msg_id);
   if ( credit_unit.match('[a-zA-Z]') || credit_unit.match('[.,?~`@#$%^&*()]') || credit_unit < 1 || credit_unit > 9 ) 
   {
      document.querySelector('#'+id).style.border = '1px solid red';
      msg.innerHTML = 'eg. [ 1 - 9 ]';
   }
   else
   {
      document.querySelector('#'+id).style.border = '1px solid green';
      msg.innerHTML = '';
   }
   detailNextBtn( btn_id, num_course );
}

function validateTestScore( id, msg_id, btn_id, num_course )
{
   let test_score = document.querySelector('#'+id).value;
   let msg = document.querySelector('#'+msg_id);
   if ( test_score.match('[a-zA-Z]') || test_score.match('[.,?~`@#$%^&*()]') || test_score < 0 || test_score.length < 1 || test_score > 40 ) 
   {
      document.querySelector('#'+id).style.border = '1px solid red';
      msg.innerHTML = 'eg. [ 0 - 40 ]';
   }
   else
   {
      document.querySelector('#'+id).style.border = '1px solid green';
      msg.innerHTML = '';
   }
   detailNextBtn( btn_id, num_course );
}

function validateExamScore( id, msg_id, btn_id, num_course  )
{
   let exam_score = document.querySelector('#'+id).value;
   let msg = document.querySelector('#'+msg_id);
   if ( exam_score.match('[a-zA-Z]') || exam_score.match('[.,?~`@#$%^&*()]') || exam_score < 0 || exam_score.length < 1 || exam_score > 60 ) 
   {
      document.querySelector('#'+id).style.border = '1px solid red';
      msg.innerHTML = 'eg. [ 0 - 60 ]';
   }
   else
   {
      document.querySelector('#'+id).style.border = '1px solid green';
      msg.innerHTML = '';
   }
   detailNextBtn( btn_id, num_course );
}

function detailNextBtn( btn_id, num_course ) 
{
   for (var i = 1; i <= num_course; i++) 
   {
      let course_code = document.querySelector('#course_code'+i).value;
      let credit_unit = document.querySelector('#credit_unit'+i).value;
      let test_score = document.querySelector('#test_score'+i).value;
      let exam_score = document.querySelector('#exam_score'+i).value;
      let next_btn = document.querySelector('#'+btn_id);

      next_btn.disabled = 'disabled';
      next_btn.style.backgroundColor = 'red';
      next_btn.style.color = 'white';
      if ( ( course_code.match('^[a-zA-Z]{3}') && course_code.match('[0-9]{3}$') ) ) 
      {
         if ( !( credit_unit.match('[a-zA-Z]') || credit_unit.match('[.,?~`@#$%^&*()]') || credit_unit < 1 || credit_unit > 9 ) ) 
         {
            if ( !( test_score.match('[a-zA-Z]') || test_score.match('[.,?~`@#$%^&*()]') || test_score < 0 || test_score > 40 || test_score.length < 1  ) ) 
            {
               if ( !( exam_score.match('[a-zA-Z]') || exam_score.match('[.,?~`@#$%^&*()]') || exam_score < 0 || exam_score > 60 || exam_score.length < 1 ) ) 
               {
                  next_btn.disabled = '';
                  next_btn.style.backgroundColor = 'green';
                  next_btn.style.color = 'white';
               }
            }
         }
      }
   }
}