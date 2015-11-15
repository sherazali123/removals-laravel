<h4>Selected Items</h4>

<table>
	<tr>
		<td style="width:100px;"></td>
		<td style="width:200px;"><b>Title</b></td>
		<td style="width:150px;"><b>Quantity (s)</b></td>
	</tr>
	@foreach($data['selected_items'] as $key => $value)
		@if($value['quantity'] > 0)
			<tr>
				<td style="width:100px;"><img src="{{ asset($value['image']) }}" alt="{{ $value['title'] }}" width="60" height="60" /></td>
				<td style="width:300px;">{{ $value['title'] }}</td>
				<td style="width:150px;">{{ $value['quantity'] }}</td>
			</tr>
		@endif
	@endforeach
</table>


<h4>Personal Information</h4>

<table>
	<tr>
		<td style="width:300px;">First name:</td>
		<td style="width:700px;">{{ $data['firstname_quote'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Last name:</td>
		<td style="width:700px;">{{ $data['lastname_quote'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Email:</td>
		<td style="width:700px;">{{ $data['email_quote'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Phone no:</td>
		<td style="width:700px;">{{ $data['phone_quote'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Moving day & time:</td>
		<td style="width:700px;">{{ $data['date_quote'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Passengers:</td>
		<td style="width:700px;">{{ $data['passengers'] }}</td>
	</tr>
</table>

<h4>Pickup Information</h4>

<table>
	<tr>
		<td style="width:300px;">Pickup address:</td>
		<td style="width:700px;">{{ $data['pickup_addr'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Pickup building:</td>
		<td style="width:700px;">{{ $data['pickup_building'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Floors:</td>
		<td style="width:700px;">{{ $data['pickup_floors'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Room no:</td>
		<td style="width:700px;">{{ $data['pickup_room_no'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Elevator:</td>
		<td style="width:700px;">{{ $data['pickup_elevator'] }}</td>
	</tr>

	
</table>

<h4>Delivery Information</h4>

<table>
	<tr>
		<td style="width:300px;">Delivery address:</td>
		<td style="width:700px;">{{ $data['delivery_addr'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Delivery building:</td>
		<td style="width:700px;">{{ $data['delivery_building'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Floors:</td>
		<td style="width:700px;">{{ $data['delivery_floors'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Room no:</td>
		<td style="width:700px;">{{ $data['delivery_room_no'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Elevator:</td>
		<td style="width:700px;">{{ $data['delivery_elevator'] }}</td>
	</tr>

	
</table>

<h4>Message</h4>

<p>{{ $data['message_quote'] }}</p>
@include('emails.signature')