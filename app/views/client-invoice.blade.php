<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Invoice for {{ $client->name }}</title>
	<style>
		html {
			font-size: 62.5%;
		}
		body {
			width: 690px;
			margin: auto;
		}
		body, td, th {
			font-family: Helvetica, Arial, sans-serif, serif;
			font-size: 1.4rem;
		}
		h1, h2, h3, h4 {
			padding: 0;
			margin: 0;
		}
		table {
			width: 100%;
			border-collapse: collapse;
		}
		td, th {
			border: 1px solid #cecece;
			padding: 4px 10px;
			margin: 0;
		}
		th {
			background: #f0f0f0;
		}
		header {
			border-bottom: 1px solid #cecece;
			padding-bottom: 10px;
			margin-bottom: 10px;
		}
		.amount {
			text-align: right;
		}
		.detail {
			float: left;
		}
	</style>
</head>
<body>

<header>
	<div class="detail">
		<h1>{{ $client->name }}</h1>
		Phone: {{ $client->phone }} <br>
		Address: {{ $client->address }}
	</div>
	<div style="clear:both"></div>
</header>

<table>

	<thead>
		<tr>
			<th>Perihal</th>
			<th>Tanggal</th>
			<th>Total</th>
		</tr>
	</thead>

	<tbody>
		<?php $total = 0 ?>
		@foreach($client->invoices as $invoice)
			<?php $total += $invoice->amount ?>
			<tr>
				<td>{{ $invoice->description }}</td>
				<td>{{ $invoice->created_at->formatLocalized('%d %B %Y') }}</td>
				<td class="amount">
					{{ $invoice->amount }}
				</td>
			</tr>
		@endforeach
		<tr>
			<td colspan="2">Total</td>
			<td class="amount">{{ $total }}</td>
		</tr>
	</tbody>
</table>

</body>
</html>
