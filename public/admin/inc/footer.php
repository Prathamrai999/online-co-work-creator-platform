  <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com <?php echo date ('Y') ?></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
	<script src="https://kit.fontawesome.com/e416cafdb4.js" crossorigin="anonymous"></script>
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script----->

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<!--Popup Window Delete implement----->
<script>
$(document).ready(function () {
$('.delete_btn_ajax').click(function (e)
{
	e.preventDefault();
	//console.log('hello');
	
	var deleteid = $(this).closest("tr").find('.delete_id_value').val();
	
	swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  
  $.ajax({
  	type: "POST",
	url: "\delete.php",
	data: {
		"delete_btn_set": 1,
		"delete_id": deleteid,
	},
	success: function (response){
			swal("Data Deleted Successfully.",{
			icon: "success",
			}).then((result) => {
		 location.reload();
		 
		});
		
	}
  });
    
  }
});
		
});
});
</script>


<script>
$(document).ready(function () {
$('.delete_btn_ajax1').click(function (e)
{
	e.preventDefault();
	//console.log('hello');
	
	var deltid = $(this).closest("tr").find('.delete_id_val').val();
	
	swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  
  $.ajax({
  	type: "POST",
	url: "\delete.php",
	data: {
		"delete_btn_set1": 1,
		"dele_id": deltid,
	},
	success: function (response){
			swal("Data Deleted Successfully.",{
			icon: "success",
			}).then((result) => {
		 location.reload();
		 
		});
		
	}
  });
    
  }
});
		
});
});
</script>

<!----Script For Counting Clicks
<script>
var clicks = document.querySelectorAll('.click-trigger'); // IE8
for(var i = 0; i < clicks.length; i++){
	clicks[i].onclick = function(){
		var id = this.getAttribute('data-click-id');
		var post = 'id='+id; // post string
		var req = new XMLHttpRequest();
		req.open('POST', 'click.php', true);
		req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		req.onreadystatechange = function(){
			if (req.readyState != 4 || req.status != 200) return; 
			document.getElementById(id).innerHTML = req.responseText;
			};
		req.send(post);
		}
	}
</script>
<!----Script For Counting Clicks---->



  </body>
</html>
