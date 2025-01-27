<?php
session_start();

include "connect.php";
include "header.php";
 
?>

<style>
<?php 
    include "css/map.css"
?>
</style>

    <div class="shapka">
        <div class="site-title"><a href="map.html">
            <div class="title">
                Проблем<span class="purple-text">Нет</span>
            </div>
            <div class="subtitle">
                при поддержке <span class="orange-text">уфанет</span>
            </div></a>
        </div>
        <div class="kab">
            <a href="zayavki.html">Личный кабинет</a>
        </div>
    </div>
    <div class="container">
        <div class="map-title">
            Карта загруженности опор
        </div>
        <div class="map-main">
            <div id="map"></div>
        </div>
        <div id="info" class="info-block">
            <!--здесь будет камера-->
        </div>
        <div class="info-point">
            <!--здесь будет выводиться инфа о точке-->
        </div>
    </div>

    <table>
        <tr>
            <th>E-mail</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
        <?php
        $applications = mysqli_query($connect, "SELECT * FROM `application`");
        $applications = mysqli_fetch_all($applications);
        print_r($applications);
        foreach ($applications as $application) {
            ?>
            <tr>
                <td><?=$application[1]?></td>
                <td><?=$application[2]?></td>
                <td><?php if ($application[3]==0){
                    echo "Ожидет рассмотрения";
                } 
                ?></td>
            </tr>
            <?php
        }

        ?>

    </table>


    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            const newBlocks = document.getElementById('newBlocks');
            newBlocks.classList.toggle('hidden');
        });
    </script>
    
    <!--<div id="info" class="info-block">Информация о точках</div>-->

    <button class="createbutton">
        Создать подвес
    </button>
<script src="js/map.js"></script>
    

<?php include "footer.php" ?>