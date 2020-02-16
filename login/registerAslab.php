<!doc type HTML>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="author" content="Muhammad Rizky Aly" />
	<meta name="description" content="Various HTML and JavaScript projects." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>
<? php
include ("../assets/linkCss.php");
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="d-md-flex h-md-100 align-items-center" >
	<div class="col-md-6 p-0 bg-white h-md-100">
		<div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
			<div class="container">
				<div class="row">
					<aside class="col-sm ">
						<h4 class="card-title mb-4 mt-1 text-center">Register Praktikan</h4>
						<hr>
						<div class="card ">
							<article class="card-body ">
								<!-- <a href="" class="float-right btn btn-outline-primary">Register</a> -->
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputEmail4">Email</label>
											<input type="email" class="form-control" id="inputEmail4">
										</div>
										<div class="form-group col-md-6">
											<label for="inputPassword4">Password</label>
											<input type="password" class="form-control" id="inputPassword4">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress">Address</label>
										<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
									</div>
									<div class="form-group">
										<label for="inputAddress2">Address 2</label>
										<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">City</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-4">
											<label for="inputState">State</label>
											<select id="inputState" class="form-control">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label for="inputZip">Zip</label>
											<input type="text" class="form-control" id="inputZip">
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck">
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
										</div>
									</div> -->
									<button type="submit" class="btn btn-primary btn-block">Register</button>
								</form>
							</article>
						</div>
					</div>
					<hr> 
					<p class="text-center">Made with ♥ by Asisten Lab Bahasa Pemrograman</p>
				</div>
			</div>
		</div>
	</aside>
	<div class="col-md-6 p-0 bg-primary h-md-100">
		<div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center" style="background-image: url(../assets/img/df2befebbfcc4efb445d99f68f785e75.png);">
			<!-- <div class="logoarea pt-5 pb-5">asdasdasdasd</div> -->
		</div>
	</div>
</div>
<? php 
include ("../assets/linkJS.php");
?>
