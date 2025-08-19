class Operations {

    addTodo(event) {
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
        xhttp.open('POST', '/TodoLatest/Backend/addTodo.php', true);
        xhttp.send(formData);
    }

    dltTodo(todoId) {
        console.log("Delete Button Clicked");
        console.log(todoId);
        let record = document.getElementById(todoId);
    
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                console.log("Control is inside callback");
                record.remove();
            }
        };
        xhttp.open('POST', '/TodoLatest/Backend/removeRecord.php', true);
        xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhttp.send("todoId="+todoId);
    }
}

let operation = new Operations();
window.addTodoList = (event) => operation.addTodo(event);
window.deleteAction = (todoId) => operation.dltTodo(todoId);
