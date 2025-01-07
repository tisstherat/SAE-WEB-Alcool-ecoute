// URL du script backend PHP
const backendUrl = '../php/statsBackEnd.php';

// Fonction pour créer le graphique
function faireCamembert(canvasId, data) {
    const ctx = document.getElementById(canvasId).getContext('2d');
    new Chart(ctx, {
        type: 'pie', // Type de graphique (camembert)
        data: data,  // Données récupérées depuis le backend
    });
}

// Fonction pour créer un graphique en barres
function diagrammeBarres(canvasId, data) {
    const ctx = document.getElementById(canvasId).getContext('2d');
    new Chart(ctx, {
        type: 'bar', // Type de graphique
        data: {
            labels: data.labels, // Utilise les mêmes étiquettes
            datasets: [{
                label: 'Valeurs',
                data: data.datasets[0].data, // Données
                backgroundColor: data.datasets[0].backgroundColor, // Couleurs
            }]
        },
        options: {
            responsive: true, // Le graphique reste responsive
            maintainAspectRatio: false, // Désactive le maintien du ratio d'aspect
            plugins: {
                legend: {
                    display: true, // Affiche une légende
                },
                title: {
                    display: true,
                    text: 'Diagramme en Barres', // Titre du graphique
                }
            }
        }
    });
}

// Récupérer les données depuis le backend
fetch(backendUrl)
    .then(response => response.json())
    .then(data => {
        faireCamembert('camembert1', data); // Crée le graphique avec les données récupérées
        faireCamembert('camembert2', data);
        faireCamembert('camembert3', data);
        faireCamembert('camembert4', data);
        faireCamembert('camembert5', data);
        diagrammeBarres('barres1', data);
    })
    .catch(error => console.error('Erreur lors de la récupération des données :', error));
