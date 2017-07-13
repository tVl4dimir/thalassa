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
			<table class = "table table-striped" id="customer">
			<thread>
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
			<tr>	
				<td align = "left">{{ $customer->name }}</td>
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
	</table>
</div>

@endsection