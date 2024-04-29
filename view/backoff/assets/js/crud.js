document.addEventListener('DOMContentLoaded', function() {
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    downloadPdfBtn.addEventListener('click', function() {
        // Création d'un nouveau document PDF
        const doc = new jsPDF();

        // Variables pour les positions de début des tableaux dans le PDF
        let yOffset = 10;
        const firstTableYOffset = 20;

        // Fonction pour ajouter un tableau au document PDF
        const addTableToPdf = (table, offsetY) => {
            const content = doc.autoTableHtmlToJson(table);
            doc.autoTable(content, { startY: offsetY });
        };

        // Sélection des deux tableaux à télécharger
        const tables = document.querySelectorAll('.table-data table');

        // Ajout de chaque tableau au document PDF avec un décalage vertical
        tables.forEach((table, index) => {
            if (index !== 0) {
                yOffset = firstTableYOffset;
            }
            addTableToPdf(table, yOffset);
            yOffset = doc.autoTable.previous.finalY + 10; // Met à jour la position Y pour le prochain tableau
        });

        // Téléchargement du document PDF
        doc.save('tableaux.pdf');
    });
});