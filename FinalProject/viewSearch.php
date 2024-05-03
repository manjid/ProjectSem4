<?php
$con = mysqli_connect("localhost", "root", "", "testing_facility");
?>
<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #1E1E1E;
		/* change the background color to dark grey */
		margin: 0;
		padding: 0;
		color: #fff;
		/* change the text color to white */
	}

	h3 {
		color: #fff;
		/* change the heading color to white */
		text-align: center;
		font-size: 28px;
		margin-bottom: 20px;
	}

	@keyframes glowing {
		0% {
			box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;
			/* change the box-shadow color to a light shade of purple */

		}

		50% {
			box-shadow: 0 0 20px #301934, 0 0 50px #BB86FC;
			/* change the box-shadow color to a light shade of purple */

		}

		100% {
			box-shadow: 0 0 100px #301934, 0 0 20px #BB86FC;
			/* change the box-shadow color to a light shade of purple */

		}
	}

	table {
		border-collapse: collapse;
		border: 0.5px solid #BB86FC;
		/* change the input border color to white */
		width: 99%;
		animation: glowing 2s infinite;
		background-color: #333;
		/* change the container background color to a darker shade of grey */
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		margin: 9px
	}

	th {
		padding: 8px;
		border: 0.5px solid #555;
		/* change the input border color to white */
		text-align: center;

	}

	td {
		padding: 8px;
		border: 0.5px solid #555;
		/* change the input border color to white */

	}

	th {
		background-color: #222;
		color: #FFFFFF;
	}

	.tengah,
	a {
		text-align: center;
		color: white;
		text-decoration: none;
	}

	.tengah,
	a:hover {
		color: BB86FC;
	}

	tr:nth-child(even) {
		background-color: #333333;
	}

	.add-button {
		position: fixed;
		font-size: 15px;
		font-style: bold;
		border: 1px solid #BB86FC;
		/* change the input border color to white */
		background-color: #BB86FC;
		/* make the input background color transparent */
		color: #FFFFFF;
		padding: 5px 21px 5px 21px;
		transition: box-shadow 0.3s;
		margin-left: -40px;

	}

	.add-button:hover {
		box-shadow: 0 0 100px darkgreen, 0 0 30px green;
		/* change the box-shadow color to a light 
	  shade of purple */
		background-color: lightgreen;
		border-color: green;
		color: #FFFFFF;

	}

	.back-button {
		position: fixed;
		font-size: 15px;
		font-style: bold;
		padding: 5px 20px 5px 20px;
		border: 1px solid #BB86FC;
		/* change the input border color to white */
		background-color: #BB86FC;
		/* make the input background color transparent */
		color: #fff;
		/* change the input text color to white */
		transition: box-shadow 0.3s;
		margin-left: 40px;
	}

	.back-button:hover {
		box-shadow: 0 0 100px #8B0000, 0 0 30px maroon;
		/* change the box-shadow color to a light 
	  shade of purple */
		background-color: red;
		border-color: maroon;
		;
		color: #FFFFFF;

	}

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;

	}

	li {
		float: left;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover {
		background-color: #111;
		color: #FFFF;
	}

	.active {
		background-color: white;
		color: white;

	}

	.exit {
		background-color: red;
		font-style: bold;
	}

	.exit:hover {
		background-color: maroon;
		font-style: bold;
		color: white;
	}
</style>
<ul>
	<li><a href="home.php">HOME</a></li>
	<li><a href="addFacility.php">ADD FACILITY</a></li>
	<li><a href="view.php">RECORD</a></li>
	<li><a href="searchFacility.php">SEARCH</a></li>
	<li style="float:right"><a class="exit" href="login.php "
			onclick="return confirm('Are you sure you want to Logout?'); ">X</a></li>

</ul>
<center>
	<h3>VIEW RECORD</h3>
</center>
<table>
	<tr>
		<th>FACILITY NAME</th>
		<th>FACILITY TYPE</th>
		<th>Rate</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>

	<?php
	$fName = $_POST['fName'];
	$record = "SELECT * FROM facility_list WHERE fName like '%$fName%'";
	$result = mysqli_query($con, $record);
	if ($result) {
		while ($data = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td>
					<?php echo $data['fName']; ?>
				</td>
				<td>
					<?php echo $data['fType']; ?>
				</td>
				<td>
					<?php echo $data['fRate']; ?>
				</td>
				<td class="tengah"><a href="edit.php?ID=<?php echo $data['ID']; ?>">edit</a></td>
				<td class="tengah"><a href="delete.php?ID=<?php echo $data['ID']; ?>"
						onclick="return confirm('Are you sure you want to delete'); ">delete</a></td>
			</tr>
			<?php
		}
	}
	?>
</table>
<center>
	<a class="add-button" href="addFacility.php">ADD</a>
	<a class="back-button" href="searchFacility.php">BACK</a>
</center>