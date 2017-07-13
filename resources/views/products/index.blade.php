@extends ('layouts.master')

@section ('title')
    Thalassa
@endsection

@section('header')

	@include('includes.header')

@endsection

@section ('content')
<hr>
<div class="container">
	<h3>Προϊόντα</h3>
	<hr>
	<a type="button" class="btn btn-success" href="{{ route('createP') }}">Νέο Προϊόν</a>
</div>
		<hr>

		<div class="col-md-6 col-md-offset-3">
		<table class = "table table-striped" id="products">
			<thread>
			<input class="form-control mr-sm-2" type="text" placeholder="Αναζήτηση Προϊόντος..." id="myInput" onkeyup="searchProducts()">
			<hr>
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
		@foreach($products as $product)
			<tr>	
						 
				<td align = "left">
					<a href="/products/{{ $product->product_id }}">{{ $product->product_code }}</a>
				</td>

				<td align = "left">{{ $product->product_name }}</td>
				<td align = "left">{{ $product->product_description }}</td>
				<td align = "left">{{ $product->unit_qty }}</td>
				<td align = "left">{{ $product->unit_price }}</td>
				<td align = "left">{{ $product->available }}</td>
				<td align = "left">{{ $product->created_at->toFormattedDateString() }}</td>
			</tr>
		@endforeach
	</table>

<script>
function searchProducts() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("products");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
@endsection