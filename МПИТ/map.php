<?php
session_start();

include "connect.php";
include "header.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>МПИТ</title>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <style>
        .q {
            height: 500px;
        }
        #map {
            width: 90%;
            height: 100%;
        }
        #info {
            position: absolute;
            top: 10px;
            right: 10px;
            background: white;
            padding: 10px;
            border: 1px solid #ccc;
            z-index: 1000;
        }
        th {
            font-size: 24px;
        }
        td {
            font-size: 20px;
            padding-left: 20px;
        }
        input {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="q">
        <div id="map"></div>
    </div>
    <div id="info" class="info-block"></div>

    <div>
        Введите координаты: <input type="text"><br>
        Введите API камеры: <input type="password"><br><br>
        <button>Добавить</button>
    </div>

<script>
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
                        <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/1712127689UPE47/embed.html?token=5ef0c998826b4c33b93fcd6bcd84fd77&&mute=true"></iframe>
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
                    <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/009-060-035/embed.html?token=41d88483c12b4a239442de4e8b5cde7b&mute=true"></iframe>
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
                    <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/1731324902XBM22/embed.html?token=b2744fccf89e4a43b246171c0d7fc45e&mute=true"></iframe>
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
                    <iframe style="border:0;" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" allow="autoplay" src="http://185.44.9.21/1705903772YHT71/embed.html?token=adeecf0e6f3d4ecc914e4d21f88e4fef&mute=true"></iframe>
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
                document.getElementById('info').innerHTML = point.modalContent;
                document.getElementById('map').style.width = '40%';
            });
        });
    }
</script>
    
</body>
</html>

<?php include "footer.php" ?>