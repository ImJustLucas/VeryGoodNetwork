<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'Client area';

if (!isLogged()) {
    header('location: 403.php');
}


include('inc/header.php');
?>

<section id="banner-client">
    <div class="navBar">
        <div class="title">Votre Espace</div>
    </div>
    <div class="button-choose">
        <button id="btn-ca-main">Graph / Logs</button>
        <button id="update">update-date</button>
        <!-- <button id="btn-ca-logs">Logs</button> -->
    </div>
    <section id="client-area-main">
        <div class="title-main">
            <h1>Mode de consultation</h1>
        </div>
        <div class="select">
            <div class="graph">
                <a href="#" id="btn-ca-graph"><img src="asset/img/graphique.svg" alt="" class="img-log"></a>
                <div class="btn">
                    <p>Graphiques</p>
                </div>
            </div>
            <div class="split"></div>
            <div class="logs">
                <a href="#" id="btn-ca-logs"><img src="asset/img/logs.svg" alt="" class="img-log"></a>
                <div class="btn">
                    <p>Logs</p>
                </div>
            </div>
        </div>
    </section>

    <section id="client-area-graph">
        <div>
        </div>
        <div class="navbar-graph">
            <ul>
                <li>Graphique Principal</li>
                <li>Graphique Complémentaire 1</li>
                <li>Graphique Complémentaire 2</li>
                <li>Graphique Complémentaire 3</li>
            </ul>
        </div>
        <div class="graph graph-test">
            <canvas id="myChart"></canvas>
        </div>
    </section>

    <section id="client-area-logs">
        <div class="box-log"></div>
    </section>

    <!-- <div class="footer-client"></div> -->
</section>

<?php
include('inc/footer.php');
