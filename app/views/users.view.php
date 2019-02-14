<?php require('partials/head.php'); ?>;

<h1>All users</h1>
 
<?php foreach($users as $user): ?>
	<li><?= $user->name; ?></li>
<?php endforeach; ?>
 <h1>Submit your name</h1>

<form method="POST" action="users">
	<input name="name"> </input>
	<button type="Submit">Submit</button>
</form>
<h1>Delete</h1>
<form method="POST" action="deleteUser">
	<input name="name"> </input>
	<button type="Submit">Confirm</button>
</form>
<h1>Update your name</h1>
<form method="POST" action="names-update">
	<label for="oldName">
	Old name: <input type="text" id="oldName" name="oldName">
	</label>
	<label for="newName">
	New name: <input type="text" id="newName" name="newName">
	</label>
	<button type="Submit">Submit</button>
</form>
<?php require('partials/footer.php'); ?>;