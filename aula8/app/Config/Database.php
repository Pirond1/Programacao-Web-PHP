<?php
    #Arquivo de Conexão com o DB
    namespace App\Config;

    #Importando PDO
    use PDO;
    use PDOException;

    class Database {
        private static ?PDO $conn = null;

        public static function getConection(): PDO {
            if(self::$conn) return self::$conn;
            
            #Acessando Variáveis de Ambiente
            #$host = $_ENV['DB_HOST'];
            #$dbname = $_ENV['DB_NAME'];
            #$user = $_ENV['DB_USER'];
            #$pass = $_ENV['DB_PASS'];
            #$charset = $_ENV['DB_CHARSET'];

            $host = "127.0.0.1:3307";
            $dbname = "aula_persistencia";
            $user = "root";
            $pass = "";
            $charset = "utf8mb4";

            #Criar String de Conexão
            $dns = "mysql:host=$host;dbname=$dbname;charset=$charset";

            try{
                self::$conn = new PDO($dns, $user, $pass);
                return self::$conn;
            } catch (PDOException $e){
                #Excluir o Erro
                echo $e->getMessage();
            }
        }
    }
?>