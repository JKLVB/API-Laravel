--DROP TABLE cadastro.usuarios;

CREATE DATABASE projeto
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'pt_BR.UTF-8'
    LC_CTYPE = 'pt_BR.UTF-8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

CREATE SEQUENCE cadastro.sq_usuarios
  INCREMENT 1
  MINVALUE 0
  MAXVALUE 2147483647
  START 1
  CACHE 1;
ALTER TABLE cadastro.sq_usuarios
  OWNER TO postgres;
GRANT ALL ON SEQUENCE cadastro.sq_usuarios TO postgres;

CREATE TABLE cadastro.usuarios
(
  id integer NOT NULL DEFAULT nextval('cadastro.sq_usuarios'::regclass),
  nome VARCHAR(50) NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  senha VARCHAR(8) NOT NULL,
  telefone VARCHAR(11) NOT NULL,
  cargo VARCHAR(20) NOT NULL,
  CONSTRAINT pk_usuarios PRIMARY KEY (id),
  CONSTRAINT uk_usuarios_cpf UNIQUE (cpf),
  CONSTRAINT uk_usuarios_teleone UNIQUE (telefone)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE cadastro.usuarios
  OWNER TO postgres;
  
GRANT ALL ON TABLE cadastro.usuarios TO postgres;

INSERT INTO cadastro.usuarios (nome, cpf, senha, telefone, cargo) VALUES ('Pablo', '12345678900', '4321', '71987654321', 'administrador');