<?php  require_once './view/components/header.php'; ?>

    <h1>SOY LA VISTA Main</h1>
    <main class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3 ">
                    <?php  require_once './view/components/aside.php'; ?>
                </div>
                <div class="col-5">
                    <?php                         
                        while ($row = mysqli_fetch_array($data)) {
                            /* echo $row['Titulo']."<br>";
                            echo $row['Que']."<br>";
                            echo $row['Como']."<br>";
                            echo $row['Para']."<br>";
                            echo $row['sub_para_que']."<br>";
                            echo $row['Que_es']."<br>";
                            echo $row['Como_se']."<br>";
                            echo $row['Para_que']."<br>";
                            echo $row['ruta_img']."<br>"; */ ?>

                        <h1 class="text-primary text-center"><?php echo $row['Titulo']; ?></h1>
                        <div class="mb-5">
                            <h2 class="text-danger"><?php echo $row['Que']; ?></h2>
                            <p class="text-primary"><?php echo $row['Que_es']; ?></p>
                        </div>
                        <div class="mb-5">
                            <h2 class="text-danger"><?php echo $row['Como']; ?></h2>
                            <p class="text-primary"><?php echo $row['Como_se']; ?></p>
                        </div>
                        <div class="mb-5">
                            <h2 class="text-danger"><?php echo $row['Para']; ?></h2>
                            <h3 class="text-danger"><?php echo $row['sub_para_que'] ?></h3>
                            <p class="text-primary"><?php echo $row['Para_que']; ?></p>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
<?php  require_once './view/components/footer.php'; ?>   
