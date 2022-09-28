<!-- === START USER INFO SECTION === -->
<main class="container-fluid py-5">
 <div class="row my-5">
  <section class="col-md-5 m-auto shadow rounded p-3">
   <form action="" method="POST">
   	<h2 class="text-center fw-bold text-success">Operation Info</h2>
    <div class="form-group ">
     <label for="operation" class="fw-bold">Select Operation to Perform:<span class="text-danger">*</span></label>
     <select class="form-select mt-2" name="operation" id="operation" >
      <option value="#" onclick="operationInfoBtn()">Select Operation</option>
      <option value="CGPA" onclick="operationInfoBtn()">Calculate CGPA</option>
      <option value="SGPA" onclick="operationInfoBtn()">Calculate SGPA</option> 
     </select>
    </div>
    <div class="form-group mt-3 mb-3">
     <label class="fw-bold" id="instruction" > <span class="text-danger">*</span></label>
     <input type="number" name="num_courses" id="num_courses" required class="form-control" oninput="operationInfoBtn()" placeholder="Enter Number( Greater than zero) of Course Offered">
    </div>
   	<div class="d-flex justify-content-center">
   		<button type="submit" name="operation_btn" id="operation_btn" class="btn btn-light" disabled>Next</button>
   	</div>
   </form>
  </section>		
 </div>
</main>
<!-- === END SECTION === -->