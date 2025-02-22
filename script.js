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