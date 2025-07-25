<!-- MAIN HTML HEAD section -->
<?php include 'inc/head.php'; ?>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">

        <!-- Navigation Section-->
        <?php include 'inc/navigation.php'; ?>

        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">

                    <!-- Experience Section-->
                    <?php include 'inc/resume/resume-exp.php'; ?>

                    <!-- Education Section-->
                    <?php include 'inc/resume/resume-edu.php'; ?>

                    <!-- Divider-->
                    <div class="pb-5"></div>

                    <!-- Skills Section-->
                    <?php include 'inc/resume/resume-skills.php'; ?>

                </div>
            </div>
        </div>
    </main>

    <!-- Footer-->
    <?php include 'inc/footer.php'; ?>

</body>
</html>