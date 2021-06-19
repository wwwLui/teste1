<?php require_once("../Controller/ControllerListar.php");?>
<!DOCTYPE html>
<html lang="pt-br">


<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
            <?php new listarController();  ?>

        </tbody>
    </table>
   
</body>
</html>
