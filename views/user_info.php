<!-- === START USER INFO SECTION === -->
<main class="container-fluid py-5">
  <div class="row my-5">
    <section class="col-md-5 m-auto shadow rounded my-4">
      <form action="" method="POST" class="my-3">
       	<h2 class="text-center fw-bold text-success">User Info</h2>
       	<div class="form-group ">
       	  <label for="grd_system" class="fw-bold">Select Your School Grading System:</label>
       	  <select class="form-select mt-2" name="grd_system" id="grd_system" >
       	    <option value="">Select Grading System</option>
       	    <option value= 5 >5 Point</option>
       	    <option value= 4 >4 Point</option>	
       	  </select>
          <p id="sys_info" class="text-danger"></p>
       	</div>
        

       	<div class="form-group mt-2 mb-3">
       	  <label for="name" class="fw-bold">Name :<span class="text-danger">*</span></label>
       	  <input type="text" name="name" id="name" maxlength="40" required placeholder="Enter Your Name"  class="form-control">
          <p id="name_info" class="text-danger"></p>
       	</div>
        <div class="form-group ">
          <label for="operation" class="fw-bold">Select Operation to Perform:<span class="text-danger">*</span></label>
          <select class="form-select mt-2" name="operation" id="operation" >
            <option value="" selected >Select Operation</option>
            <option value="CGPA" >Calculate CGPA</option>
            <option value="SGPA" >Calculate SGPA</option> 
          </select>
          <p id="oprtn_info" class="text-danger"></p>
        </div>
        <div class="form-group mt-3 mb-3" id="num_course_div">
          <label class="fw-bold" >Number of Course <span class="text-danger">*</span></label>
          <input type="number" name="num_course" id="num_course" required class="form-control" placeholder="Enter Number of Course Offered">
          <p id="course_info" class="text-danger"></p>
        </div>
       	<div class="d-flex justify-content-center">
       	  <button type="submit" class="btn btn-danger border lead" name="user_btn" id="user_btn" disabled >Next</button>
       	</div>
      </form>
    </section>
		
  </div>
</main>
<script type="text/javascript">
  /*window.onload = function () {
    document.querySelector('#operation').value = '';
  }*/
</script>
<!-- === END SECTION === -->