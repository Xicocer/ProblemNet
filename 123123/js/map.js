ymaps.ready(init);
    function init() {
        var myMap = new ymaps.Map("map", {
            center: [56.326797, 44.006516],
            zoom: 13
        });

        var points = [
            { coords: [56.322434, 44.033116], modalContent: `
                <div class="">
                    <div class="" style="width:890px !important; height: 425px !important;">
                        <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/1712127689UPE47/embed.html?token=54302103613b462a9a81fa1658845371&mute=true"></iframe>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <th>№</th>
                                <td>Данные</td>
                            </tr>
                            <tr>
                                <th>Улица</th>
                                <td>Данные</td>
                            </tr>
                            <tr>
                                <th>Владелец</th>
                                <td>Данные</td>
                            </tr>
                            <tr>
                                <th>Подвес 1</th>
                                <td>Данные</td>
                            </tr>
                            <tr>
                                <th>Подвес 2</th>
                                <td>Данные</td>
                            </tr>
                            <tr>
                                <th>Подвес 3</th>
                                <td>Данные</td>
                            </tr>
                            <tr>
                                <th>Подвес 4</th>
                                <td>Данные</td>
                            </tr>
                            <tr>
                                <th>Подвес 5</th>
                                <td>Данные</td>
                            </tr>
                        </table>
                    </div>
                </div>` 
            },
            { coords: [56.314743, 44.023079], modalContent: `
                <div class="" style="width:890px !important; height: 425px !important;">
                    <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/1731324902XBM22/preview.mp4?token=579fc91a244d4ae2aae7541cf1ed8a31"></iframe>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                    </table>
                </div>
            </div>` 
            },
            { coords: [56.312443, 43.985176], modalContent: `
                <div class="" style="width:890px !important; height: 425px !important;">
                    <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/1731324902XBM22/embed.html?token=4ebacc5992a245d691d94af81ac7424a&mute=true"></iframe>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                    </table>
                </div>
            </div>` 
            },
            { coords: [56.272095, 44.049124], modalContent: `
                <div class="" style="width:890px !important; height: 425px !important;">
                    <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/1705903772YHT71/embed.html?token=7a7013a9f4fe48d6a7e528b90d4ff182&mute=true"></iframe>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                        <tr>
                            <th>Текст заголовка</th>
                            <td>Данные</td>
                            <td>Данные</td>
                            <td>Данные</td>
                        </tr>
                    </table>
                </div>
            </div>` 
            }
        ];


        points.forEach(function(point) {
            var placemark = new ymaps.Placemark(point.coords, {
                balloonContent: point.name
            });

            myMap.geoObjects.add(placemark);

            placemark.events.add('click', function() {
                console.log('Placemark clicked'); // Проверка, срабатывает ли событие
                // Изменяем ширину карты
                document.getElementById('map').style.width = '30%';

                // Отображаем информацию в блоке
                document.getElementById('info').innerHTML = point.modalContent;
            });
        });
    }