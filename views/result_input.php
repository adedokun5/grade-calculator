<form>
  <section class="row">
    <span class="col-12 d-inline-block">S/N</span>
    <div class="col-sm-6">
      <label>Course Code</label>
      <input type="text" name="" id="" class="form-control">
    </div>
    <div class="col-sm-6">
      <label>Credit Unit</label>
      <input type="number" name="" id="" class="form-control">
    </div>
    <div class="col-sm-6">
      <label>Credit Unit</label>
      <input type="number" name="" id="" class="form-control">
    </div>
    <div class="col-sm-6">
      <label>Credit Unit</label>
      <input type="number" name="" id="" class="form-control">
    </div>
  </section>
</form>
      <!--<form method="POST">
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
                  <button class="btn btn-danger" name="compute_btn" id="compute_btn" disabled >Compute</button>
                </div>
              </td>
            </tr>
          </tfoot>
        </table>
      </form>-->