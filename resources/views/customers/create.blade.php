@extends ('layouts.master')

@section ('title')
    Thalassa
@endsection

@section('header')

	@include('includes.header')

@endsection

@section ('content')
<hr>
	<div class="row">
        <div class="col-md-6">
            <h3>Δημιουργία Πελάτη</h3>
            <hr>
            <form method="POST" action="/customers" class="">
                
            {{ csrf_field() }}

                <div class="form-group row">
                	<label for="name" class="col-2 col-form-label">Όνομα</label>
                	<div class="col-10">
                		<input class="form-control " type="text" name="name" id="name" value="{{ Request::old('name') }}">
                	</div>
                </div>

                <div class="form-group row">
                	<label for="surname" class="col-2 col-form-label">Επώνυμο</label>
                	<div class="col-10">
                		<input class="form-control " type="text" name="surname" id="surname" value="{{ Request::old('surname') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="telephone" class="col-2 col-form-label">Τηλέφωνο</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="telephone" id="telephone" value="{{ Request::old('telephone') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="mobile" class="col-2 col-form-label">Κινητό</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="mobile" id="mobile" value="{{ Request::old('mobile') }}">
                	</div>
                </div>
                
               
                <div class="form-group row">
                	<label for="email" class="col-2 col-form-label">E-Mail</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                	</div>
                </div>
                
                
                <div class="form-group row">
                	<label for="city" class="col-2 col-form-label">Πόλη</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="city" id="city" value="{{ Request::old('city') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="location" class="col-2 col-form-label">Περιοχή</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="location" id="location" value="{{ Request::old('location') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="road" class="col-2 col-form-label">Οδός</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="road" id="road" value="{{ Request::old('road') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="roadNumber" class="col-2 col-form-label">Αριθμός</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="roadNumber" id="roadNumber" value="{{ Request::old('roadNumber') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="postalCode" class="col-2 col-form-label">ΤΚ</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="postalCode" id="postalCode" value="{{ Request::old('postalCode') }}">
                	</div>
                </div>

                  <div class="form-group row">
                	<label for="infos" class="col-2 col-form-label">Σημείωση</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="infos" id="infos" >
                	</div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        </div>
     </div>
     <hr>


@endsection