<?php //include('func.php'); 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP DIPLOMA ERAASOFT</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- BACKGROUND CSS -->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <div class="container col-9 mx-auto">
        <section>
            <div class="pt-3">
                <h1 class="text-center text-uppercase">PHP Diploma EraaSoft</h1>
                <h2 class="text-center text-uppercase">Homework</h2>
                <br>
            </div>
        </section>
        <section>
            <!-- LECTURE 1 HOMEWORK -->
            <div>
                <h5 class="text-right">Lecture 1 (18.04.2025)</h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse00" aria-expanded="false" aria-controls="collapse00">
                                No problem solving was requested, only research was required.
                            </button>
                        </h2>
                    </div>
                </div>
                <br>
            </div>

            <!-- LECTURE 2 HOMEWORK -->
            <div>
                <h5 class="text-right">Lecture 2 (25.04.2025)</h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Sheet '<span style="color: red;">TASK 1</span> - problem-solving sheet 1'
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ11.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                Conditions
                            </button>
                        </h2>
                        <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ12.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Variables
                            </button>
                        </h2>
                        <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ13.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <!-- LECTURE 3 HOMEWORK -->
            <div>
                <h5 class="text-right">Lecture 3<span> (02.05.2025)</span></h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                Sheet '<span style="color: red;">TASK 2</span> - Array & loops & Conditions & Strings & Functions ( All Fundamentals )'
                            </button>
                        </h2>
                        <div id="collapse21" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ21.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                Loops Problem Solving
                            </button>
                        </h2>
                        <div id="collapse22" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ22.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <!-- LECTURE 4 HOMEWORK -->
            <div>
                <h5 class="text-right">Lecture 4 (09.05.2025)</h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                Registration Form
                            </button>
                        </h2>
                        <div id="collapse31" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ31.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="true" aria-controls="collapse32">
                                Personal Website
                            </button>
                        </h2>
                        <div id="collapse32" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ32.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="true" aria-controls="collapse33">
                                Personal Website (improved - with config.php, views folder, and rootpath)
                            </button>
                        </h2>
                        <div id="collapse33" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ33.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <!-- LECTURE 5 HOMEWORK -->
            <div>
                <h5 class="text-right">Lecture 5 (16.05.2025)</h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                CRUD Using File in php ( EraaSoft Playlist )
                            </button>
                        </h2>
                        <div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ41.php'); ?>
                            </div>
                        </div>
                    </div>
                   
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                Blog Website ( Classroom )
                            </button>
                        </h2>
                        <div id="collapse42" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ42.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>



            

            <!-- LECTURE 6 HOMEWORK -->
            <div>
                <h5 class="text-right">Lecture 6 (30.05.2025)</h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                School ER Diagram 
                            </button>
                        </h2>
                        <div id="collapse51" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ51.php'); ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <br>
            </div>

            

            <!-- LECTURE 7/8/9 HOMEWORK -->
            <div>
                <h5 class="text-right">Lecture 7/8/9 (13/20/24/27.06.2025)</h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                Blog Site 
                            </button>
                        </h2>
                        <div id="collapse52" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php include('inc/occ52.php'); ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

<p class="text-end p-1 mt-1" style="background-color: rgba(105, 220, 220, 0.3);">by Islam Abdelraouf</p>