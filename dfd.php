<?php $title = 'TMOC'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<?php
    if(!isset($_SESSION['id'])){
        echo "<script>location.href='./login.php';</script>";
    }
    else{
?>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1>Data Flow Diagram</h1>
                <h6>분석 대상의 내부 데이터 흐름을 나타내는 다이어그램</h6>
                <h6>공격 라이브러리 및 위협 도출 시 활용</h6>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <img class="w-100 mx-auto" src="./img/dfd.png" />
                </div>
            </div>
        </div>
    </main>
</body>
<?php
    }
?>
<?php include('tail.php'); ?>
