<main class="container py-5">
  <div class="row my-5">
    <?php
      if ( $ready ) 
      {
    ?>
      <section>
        <table class="table table-bordered text-center table-striped bg-light">
          <thead>
            <tr>
              <th colspan="8" class="bg-secondary text-white h5">
               Dear <strong> <?= $name; ?> </strong> this result was computed with the information you provided.
              </th>
            </tr>
            <tr>
              <th>S/N</th>
              <th>Course Code</th>
              <th>Credit Unit</th>
              <th>Test Score</th>
              <th>Exam Score</th>
              <th>Total Score</th>
              <th>Grade</th>
              <th>Point Scored</th>
            </tr>
          </thead>
          <tbody class="fw-bold">
            <?php
              $total_cre_unit = 0;
              $total_point = 0; 
              for ( $i = 1; $i <= $num_course; $i++)
              {
            ?>
            <tr>
              <td> <?= $i; ?> </td>
              <td> <?= strtoupper( $_POST['course_code'.$i] ); ?> </td>
              <td> <?= $_POST['credit_unit'.$i] ?> </td>
              <td> <?= $_POST['test_score'.$i] ?> </td>
              <td> <?= $_POST['exam_score'.$i] ?> </td>
              <td> <?= totalScore( $_POST['test_score'.$i], $_POST['exam_score'.$i] ) ?> </td>
              <td> 
                <?= courseGrade( totalScore( $_POST['test_score'.$i], $_POST['exam_score'.$i] ) ) ?> 
              </td>
              <td>
                <?= pointScore( $_POST['credit_unit'.$i], courseGrade( totalScore( $_POST['test_score'.$i], $_POST['exam_score'.$i] ) ) ) ?>
              </td>
            </tr>

            <?php
                $total_point += pointScore( $_POST['credit_unit'.$i], courseGrade( totalScore( $_POST['test_score'.$i], $_POST['exam_score'.$i] ) ) );
                $total_cre_unit += $_POST['credit_unit'.$i]; 
              }
            ?>
          </tbody>
        </table>
        <div class="d-flex justify-content-between p-2 fst-italic result-div">
          <div class="h4">
            Total Point Scored : <b> <?= $total_point ?> </b>   <br>
            Total Credit Unit : <b> <?= $total_cre_unit ?></b>
          </div>

          <div class="result d-none d-md-block">
            <h3 class="fw-bold">
              <?= $selected_operation ?> : <?= result( $total_point, $total_cre_unit ) ?> 
            </h3>
          </div>

          <div >
            <h4 class="text-end">
              <strong><?= $grading_sys ?></strong> Point Grading<br>System
            </h4>
          </div>
        </div>
        <div class="result-small d-block d-md-none">
          <h3 class="fw-bold">
            <?= $selected_operation ?> : <?= result( $total_point, $total_cre_unit ) ?> 
          </h3>
        </div>
      </section>

    <?php
      }
      else
      {
    ?>
      <div class="text-center mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <strong>Read User's Guide</strong>
        </button>  
      </div>
      <form method="POST">
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
      </form>
    <?php
      }
    ?>
  </div>
</main>