
// Funkce pro zobrazení formuláře
function showForm(formId) {
    // Skryje registrační formulář
    document.getElementById('registerForm').style.display = 'none';
    // Skryje přihlašovací formulář
    document.getElementById('nodesForm').style.display = 'none';
    // Zobrazí formulář podle předaného ID (formId)
    document.getElementById(formId + 'Form').style.display = 'block';

    // Skryje tlačítka
    document.getElementById('buttons').style.display = 'none';
}


document.addEventListener('DOMContentLoaded',(event) =>{

const addNoteBtn = document.getElementById('add-note-btn');
const mainContent = document.getElementById('main-content');

// Přidání posluchačů událostí pro tlačítka zavření registrace
let krizek_registr = document.getElementById('krizek-register');
if (krizek_registr) {
    krizek_registr.addEventListener('click', () => {
        document.getElementById('registerForm').style.display = 'none';
        document.getElementById('buttons').style.display = 'flex';
    });

}

// Přidání posluchačů událostí pro tlačítka zavření prihlaseni
let krizek_nodes = document.getElementById('krizek-nodes');
if (krizek_nodes) {
    krizek_nodes.addEventListener('click', () => {
        document.getElementById('nodesForm').style.display = 'none';
        document.getElementById('buttons').style.display = 'flex';
    });
}

//
let hlaska = "<?php echo $hlaska; ?>";
if (hlaska) {
    let hlaskaDiv = document.querySelector(".hlaska");
    hlaskaDiv.style.display = "block";
} 

});