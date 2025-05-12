<?php
require 'conexao.php';

class CidadeDao
{

    public function __construct() {}


    public function getListCidade($conexao)
    {

        $combo = "";
        $sql = "SELECT ID, NOME FROM CIDADE ORDER BY NOME";
        $cidades = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($cidades) > 0) {
            $combo = "<select class='form-select' id='select_cidade' name='cidadeSelect'>";
            // $combo = <"input list='inlineLista'> para fazer um combo auto
            //$combo .= "<datalist id='inlineLista'>";
            foreach ($cidades as $cidade) {
                $combo .= "<option value='";
                $combo .= $cidade["ID"];
                $combo .= "'>";
                $combo .= ucfirst($cidade["NOME"]);
                $combo .= "</option>";
            }
            //$combo .= "</datalist>";
            $combo .= "</select>";
        }
        return $combo;
    }
}