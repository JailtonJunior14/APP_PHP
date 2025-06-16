<?php

namespace APP\Model;


use APP\DAO\AutorDAO;
use Exception;


final class Autor extends Model{
    public ?int $Id = null;

    public ?string $Nome{
        set
        {
            if(strlen($value)<3)
            
                throw new Exception("O nome deve ter pelo menos 3 caracter");

                $this->Nome = $value;
            
        }
        get=>$this->Nome ?? null;
    }

    public ?string $CPF{
        set
        {
            if(strlen($value)<11)
            
                throw new Exception("Preencha o CPF corretamente");

                $this->CPF = $value;
            

            
        }
        get=>$this->CPF ?? null;

    }

    public ?string $Data_Nascimento{
        set
        {
            if(empty($value))
            
                throw new Exception("preencha a data ");

                $this->Data_Nascimento = $value;
            
        }
        get=>$this->Data_Nascimento ?? null;
    }


    function save() : Autor
    {
        return new AutorDAO()->save($this);
    }

    function selectById(int $id) : ?Autor
    {
        return new AutorDAO()->selectById($id);
    }

    function getAllRows() : array
    {
        $this->rows = new AutorDAO()->select();
        return $this->rows;
    }

    function delete(int $id) : bool
    {
        return new AutorDAO()->delete($id);
    }
}