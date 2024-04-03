create database caringcrafters;
use caringcrafters;


CREATE TABLE Usuario (
    nome VARCHAR(100),
    sobrenome VARCHAR(100),
    cpf VARCHAR(15),
    email VARCHAR(100),
    telefone VARCHAR(50),
    cep VARCHAR(20),
    cidade VARCHAR(100),
    dataDeNascimento DATE,
    genero VARCHAR(50),
    estadoCivil VARCHAR(50),
    escolaridade VARCHAR(50),
    nacionalidade VARCHAR(50),
    ocupacao VARCHAR(100),
    experienciaPrevia TEXT,
    senha VARCHAR(32),
    id_user INTEGER PRIMARY KEY
);

CREATE TABLE Instituicao (
    id_Inst INTEGER PRIMARY KEY,
    nomeFantasia VARCHAR(100),
    nomeAdministrador VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(50),
    cep VARCHAR(20),
    cidade VARCHAR(100),
    razaoSocial VARCHAR(100),
    cnpj VARCHAR(20),
    dataFundacao DATE,
    capitalSocial VARCHAR(100),
    horaInicial TIME,
    horaFinal TIME,
    senha VARCHAR(32)
);

CREATE TABLE Administrador (
    id_admin INTEGER PRIMARY KEY,
    senha VARCHAR(32),
    email VARCHAR(100)
);

CREATE TABLE Postagem (
    id_post INTEGER PRIMARY KEY,
    conteudo TEXT,
    dataPostagem DATETIME,
    imagem VARCHAR(100) ,
    fk_Instituicao_id_Inst INTEGER
);

CREATE TABLE Evento (
    id_evento INTEGER PRIMARY KEY,
    rua VARCHAR(100),
    numero VARCHAR(100),
    cidade VARCHAR(100),
    cep VARCHAR(20),
    dataPostagem DATE,
    dataEvento DATE,
    conteudo TEXT,
    numeroVagas INTEGER,
    horaInicial DATETIME ,
    horaFinal DATETIME ,
    fk_Instituicao_id_Inst INTEGER
);

CREATE TABLE Feedback_dar (
    id_feedback INTEGER PRIMARY KEY,
    autor VARCHAR(100),
    destinatario VARCHAR(100),
    conteudo TEXT,
    fk_Usuario_id_user INTEGER,
    fk_Instituicao_id_Inst INTEGER
);

CREATE TABLE Comentario (
    id_comentario INTEGER PRIMARY KEY,
    conteudo TEXT,
    dataPostagem DATETIME,
    fk_Postagem_id_post INTEGER,
    fk_Usuario_id_user INTEGER
);

CREATE TABLE Area (
    id_area INTEGER PRIMARY KEY,
    tituloCompleto TEXT
);

CREATE TABLE Vaga (
    id_vaga INTEGER PRIMARY KEY,
    titulo VARCHAR(100),
    descricao VARCHAR(200),
    dataPostado DATE,
    dataLimite DATE,
    status VARCHAR(50),
    anexo VARCHAR(100),
    fk_Instituicao_id_Inst INTEGER
);

CREATE TABLE Conectou_com (
    fk_Usuario_id_user INTEGER,
    fk_Instituicao_id_Inst INTEGER,
    PRIMARY KEY (fk_Usuario_id_user, fk_Instituicao_id_Inst)
);

CREATE TABLE TemInteresse (
    fk_Usuario_id_user INTEGER,
    fk_Area_id_area INTEGER,
    PRIMARY KEY (fk_Usuario_id_user, fk_Area_id_area)
);

CREATE TABLE Atua (
    fk_Area_id_area INTEGER,
    fk_Instituicao_id_Inst INTEGER,
    PRIMARY KEY (fk_Area_id_area, fk_Instituicao_id_Inst)
);
 
ALTER TABLE Postagem ADD CONSTRAINT FK_Postagem_2
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst)
    ON DELETE CASCADE;
 
ALTER TABLE Evento ADD CONSTRAINT FK_Evento_2
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst)
    ON DELETE CASCADE;
 
ALTER TABLE Feedback_dar ADD CONSTRAINT FK_Feedback_dar_2
    FOREIGN KEY (fk_Usuario_id_user)
    REFERENCES Usuario (id_user);
 
ALTER TABLE Feedback_dar ADD CONSTRAINT FK_Feedback_dar_3
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst);
 
ALTER TABLE Comentario ADD CONSTRAINT FK_Comentario_2
    FOREIGN KEY (fk_Postagem_id_post)
    REFERENCES Postagem (id_post)
    ON DELETE CASCADE;
 
ALTER TABLE Comentario ADD CONSTRAINT FK_Comentario_3
    FOREIGN KEY (fk_Usuario_id_user)
    REFERENCES Usuario (id_user);
 
ALTER TABLE Vaga ADD CONSTRAINT FK_Vaga_2
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst)
    ON DELETE CASCADE;
 
ALTER TABLE Conectou_com ADD CONSTRAINT FK_Conectou_com_1
    FOREIGN KEY (fk_Usuario_id_user)
    REFERENCES Usuario (id_user)
    ON DELETE SET NULL;
 
ALTER TABLE Conectou_com ADD CONSTRAINT FK_Conectou_com_2
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst)
    ON DELETE restrict;

ALTER TABLE TemInteresse ADD CONSTRAINT FK_TemInteresse_1
    FOREIGN KEY (fk_Usuario_id_user)
    REFERENCES Usuario (id_user)
    ON DELETE restrict;
 
ALTER TABLE TemInteresse ADD CONSTRAINT FK_TemInteresse_2
    FOREIGN KEY (fk_Area_id_area)
    REFERENCES Area (id_area)
    ON DELETE restrict;
  
ALTER TABLE Atua ADD CONSTRAINT FK_Atua_1
    FOREIGN KEY (fk_Area_id_area)
    REFERENCES Area (id_area)
    ON DELETE RESTRICT;
  
ALTER TABLE Atua ADD CONSTRAINT FK_Atua_2
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst)
    ON DELETE restrict;
    
    
-- INSERTS

