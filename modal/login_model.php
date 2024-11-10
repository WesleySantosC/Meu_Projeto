<<<<<<< HEAD
<?php

require_once "/xampp/htdocs/projetos/controller/conn.php";

class SignUp extends User {
    public function data() {
        $name = $_POST["nome"] ?? "Não informado";
        $senha = $_POST["pass"] ?? "Não informado";
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Verificar se o usuário já existe na tabela 'clients' (exemplo usando o nome como identificador)
        $checkQuery = "SELECT * FROM clients WHERE name = ?";
        $checkStmt = $this->conn->prepare($checkQuery);
        $checkStmt->bind_param("s", $name);
        $checkStmt->execute();
        $result = $checkStmt->get_result();

        if ($result->num_rows > 0) {
            // Usuário já cadastrado
            echo "Usuário já possui cadastro!";
            $checkStmt->close();
            return false;
        } else {
            $checkStmt->close();

            // Inserir novo usuário
            $query = "INSERT INTO clients (name, password) VALUES (?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ss", $name, $senhaHash);

            if ($stmt->execute()) {
                echo "<script>alert('Cadastro realizado com sucesso!')</script>";
                $stmt->close();
                // Prosseguir para o login após cadastro bem-sucedido
                $this->login($name, $senha);
                return true;
            } else {
                echo "<script>alert('Erro ao cadastrar usuário: " . $this->conn->error . "')</script>";
                $stmt->close();
                return false;
            }
        }
    }

    // Método de login
    public function login($name, $senha) {
        $query = "SELECT * FROM clients WHERE name = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($senha, $user['password'])) {
               //echo "Login realizado com sucesso!";
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }

        $stmt->close();
    }
}
?>
