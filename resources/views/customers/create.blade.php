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
            <form method="POST" action="/customers">
                
            {{ csrf_field() }}

                <div class="form-group">
                	<label for="name">Όνομα</label>
                	<input class="form-control " type="text" name="name" id="name" value="{{ Request::old('name') }}">
                </div>

                <div class="form-group">
                	<label for="surname">Επώνυμο</label>
                	<input class="form-control " type="text" name="surname" id="surname" value="{{ Request::old('surname') }}">
                </div>
                
                <div class="form-group">
                	<label for="telephone">Τηλέφωνο</label>
                	<input class="form-control" type="text" name="telephone" id="telephone" value="{{ Request::old('telephone') }}">
                </div>
                
                <div class="form-group">
                	<label for="mobile">Κινητό Τηλ</label>
                	<input class="form-control" type="text" name="mobile" id="mobile" value="{{ Request::old('mobile') }}">
                </div>
                
               
                <div class="form-group">
                	<label for="email">E-Mail</label>
                	<input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                
                
                <div class="form-group">
                	<label for="city">Πόλη</label>
                	<input class="form-control" type="text" name="city" id="city" value="{{ Request::old('city') }}">
                </div>
                
                <div class="form-group">
                	<label for="location">Περιοχή</label>
                	<input class="form-control" type="text" name="location" id="location" value="{{ Request::old('location') }}">
                </div>
                
                <div class="form-group">
                	<label for="road">Οδός</label>
                	<input class="form-control" type="text" name="road" id="road" value="{{ Request::old('road') }}">
                </div>
                
                <div class="form-group">
                	<label for="roadNumber">Αριθμός Οδού</label>
                	<input class="form-control" type="text" name="roadNumber" id="roadNumber" value="{{ Request::old('roadNumber') }}">
                </div>
                
                <div class="form-group">
                	<label for="postalCode">Ταχυδρομικός Κώδικας</label>
                	<input class="form-control" type="text" name="postalCode" id="postalCode" value="{{ Request::old('postalCode') }}">
                </div>

                  <div class="form-group">
                	<label for="infos">Πληροφορίες</label>
                	<input class="form-control" type="text" name="infos" id="infos" >
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        </div>

@endsection