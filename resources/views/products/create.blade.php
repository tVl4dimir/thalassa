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
            <h3>Δημιουργία Προϊόντος</h3>
            <hr>
            <form method="POST" action="/products" class="">
                
            {{ csrf_field() }}

                <div class="form-group row">
                	<label for="product_code" class="col-2 col-form-label">Κωδικός Προϊόντος</label>
                	<div class="col-10">
                		<input class="form-control " type="text" name="product_code" id="product_code" value="{{ Request::old('product_code') }}">
                	</div>
                </div>

                <div class="form-group row">
                	<label for="product_name" class="col-2 col-form-label">Tίτλος Προϊόντος</label>
                	<div class="col-10">
                		<input class="form-control " type="text" name="product_name" id="product_name" value="{{ Request::old('product_name') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="product_description" class="col-2 col-form-label">Περιγραφή Προϊόντος</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="product_description" id="product_description" value="{{ Request::old('product_description') }}">
                	</div>
                </div>
                
                <div class="form-group row">
                	<label for="unit_qty" class="col-2 col-form-label">Βάρος</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="unit_qty" id="unit_qty" value="{{ Request::old('unit_qty') }}">
                	</div>
                </div>
                
               
                <div class="form-group row">
                	<label for="unit_price" class="col-2 col-form-label">Τιμή</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="unit_price" id="unit_price" value="{{ Request::old('unit_price') }}">
                	</div>
                </div>
                
                
                <div class="form-group row">
                	<label for="available" class="col-2 col-form-label">Διαθέσιμο</label>
                	<div class="col-10">
                		<input class="form-control" type="text" name="available" id="available" value="{{ Request::old('available') }}">
                	</div>
                </div>                
                
                <button type="submit" class="btn btn-primary">Δημιουργία</button>
                
            </form>
        </div>
     </div>
     <hr>


@endsection