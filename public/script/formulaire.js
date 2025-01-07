document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const checkboxes = document.querySelectorAll('.besoinsoutien input[type="checkbox"]');

    // Limiter la sélection à une seule case à cocher
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                checkboxes.forEach((cb) => {
                    if (cb !== checkbox) cb.checked = false;
                });
            }
        });
    });

    form.addEventListener('submit', (event) => {
        let formulaireCorrect = true;

        const optionCoche = Array.from(checkboxes).some((checkbox) => checkbox.checked);
        if (!optionCoche) {
            formulaireCorrect = false;
            const firstCheckbox = checkboxes[0];
            firstCheckbox.setCustomValidity("Veuillez cocher au moins une option");
            firstCheckbox.reportValidity();
            setTimeout(() => firstCheckbox.setCustomValidity(''), 3000);
        }

        if(!formulaireCorrect)
            event.preventDefault();
    });
});
