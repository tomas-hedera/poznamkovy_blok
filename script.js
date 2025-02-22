// Funkce pro zobrazení formuláře
function showForm(formId) {
        // Skryje registrační formulář
        document.getElementById('registerForm').style.display = 'none';
        // Skryje přihlašovací formulář
        document.getElementById('loginForm').style.display = 'none';
        // Zobrazí formulář podle předaného ID (formId)
        document.getElementById(formId + 'Form').style.display = 'block';

        document.getElementById('buttons').style.display = 'none';

}

let krizek_registr = document.getElementById('krizek-register');
krizek_registr.addEventListener('click', (udalost) => {
        document.getElementById('registerForm').style.display = 'none';
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('buttons').style.display = 'flex';
});

let krizek_login = document.getElementById('krizek-login');
krizek_login.addEventListener('click', () => {
        document.getElementById('registerForm').style.display = 'none';
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('buttons').style.display = 'flex';
});
