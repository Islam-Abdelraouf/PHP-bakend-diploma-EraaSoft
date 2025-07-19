<!-- include the config file -->
<?php include '../inc/config.php'; ?>

<!-- MAIN HTML HEAD section -->
<?php include $rootpath.'inc/head.php'; ?>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">

        <!-- Navigation Section-->
        <?php include $rootpath.'inc/navigation.php'; ?>

        <!-- Projects Section-->
        <?php include $rootpath.'inc/projects/projects-proj.php'; ?>

        <!-- Call to action section-->
        <?php include $rootpath.'inc/projects/projects-cta.php'; ?>

    </main>

    <!-- Footer-->
    <?php include $rootpath.'inc/footer.php'; ?>

</body>
</html>