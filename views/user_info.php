<!-- === START USER INFO SECTION === -->
<main class="container-fluid py-5">
  <div class="row my-5">
    <section class="col-md-5 m-auto shadow rounded my-5">
      <form action="" method="POST" class="my-4">
       	<h2 class="text-center fw-bold text-success">User Info</h2>
        <p id="user_info_msg" class="text-center fw-bold"></p>
       	<div class="form-group ">
       	  <label for="grd_system" class="fw-bold">Select Your School Grading System:</label>
       	  <select class="form-select mt-2" name="grd_system" id="grd_system" >
       	    <option value="#" onclick="userInfoNextBtn()">Select Grading System</option>
       	    <option value= 5 onclick="userInfoNextBtn()">5 Point</option>
       	    <option value= 4 onclick="userInfoNextBtn()">4 Point</option>	
       	  </select>
       	</div>
       	<div class="form-group mt-2 mb-3">
       	  <label for="name" class="fw-bold">Name :<span class="text-danger">*</span></label>
       	  <input type="text" name="name" id="name" maxlength="40" required placeholder="Enter Your Name" oninput="userInfoNextBtn()" class="form-control">
       	</div>
       	<div class="d-flex justify-content-center">
       	  <button type="submit" class="btn btn-light lead" name="save_user_btn" id="save_user_btn" disabled >Next</button>
       	</div>
      </form>
    </section>		
  </div>
</main>
<!-- === END SECTION === -->