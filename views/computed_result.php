<!-- === Computed Result Section === -->
<main class="container py-5">
  <div class="row my-5">
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
  </div>
</main>