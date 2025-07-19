<!-- include the config file -->
<?php include '../inc/config.php'; ?>

<!-- MAIN HTML HEAD section -->
<?php include $rootpath.'inc/head.php'; ?>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">

        <!-- Navigation Section-->
        <?php include $rootpath.'inc/navigation.php'; ?>

        <!-- Page content-->
        <?php include $rootpath.'inc/contact/contact-body.php'; ?>

    </main>

    <!-- Footer section-->
    <?php include $rootpath.'inc/footer.php'; ?>

    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>