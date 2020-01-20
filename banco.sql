
CREATE DATABASE phpestagio;

USE phpestagio;

CREATE TABLE pessoas(
cod INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
tipo_de_pessoa VARCHAR(50),
nome VARCHAR(50),
nome_fantasia VARCHAR(50),
cpf char(14),
cnpj char(18),
razao_social VARCHAR(50),
endereco VARCHAR(50),
numero VARCHAR(10),
complemento VARCHAR(50),
cep CHAR(9),
municipio VARCHAR(50),
uf CHAR(2),
email VARCHAR(50),
telefone VARCHAR(50),
celular VARCHAR(50),
cliente BOOLEAN,
fornecedor BOOLEAN,
funcionario BOOLEAN
); 
