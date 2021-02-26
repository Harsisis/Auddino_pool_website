function envoi() {
    // document.formu.action="";
    // var address=window.document.envoie.mail.value;
    // var pos=address.indexOf("@");
    // if (address=="") {
    //     alert("Vous devez donner une adresse e-mail.");
    // }
    // else {
    //     if (pos==-1 || pos==0 || pos==address.length-1) {
    //         alert("Le format du mail est invalide.");
    //     }
    //     else{
    //         document.formu.action='mailto:bluewaymv@outlook.com?subject="Demande client"';
    //     }
    // }

    $.ajax({
        url : '../php/mail.php',
        type : 'POST',
        success : function () {
            console.log ('success');
        },
        error : function () {
            console.log ('error');
        }
    });

    // var nom = document.getElementById("nom");
    // var prenom = document.getElementById("prenom");
    // var mail = document.getElementById("mail");
    // var message = document.getElementById("contenu");
}


