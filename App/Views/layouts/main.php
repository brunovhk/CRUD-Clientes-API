<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- JQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>CRUD Clientes</title>
</head>
<body>
<?php
include(__DIR__ . '/header.php');
?>
<div class="container border border-dark shadow-lg mb-5 bg-body rounded mt-3">
    {{content}}
</div>
<!-- Adicionando Javascript -->
<script src="assets/js/apiViaCep.js">

</script>
<script src="assets/js/modalEdit.js">

</script>
<script src="assets/js/modalDelete.js">

</script>
<script src="assets/js/scriptBusca.js">

</script>
</body>
</html>