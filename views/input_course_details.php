<main class="container py-5">
 <div class="row my-5">
  <div class="text-center mb-3">
    <a href="home" class="h5">Read User Guide.</a>
  </div>
  <form action="computed_result" method="POST">
   <table class="table table-bordered">
  	<thead class="text-center">
     <tr>
       <th colspan="5" class="bg-secondary text-white h5">All fields are required</th>
     </tr>
  	 <tr>
  	  <th>S/N</th>
  	  <th> Course Code<span class="text-danger">*</span> </th>
  	  <th> Credit Unit<span class="text-danger">*</span> </th>
  	  <th> Test Score<span class="text-danger">*</span> </th>
  	  <th> Exam Score<span class="text-danger">*</span> </th>
  	 </tr>
  	</thead>
  	<tbody>
  	 <?php
  	  for( $i = 1; $i <= $num_course; $i++ )
  	  {
  	 ?>

  	  <tr>
    	 	<td> 
    	 		<?= $i; ?> 
    	 	</td>
    	 	<td>	 
    	 	  <input type="text" name="course_code<?= $i; ?>" id="course_code<?= $i; ?>" oninput="computeBtn( <?= $num_course ?> )" required placeholder="abc123" class="form-control" > 
    	 	</td>
    	 	<td> 
    	 		<input type="number" name="credit_unit<?= $i; ?>" id="credit_unit<?= $i; ?>" oninput="computeBtn( <?= $num_course ?> )" required placeholder="Numbers Only" class="form-control"> 
    	 	</td>
    	 	<td> 
    	 		<input type="number" name="test_score<?= $i; ?>" id="test_score<?= $i; ?>" oninput="computeBtn( <?= $num_course ?> )" required placeholder="( 0-40 )" class="form-control"> 
    	 	</td>
    	 	<td> 
          <input type="number" name="exam_score<?= $i; ?>" id="exam_score<?= $i; ?>" oninput="computeBtn( <?= $num_course ?> )" required placeholder="( 0-60 )" class="form-control"> 
        </td>
  	  </tr>
  	 <?php 
  	  }
  	 ?>
  	</tbody>
    <tfoot>
      <tr>
        <td colspan="5">
          <div class="d-flex justify-content-center">
            <button class="btn btn-light" name="compute_btn" id="compute_btn" disabled >Compute</button>
          </div>
        </td>
      </tr>
    </tfoot>
   </table>
  </form>
 </div>
 </main>