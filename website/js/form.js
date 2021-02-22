function envoi() {
    document.formu.action="";
    var address=window.document.envoie.mail.value;
    var pos=address.indexOf("@");
    if (address=="") {
        alert("Vous devez donner une adresse e-mail.");
    }
    else {
        if (pos==-1 || pos==0 || pos==address.length-1) {
            alert("Le format du mail est invalide.");
        }
        else // tout va bien, on envoie le formulaire
            document.formu.action='mailto:cadetgauthier4@gmail.com?subject="Demande client"';
        // bluewaymv@outlook.com
    }
}
