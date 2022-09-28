<footer class="bg-dark text-white py-2 fixed-bottom ">
  <p class="text-center lead">&copy;Copyright Grade Calculator <?= date('Y') ?></p>
</footer>
<button id="toTopBtn" class="btn btn-success" onclick="backToTopBtn()"><i class="bi bi-arrow-up-square display-5"></i>Top</button>

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
		     <li class="list-item">Enter Course Credit Unit ( Numbres Only ).</li>
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
<script type="text/javascript" src="assets/myscript/main.js"></script>
<!--Back to Top Button Display  -->
<script type="text/javascript">
 window.onscroll = function () {
  if ( document.body.scrollTop > 60 || document.documentElement.scrollTop > 60 ) 
  {
	document.getElementById('toTopBtn').style.display = 'block';
  } 
  else 
  {
	document.getElementById('toTopBtn').style.display = 'none';
  }
 }
</script>