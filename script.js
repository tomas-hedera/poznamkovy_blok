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

const addNoteBtn = document.getElementById('add-note-btn');
const mainContent = document.getElementById('main-content');

// Funkce pro vytvoření nové poznámky
function addNewNote() {
    const newNote = document.createElement("div");
    newNote.classList.add("note");

     // Přidaní obsah do nové poznámky
     const noteTitle = document.createElement('input');
     noteTitle.type = "text";
     noteTitle.name = "note-title";
     noteTitle.value = "Název poznámky";
     newNote.appendChild(noteTitle);

    mainContent.appendChild(newNote);                    // Přidat novou poznámku do hlavního obsahu

}
    addNoteBtn.addEventListener("click", (udalost) => {  //vytvoreni udalosti aby po kliku na tlacitko vytvorilo div (.note)
        udalost.preventDefault;                          // Zabráníme výchozímu chování odkazu
        addNewNote();                                    // Přidáme novou poznámku
    });


// Přidání posluchačů událostí pro tlačítka zavření
let krizek_registr = document.getElementById('krizek-register');
krizek_registr.addEventListener('click', () => {
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('buttons').style.display = 'flex';
});


let krizek_nodes = document.getElementById('krizek-nodes');
krizek_nodes.addEventListener('click', () => {
    document.getElementById('nodesForm').style.display = 'none';
    document.getElementById('buttons').style.display = 'flex';
});


