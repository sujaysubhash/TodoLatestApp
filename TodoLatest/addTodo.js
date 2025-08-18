
function addTodoList(event) {
    event.preventDefault();
    console.log("AddTodo clicked");
    const form = document.getElementById('todo-form');
    let formData = new FormData(form);
    form.reset();
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById('todo-list').innerHTML = this.responseText;
        }
    };
    xhttp.open('POST', 'addTodo.php', true);
    xhttp.send(formData);
}

function deleteAction(todoId) {
    console.log("Delete Button Clicked");
    console.log(todoId);
    let record = document.getElementById(todoId);

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            //remove row of html
            record.remove();
            //document.getElementById('todo-list').innerHTML = this.responseText;

        }
    };
    xhttp.open('POST', 'removeRecord.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send("todoId"+todoId);

}