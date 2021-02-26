$(function() {
    $("#contact .button").click(function() {
        var data = {
            name: $("#nom").val(),
            prenom: $("#prenom").val(),
            email: $("#mail").val(),
            message: $("#contenu").val()
        };
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: data,
            success: function(){
                $('.success').fadeIn(1000);
            }
        });
        return false;
    });
});


