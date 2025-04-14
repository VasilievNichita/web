/* Yandex Map */

// Функция ymaps.ready() будет вызвана, когда
// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
ymaps.ready(init);

function init() {
  // Создание карты.
  var map = new ymaps.Map('map', {
    center: [47.031968, 28.839278], // Центр карты
    zoom: 16,
  });

  // Массив с данными для 3-х меток
  var placemarks = [
    {
      coords: [47.050846, 28.863553], // Координаты 1-й метки
      hint: 'Marts fitness', 
      balloon: 'Bulevardul Moscova 11/5, Chișinău, Moldova',
    },
    {
      coords: [47.031968, 28.839278], // Координаты 2-й метки
      hint: 'Marts fitness',
      balloon: 'Strada Petru Rareș 18A, Chișinău, Moldova',
    },
    {
      coords: [46.990107, 28.850994], // Координаты 3-й метки
      hint: 'Marts fitness',
      balloon: 'Dacia 14/1, Chișinău, Moldova',
    },
  ];

  // Создание и добавление меток на карту
  placemarks.forEach(function(placemarkData) {
    var placemark = new ymaps.Placemark(
      placemarkData.coords, // Координаты
      {
        hintContent: placemarkData.hint, // Текст подсказки
        balloonContent: placemarkData.balloon, // Текст для всплывающего окна
      },
      {
        preset: 'islands#redIcon', // Стиль иконки
      }
    );
    map.geoObjects.add(placemark); // Добавление метки на карту
  });

  // Удаление ненужных контролов
  map.controls.remove('geolocationControl');
  map.controls.remove('searchControl');
  map.controls.remove('trafficControl');
  map.controls.remove('typeSelector');
}
