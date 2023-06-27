<?php

namespace Repository;

use Database\Database;

class UserRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getDb();
    }

    public function listUsers()
    {
        $query = "SELECT Tb_banco.nome AS nome_banco, Tb_convenio.verba, Tb_user.codigo AS codigo_user, Tb_user.data_inclusao, Tb_user.valor, Tb_user.prazo
                  FROM Tb_user
                  INNER JOIN Tb_convenio_servico ON Tb_user.convenio_servico = Tb_convenio_servico.codigo
                  INNER JOIN Tb_convenio ON Tb_convenio_servico.convenio = Tb_convenio.codigo
                  INNER JOIN Tb_banco ON Tb_convenio.banco = Tb_banco.codigo";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
