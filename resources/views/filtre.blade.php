@extends('layout')

@section('content')
<img src="{{ asset('images/wave1.png')}}" class="bottom-img1"> 
<h2> Trouver l'hotel ideal!</h2>
<h4> Des hotels pas chers aux chambres de luxe, et bien plus encore</h4>
<div id="booking" class="section1">
	<div class="section-center">
    	<div class="container">
			<div class="row">
				<div class="booking-form">
					<form action="{{URL('filtre')}}">
					<div class="row no-margin">
						<div class="col-md-2"></div>
						<div class="row no-margin">
							<div class="col-md-10">
								<div class="row no-margin">
                                    <div class="col-md-3">
										<div class="form-group">
										<span class="form-label">Destination</span>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>  						                  
    									  <input class="form-label0" type="text" name="destination" list="exampleList">
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
     <th width="30%"style="text-align:center;">Type</th>
	 <th width="30%"><i class="fa fa-hand-o-down" style="position:fixed;margin-left:20px;margin-top:5px;";></i></i></th>
</tr>
<?php $no=1; $destination=$_GET['destination']; ?>
@foreach ($hotel as $key => $value)
@if($value->city == $destination)
<tr>
   <td style="text-align:center;">{{$no++}}</td>
   <td style="text-align:center;">{{ $value->name }}</td>
   <td style="text-align:center;">{{ $value->city }}</td>
   <td style="text-align:center;">{{ $value->mark }}</td>
   <td style="text-align:center;">Hotel</td>
   <td style="text-align:center;"> <button class="submit-btn" style="background-color: rgb(163, 205, 245);border-radius: 25px 25px 25px 25px; ">Réserver</button> </td>
</tr> 
@endif
@endforeach
@foreach ($chalet as $key => $value)
@if($value->city == $destination)
<tr>
   <td style="text-align:center;">{{$no++}}</td>
   <td style="text-align:center;">{{ $value->name }}</td>
   <td style="text-align:center;">{{ $value->city }}</td>
   <td style="text-align:center;">{{ $value->mark }}</td>
   <td style="text-align:center;">chalet</td>
   <form action="{{URL('reserver')}}">
   <input type="hidden" id="destination" name="hotel_id" value="{{$value->id}}">
   <td style="text-align:center;"> <button class="submit-btn" style="background-color: rgb(163, 205, 245);border-radius: 25px 25px 25px 25px; " >Réserver</button> </td>
   </form></tr> 
@endif
@endforeach
@foreach ($riad as $key => $value)
@if($value->city == $destination)
<tr>
   <td style="text-align:center;">{{$no++}}</td>
   <td style="text-align:center;">{{ $value->name }}</td>
   <td style="text-align:center;">{{ $value->city }}</td>
   <td style="text-align:center;">{{ $value->mark }}</td>
   <td style="text-align:center;">chalet</td>
   <form action="{{URL('reserver')}}">
   <input type="hidden" id="destination" name="hotel_id" value="{{$value->id}}">
   <td style="text-align:center;"> <button class="submit-btn" style="background-color: rgb(163, 205, 245);border-radius: 25px 25px 25px 25px; " >Réserver</button> </td>
   </form></tr> 
@endif
@endforeach
@foreach ($appartement as $key => $value)
@if($value->city == $destination)
<tr>
   <td style="text-align:center;">{{$no++}}</td>
   <td style="text-align:center;">{{ $value->name }}</td>
   <td style="text-align:center;">{{ $value->city }}</td>
   <td style="text-align:center;">{{ $value->mark }}</td>
   <td style="text-align:center;">appartement</td>
   <form action="{{URL('reserver')}}">
   <input type="hidden" id="destination" name="hotel_id" value="{{$value->id}}">
   <td style="text-align:center;"> <button class="submit-btn" style="background-color: rgb(163, 205, 245);border-radius: 25px 25px 25px 25px; " >Réserver</button> </td>
   </form></tr> 
@endif
@endforeach
@foreach ($villa as $key => $value)
@if($value->city == $destination)
<tr>
   <td style="text-align:center;">{{$no++}}</td>
   <td style="text-align:center;">{{ $value->name }}</td>
   <td style="text-align:center;">{{ $value->city }}</td>
   <td style="text-align:center;">{{ $value->mark }}</td>
   <td style="text-align:center;">villa</td>
   <form action="{{URL('reserver')}}">
   <input type="hidden" id="destination" name="hotel_id" value="{{$value->id}}">
   <td style="text-align:center;"> <button class="submit-btn" style="background-color: rgb(163, 205, 245);border-radius: 25px 25px 25px 25px; " >Réserver</button> </td>
   </form></tr> 
@endif
@endforeach
</table> 
      </div>
</div>
@stop
 