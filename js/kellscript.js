// Функция для отображения даты и времени
function kuupaeva(){
    const now = new Date();
    document.getElementById("kellaaegvastus").innerHTML =
        "Ainult kuupäev: " + now.toLocaleDateString('et-EE') + "<br>" +
        "Ainult kellaaeg: " + now.toLocaleTimeString('et-EE') + "<br>" +
        "Kuupäev ja kellaaeg: " + now.toLocaleString('et-EE');
}

// Функция для расчета дней до дня рождения
function synnipaev(){
    const now = new Date();
    const birthday = new Date(2025, 5, 22); // 22 июня 2025
    const difference = birthday.getTime() - now.getTime();
    const days = Math.round(difference / (1000 * 60 * 60 * 24));

    document.getElementById("sunnipaevani").innerHTML = days + " päeva";
}

// Назначаем обработчики после загрузки страницы
window.onload = function() {
    document.getElementById("tanaOn").onclick = kuupaeva;
    document.getElementById("synniPaev").onclick = synnipaev;
};