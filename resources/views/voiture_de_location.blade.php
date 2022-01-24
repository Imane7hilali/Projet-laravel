@extends('layout')

@section('content')
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="{{url('css/style_voiture.css')}}" />
</head>
<body>
<img src="{{ asset('images/wave1.png')}}" class="bottom-img1">
	<div class="section">
		<div class="section-center">
			<div class="container">
				
				<div class="row">
				<div class="col-md-4">
						<div class="booking-cta">
							<h1>Bienvenue!</h1>
							<p>Location de voitures pour tous les types de voyages.</p>
						</div>
					</div>
					<div class="booking-form">
						<form>
							<div class="row">
								
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nom</span>
										<input class="form-control" type="text" placeholder="Entrez votre nom">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Entrez votre email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Numéro téléphone</span>
								<input class="form-control" type="tel" placeholder="Entrez votre numéro de téléphone">
							</div>
							<div class="form-group">
								<span class="form-label">Lieu de prise en charge</span>
								<input class="form-control" type="text" placeholder="Entrez ZIP/Location">
							</div>
							<div class="form-group">
								<span class="form-label">Lieu de restitution</span>
								<input class="form-control" type="text" placeholder="Entrez ZIP/Location">
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Heure</span>
												<select class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select class="form-control">
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Rechercher</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body> 

</html>
@stop