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

-- na tabela administrador:
INSERT INTO Administrador VALUES (1, 'admin123', 'admin1@email.com');
INSERT INTO Administrador VALUES (2, 'admin456', 'admin2@email.com');
INSERT INTO Administrador VALUES (3, 'admin789', 'admin3@email.com');



-- na tabela area:
INSERT INTO Area (id_area, tituloCompleto) VALUES
(1, 'Assistência a Idosos'),
(2, 'Cuidados com Animais'),
(3, 'Alimentação de Moradores de Rua'),
(4, 'Educação Infantil em Comunidades'),
(5, 'Apoio Psicológico em Hospitais'),
(6, 'Capacitação Profissional para Jovens'),
(7, 'Preservação Ambiental Urbana'),
(8, 'Apoio a Pessoas com Deficiência'),
(9, 'Visitas a Hospitais e Asilos'),
(10, 'Arrecadação e Distribuição de Alimentos'),
(11, 'Reforço Escolar em Comunidades'),
(12, 'Doação de Sangue'),
(13, 'Reforma de Espaços Públicos'),
(14, 'Apoio a Refugiados'),
(15, 'Atividades Recreativas em Orfanatos'),
(16, 'Informática para Idosos'),
(17, 'Conscientização Ambiental em Escolas'),
(18, 'Apoio a Vítimas de Violência Doméstica'),
(19, 'Hortas Comunitárias'),
(20, 'Artesanato para Mulheres em Risco');

-- na tabela atua:
INSERT INTO Atua (fk_Area_id_area, fk_Instituicao_id_Inst) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 1),
(12, 2),
(13, 3),
(14, 4),
(15, 5),
(16, 6),
(17, 7),
(18, 8),
(19, 9),
(20, 10);

-- na tabela comentario:
INSERT INTO Comentario (id_comentario, conteudo, dataPostagem, fk_Postagem_id_post, fk_Usuario_id_user) VALUES
(1, 'Ótimo conteúdo! Parabéns!', '2024-04-02 10:15:00', 1, 1),
(2, 'Gostei muito da sua postagem!', '2024-04-03 14:30:00', 2, 2),
(3, 'Que iniciativa incrível!', '2024-04-04 09:45:00', 3, 3),
(4, 'Excelente trabalho!', '2024-04-05 11:20:00', 4, 4),
(5, 'Muito inspirador!', '2024-04-06 13:55:00', 5, 5),
(6, 'Parabéns pela iniciativa!', '2024-04-07 15:10:00', 6, 6),
(7, 'Estou adorando acompanhar!', '2024-04-08 12:30:00', 7, 7),
(8, 'Que bela contribuição!', '2024-04-09 10:45:00', 8, 8),
(9, 'Muito interessante!', '2024-04-10 14:25:00', 9, 9),
(10, 'Continuem assim!', '2024-04-11 11:40:00', 10, 10),
(11, 'Incrível!', '2024-04-12 09:20:00', 11, 1),
(12, 'Ótimo trabalho!', '2024-04-13 13:15:00', 12, 2),
(13, 'Estou aprendendo muito!', '2024-04-14 15:50:00', 13, 3),
(14, 'Que legal!', '2024-04-15 12:10:00', 14, 4),
(15, 'Muito bom!', '2024-04-16 10:30:00', 15, 5);

-- na tabela conectou_com:
INSERT INTO Conectou_com (fk_Usuario_id_user, fk_Instituicao_id_Inst) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 1),
(12, 2),
(13, 3),
(14, 4),
(15, 5),
(16, 6),
(17, 7),
(18, 8),
(19, 9),
(20, 10);

-- na tabela evento:
INSERT INTO Evento (id_evento, rua, numero, cidade, cep, dataPostagem, dataEvento, conteudo, numeroVagas, horaInicial, horaFinal, fk_Instituicao_id_Inst) VALUES
(1, 'Rua das Flores', '123', 'São Paulo', '01234-567', '2024-03-30', '2024-04-15', 'Venha participar do nosso mutirão de limpeza urbana! Juntos podemos fazer a diferença.', 50, '2024-04-15 08:00:00', '2024-04-15 12:00:00', 1),
(2, 'Avenida Principal', '456', 'Rio de Janeiro', '98765-432', '2024-04-02', '2024-04-20', 'Participe do nosso workshop de reciclagem! Aprenda a reutilizar materiais e contribua para um mundo mais sustentável.', 30, '2024-04-20 14:00:00', '2024-04-20 17:00:00', 2),
(3, 'Praça Central', '789', 'Belo Horizonte', '54321-098', '2024-03-28', '2024-04-25', 'Estamos promovendo uma feira de adoção de animais. Venha conhecer nossos amiguinhos!', 20, '2024-04-25 10:00:00', '2024-04-25 14:00:00', 3),
(4, 'Avenida das Árvores', '321', 'Curitiba', '87654-321', '2024-04-01', '2024-04-30', 'Participe da nossa palestra sobre saúde mental. Um momento importante de conscientização.', 50, '2024-04-30 18:00:00', '2024-04-30 20:00:00', 4),
(5, 'Rua dos Voluntários', '654', 'Porto Alegre', '23456-789', '2024-04-03', '2024-05-05', 'Venha ajudar a construir casas para famílias carentes em nosso mutirão de construção!', 40, '2024-05-05 09:00:00', '2024-05-05 16:00:00', 5),
(6, 'Praça da Paz', '987', 'Recife', '67890-123', '2024-03-29', '2024-05-10', 'Estamos organizando uma tarde recreativa para as crianças da comunidade. Venha participar!', 60, '2024-05-10 14:00:00', '2024-05-10 18:00:00', 6),
(7, 'Avenida dos Artistas', '246', 'Salvador', '54321-987', '2024-04-01', '2024-05-15', 'Participe do nosso festival de música beneficente. Todos os fundos arrecadados serão destinados a projetos sociais.', 100, '2024-05-15 16:00:00', '2024-05-15 22:00:00', 7),
(8, 'Rua da Esperança', '135', 'Fortaleza', '01234-567', '2024-03-31', '2024-05-20', 'Venha participar da nossa campanha de doação de sangue. Sua doação pode salvar vidas!', 50, '2024-05-20 08:00:00', '2024-05-20 13:00:00', 8),
(9, 'Praça das Flores', '753', 'Manaus', '87654-321', '2024-04-02', '2024-05-25', 'Estamos promovendo uma feira de artesanato local. Venha conhecer o talento dos nossos artesãos!', 30, '2024-05-25 10:00:00', '2024-05-25 16:00:00', 9),
(10, 'Avenida dos Esportes', '258', 'Brasília', '23456-789', '2024-04-04', '2024-05-30', 'Participe do nosso torneio de futebol solidário. Junte sua equipe e ajude a fazer a diferença!', 80, '2024-05-30 14:00:00', '2024-05-30 18:00:00', 10),
(11, 'Rua das Artes', '369', 'São Paulo', '01234-567', '2024-03-30', '2024-06-05', 'Venha participar da nossa oficina de pintura em tela. Não é necessário ter experiência!', 20, '2024-06-05 10:00:00', '2024-06-05 12:00:00', 1),
(12, 'Avenida da Paz', '147', 'Rio de Janeiro', '98765-432', '2024-04-02', '2024-06-10', 'Participe do nosso mutirão de plantio de árvores. Vamos juntos cuidar do meio ambiente!', 40, '2024-06-10 08:00:00', '2024-06-10 11:00:00', 2),
(13, 'Praça das Crianças', '258', 'Belo Horizonte', '54321-098', '2024-03-28', '2024-06-15', 'Estamos organizando uma tarde de contação de histórias para os pequenos. Traga sua família!', 30, '2024-06-15 15:00:00', '2024-06-15 17:00:00', 3),
(14, 'Avenida da Saúde', '369', 'Curitiba', '87654-321', '2024-04-01', '2024-06-20', 'Participe da nossa palestra sobre alimentação saudável. Aprenda dicas para uma vida mais saudável!', 50, '2024-06-20 19:00:00', '2024-06-20 21:00:00', 4),
(15, 'Rua dos Sonhos', '654', 'Porto Alegre', '23456-789', '2024-04-03', '2024-06-25', 'Estamos organizando uma visita guiada aos pontos turísticos da cidade. Venha conhecer mais sobre nossa cultura!', 25, '2024-06-25 09:00:00', '2024-06-25 12:00:00', 5),
(16, 'Praça da Alegria', '987', 'Recife', '67890-123', '2024-03-29', '2024-06-30', 'Venha participar da nossa festa junina! Teremos comidas típicas, música ao vivo e muita diversão!', 100, '2024-06-30 17:00:00', '2024-06-30 22:00:00', 6),
(17, 'Avenida da Solidariedade', '246', 'Salvador', '54321-987', '2024-04-01', '2024-07-05', 'Participe da nossa campanha de doação de agasalhos. Ajude a aquecer o inverno de quem mais precisa!', 50, '2024-07-05 10:00:00', '2024-07-05 14:00:00', 7),
(18, 'Rua da Esperança', '135', 'Fortaleza', '01234-567', '2024-03-31', '2024-07-10', 'Estamos organizando uma visita aos pacientes do hospital. Traga sua solidariedade!', 20, '2024-07-10 15:00:00', '2024-07-10 17:00:00', 8),
(19, 'Praça da Cultura', '753', 'Manaus', '87654-321', '2024-04-02', '2024-07-15', 'Venha participar do nosso sarau literário. Traga seus poemas e contos para compartilhar!', 30, '2024-07-15 18:00:00', '2024-07-15 20:00:00', 9),
(20, 'Avenida da Integração', '258', 'Brasília', '23456-789', '2024-04-04', '2024-07-20', 'Participe da nossa caminhada pela paz. Juntos podemos construir um mundo melhor!', 50, '2024-07-20 07:00:00', '2024-07-20 10:00:00', 10);

-- na tabela feedback_dar:
INSERT INTO Feedback_dar (id_feedback, autor, destinatario, conteudo, fk_Usuario_id_user, fk_Instituicao_id_Inst) VALUES
(1, 'João', 'Maria', 'Parabéns pelo excelente trabalho voluntário na última campanha de arrecadação de alimentos!', 1, 20),
(2, 'Ana', 'Carlos', 'Agradeço imensamente pela sua dedicação na organização do evento de conscientização ambiental.', 2, 19),
(3, 'Pedro', 'Fernanda', 'Seu apoio na última campanha de doação de sangue foi fundamental. Muito obrigado!', 3, 18),
(4, 'Carla', 'Paulo', 'Agradeço pela sua colaboração na limpeza do parque. Seu empenho faz a diferença!', 4, 17),
(5, 'Mariana', 'Lucas', 'Parabéns pela sua atuação como monitor de atividades recreativas para idosos. Seu trabalho é inspirador!', 5, 16),
(6, 'José', 'Juliana', 'Agradeço pelo seu apoio na organização do evento beneficente. Sua dedicação é admirável!', 6, 15),
(7, 'Fernando', 'Amanda', 'Seu comprometimento na campanha de vacinação animal é digno de reconhecimento. Muito obrigado!', 7, 14),
(8, 'Rafael', 'Patrícia', 'Agradeço pela sua disposição em ministrar aulas de reforço escolar para crianças carentes. Você faz a diferença!', 8, 13),
(9, 'Camila', 'Luciana', 'Parabéns pelo seu trabalho voluntário na última visita ao asilo. Seu carinho com os idosos é notável!', 9, 12),
(10, 'Rodrigo', 'Giovana', 'Agradeço pela sua colaboração na organização da campanha de conscientização sobre saúde mental. Seu trabalho é essencial!', 10, 11),
(11, 'Patricia', 'Josué', 'Seu auxílio na última campanha de arrecadação de agasalhos foi muito importante. Muito obrigado!', 11, 10),
(12, 'Daniel', 'Monica', 'Parabéns pela sua dedicação na aula de informática básica para os moradores do bairro. Seu conhecimento é valioso!', 12, 9),
(13, 'Larissa', 'Eduardo', 'Agradeço pelo seu apoio na organização da visita aos pacientes do hospital. Seu cuidado com o próximo é admirável!', 13, 8),
(14, 'Sandra', 'Felipe', 'Parabéns pelo seu trabalho na campanha de arrecadação de brinquedos para o dia das crianças. Seu gesto fez muitas crianças felizes!', 14, 7),
(15, 'Gustavo', 'Vanessa', 'Agradeço pela sua participação na limpeza das praias. Sua dedicação em preservar o meio ambiente é louvável!', 15, 6),
(16, 'Carolina', 'Lucas', 'Parabéns pelo seu comprometimento na aula de música para as crianças do abrigo. Seu talento musical é inspirador!', 16, 5),
(17, 'Henrique', 'Aline', 'Agradeço pela sua ajuda na organização do evento beneficente. Seu empenho contribuiu para o sucesso do evento!', 17, 4),
(18, 'Juliana', 'Ricardo', 'Parabéns pelo seu trabalho na tarde recreativa para os adolescentes da comunidade. Sua interação com os jovens é fundamental!', 18, 3),
(19, 'Lucas', 'Carla', 'Agradeço pelo seu apoio na campanha de doação de alimentos não perecíveis. Sua solidariedade é inspiradora!', 19, 2),
(20, 'Amanda', 'Marcelo', 'Parabéns pela sua dedicação na última campanha de conscientização sobre os direitos das mulheres. Seu engajamento é notável!', 20, 1),
(21, 'João', 'Maria', 'Seu apoio na organização da última campanha de arrecadação de alimentos foi incrível. Obrigado pelo empenho!', 5, 1),
(22, 'Ana', 'Carlos', 'Parabéns pelo seu comprometimento na campanha de conscientização ambiental. Seu trabalho é fundamental!', 7, 2),
(23, 'Pedro', 'Fernanda', 'Agradeço pela sua dedicação na última campanha de doação de sangue. Seu gesto salvou vidas!', 1, 3),
(24, 'Carla', 'Paulo', 'Parabéns pela sua colaboração na limpeza do parque. Seu esforço faz a diferença!', 2, 4),
(25, 'Mariana', 'Lucas', 'Agradeço pelo seu trabalho como monitor de atividades recreativas para idosos. Sua dedicação é admirável!', 3, 5),
(26, 'José', 'Juliana', 'Parabéns pelo seu apoio na organização do evento beneficente. Seu empenho fez o evento ser um sucesso!', 7, 6),
(27, 'Fernando', 'Amanda', 'Agradeço pela sua participação na campanha de vacinação animal. Seu comprometimento é digno de reconhecimento!', 9, 7),
(28, 'Rafael', 'Patrícia', 'Parabéns pela sua dedicação em ministrar aulas de reforço escolar para crianças carentes. Seu trabalho é inspirador!', 12, 8),
(29, 'Camila', 'Luciana', 'Agradeço pelo seu trabalho na última visita ao asilo. Seu carinho com os idosos é fundamental!', 2, 9),
(30, 'Rodrigo', 'Giovana', 'Parabéns pela sua colaboração na organização da campanha de conscientização sobre saúde mental. Seu esforço é notável!', 15, 10);

-- na tabela instituicao:
INSERT INTO Instituicao (id_Inst, nomeFantasia, nomeAdministrador, email, telefone, cep, cidade, razaoSocial, cnpj, dataFundacao, capitalSocial, horaInicial, horaFinal, senha) VALUES
(1, 'Instituição A', 'Administrador A', 'admin_a@instituicao.com', '1234-5678', '12345-678', 'São Paulo', 'Instituição A LTDA', '12.345.678/0001-90', '2000-01-01', 'R$ 100000.00', '08:00:00', '18:00:00', MD5('senha1')),
(2, 'Instituição B', 'Administrador B', 'admin_b@instituicao.com', '9876-5432', '98765-432', 'Rio de Janeiro', 'Instituição B LTDA', '98.765.432/0001-21', '2005-05-05', 'R$ 200000.00', '09:00:00', '19:00:00', MD5('senha2')),
(3, 'Instituição C', 'Administrador C', 'admin_c@instituicao.com', '1111-2222', '11111-222', 'Belo Horizonte', 'Instituição C LTDA', '11.111.222/0001-33', '2010-10-10', 'R$ 300000.00', '10:00:00', '20:00:00', MD5('senha3')),
(4, 'Instituição D', 'Administrador D', 'admin_d@instituicao.com', '3333-4444', '33333-444', 'Curitiba', 'Instituição D LTDA', '33.333.444/0001-44', '2015-01-15', 'R$ 400000.00', '11:00:00', '21:00:00', MD5('senha4')),
(5, 'Instituição E', 'Administrador E', 'admin_e@instituicao.com', '5555-6666', '55555-666', 'Salvador', 'Instituição E LTDA', '55.555.666/0001-55', '2020-03-20', 'R$ 500000.00', '12:00:00', '22:00:00', MD5('senha5')),
(6, 'Instituição F', 'Administrador F', 'admin_f@instituicao.com', '7777-8888', '77777-888', 'Porto Alegre', 'Instituição F LTDA', '77.777.888/0001-66', '2003-08-30', 'R$ 600000.00', '13:00:00', '23:00:00', MD5('senha6')),
(7, 'Instituição G', 'Administrador G', 'admin_g@instituicao.com', '9999-0000', '99999-000', 'Brasília', 'Instituição G LTDA', '99.999.000/0001-77', '2007-12-25', 'R$ 700000.00', '14:00:00', '00:00:00', MD5('senha7')),
(8, 'Instituição H', 'Administrador H', 'admin_h@instituicao.com', '2222-3333', '22222-333', 'Manaus', 'Instituição H LTDA', '22.222.333/0001-88', '2012-06-15', 'R$ 800000.00', '15:00:00', '01:00:00', MD5('senha8')),
(9, 'Instituição I', 'Administrador I', 'admin_i@instituicao.com', '4444-5555', '44444-555', 'Recife', 'Instituição I LTDA', '44.444.555/0001-99', '2018-09-05', 'R$ 900000.00', '16:00:00', '02:00:00', MD5('senha9')),
(10, 'Instituição J', 'Administrador J', 'admin_j@instituicao.com', '6666-7777', '66666-777', 'Belém', 'Instituição J LTDA', '66.666.777/0001-10', '2000-02-20', 'R$ 1000000.00', '17:00:00', '03:00:00', MD5('senha10')),
(11, 'Instituição K', 'Administrador K', 'admin_k@instituicao.com', '8888-9999', '88888-999', 'Porto Velho', 'Instituição K LTDA', '88.888.999/0001-11', '2005-05-10', 'R$ 1100000.00', '18:00:00', '04:00:00', MD5('senha11')),
(12, 'Instituição L', 'Administrador L', 'admin_l@instituicao.com', '0000-1111', '00000-111', 'Florianópolis', 'Instituição L LTDA', '00.000.111/0001-12', '2010-10-30', 'R$ 1200000.00', '19:00:00', '05:00:00', MD5('senha12')),
(13, 'Instituição M', 'Administrador M', 'admin_m@instituicao.com', '2222-3333', '22222-333', 'São Luís', 'Instituição M LTDA', '22.222.333/0001-13', '2015-03-25', 'R$ 1300000.00', '20:00:00', '06:00:00', MD5('senha13')),
(14, 'Instituição N', 'Administrador N', 'admin_n@instituicao.com', '4444-5555', '44444-555', 'Goiânia', 'Instituição N LTDA', '44.444.555/0001-14', '2020-04-15', 'R$ 1400000.00', '21:00:00', '07:00:00', MD5('senha14')),
(15, 'Instituição O', 'Administrador O', 'admin_o@instituicao.com', '6666-7777', '66666-777', 'João Pessoa', 'Instituição O LTDA', '66.666.777/0001-15', '2003-09-10', 'R$ 1500000.00', '22:00:00', '08:00:00', MD5('senha15')),
(16, 'Instituição P', 'Administrador P', 'admin_p@instituicao.com', '8888-9999', '88888-999', 'Maceió', 'Instituição P LTDA', '88.888.999/0001-16', '2007-11-20', 'R$ 1600000.00', '23:00:00', '09:00:00', MD5('senha16')),
(17, 'Instituição Q', 'Administrador Q', 'admin_q@instituicao.com', '0000-1111', '00000-111', 'Palmas', 'Instituição Q LTDA', '00.000.111/0001-17', '2012-04-05', 'R$ 1700000.00', '00:00:00', '10:00:00', MD5('senha17')),
(18, 'Instituição R', 'Administrador R', 'admin_r@instituicao.com', '2222-3333', '22222-333', 'Teresina', 'Instituição R LTDA', '22.222.333/0001-18', '2018-06-15', 'R$ 1800000.00', '01:00:00', '11:00:00', MD5('senha18')),
(19, 'Instituição S', 'Administrador S', 'admin_s@instituicao.com', '4444-5555', '44444-555', 'Aracaju', 'Instituição S LTDA', '44.444.555/0001-19', '2000-08-20', 'R$ 1900000.00', '02:00:00', '12:00:00', MD5('senha19')),
(20, 'Instituição T', 'Administrador T', 'admin_t@instituicao.com', '6666-7777', '66666-777', 'Natal', 'Instituição T LTDA', '66.666.777/0001-20', '2005-10-10', 'R$ 2000000.00', '03:00:00', '13:00:00', MD5('senha20'));


-- na tabela postagem:
INSERT INTO Postagem (id_post, conteudo, dataPostagem, imagem, fk_Instituicao_id_Inst) VALUES
(1, 'Hoje realizamos uma campanha de arrecadação de alimentos na comunidade local. Agradecemos a todos os voluntários pelo empenho!', '2024-04-01 10:00:00', 'imagem1.jpg', 1),
(2, 'Nosso abrigo de animais está precisando de doações de ração. Contamos com a colaboração de todos!', '2024-03-28 15:30:00', 'imagem2.jpg', 2),
(3, 'Tivemos uma tarde muito especial com as crianças do orfanato. Agradecemos a todos os voluntários que tornaram isso possível!', '2024-03-30 14:00:00', 'imagem3.jpg', 3),
(4, 'Nossa campanha de conscientização sobre a importância da vacinação infantil está sendo um sucesso! Obrigado a todos que participaram!', '2024-04-02 09:45:00', 'imagem4.jpg', 4),
(5, 'Agradecemos aos voluntários que ajudaram na limpeza do parque neste fim de semana. Juntos, podemos manter nossa cidade mais bonita!', '2024-04-03 11:20:00', 'imagem5.jpg', 5),
(6, 'Realizamos uma oficina de artesanato para mulheres da comunidade. Foi um momento de aprendizado e troca de experiências!', '2024-03-28 17:00:00', 'imagem6.jpg', 6),
(7, 'Tivemos uma tarde de muita diversão e alegria com os idosos do lar. Agradecemos aos voluntários pela dedicação!', '2024-04-01 14:30:00', 'imagem7.jpg', 7),
(8, 'Estamos promovendo uma série de palestras sobre saúde mental. Fique ligado em nossa programação!', '2024-03-30 10:45:00', 'imagem8.jpg', 8),
(9, 'Buscamos voluntários para participar de nossa próxima campanha de doação de sangue. Junte-se a nós!', '2024-04-02 08:00:00', 'imagem9.jpg', 9),
(10, 'Realizamos uma aula de informática básica para os moradores do bairro. Foi um momento de inclusão digital para todos!', '2024-04-03 16:00:00', 'imagem10.jpg', 10),
(11, 'Hoje realizamos uma visita aos pacientes do hospital local. Agradecemos aos voluntários pela solidariedade!', '2024-03-28 11:00:00', 'imagem11.jpg', 11),
(12, 'Participe de nossa próxima campanha de arrecadação de agasalhos. Vamos aquecer o inverno de quem mais precisa!', '2024-04-01 09:00:00', 'imagem12.jpg', 12),
(13, 'Estamos buscando voluntários para ministrar aulas de reforço escolar para crianças carentes. Sua ajuda faz a diferença!', '2024-03-30 13:00:00', 'imagem13.jpg', 13),
(14, 'Realizamos uma campanha de arrecadação de brinquedos para o dia das crianças. Obrigado a todos que contribuíram!', '2024-04-02 16:30:00', 'imagem14.jpg', 14),
(15, 'Agradecemos aos voluntários que participaram da limpeza das praias neste domingo. Juntos, podemos preservar nosso meio ambiente!', '2024-04-03 10:30:00', 'imagem15.jpg', 15),
(16, 'Participe de nossa próxima ação de conscientização sobre os direitos das mulheres. Juntos podemos combater a violência de gênero!', '2024-03-28 12:45:00', 'imagem16.jpg', 16),
(17, 'Realizamos uma aula de música para as crianças do abrigo. Foi um momento de muita alegria e aprendizado!', '2024-04-01 11:15:00', 'imagem17.jpg', 17),
(18, 'Estamos buscando voluntários para auxiliar na organização de um evento beneficente. Sua colaboração é fundamental!', '2024-03-30 15:20:00', 'imagem18.jpg', 18),
(19, 'Hoje realizamos uma tarde recreativa para os adolescentes da comunidade. Agradecemos aos voluntários pela disposição!', '2024-04-02 14:00:00', 'imagem19.jpg', 19),
(20, 'Participe de nossa próxima campanha de doação de alimentos não perecíveis. Juntos podemos ajudar quem mais precisa!', '2024-04-03 12:00:00', 'imagem20.jpg', 20);

-- na tabela teminteresse:
INSERT INTO TemInteresse (fk_Usuario_id_user, fk_Area_id_area) VALUES
(1, 1),
(1, 5),
(2, 3),
(3, 6),
(4, 2),
(5, 4),
(6, 8),
(7, 7),
(8, 10),
(9, 9),
(10, 11),
(11, 13),
(12, 15),
(13, 14),
(14, 16),
(15, 17),
(16, 18),
(17, 19),
(18, 20),
(19, 12),
(20, 19);

-- na tabela usuario:
INSERT INTO Usuario (nome, sobrenome, cpf, email, telefone, cep, cidade, dataDeNascimento, genero, estadoCivil, escolaridade, nacionalidade, ocupacao, experienciaPrevia, senha, id_user) VALUES
('João', 'Silva', '123.456.789-10', 'joao.silva@email.com', '1234-5678', '12345-678', 'São Paulo', '1990-01-01', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Programador', 'Experiência em desenvolvimento web', MD5('senha1'), 1),
('Maria', 'Santos', '987.654.321-00', 'maria.santos@email.com', '9876-5432', '98765-432', 'Rio de Janeiro', '1988-05-10', 'Feminino', 'Casada', 'Ensino Superior', 'Brasileira', 'Médica', 'Experiência em cirurgias cardíacas', MD5('senha2'), 2),
('Pedro', 'Oliveira', '456.789.123-20', 'pedro.oliveira@email.com', '4567-8912', '45678-912', 'Belo Horizonte', '1995-07-20', 'Masculino', 'Solteiro', 'Ensino Médio', 'Brasileira', 'Atendente de loja', 'Experiência em vendas', MD5('senha3'), 3),
('Ana', 'Ferreira', '789.123.456-30', 'ana.ferreira@email.com', '7890-1234', '78901-234', 'Porto Alegre', '1986-11-15', 'Feminino', 'Divorciada', 'Ensino Superior', 'Brasileira', 'Advogada', 'Experiência em direito trabalhista', MD5('senha4'), 4),
('Lucas', 'Pereira', '321.654.987-40', 'lucas.pereira@email.com', '3216-5498', '32165-498', 'Curitiba', '1998-03-25', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Engenheiro Civil', 'Experiência em construção civil', MD5('senha5'), 5),
('Juliana', 'Rodrigues', '654.987.321-50', 'juliana.rodrigues@email.com', '6549-8732', '65498-732', 'Salvador', '1992-09-30', 'Feminino', 'Casada', 'Ensino Superior', 'Brasileira', 'Psicóloga', 'Experiência em terapia cognitivo-comportamental', MD5('senha6'), 6),
('Rafael', 'Martins', '987.321.654-60', 'rafael.martins@email.com', '9873-2165', '98732-165', 'Fortaleza', '1980-12-05', 'Masculino', 'Divorciado', 'Ensino Médio', 'Brasileira', 'Motorista', 'Experiência em transporte de carga', MD5('senha7'), 7),
('Carolina', 'Lima', '258.369.147-70', 'carolina.lima@email.com', '2583-6914', '25836-914', 'Recife', '1997-06-18', 'Feminino', 'Solteira', 'Ensino Superior', 'Brasileira', 'Professora', 'Experiência em ensino fundamental', MD5('senha8'), 8),
('Gustavo', 'Gomes', '147.258.369-80', 'gustavo.gomes@email.com', '1472-5836', '14725-836', 'Manaus', '1993-08-07', 'Masculino', 'Casado', 'Ensino Superior', 'Brasileira', 'Contador', 'Experiência em auditoria financeira', MD5('senha9'), 9),
('Aline', 'Araujo', '369.147.258-90', 'aline.araujo@email.com', '3691-4725', '36914-725', 'Brasília', '1985-04-12', 'Feminino', 'Viúva', 'Ensino Médio', 'Brasileira', 'Recepcionista', 'Experiência em atendimento ao cliente', MD5('senha10'), 10),
('Felipe', 'Costa', '147.369.258-01', 'felipe.costa@email.com', '1473-6925', '14736-925', 'Porto Velho', '1991-02-28', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Engenheiro de Software', 'Experiência em desenvolvimento de aplicativos móveis', MD5('senha11'), 11),
('Mariana', 'Nascimento', '369.258.147-02', 'mariana.nascimento@email.com', '3692-5814', '36925-814', 'Florianópolis', '1983-10-22', 'Feminino', 'Casada', 'Ensino Médio', 'Brasileira', 'Dona de casa', 'Experiência em cuidar dos filhos', MD5('senha12'), 12),
('Carlos', 'Rocha', '258.147.369-03', 'carlos.rocha@email.com', '2581-4736', '25814-736', 'Belém', '1994-05-08', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Engenheiro Eletricista', 'Experiência em instalações elétricas', MD5('senha13'), 13),
('Fernanda', 'Melo', '741.852.963-04', 'fernanda.melo@email.com', '7418-5296', '74185-296', 'Vitória', '1987-07-17', 'Feminino', 'Divorciada', 'Ensino Superior', 'Brasileira', 'Jornalista', 'Experiência em redação e edição de textos', MD5('senha14'), 14),
('Rodrigo', 'Lopes', '963.852.741-05', 'rodrigo.lopes@email.com', '9638-5274', '96385-274', 'Natal', '1989-11-29', 'Masculino', 'Casado', 'Ensino Médio', 'Brasileira', 'Vendedor', 'Experiência em vendas de automóveis', MD5('senha15'), 15),
('Patricia', 'Almeida', '159.357.852-06', 'patricia.almeida@email.com', '1593-5785', '15935-785', 'João Pessoa', '1996-09-03', 'Feminino', 'Solteira', 'Ensino Superior', 'Brasileira', 'Advogada', 'Experiência em direito civil', MD5('senha16'), 16),
('Ricardo', 'Cardoso', '357.852.159-07', 'ricardo.cardoso@email.com', '3578-5219', '35785-219', 'Campinas', '1982-02-14', 'Masculino', 'Viúvo', 'Ensino Superior', 'Brasileira', 'Analista de Sistemas', 'Experiência em desenvolvimento de software', MD5('senha17'), 17),
('Camila', 'Pinto', '852.159.357-08', 'camila.pinto@email.com', '8521-5937', '85215-937', 'Campo Grande', '1990-06-25', 'Feminino', 'Solteira', 'Ensino Superior', 'Brasileira', 'Farmacêutica', 'Experiência em controle de qualidade de medicamentos', MD5('senha18'), 18),
('Marcelo', 'Ferreira', '951.753.852-09', 'marcelo.ferreira@email.com', '9517-5382', '95175-382', 'Cuiabá', '1984-08-11', 'Masculino', 'Divorciado', 'Ensino Superior', 'Brasileira', 'Professor Universitário', 'Experiência em ensino de matemática', MD5('senha19'), 19),
('Vanessa', 'Cruz', '753.951.852-10', 'vanessa.cruz@email.com', '7539-5182', '75395-182', 'Teresina', '1993-12-27', 'Feminino', 'Casada', 'Ensino Superior', 'Brasileira', 'Psicóloga', 'Experiência em terapia familiar', MD5('senha20'), 20);



-- na tabela vaga:
INSERT INTO Vaga (id_vaga, titulo, descricao, dataPostado, dataLimite, status, anexo, fk_Instituicao_id_Inst) VALUES
(1, 'Voluntário para Atividades Recreativas', 'Procuramos voluntários para auxiliar em atividades recreativas para crianças carentes. Experiência prévia não é necessária, apenas disposição e amor pelas crianças.', '2024-04-01', '2024-05-01', 'Aberta', 'Nenhum', 1),
(2, 'Assistente de Alimentação', 'Precisamos de voluntários para auxiliar na preparação e distribuição de alimentos para moradores de rua. As atividades ocorrem todas as quintas-feiras à noite.', '2024-03-28', '2024-04-28', 'Aberta', 'Nenhum', 2),
(3, 'Instrutor de Informática', 'Estamos em busca de voluntários para ministrar aulas de informática básica para idosos. As aulas acontecem duas vezes por semana, no período da tarde.', '2024-03-30', '2024-04-30', 'Aberta', 'Nenhum', 3),
(4, 'Apoio em Atividades Ambientais', 'Procuramos voluntários para auxiliar em atividades de preservação ambiental em parques da cidade. As atividades incluem limpeza de áreas verdes e sensibilização da comunidade.', '2024-04-02', '2024-05-02', 'Aberta', 'Nenhum', 4),
(5, 'Tutor para Reforço Escolar', 'Buscamos voluntários para oferecer reforço escolar em português e matemática para crianças em situação de vulnerabilidade. As aulas serão realizadas duas vezes por semana.', '2024-04-03', '2024-05-03', 'Aberta', 'Nenhum', 5),
(6, 'Cuidador de Animais', 'Precisamos de voluntários para auxiliar nos cuidados diários de cães e gatos em nosso abrigo. As atividades incluem alimentação, limpeza dos espaços e interação com os animais.', '2024-03-29', '2024-04-29', 'Aberta', 'Nenhum', 6),
(7, 'Monitor de Atividades Recreativas', 'Estamos em busca de voluntários para monitorar atividades recreativas para idosos em nosso centro de convivência. As atividades incluem jogos, danças e exercícios físicos.', '2024-04-01', '2024-05-01', 'Aberta', 'Nenhum', 7),
(8, 'Apoio em Campanha de Vacinação', 'Procuramos voluntários para auxiliar em uma campanha de vacinação contra a gripe. As atividades incluem organização da fila, triagem e encaminhamento das pessoas.', '2024-03-30', '2024-04-30', 'Aberta', 'Nenhum', 8),
(9, 'Auxiliar de Cuidados em Asilo', 'Precisamos de voluntários para auxiliar nos cuidados diários de idosos em nosso asilo. As atividades incluem auxílio na alimentação, higiene pessoal e interação com os residentes.', '2024-04-02', '2024-05-02', 'Aberta', 'Nenhum', 9),
(10, 'Professor de Artesanato', 'Buscamos voluntários para ministrar oficinas de artesanato para mulheres em situação de risco. As atividades visam proporcionar uma fonte de renda alternativa e empoderamento feminino.', '2024-04-03', '2024-05-03', 'Aberta', 'Nenhum', 10),
(11, 'Voluntário para Visitas Hospitalares', 'Procuramos voluntários para realizar visitas a pacientes hospitalizados, oferecendo apoio emocional e auxílio em pequenas tarefas. É necessário disponibilidade semanal.', '2024-03-28', '2024-04-28', 'Aberta', 'Nenhum', 11),
(12, 'Apoio em Campanha de Doação de Sangue', 'Estamos em busca de voluntários para auxiliar em uma campanha de doação de sangue. As atividades incluem recepção dos doadores, acompanhamento pós-doação e organização do espaço.', '2024-04-01', '2024-05-01', 'Aberta', 'Nenhum', 12),
(13, 'Instrutor de Capacitação Profissional', 'Precisamos de voluntários para ministrar cursos de capacitação profissional para jovens em situação de vulnerabilidade. As aulas serão realizadas à noite.', '2024-03-30', '2024-04-30', 'Aberta', 'Nenhum', 13),
(14, 'Voluntário para Acompanhamento Escolar', 'Buscamos voluntários para acompanhar crianças em situação de risco em suas atividades escolares. É necessário disponibilidade durante a semana.', '2024-04-02', '2024-05-02', 'Aberta', 'Nenhum', 14),
(15, 'Apoio em Eventos Sociais', 'Procuramos voluntários para auxiliar na organização e execução de eventos sociais em nossa comunidade. As atividades incluem montagem de estrutura, recepção de convidados e apoio logístico.', '2024-04-03', '2024-05-03', 'Aberta', 'Nenhum', 15),
(16, 'Instrutor de Atividades Físicas', 'Estamos em busca de voluntários para ministrar atividades físicas para idosos em nosso centro de convivência. As atividades incluem alongamento, caminhada e exercícios leves.', '2024-03-28', '2024-04-28', 'Aberta', 'Nenhum', 16),
(17, 'Cuidador de Plantas', 'Precisamos de voluntários para cuidar de plantas em espaços públicos da cidade. As atividades incluem rega, poda e adubação das plantas.', '2024-04-01', '2024-05-01', 'Aberta', 'Nenhum', 17),
(18, 'Apoio em Campanha de Conscientização', 'Buscamos voluntários para auxiliar em uma campanha de conscientização sobre doenças crônicas. As atividades incluem distribuição de materiais informativos e orientação ao público.', '2024-03-30', '2024-04-30', 'Aberta', 'Nenhum', 18),
(19, 'Auxiliar em Atividades Recreativas para Crianças', 'Procuramos voluntários para auxiliar em atividades recreativas para crianças em abrigos. As atividades incluem jogos, brincadeiras e contação de histórias.', '2024-04-02', '2024-05-02', 'Aberta', 'Nenhum', 19),
(20, 'Apoio em Campanha de Doação de Alimentos', 'Estamos em busca de voluntários para auxiliar em uma campanha de arrecadação e distribuição de alimentos para famílias carentes. As atividades incluem coleta, triagem e entrega dos alimentos.', '2024-04-03', '2024-05-03', 'Aberta', 'Nenhum', 20),
(21, 'Instrutor de Dança para Idosos', 'Precisamos de voluntários para ministrar aulas de dança para idosos em nosso centro de convivência. As atividades visam promover a socialização e o bem-estar dos participantes.', '2024-03-28', '2024-04-28', 'Aberta', 'Nenhum', 7),
(22, 'Apoio em Atividades Culturais', 'Procuramos voluntários para auxiliar na organização e execução de atividades culturais em nossa comunidade. As atividades incluem exposições, shows e apresentações artísticas.', '2024-04-01', '2024-05-01', 'Aberta', 'Nenhum', 6),
(23, 'Instrutor de Música', 'Estamos em busca de voluntários para ministrar aulas de música para crianças em comunidades carentes. As aulas podem incluir violão, teclado, canto, entre outros instrumentos.', '2024-03-30', '2024-04-30', 'Aberta', 'Nenhum', 1),
(24, 'Voluntário para Atividades de Lazer', 'Buscamos voluntários para auxiliar em atividades de lazer para idosos em asilos. As atividades incluem jogos, passeios e eventos temáticos.', '2024-04-02', '2024-05-02', 'Aberta', 'Nenhum', 5),
(25, 'Apoio em Eventos Esportivos', 'Procuramos voluntários para auxiliar na organização e execução de eventos esportivos em nossa comunidade. As atividades incluem preparação do local, apoio aos participantes e controle de cronograma.', '2024-04-03', '2024-05-03', 'Aberta', 'Nenhum', 5),
(26, 'Apoio em Campanha de Vacinação Animal', 'Buscamos voluntários para auxiliar em campanha de vacinação e conscientização sobre cuidados com animais de estimação. As atividades incluem organização do evento e orientação aos interessados.', '2024-03-28', '2024-04-28', 'Aberta', 'Nenhum', 4),
(27, 'Voluntário para Apoio a Refugiados', 'Precisamos de voluntários para auxiliar na integração de refugiados em nossa comunidade. As atividades incluem apoio jurídico, orientação cultural e busca por moradia.', '2024-04-01', '2024-05-01', 'Aberta', 'Nenhum', 3),
(28, 'Apoio em Campanha de Doação de Brinquedos', 'Buscamos voluntários para auxiliar em uma campanha de arrecadação e distribuição de brinquedos para crianças carentes. As atividades incluem divulgação, coleta e organização dos brinquedos.', '2024-03-30', '2024-04-30', 'Aberta', 'Nenhum', 3),
(29, 'Instrutor de Atividades Culturais', 'Estamos em busca de voluntários para ministrar oficinas de atividades culturais para adolescentes em situação de risco. As atividades incluem dança, teatro, pintura, entre outras.', '2024-04-02', '2024-05-02', 'Aberta', 'Nenhum', 2),
(30, 'Apoio em Campanha de Doação de Agasalhos', 'Procuramos voluntários para auxiliar em uma campanha de arrecadação e distribuição de agasalhos para pessoas de rua. As atividades incluem triagem, organização e entrega dos agasalhos.', '2024-04-03', '2024-05-03', 'Aberta', 'Nenhum', 1);









