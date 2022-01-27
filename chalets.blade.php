@extends('layout')

@section('content')

<img src="{{ asset('images/wave1.png')}}" class="bottom-img1"> 
<h2> Chalets</h2>
<h4>Parfaits pour un séjour au ski, les chalets vous accueillent également le reste de l'année.</h4>
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
			<br>
			<table class="table table-hover " style="width:50%;position:absolute;height:4em;" id="hotel_content" >
  <tr>
     <th width="10%">Classement</th>
     <th width="30%" style="text-align:center;">Nom</th>
     <th width="30%"style="text-align:center;">Ville</th>
	 <th width="30%"style="text-align:center;">Prix</th>
	 <th width="30%"><i class="fa fa-hand-o-down" style="position:fixed;margin-left:20px;margin-top:5px;";></i></i></th>
</tr>
<?php $no=1; ?>
@foreach ($chalet as $key => $value)
<tr>
   <td style="text-align:center;">{{$no++}}</td>
   <td style="text-align:center;">{{ $value->name }}</td>
   <td style="text-align:center;">{{ $value->city }}</td>
   <td style="text-align:center;">{{ $value->mark }}</td>
   <td style="text-align:center;"> <button class="submit-btn" style="background-color: rgb(163, 205, 245);border-radius: 25px 25px 25px 25px; ">Réserver</button> </td>
</tr> 
@endforeach
</table> 
      </div>
</div>
@stop