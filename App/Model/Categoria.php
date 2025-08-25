<?php

namespace APP\Model;

use App\DAO\CategoriaDAO;
use Exception;


final class Categoria extends Model{
    public ?int $Id = null;


    public ?string $Descricao{

        set
        {
            if(strlen($value)<4)
            
                throw new Exception("Digite uma descrição valida");
                $this->Descricao = $value;
            
        }
        get=>$this->Descricao ?? null;
    }


    function save() : Categoria
    {
        return new CategoriaDAO()->save($this);
    }

    function getById(int $id) : ?Categoria
    {
        return new CategoriaDAO()->selectById($id);
    }

    function getAllRows() : array
    {
        $this->rows = new CategoriaDAO()->select();

        return $this->rows;
    }

    function delete(int $id) : bool
    {
        return new CategoriaDAO()->delete($id);
    }



}