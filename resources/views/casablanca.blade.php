@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="{{url('css/style1.css')}}" />
</head>
<body>
<img src="{{ asset('images/wave1.png')}}" class="bottom-img1"> 
 
<section>
	<div class="section-center2">
 
		<div class="container">
         
			<div class="row">
				<div class="col-md-4 col-md-pull-7">
					<div class="booking-form2">
						<form>
							<div class="form-group">
								<span class="form-label">Votre Destination</span>
												 
								<input class="form-control" type="text" value="Casablanca" >
							</div>
							<div class="row no-margin">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Arrivée</span>
										<input class="form-control" type="date" required>
									</div>
									<span class="in-out hidden-xs">&#8652;</span>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Départ</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<span class="form-label">Adultes</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<span class="form-label">enfant</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<span class="form-label">chambre</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Rechercher</button>
							</div>
						</form>
					</div>
				</div>
			<div class="col-md-7 col-md-push-5">
				<div class="booking-cta">
					<h2>Casablanca: Les établissemements Trouvés </h2>
					<p> 
						   </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>

</html>

@stop