   <footer class="bg-dark text-white py-2 fixed-bottom ">
      <p class="text-center lead">&copy;Copyright Adedokun Julius Ayobami <?= date('Y') ?></p>
   </footer>
   <button id="toTopBtn" class="btn btn-success"><i class="bi bi-arrow-up "></i></button>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success fw-bold h3" id="exampleModalLabel">User Guide</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fw-bold">
		    <p>User's will be required to perform the following operations : </p>
		    <ol class="list">
		      <li class="list-item">Enter Their Name.</li>
		      <li class="list-item">Select Grading System Use By Their Institution.</li>
		      <li class="list-item">Select Operation To Perform.</li>
		      <li class="list-item">Enter Number Of Course Offered ( Numbers Only ).</li>
		      <li class="list-item">Enter Course Code eg abc123.</li>
		      <li class="list-item">Enter Course Credit Unit ( Numbers Only ).</li>
		      <li class="list-item">Enter Test Score ( Within the Range of 0 - 40 ).</li>
		      <li class="list-item">Enter Exam Score ( Within the Range of 0 - 60 ).</li>
		    </ol>
		    <p>Note:<br>
		    	Compute button only become active when all fields are filled in accordance to this guide.
		    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="assets/myscript/main.js"></script>-->
<!--Back to Top Button Display  -->
<script type="text/javascript">
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
   validateOperation( operation, document.querySelector('#oprtn_info'), no_course_div, next_btn );
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
      error_msg.innerHTML = 'Please, select a grading system';
   }
   userSectionNxtBtn( grading_sys, name, operation, no_course, next_btn );
}

function validateName( name, error_msg,next_btn ) 
{
   if ( !name.value.match('[0-9]') && name.value.length > 0 ) 
   {
     name.style.border = '1px solid green';
     error_msg.innerHTML = ''; 
   }
   else
   {
      name.style.border = '1px solid red';
      error_msg.innerHTML = 'Please, enter texts only';
   }
   userSectionNxtBtn( grading_sys, name, operation, no_course, next_btn );
}

function validateOperation( operation, error_msg, course_div, next_btn ) 
{
   if ( operation.value == 'CGPA' || operation.value == 'SGPA' ) 
   {
     operation.style.border = '1px solid green';
     error_msg.innerHTML = ''; 
     course_div.style.display = 'block';
   }
   else
   {
      operation.style.border = '1px solid red';
      error_msg.innerHTML = 'Please, select an operation to perform';
      course_div.style.display = 'none';
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
      error_msg.innerHTML = 'Contain only numbers[1 - 20]';
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

</script>