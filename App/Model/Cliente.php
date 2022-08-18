<?php

namespace App\Model;

class Cliente
{
    private $id;
    private $dataHoraCadastro;
    private $codigo;
    private $nome;
    private $cpf_cnpj;
    private $cep;
    private $logradouro;
    private $bairro;
    private $localidade;
    private $uf;
    private $complemento;
    private $numero;
    private $endereco;
    private $fone;
    private $limiteCredito;
    private $validade;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDataHoraCadastro()
    {
        return $this->dataHoraCadastro;
    }

    /**
     * @param mixed $dataHoraCadastro
     */
    public function setDataHoraCadastro($dataHoraCadastro)
    {
        $this->dataHoraCadastro = $dataHoraCadastro;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpf_cnpj;
    }

    /**
     * @param mixed $cpf_cnpj
     */
    public function setCpfCnpj($cpf_cnpj)
    {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * @param mixed $validade
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;
    }

    /**
     * @return mixed
     */
    public function getLimiteCredito()
    {
        return $this->limiteCredito;
    }

    /**
     * @param mixed $limiteCredito
     */
    public function setLimiteCredito($limiteCredito)
    {
        $this->limiteCredito = $limiteCredito;
    }

    /**
     * @return mixed
     */
    public function getFone()
    {
        return $this->fone;
    }

    /**
     * @param mixed $fone
     */
    public function setFone($fone)
    {
        $this->fone = $fone;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getLocalidade()
    {
        return $this->localidade;
    }

    /**
     * @param mixed $localidade
     */
    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }


}