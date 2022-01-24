 
@extends('layout')

@section('content')

<img src="{{ asset('images/wave1.png')}}" class="bottom-img1"> 
<h1>Appartements</h1>
  <h4>Un nouveau chez-vous; choisissez l'appartement qui vous plait le plus. </h4> 
  <div id="booking" class="section1">
	<div class="section-center">
    	<div class="container">
			<div class="row">
				<div class="booking-form">
					<form>
					<div class="row no-margin">
								<div class="col-md-2">
								</div>
						<div class="row no-margin">
							<div class="col-md-10">
								<div class="row no-margin">
                                    <div class="col-md-3">
										<div class="form-group">
										<span class="form-label">Destination</span>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>  						                  
    									  <input class="form-label0" type="text" name="example" list="exampleList">
                                          <datalist id="exampleList">
											<option value="Agadir"></option>
                                            <option value="Marrakech"></option>
                                            <option value="Tanger"></option>
									        <option value="Casablanca"></option>
									        <option value="Ifrane"></option>
                                          </datalist>                
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<span class="form-label">Arrivée</span>
											<input   type="date">
										</div>
									</div>
										<div class="col-md-3">
											<div class="form-group">
												<span class="form-label">Départ</span>
												<input  type="date">
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group">
												<span class="form-label">adultes</span>
												<input  class="form-label1" type="number" id="quantity" name="quantity" min="1" max="5">
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group">
												<span class="form-label">enfant</span>
												<input class="form-label1" type="number" id="quantity" name="quantity" min="1" max="5">
											</div>
										</div>
                                        <div class="col-md-1">
											<div class="form-group">
												<span class="form-label">chambre</span>
												<input class="form-label1" type="number" id="quantity" name="quantity" min="1" max="4">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-btn">
										<button class="submit-btn">Rechercher</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
      </div>
</div>



@stop
 