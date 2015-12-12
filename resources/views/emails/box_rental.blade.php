<h4>Rental Services</h4>

<table>
	<tr>
		<td style="width:300px;">Title</td>
		<td style="width:150px;">Quantity</td>
	</tr>
	@foreach($data['rental_services'] as $key => $value)
		<tr>
			<td style="width:300px;">{{ $value['title'] }}:</td>
			<td style="width:150px;">{{ $value['quantity'] }}</td>
		</tr>
	@endforeach
</table>


<h4>Cost</h4>

<table>
	<tr>
		<td style="width:300px;">Rental Deposit Total:</td>
		<td style="width:700px;">{{ $data['costs']['rental_deposit_total'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Delivery Fee:</td>
		<td style="width:700px;">{{ $data['costs']['delivery_fee'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Refund:</td>
		<td style="width:700px;">{{ $data['costs']['refund'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Total Amount Due:</td>
		<td style="width:700px;">{{ $data['costs']['total_amount_due'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;"><b>Total</b></td>
		<td style="width:700px;"><b>{{ $data['costs']['total_cost'] }}</b></td>
	</tr>
</table>


<h4>Delivery Information</h4>

<table>
	<tr>
		<td style="width:300px;">Preferred Delivery Address:</td>
		<td style="width:700px;">{{ $data['delievery_info']['preferred_delivery_address'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Building Name:</td>
		<td style="width:700px;">{{ $data['delievery_info']['building_name'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Room No.:</td>
		<td style="width:700px;">{{ $data['delievery_info']['room_no'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Phone No.:</td>
		<td style="width:700px;">{{ $data['delievery_info']['phone_no'] }}</td>
	</tr>
</table>

<h4>Bank Details</h4>

<table>
	<tr>
		<td style="width:300px;">Bank Name:</td>
		<td style="width:700px;">{{ $data['bank_details']['bank_name'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Account No.:</td>
		<td style="width:700px;">{{ $data['bank_details']['account_no'] }}</td>
	</tr>
	<tr>
		<td style="width:300px;">Receiver's Name:</td>
		<td style="width:700px;">{{ $data['bank_details']['reveiver_name'] }}</td>
	</tr>
</table>


@include('emails.signature')
