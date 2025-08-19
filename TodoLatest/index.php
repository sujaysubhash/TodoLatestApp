<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
</head>
<body>
    <h1>Create Todo List</h1>
    <form onsubmit="addTodoList(event)" id="todo-form">
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
            </tr>
            <tr>
                <td><input type="text" name="title" required></td>
                <td><input type="text" name="description" required></td>
                <td><input type="date" name="duedate" required></td>
                &nbsp;&nbsp;<td><input type="submit" value="Create Todo" name="submit"></td>
            </tr>
        </table><br>     
    </form>
    <h1>Your Todo List</h1>
    <table border="1" cellpadding>
       <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Due-date</th>
                <th>Action</th>
            </tr>
       </thead>
       <tbody id="todo-list">
            <tr id='<?php echo $key; ?>'></tr>
            <button hidden type='button' onclick='deleteAction($todoId)'></button>
       </tbody>
    </table>

    <div>
        <form action="./Backend/logout.php">
            <br>Do you wanted to Logout? <input type="submit" value="Logout">
        </form>
    </div>

    <script src="./Script/Operations.js"></script>
</body>
</html>