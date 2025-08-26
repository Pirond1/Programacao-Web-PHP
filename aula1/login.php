<?php
    #Formulário de autenticação
?>

<?php
    $mensagem = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if(isset($_POST['email']) && isset($_POST['senha'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            if($email == "admin@gmail.com" && $senha == "admin123"){
                $mensagem = "Login Realizado!";
            }else{
                $mensagem = "Login Incorreto!";
            }
        }
    } 
?>

<!DOCTYPE>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-4">
                    <form method="POST">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Email</label>
                                <input type="email" name="email" required class="form-control"/>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Senha</label>
                                <input type="password" name="senha" required class="form-control"/>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Logar</button>
                            </div>
                        </div>
                        <?php echo $mensagem ?>        
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>