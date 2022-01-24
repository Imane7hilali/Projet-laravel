@extends('layout')

@section('content') 
 
<div class="hebergement text-center">
<h1>Trouvez votre prochain séjour</h1>
  <p>Recherchez des offres sur des hôtels, des hébergements indépendants et plus encore!</p>
<br></br> 
</div> 
  <div class="section">
	<div class="section-center">
    	<div class="container">
			<div class="row">
				<div class="booking-form">
					<form>
					<div class="row no-margin">
							<div class="col-md-2"></div>
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
 
<div class="typeclass">
<br><br>
<H2> Rechercher par type d'hébergement </H2><br>
			
			<div class="row">
			  <div class="column">
				<h2> Hotels</h2>
				<a href="{{url('hotels')}}">
			    <img src="{{ asset('images/hotels.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
				<h2 id="id1">Appartements</h2>
				<a href="{{url('appartements')}}">
				<img src="{{ asset('images/apparemments.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
				<h2> Villas</h2>
				<a href="{{url('villas')}}">
				<img src="{{ asset('images/villas.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
				<h2> Chalets</h2>
				<a href="{{url('chalets')}}">
				<img src="{{ asset('images/chalets.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
				<h2> Riads</h2>
				<a href="{{url('riads')}}">
				<img src="{{ asset('images/riads.png')}}" style="width:80%"></a>
			  </div>
			</div>
			<br><br>
           <H2> Explorez le Maroc </H2><br>
			<div class="row">
			  <div class="column">
				 <h2>Marrakech</h2>
			  <a href="{{url('marrakech')}}">
			    <img src="{{ asset('images/marrakech.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
				<h2>Tanger</h2>
				<a href="{{url('tanger')}}">
				<img src="{{ asset('images/tanger.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
				<h2>Ifrane</h2>
				<a href="{{url('ifrane')}}">
				<img src="{{ asset('images/ifrane.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
			  <h2> Agadir</h2>
			  <a href="{{url('agadir')}}">
				<img src="{{ asset('images/agadir.png')}}" style="width:80%"></a>
			  </div>
			  <div class="column">
				<h2> Casablanca</h2>
				<a href="{{url('casablanca')}}">
				<img src="{{ asset('images/casablanca.png')}}" style="width:80%"></a>
			  </div>
			</div>
			<br><br>
 {{View::make('footer')}}
 </div>     
</div>
 
@stop