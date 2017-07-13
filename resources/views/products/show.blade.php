@extends ('layouts.master')

@section ('title')
    Thalassa
@endsection

@section('header')

	@include('includes.header')

@endsection

@section ('content')
<hr>
	<div class="col-dm-6">
			<table class = "table table-striped" id="product">
			<thread>
				<tr>
					<th>Κωδικός Προϊόντος</th>
					<th>Τίτλος Προϊόντος</th>
					<th>Περιγραφή</th>
					<th>Βάρος/τμχ</th>
					<th>Τιμή</th>
					<th>Διαθέσιμο</th>
					<th>Δημιουργήθηκε</th>
				</tr>
			</thread>
			<tr>	
				<td align = "left">{{ $product->product_code }}</td>
				<td align = "left">{{ $product->product_name }}</td>
				<td align = "left">{{ $product->product_description }}</td>
				<td align = "left">{{ $product->unit_qty }}</td>
				<td align = "left">{{ $product->unit_price }}</td>
				<td align = "left">{{ $product->available }}</td>
				<td align = "left">{{ $product->created_at->toFormattedDateString()}}</td>
			</tr>
	</table>
</div>

@endsection