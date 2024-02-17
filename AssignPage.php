<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Chores</title>
</head>
<body>
	<h1>Create Chore</h1>

	<section id=createChoreForm>
		<h2>Create New Chore</h2>
		<form id="choreForm">
			<label for="choreName">Name of Chore</label>
			<input type="text" id="choreName" name="choreName" required>

			<button type="submit">Add a Chore</button>

			


		</form>
		




	</section>
	<section id="choreList">
        <h2>Chore List</h2>
        <table id="choreTable">
            <!-- Table headers -->
            <thead>
                <tr>
                    <th>Chore ID</th>
                    <th>Chore Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
            	<tr>
                    <td>1</td>
                    <td>Clean the kitchen</td>
                    <td>
                        <button onclick="editChore(1)">Edit</button>
                        <button onclick="deleteChore(1)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Take out the trash</td>
                    <td>
                        <button onclick="editChore(2)">Edit</button>
                        <button onclick="deleteChore(2)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

</body>
</html>