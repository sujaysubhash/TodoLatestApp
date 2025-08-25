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
    <form id="todo-form">
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
            </tr>
            <tr>
                <td><input type="text" name="title" id="title" required></td>
                <td><input type="text" name="description" id="description" required></td>
                <td><input type="date" name="duedate" id="duedate" required></td>
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
            <tr class='list-row'>
            <button hidden type='button' class="dlt-btn"></button>
            </tr>
       </tbody>
    </table>

    <div>
        <form id="logout-form">
            <br>Do you wanted to Logout? <input type="submit"  value="Logout">
        </form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./Script/JqOperations.js"></script>
    <script src="./Script/addTodo.js"></script>
    <script src="./Script/dlt.js"></script>
    <script src="./Script/logout.js"></script>


</body>
</html>