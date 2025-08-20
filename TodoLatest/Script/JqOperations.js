$(document).ready(function() {
    $('#todo-form').submit(function(event) {
        event.preventDefault();

        const formData = {
            title: $('#title').val(), 
            desc: $('#description').val(), 
            date: $('#duedate').val()
        };

        $.ajax({
            url: "/TodoLatest/Backend/addTodo.php",
            method: "POST", 
            data: formData,
            dataType: 'html',

            success: function(response) {
                $("#todo-list").html(response);
                $("#todo-list").reset();
            }
        });

    });

    $('.dlt-btn').click(function() {
        let recordId = $('button').attr('id');

        $.ajax({
            url: "/TodoLatest/Backend/removeRecord.php", 
            method: "POST", 
            data: recordId,
            dataType: 'html',

            success: function() {
                $("#"+recordId).remove();
            }
        });

    });
});

