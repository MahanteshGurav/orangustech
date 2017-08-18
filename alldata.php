<?php
$db_host = 'localhost'; // Server Name
$db_user = 'vmnandan_orangus'; // Username
$db_pass = 'M@h@nt3sh'; // Password
$db_name = 'vmnandan_Orangus'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT * FROM Request';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<?php
   include('session.php');
?>

<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
<div class="jumbotron">
      <h1>Welcome <?php echo $login_session; ?></h1>
      <p><center><a href = "logout.php">Sign Out</a></center></p>
</div>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">Customer Requests</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>DATE</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
				<th>SUBJECT</th>
				<th>MESSAGE</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$message  = $row['message'] == 0 ? '' : number_format($row['message']);
			echo '<tr>
					<td>'.$row['ID'].'</td>
					<td>'. date('F d, Y', strtotime($row['date'])) . '</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['phone'].'</td>
					<td>'.$row['subject'].'</td>
					<td>'.$row['message'].'</td>
				</tr>';
			$total += $row['ID'];
			$no++;
		}?>

		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">TOTAL</th>
				<th><?=number_format($total)?></th>
			</tr>
		</tfoot>
	</table>
	<div class="jumbotron">
        <h1>Go Back <?php echo $login_session; ?></h1>
        <p><center><a href = "welcome.php">dashboard</a></center></p>
                        </div>
</body>
</html>