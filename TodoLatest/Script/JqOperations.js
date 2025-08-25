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

    
    $("#login-form").submit( function(e) {
        e.preventDefault();
    
        const formData = {
            email: $("#email").val(),
            password: $("#password").val()
        }
    
        $.ajax({
            url: "/TodoLatest/Backend/commonCall.php",
            method: "POST", 
            data: formData,
            dataType : 'text',
            success: function(response) {
                if(response.trim() == "success") {
                    window.location.href = "index.php";
                } else {
                    alert("Invalid credentials");
                    $("#response-p").text("Invalid user credentials");

                }
            }
    
        });
    });

   



});



