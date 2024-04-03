const d = new Date();

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
        var email = document.getElementById('email').value;
        var password = document.getElementById('jelszo').value;
    
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
                closeLoginPopup();
                location.reload();
            }
        };
        xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
    }
    
    function register() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('jelszo').value;
    
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'register.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
                closeLoginPopup();
                location.reload();
            }
        };
        xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
    }
    