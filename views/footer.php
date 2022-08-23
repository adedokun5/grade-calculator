<footer class="bg-dark text-white py-2 fixed-bottom ">
  <p class="text-center lead">&copy;Copyright A.J.Ayobami 2022</p>
</footer>
<button id="toTopBtn" class="btn btn-success" onclick="backToTopBtn()"><i class="bi bi-arrow-up-square display-5"></i></button>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/myscript/script.js"></script>
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