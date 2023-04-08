<form method="POST">
  <?php
    for ($i = 1; $i <= $num_course; $i++) 
    { 
  ?>
    <section class="row mb-2">
      <span class="col-12 d-inline-block fw-bold"><?= $i ?></span>
      <div class="col-6 col-lg-3 mb-1">
        <label for="course_code<?=$i?>" class="fw-bold">Course Code</label>
        <input type="text" name="course_code<?=$i?>" id="course_code<?=$i?>" oninput="validateCourseCode( 'course_code'+<?=$i ?>, 'course_msg'+<?=$i?>, 'compute_btn', <?= $num_course ?> )" maxlength="6" required class="form-control" placeholder="eg. abc123">
        <p id="course_msg<?=$i?>" class="text-danger"></p>
      </div>
      <div class="col-6 col-lg-3 mb-1">
        <label for="credit_unit<?=$i ?>" class="fw-bold">Credit Unit</label>
        <input type="number" name="credit_unit<?=$i ?>" id="credit_unit<?=$i ?>" oninput="validateCreditUnit( 'credit_unit'+<?=$i ?>, 'unit_msg'+<?=$i?>, 'compute_btn', <?= $num_course ?> )" required class="form-control" placeholder="eg. [ 1-9 ]">
        <p id="unit_msg<?=$i?>" class="text-danger"></p>
      </div>
      <div class="col-6 col-lg-3 mb-1">
        <label for="test_score<?=$i ?>" class="fw-bold">Test Score</label>
        <input type="number" name="test_score<?=$i ?>" id="test_score<?=$i ?>" oninput="validateTestScore( 'test_score'+<?=$i ?>, 'test_msg'+<?=$i?>, 'compute_btn', <?= $num_course ?> )" required class="form-control" placeholder="eg. [ 0 - 40 ]">
        <p id="test_msg<?=$i?>" class="text-danger"></p>
      </div>
      <div class="col-6 col-lg-3 mb-1">
        <label for="exam_score<?=$i ?>" class="fw-bold">Exam Score</label>
        <input type="number" name="exam_score<?=$i ?>" id="exam_score<?=$i ?>" oninput="validateExamScore( 'exam_score'+<?=$i ?>, 'exam_msg'+<?=$i?>, 'compute_btn', <?= $num_course ?> )" required class="form-control" placeholder="eg. [ 0 - 60 ]">
        <p id="exam_msg<?=$i?>" class="text-danger"></p>
      </div>
    </section>
  <?php
    }
  ?>
  <div class="text-center">
    <button name="compute_btn" id="compute_btn" class="btn btn-danger">Compute</button>
  </div>
</form>