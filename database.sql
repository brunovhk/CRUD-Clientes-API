CREATE DATABASE CRUD_CLIENTES;
USE CRUD_CLIENTES;
CREATE TABLE CLIENTES
(
    ID               bigint primary key auto_increment not null,
    DataHoraCadastro datetime,
    Codigo           varchar(15),
    Nome             varchar(150),
    CPF_CNPJ         varchar(20) unique,
    CEP              integer,
    Logradouro       varchar(100),
    Bairro           varchar(50),
    Cidade           varchar(60),
    UF               varchar(02),
    Complemento      varchar(150),
    Numero           varchar(20),
    Endereco         varchar(120),
    Fone             varchar(15),
    LimiteCredito    float,
    Validade         date
);