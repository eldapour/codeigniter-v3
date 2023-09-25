<!DOCTYPE html>
<html>

<head>
	<title>
		User Data Management
	</title>
	<style>
		body {
			margin: 4rem;
		}

		#formContainer {
			margin-bottom: 20px;
		}

		label {
			display: block;
			margin-top: 10px;
		}

		input,
		textarea {
			width: 300px;
			padding: 8px;
			margin-top: 5px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		button {
			margin: 10px;
			padding: 8px 16px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button:hover {
			background-color: #45a049;
		}

		table {
			border-collapse: collapse;
			margin-bottom: 20px;
			width: 100%;
		}

		th,
		td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}

		th {
			background-color: #4CAF50;
			color: #fff;
		}
	</style>
</head>

<body>
<h1 style="color: green;">
	User Data Management
</h1>
<form id="formContainer" method="post" action="<?php echo base_url('user/update') ?>">
	<input type="hidden" name="id" value="<?php echo $user->id ?>">
	<label for="nameInput">
		Name:
	</label>
	<input type="text"
		   id="nameInput"
		   name="name"
		   value="<?php echo $user->name ?>"
		   placeholder="Enter your name">
	<label for="emailInput">
		Email I'd:
	</label>
	<input type="email"
		   id="emailInput"
		   value="<?php echo $user->email ?>"
		   name="email"
		   placeholder="Enter your email">
	<label for="numberInput">
		Mobile Details:
	</label>
	<input type="text"
		   id="numberInput"
		   name="phone"
		   value="<?php echo $user->phone ?>"
		   placeholder="Enter your mobile details">
	<label for="addressInput">
		Address:
	</label>
	<textarea id="addressInput"
			  name="address"
			  placeholder="Enter your address"><?php echo $user->address ?></textarea>
	<button type="submit">
		Edit
	</button>
</form>
<table id="outputTable">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Details</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	<?php foreach ($users as $key => $user): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $user->name ?></td>
			<td><?php echo $user->email ?></td>
			<td><?php echo $user->phone ?></td>
			<td><?php echo $user->address ?></td>
			<td>
				<button>Edit</button>
				<form action="delete/<?php echo $user->id ?>">
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
</body>

<script>

</script>

</html>
