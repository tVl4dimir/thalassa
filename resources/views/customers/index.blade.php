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
	<h3>Πελάτες</h3>
	<hr>
	<a type="button" class="btn btn-success" href="{{ route('createC') }}">Νέος Πελάτης</a>
</div>
		<hr>

		<div class="col-md-6 col-md-offset-3">
		<table class = "table table-striped" id="customers">
			<thread>
			<input class="form-control mr-sm-2" type="text" placeholder="Αναζήτηση Πελάτη..." id="myInput" onkeyup="searchCustomers()">
			<hr>
				<tr>
					<th>Όνομα</th>
					<th>Επίθετο</th>
					<th>E-mail</th>
					<th>Τηλέφωνο</th>
					<th>Κινητό</th>
					<th>Πόλη</th>
					<th>Περιοχή</th>
					<th>Οδός</th>
					<th>Αριθμός</th>
					<th>ΤΚ</th>
					<th>Πληροφορίες</th>
					<th>Δημιουργήθηκε</th>
				</tr>
			</thread>
		@foreach($customers as $customer)
			<tr>	
						 
				<td align = "left">
					<a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
				</td>

				<td align = "left">{{ $customer->surname }}</td>
				<td align = "left">{{ $customer->email }}</td>
				<td align = "left">{{ $customer->telephone }}</td>
				<td align = "left">{{ $customer->mobile }}</td>
				<td align = "left">{{ $customer->city }}</td>
				<td align = "left">{{ $customer->location }}</td>
				<td align = "left">{{ $customer->road }}</td>
				<td align = "left">{{ $customer->roadNumber }}</td>
				<td align = "left">{{ $customer->postalCode }}</td>
				<td align = "left">{{ $customer->infos }}</td>
				<td align = "left">{{ $customer->created_at->toFormattedDateString()}}</td>
			</tr>
		@endforeach
	</table>

<script>
function searchCustomers() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("customers");
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