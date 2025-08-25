$(document).ready(function() {
     
    $('#todo-form').submit(function(e) {
        console.log("Addtodo");
        e.preventDefault();

        const formData = {
            title: $('#title').val(), 
            desc: $('#description').val(), 
            date: $('#duedate').val()
        };

        $.ajax({
            url: "/TodoLatest/Backend/commonCall.php",
            method: "POST", 
            data: formData,
            dataType: 'html',

            success: function(response) {
                $("#todo-list").html(response);
                $("#todo-form")[0].reset();
            }
        });

    });

});