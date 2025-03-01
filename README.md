# Poznámkový blok

Poznámkový blok je jednoduchá webová aplikace pro správu poznámek. Uživatelé se mohou registrovat a přihlašovat, aby mohli spravovat své poznámky.

## Funkce

- Registrace uživatelů
- Přihlášení uživatelů
- Správa poznámek

## Instalace

1. Naklonujte repozitář:
    ```sh
    git clone https://github.com/tomas-hedera/poznamkovy_blok.git
    ```

2. Přejděte do adresáře projektu:
    ```sh
    cd poznamkovy_blok
    ```

3. Ujistěte se, že máte nainstalovaný XAMPP nebo jiný webový server s podporou PHP a MySQL.

4. Zkopírujte soubory do kořenového adresáře vašeho webového serveru (např. `htdocs` pro XAMPP).

5. Vytvořte databázi a tabulky podle souboru `db.sql` (pokud existuje).

6. Upravte soubor [db.php](http://_vscodecontentref_/1) a nastavte připojení k databázi:
    ```php
    <?php
    $db = new mysqli('localhost', 'username', 'password', 'database_name');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    ?>
    ```

## Použití

1. Spusťte webový server (např. XAMPP).
2. Otevřete webový prohlížeč a přejděte na adresu `http://localhost/poznamkovy_blok`.
3. Registrujte se nebo se přihlaste pomocí existujícího účtu.
4. Spravujte své poznámky.

## Struktura projektu

- [index.php](http://_vscodecontentref_/2): Hlavní stránka aplikace s registračním a přihlašovacím formulářem.
- [register.php](http://_vscodecontentref_/3): Skript pro registraci uživatelů.
- [login.php](http://_vscodecontentref_/4): Skript pro přihlášení uživatelů.
- [db.php](http://_vscodecontentref_/5): Soubor pro připojení k databázi.
- [css](http://_vscodecontentref_/6): Adresář obsahující CSS soubory pro stylizaci aplikace.
- [script.js](http://_vscodecontentref_/7): JavaScript soubor pro zobrazení a skrytí formulářů.

## Příspěvky

Příspěvky jsou vítány! Pokud chcete přispět, prosím, otevřete issue nebo pull request.

## Licence

Tento projekt je licencován pod MIT licencí. Podrobnosti naleznete v souboru `LICENSE`.
