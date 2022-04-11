<div class="modal-section">
  <div class="modal-content">
    <!-- <div id="modalBtn" class="button">X</div> -->
  <form action="./sign-in-post" method="POST">

  <div class="login-form">
     <div class="">
		
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
    <div id="modalBtn" class="button">X</div>

				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="admin_name" required="required">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							<!-- <a href="#" class="float-right text-muted"><small>Forgot?</small></a> -->
						</div>
						
						<input type="password" name="admin_pass" class="form-control" required="required">
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<label class="form-check-label"><input type="checkbox"> Remember me</label>
					<input type="submit" class="btn btn-primary" value="Login" name="subup">
				</div>
			</form>
		</div>
      
       
      </div>
  </form>
  
  
  </div>
</div><style>
  label{
    font-size: 20px;

}
.login-form{
    display: flex;
    flex-direction: column;
    align-items: center;
    /* justify-content: center; */
    width:100%;
  height: 100%;
}
.form1 p{
    font-weight: bold;
    font-size: 20px;
}
.form3,.form4,.log{
    transform: translateY(20px);

}

.form4{
    /* background: red; */
    align-items: center;
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 5px;
}
.log{
background-color: white;
border: none;
border:  1px solid black;
border-radius: 4px;
width: 40%;
padding: 7px;

/* transform: translateX(25px); */
}

.form2 input,.form3 input{
    border-radius:3px;
    border: .5px solid black;
}
</style>