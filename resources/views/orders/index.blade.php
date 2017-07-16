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
	<a type="button" class="btn btn-success" href="#">Νέα Παραγγελία</a>
</div>
		<hr>

		<div class="col-md-6 col-md-offset-3">
		<table class = "table table-striped" id="orders">
			<thread>
			<input class="form-control mr-sm-2" type="text" placeholder="Αναζήτηση Παραγγελίας..." id="myInput" onkeyup="searchOrders()">
			<hr>
				<tr>
					<th>Κωδικός Παραγγελίας</th>
					<th>Όνομα</th>
					<th>Επίθετο</th>
					<th>Κατάσταση</th>
					<th>Τιμή</th>
					<th>Δημιουργήθηκε</th>
				</tr>
			</thread>
		@foreach($orders as $order)
			<tr>	
						 
				<td align = "left">
					{{ $order->id }}
				</td>

				<td align = "left">{{ $order->customer->name }}</td>
				<td align = "left">{{ $order->customer->surname }}</td>
				<td align = "left">{{ $order->order_status }}</td>
				<td align = "left">{{ $order->transaction_fee }}</td>
				<td align = "left">{{ $order->created_at->toFormattedDateString() }}</td>
			</tr>
		@endforeach
	</table>

<script>
function searchOrders() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("orders");
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