<?php
    if($_FILES['arquivo']['error'] === UPLOAD_ERR_OK){
        $destino = 'uploads/' . basename($_FILES['arquivo']['name']);
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino);
        echo "Arquivo Salvo com Sucesso!";
    }else{
        echo "Erro no Arquivo!";
    }
?>