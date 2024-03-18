const d = new Date();
document.getElementById('demo').innerHTML = 'Copyright ' + d.getFullYear();

document.addEventListener("DOMContentLoaded", function () {
    // Árak lekérdezése
    fetch('get_prices.php')
        .then(response => response.json())
        .then(prices => {
            // Táblázat elem referenciája
            const table = document.querySelector('#price-list-section table');
  
            // Árak hozzáadása a táblázathoz
            prices.forEach(price => {
                const row = table.insertRow(-1);
                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);
  
                cell1.textContent = price.style;
                cell2.textContent = price.price + ' Ft';
            });
        })
        .catch(error => console.error('Hiba:', error));
    });
    function openLoginPopup() {
        document.getElementById('loginPopup').style.display = 'block';
    }

    function closeLoginPopup() {
        document.getElementById('loginPopup').style.display = 'none';
    }

    function login() {
        
        alert('Bejelentkezés sikeres!');
        closeLoginPopup();
    }

    function register() {
        alert('Regisztráció sikeres!');
        closeLoginPopup();
    }