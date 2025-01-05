document.addEventListener('DOMContentLoaded', () => {
    const connexionContenu = document.getElementById("connexion");
    const inscriptionContenu = document.getElementById("inscription");
    const versInscription = document.getElementById("inscription-redirection");
    const versConnexion = document.getElementById("connexion-redirection");

    inscriptionContenu.style.display = "none";

    versInscription.addEventListener("click", () => {
        connexionContenu.style.display = "none";
        inscriptionContenu.style.display = "block";
    })
    versConnexion.addEventListener("click", () => {
        connexionContenu.style.display = "block";
        inscriptionContenu.style.display = "none";
    })
});
