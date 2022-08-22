<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="login-form-17/css/style.css">
</head>
<body>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
				{{-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR
                        <br>Knowledge Management System </h2>
				</div> --}}
				@if (session('status'))
            	<div class="alert alert-danger">
            	{{ session('status') }}
				</div>
				@endif
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">


						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Knowledge Management System</h2>
								<p> DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</p>
							</div>
			            </div>

                        
				<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login</h3>
			      		</div>
			      	</div>

						<form action="/postlogin" class="signin-form" method="POST">
							@csrf
			      			<div class="form-group mb-3">
			      				<label class="label" for="name">Email</label>
			      				<input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
			      			</div>
		            		<div class="form-group mb-3">
		            			<label class="label" for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Masukkan Password" id="inputpass" required>
								<span class="eye" onclick="myFunction()">
									<i id="hide1" class="fa fa-eye"></i>
									<i id="hide2" class="fa fa-eye-slash"></i>
								</span>
		            		</div>
							<button class="form-control btn btn-primary submit px-3" id="submit" type="submit">LOGIN</button>
		          		</form>

		        </div>
		    </div>  
		</div>
	</div>
</div>
</section>
<script>
	function myFunction() {
		var x = document.getElementById("inputpass");
		var y = document.getElementById("hide1");
		var z = document.getElementById("hide2");

		if(x.type === 'password'){
			x.type = 'text';
			y.style.display = "inline-block";
			z.style.display = "none";
		} else{
			x.type = 'password';
			y.style.display = "none";
			z.style.display = "inline-block";
		}
	}
</script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

