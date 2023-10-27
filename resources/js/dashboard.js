// dashboard.js

// Obtenez la fenêtre modale
var modal = document.getElementById('editModal');

// Obtenez le lien pour ouvrir la fenêtre modale
var editLinks = document.querySelectorAll('.editLink');

// Obtenez le bouton de fermeture
var closeBtn = document.querySelector('.modal-close');

// Ouvrez la fenêtre modale lorsque l'utilisateur clique sur un lien "Modifier"
editLinks.forEach(function(editLink) {
    editLink.addEventListener('click', function(e) {
        e.preventDefault();
        modal.classList.remove('hidden');
    });
});

// Fermez la fenêtre modale lorsque l'utilisateur clique sur le bouton de fermeture
closeBtn.addEventListener('click', function() {
    modal.classList.add('hidden');
});

// Fermez la fenêtre modale lorsque l'utilisateur clique en dehors de celle-ci
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
});
