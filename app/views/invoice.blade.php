<table>
	<caption>Pay me!</caption>
	<tr>
		<th>Invoice ID</th>
		<td>{{ $invoice->id }}</td>
	</tr>
	<tr>
		<th>Invoice Date</th>
		<td>{{ $invoice->created_at->formatLocalized('%d %B %Y') }}</td>
	</tr>
	<tr>
		<th>Client</th>
		<td>{{ $invoice->client }}</td>
	</tr>
	<tr>
		<th>Amount</th>
		<td>{{ $invoice->amount }}</td>
	</tr>
</table>
