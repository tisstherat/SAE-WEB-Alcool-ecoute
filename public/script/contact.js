

document.getElementById("send").addEventListener("click", function (event) {
    event.preventDefault(); // Empêche le rechargement de la page ou l'envoi direct
    Swal.fire({
        title: "Message de succes",
        text: "Votre message a été envoyé",
        icon: "success",
        timer: 3000, // Temps avant disparition (3 secondes)
        showConfirmButton: false,
    }).then(() => {
        // Envoyer le formulaire après l'affichage du message
        event.target.submit();
    });
})