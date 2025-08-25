$(document).ready(function (){
    
    $("#todo-list").on('click', '.dlt-btn', function() {
        console.log("Dlt clicked");
        let recId = $(this).data('key');
        
        $.ajax({
            url: "/TodoLatest/Backend/commonCall.php",
            method: "POST", 
            data: {recorId: recId},
            success: function() {
                console.log(recId+", is deleted");
                $("#"+recId).remove();
            }
        });
    });

});