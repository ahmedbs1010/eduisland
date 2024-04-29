// Récupérer le bouton pour ouvrir le modal
var openModalBtn = document.getElementById('openModalBtn');

// Récupérer le modal
var modal = document.getElementById('myModal');

// Récupérer le bouton de fermeture du modal
var closeButton = document.getElementsByClassName('close')[0];

// Ouvrir le modal lors du clic sur le bouton
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Fermer le modal lorsque l'utilisateur clique sur le bouton de fermeture
closeButton.onclick = function() {
    modal.style.display = "none";
}

// Fermer le modal lorsque l'utilisateur clique en dehors du contenu du modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Contrôle de saisie des champs du formulaire
function validateForm(event) {
    var matiere = document.getElementById('matiere').value;
    var niveau = document.getElementById('niveau').value;
    var nbheure = document.getElementById('nbheure').value;
    var idt = document.getElementById('idt').value;
    var matiereInput = document.getElementById('matiere').value;
    var validCourses = ['French', 'English', 'Italian', 'Spanish', 'Mathematics', 'Physics', 'Science', 'Portuguese', 'Chinese'];


    // Expression régulière pour vérifier si le champ matiere ne contient que des lettres
    var regexMatiere = /^[A-Za-z ]+$/;
    if (!regexMatiere.test(matiere)) {
        document.getElementById('matiereError').textContent = "Would you enter a significant Course.";
        event.preventDefault();
    } else {
        document.getElementById('matiereError').textContent = "";
    }

    // Vérifier si le champ niveau est valide
    var niveauxValides = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'];
    if (!niveauxValides.includes(niveau)) {
        document.getElementById('niveauError').textContent = "Would you enter a valid Level(A1, A2, B1, B2, C1, C2).";
        event.preventDefault();
    } else {
        document.getElementById('niveauError').textContent = "";
    }

    // Expression régulière pour vérifier si le champ nbheure ne contient que des chiffres
    var regexNbHeure = /^[0-9]+$/;
    if (!regexNbHeure.test(nbheure)) {
        document.getElementById('nbheureError').textContent = "Would You enter a number.";
        event.preventDefault();
    } else {
        document.getElementById('nbheureError').textContent = "";
    }

    // Expression régulière pour vérifier si le champ idt ne contient que des chiffres
    var regexIdt = /^[0-9]+$/;
    if (!regexIdt.test(idt)) {
        document.getElementById('idtError').textContent = "Would You enter an ID of Teacher";
        event.preventDefault();
    } else {
        document.getElementById('idtError').textContent = "";
    }
    if (!validCourses.includes(matiereInput)) {
        document.getElementById('matiereError').innerText = 'Would you choose from the list : French, English, Italian, Spanish, Mathematics, Physics, Science, Portuguese, Chinese';
        return false;
    }
}

document.querySelector('.formulaire_cours').addEventListener('submit', validateForm);