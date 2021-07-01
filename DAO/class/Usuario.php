<?php

class Usuario
{
    private $idusuario;
    private $userlogin;
    private $senha;
    private $dtcadastro;

    //Gets
    public function getIdUsuario()
    {
        return $this->idusuario;
    }
    public function getUserLogin()
    {
        return $this->userlogin;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getdtCadastro()
    {
        return $this->dtcadastro;
    }
    //Sets
    public function setIdUsuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    public function setUserLogin($userlogin)
    {
        $this->userlogin = $userlogin;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setDtCadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    //Busca da tabela usuário pelo id informado
    public function loadById($id)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $id
        ));
        if (count($result) > 0) {
            $this->setLista($result[0]);
        } else {
            echo "Não foi encontrado nenhum cadastro!!!";
        }
    }

    //Busca todos usuários da tabela usuários
    public function getLista()
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios ORDER BY userlogin");
        $rows = count($result);

        if ($rows > 0) {
            $this->setDados($result);
        } else {
            echo "Sem usuários cadastrados!!!";
        }
    }

    //Busca por nome digitado
    public static function search($login)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE userlogin LIKE :LOGIN ORDER BY userlogin", array(
            ":LOGIN" => "%" . $login . "%"
        ));

        $rows = count($result);

        if ($rows > 0) {
            return $result;
        } else {
            echo "Sem usuários cadastrados!!!";
        }
    }
    //Login e senha 
    public function login($login, $senha)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE userlogin = :LOGIN AND senha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));

        if (count($result) > 0) {
            $this->setLista($result[0]);
        } else {
            echo "Usuário e senha inválidos!!!";
        }
    }

    public function setLista($row)
    {
        $this->setIdUsuario($row['idusuario']);
        $this->setUserLogin($row['userlogin']);
        $this->setSenha($row['senha']);
        $this->setDtCadastro(new DateTime($row['dtcadastro']));
    }

    public function setDados($dados)
    {
        foreach ($dados as $lista) {
            foreach ($lista as $row) {
                $this->setIdUsuario($row['idusuario']);
                $this->setUserLogin($row['userlogin']);
                $this->setSenha($row['senha']);
                $this->setDtCadastro(new DateTime($row['dtcadastro']));
            }
        }
    }

    public function insert()
    {
        $sql = new Sql();
        $result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
            ':LOGIN' => $this->getUserLogin(),
            ':SENHA' => $this->getSenha()
        ));
        if (count($result) > 0) {
            $this->setLista($result[0]);
        }
    }

    public function update($login, $senha)
    {
        $this->setUserLogin($login);
        $this->setSenha($senha);

        $sql = new Sql();
        $sql->defaultQuery("UPDATE tb_usuarios SET userlogin = :LOGIN, senha = :SENHA WHERE idusuario = :ID", array(
            ':LOGIN' => $this->getUserLogin(),
            ':SENHA' => $this->getSenha(),
            ':ID' => $this->getIdUsuario(),
        ));
    }

    public function delete($id)
    {
        $sql = new Sql();
        $sql->defaultQuery("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ':ID' => $id,
        ));
        $this->setIdUsuario(NULL);
        $this->setUserLogin(NULL);
        $this->setSenha(NULL);
        $this->setDtCadastro(NULL);
    }

    public function __construct($login = "", $senha = "")
    {
        $this->setUserLogin($login);
        $this->setSenha($senha);
    }

    public function __toString() //Formata os dados a ser exibido
    {
        return json_encode(array(
            "idusuario" => $this->getIdUsuario(),
            "userlogin" => $this->getUserLogin(),
            "senha" => $this->getSenha(),
            "dtcadastro" => $this->getdtCadastro()->format("d/m/Y H:i:s")
        ));
    }
}