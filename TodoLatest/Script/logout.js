$(document).ready(function() {
    $('#logout-form').submit(function(e) {
        e.preventDefault();
        const logout = true;
        $.ajax({
            url: "/TodoLatest/Backend/commonCall.php",
            method: "POST",
            data: {logStatus: logout},
            success: function() {
                window.location.href = "/TodoLatest/login.php";
            }
        });
    });
});