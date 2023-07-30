<?php include('inc/header.php');?>
<?php require('inc/function.php');?>
		
		<style>
		
		.form-label{
			color:#000;
		}
		#buttonsub{
			text-align:center;
		}
		
		#dark{
			 border: 2px solid #555;
		}
		
		#comb{
			margin-top:50px;
		}
		
		.mouse{
			color:black;
			text-align:center;
		}
		
		
		</style>
		     <div class="card">			   
	   <div class="card-body" id = "comb">
	   <h2 class="mouse">Create Your Profile</h2>
                        <form action="profile-data-submitted.php" method = "POST" >
                                       <div class="row">
			                         <div class="col-md-4 mb-3">
                                <label class = "form-label" id=formlab >Name
                                </label>
                                <input type="text" name = "name" class="form-control" id="dark" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class = "form-label">Email
                                </label>
                                <input type="text" name = "email" class="form-control" id="dark" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class = "form-label">Contact Number
                                </label>
                                <input type="text" name = "number" class="form-control" id="dark" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class = "form-label" class = "form-label">Zipcode
                                </label>
                                <input type="text" name = "zipcode" class="form-control" id="dark" required>
                                </div>
								<div class="col-md-3 mb-3">
                                <label class = "form-label">State
                                </label>
                                <input type="text" name = "state" class="form-control" id="dark" required>
                                </div>
								<div class="col-md-6 mb-3">
                                <label class = "form-label" class = "form-label" class = "form-label" class = "form-label" class = "form-label" class = "form-label">Address Line
                                </label>
                                <input type="text" name = "address" class="form-control" id="dark" required>
                                </div>
								  <div class="col-md-6 mb-3">
    <label for="Textarea1" class = "form-label">Describe Your Bio</label>
    <textarea class="form-control"  id="dark" rows="5" name="bio"  required></textarea>
  </div>
 
  
  							  <div class="col-md-6 mb-3">
    <label for="Textarea1"   class = "form-label">Add Your Skils</label>
    <textarea class="form-control"  id="dark" rows="5" name="skills"  required></textarea>
  </div>
  
                            <div class="col-md-6 mb-3">
                                <label class = "form-label" class = "form-label" class = "form-label">Expected Salary (Monthly)
                                </label>
                                <input type="text" name = "salary" class="form-control" id="dark" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class = "form-label" class = "form-label">Work Experience (*optonal)
                                </label>
                                <input type="text" name = "experience" class="form-control" id="dark" required>
                            </div>
							 <div class="col-md-12 mb-3">
                                <label class = "form-label">Upload Your Resume
                                </label>
                                <input type="File" name = "resume" class="form-control" id="dark" required>
                            </div>
							
								
                                <div class="col-md-12 mb-6">
                                   <button type="submit" name="submit" class="btn btn-primary mb-5" id="buttonsub">Save Your Details</button>
                                    </div>
                            </div>
                            </div>


                        </form>
                          
              </div>
			  </div>

	 <?php include('inc/footer.php');?>	
	