/* LógicoOrganico3_2: */

CREATE TABLE USUARIO (
    nome varchar(255),
    status varchar(255),
    cpf int,
    id int auto_increment not null PRIMARY KEY,
    complemento varchar(255),
    n_casa int,
    FK_NOME_DO_LOGRADOURO_id int auto_increment not null
);

CREATE TABLE PRODUTO (
    id int auto_increment not null PRIMARY KEY,
    nome varchar(255),
    preco float,
    validade date,
    qtd int,
    FK_CATEGORIA_id int auto_increment not null
);

CREATE TABLE COMPRA (
    id int auto_increment not null PRIMARY KEY,
    data date,
    status varchar(255),
    FK_USUARIO_id int auto_increment not null
);

CREATE TABLE CATEGORIA (
    id int auto_increment not null PRIMARY KEY,
    nome varchar(255)
);

CREATE TABLE RESTRICAO (
    id int auto_increment not null PRIMARY KEY,
    tipo varchar(255)
);

CREATE TABLE CONTATO (
    id int auto_increment not null PRIMARY KEY,
    contato varchar(255),
    FK_USUARIO_id int auto_increment not null,
    FK_TIPO_CONT_id int auto_increment not null,
    FK_FORNECEDOR_id int auto_increment not null
);

CREATE TABLE TIPO_CONT (
    id int auto_increment not null PRIMARY KEY,
    tipo varchar(255)
);

CREATE TABLE FORNECEDOR (
    id int auto_increment not null PRIMARY KEY,
    complemneto varchar(80),
    n_casa int,
    info_sobre varchar(255),
    certificado varchar(255),
    marca varchar(255),
    info_producao_um varchar(255),
    info_producao_dois varchar(255),
    info_producao_dois varchar(255),
    FK_PRODUTO_id int auto_increment not null,
    FK_NOME_DO_LOGRADOURO_id int auto_increment not null
);

CREATE TABLE CIDADE (
    id int auto_increment not null PRIMARY KEY,
    nome varchar(255)
);

CREATE TABLE BAIRRO (
    nome varchar(255),
    id int auto_increment not null PRIMARY KEY,
    FK_CIDADE_id int auto_increment not null
);

CREATE TABLE LOGRADOURO (
    id int auto_increment not null PRIMARY KEY,
    descricao varchar(255)
);

CREATE TABLE NOME_DO_LOGRADOURO (
    nome varchar(255),
    id int auto_increment not null PRIMARY KEY,
    FK_BAIRRO_id int auto_increment not null,
    FK_LOGRADOURO_id int auto_increment not null
);

CREATE TABLE comentario (
    fk_PRODUTO_id int auto_increment not null,
    fk_USUARIO_id int auto_increment not null,
    id int auto_increment not null PRIMARY KEY,
    descricao varchar(100)
);

CREATE TABLE prod_restricao (
    fk_RESTRICAO_id int auto_increment not null,
    fk_PRODUTO_id int auto_increment not null,
    id_prod_restricao int auto_increment not null PRIMARY KEY
);

CREATE TABLE item_prod (
    fk_PRODUTO_id int auto_increment not null,
    fk_COMPRA_id int auto_increment not null,
    qtd int,
    id_item_comprado int auto_increment not null PRIMARY KEY
);
 
ALTER TABLE USUARIO ADD CONSTRAINT FK_USUARIO_2
    FOREIGN KEY (FK_NOME_DO_LOGRADOURO_id)
    REFERENCES NOME_DO_LOGRADOURO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE PRODUTO ADD CONSTRAINT FK_PRODUTO_2
    FOREIGN KEY (FK_CATEGORIA_id)
    REFERENCES CATEGORIA (id)
    ON DELETE RESTRICT;
 
ALTER TABLE COMPRA ADD CONSTRAINT FK_COMPRA_2
    FOREIGN KEY (FK_USUARIO_id)
    REFERENCES USUARIO (id)
    ON DELETE CASCADE;
 
ALTER TABLE CONTATO ADD CONSTRAINT FK_CONTATO_2
    FOREIGN KEY (FK_USUARIO_id)
    REFERENCES USUARIO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE CONTATO ADD CONSTRAINT FK_CONTATO_3
    FOREIGN KEY (FK_TIPO_CONT_id)
    REFERENCES TIPO_CONT (id)
    ON DELETE RESTRICT;
 
ALTER TABLE CONTATO ADD CONSTRAINT FK_CONTATO_4
    FOREIGN KEY (FK_FORNECEDOR_id)
    REFERENCES FORNECEDOR (id)
    ON DELETE RESTRICT;
 
ALTER TABLE FORNECEDOR ADD CONSTRAINT FK_FORNECEDOR_2
    FOREIGN KEY (FK_PRODUTO_id)
    REFERENCES PRODUTO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE FORNECEDOR ADD CONSTRAINT FK_FORNECEDOR_3
    FOREIGN KEY (FK_NOME_DO_LOGRADOURO_id)
    REFERENCES NOME_DO_LOGRADOURO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE BAIRRO ADD CONSTRAINT FK_BAIRRO_2
    FOREIGN KEY (FK_CIDADE_id)
    REFERENCES CIDADE (id)
    ON DELETE RESTRICT;
 
ALTER TABLE NOME_DO_LOGRADOURO ADD CONSTRAINT FK_NOME_DO_LOGRADOURO_2
    FOREIGN KEY (FK_BAIRRO_id)
    REFERENCES BAIRRO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE NOME_DO_LOGRADOURO ADD CONSTRAINT FK_NOME_DO_LOGRADOURO_3
    FOREIGN KEY (FK_LOGRADOURO_id)
    REFERENCES LOGRADOURO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE comentario ADD CONSTRAINT FK_comentario_2
    FOREIGN KEY (fk_PRODUTO_id)
    REFERENCES PRODUTO (id)
    ON DELETE SET NULL;
 
ALTER TABLE comentario ADD CONSTRAINT FK_comentario_3
    FOREIGN KEY (fk_USUARIO_id)
    REFERENCES USUARIO (id)
    ON DELETE SET NULL;
 
ALTER TABLE prod_restricao ADD CONSTRAINT FK_prod_restricao_2
    FOREIGN KEY (fk_RESTRICAO_id)
    REFERENCES RESTRICAO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE prod_restricao ADD CONSTRAINT FK_prod_restricao_3
    FOREIGN KEY (fk_PRODUTO_id)
    REFERENCES PRODUTO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE item_prod ADD CONSTRAINT FK_item_prod_2
    FOREIGN KEY (fk_PRODUTO_id)
    REFERENCES PRODUTO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE item_prod ADD CONSTRAINT FK_item_prod_3
    FOREIGN KEY (fk_COMPRA_id)
    REFERENCES COMPRA (id)
    ON DELETE SET NULL;