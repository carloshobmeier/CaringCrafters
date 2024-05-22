create database caringcrafters;
use caringcrafters;


CREATE TABLE Usuario (
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    cpf VARCHAR(15) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(50) NOT NULL,
    cep VARCHAR(20) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    dataDeNascimento DATE NOT NULL,
    genero VARCHAR(50),
    estadoCivil VARCHAR(50),
    escolaridade VARCHAR(50),
    nacionalidade VARCHAR(50) NOT NULL,
    ocupacao VARCHAR(100) NOT NULL,
    experienciaPrevia TEXT,
    foto MEDIUMBLOB NULL,
    senha VARCHAR(32) NOT NULL,
    id_user INTEGER PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE Participa_evento (
    fk_Usuario_id_user INTEGER,
    fk_Evento_id_evento INTEGER,
    PRIMARY KEY (fk_Usuario_id_user, fk_Evento_id_evento)
);

CREATE TABLE Instituicao (
    id_Inst INTEGER PRIMARY KEY AUTO_INCREMENT,
    nomeFantasia VARCHAR(100) NOT NULL,
    nomeAdministrador VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(50) NOT NULL,
    cep VARCHAR(20) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    razaoSocial VARCHAR(100) NOT NULL,
    cnpj VARCHAR(20) NOT NULL,
    dataFundacao DATE NOT NULL,
    capitalSocial VARCHAR(100) NOT NULL,
    horaInicial TIME,
    horaFinal TIME,
    sobre TEXT,
    foto MEDIUMBLOB NULL,
    senha VARCHAR(32) NOT NULL
);

CREATE TABLE Administrador (
    id_admin INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    senha VARCHAR(32) NOT NULL,
    email VARCHAR(100) NOT NULL,
    foto MEDIUMBLOB NULL
);

CREATE TABLE Postagem (
    id_post INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    conteudo TEXT NOT NULL,
    dataPostagem DATETIME,
    imagem VARCHAR(100) ,
    fk_Instituicao_id_Inst INTEGER
);

CREATE TABLE Evento (
    id_evento INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    cep VARCHAR(20),
    dataPostagem DATE,
    dataEvento DATE NOT NULL,
    conteudo TEXT NOT NULL,
    numeroVagas INTEGER,
    horaInicial TIME,
    horaFinal TIME,
    imagem LONGBLOB,
    titulo VARCHAR(100),
    fk_Instituicao_id_Inst INTEGER
);

CREATE TABLE Area (
    id_area INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    tituloCompleto TEXT
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
 
ALTER TABLE Conectou_com ADD CONSTRAINT FK_Conectou_com_1
    FOREIGN KEY (fk_Usuario_id_user)
    REFERENCES Usuario (id_user)
    ON DELETE CASCADE;
 
ALTER TABLE Conectou_com ADD CONSTRAINT FK_Conectou_com_2
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst)
    ON DELETE CASCADE;

ALTER TABLE TemInteresse ADD CONSTRAINT FK_TemInteresse_1
    FOREIGN KEY (fk_Usuario_id_user)
    REFERENCES Usuario (id_user)
    ON DELETE CASCADE;
 
ALTER TABLE TemInteresse ADD CONSTRAINT FK_TemInteresse_2
    FOREIGN KEY (fk_Area_id_area)
    REFERENCES Area (id_area)
    ON DELETE CASCADE;
    
ALTER TABLE Participa_evento ADD CONSTRAINT FK_PaticipaEvento_1
	FOREIGN KEY (fk_Usuario_id_user)
	REFERENCES Usuario (id_user)
	ON DELETE CASCADE;
 
ALTER TABLE Participa_evento ADD CONSTRAINT FK_PaticipaEvento_2
    FOREIGN KEY (fk_Evento_id_evento)
    REFERENCES Evento (id_evento)
    ON DELETE CASCADE;
  
ALTER TABLE Atua ADD CONSTRAINT FK_Atua_1
    FOREIGN KEY (fk_Area_id_area)
    REFERENCES Area (id_area)
    ON DELETE CASCADE;
  
ALTER TABLE Atua ADD CONSTRAINT FK_Atua_2
    FOREIGN KEY (fk_Instituicao_id_Inst)
    REFERENCES Instituicao (id_Inst)
    ON DELETE CASCADE;
    
    
-- INSERTS

-- na tabela instituicao:
INSERT INTO Instituicao (id_Inst, nomeFantasia, nomeAdministrador, email, telefone, cep, cidade, razaoSocial, cnpj, dataFundacao, capitalSocial, horaInicial, horaFinal, senha) VALUES
(1, 'Instituição A', 'Administrador A', 'admin_a@instituicao.com', '1234-5678', '12345-678', 'São Paulo', 'Instituição A LTDA', '12.345.678/0001-90', '2000-01-01', 'R$ 100000.00', '08:00:00', '18:00:00', MD5('Senha123')),
(2, 'Instituição B', 'Administrador B', 'admin_b@instituicao.com', '9876-5432', '98765-432', 'Rio de Janeiro', 'Instituição B LTDA', '98.765.432/0001-21', '2005-05-05', 'R$ 200000.00', '09:00:00', '19:00:00', MD5('Senha123')),
(3, 'Instituição C', 'Administrador C', 'admin_c@instituicao.com', '1111-2222', '11111-222', 'Belo Horizonte', 'Instituição C LTDA', '11.111.222/0001-33', '2010-10-10', 'R$ 300000.00', '10:00:00', '20:00:00', MD5('Senha123')),
(4, 'Instituição D', 'Administrador D', 'admin_d@instituicao.com', '3333-4444', '33333-444', 'Curitiba', 'Instituição D LTDA', '33.333.444/0001-44', '2015-01-15', 'R$ 400000.00', '11:00:00', '21:00:00', MD5('Senha123')),
(5, 'Instituição E', 'Administrador E', 'admin_e@instituicao.com', '5555-6666', '55555-666', 'Salvador', 'Instituição E LTDA', '55.555.666/0001-55', '2020-03-20', 'R$ 500000.00', '12:00:00', '22:00:00', MD5('Senha123')),
(6, 'Instituição F', 'Administrador F', 'admin_f@instituicao.com', '7777-8888', '77777-888', 'Porto Alegre', 'Instituição F LTDA', '77.777.888/0001-66', '2003-08-30', 'R$ 600000.00', '13:00:00', '23:00:00', MD5('Senha123')),
(7, 'Instituição G', 'Administrador G', 'admin_g@instituicao.com', '9999-0000', '99999-000', 'Brasília', 'Instituição G LTDA', '99.999.000/0001-77', '2007-12-25', 'R$ 700000.00', '14:00:00', '00:00:00', MD5('Senha123')),
(8, 'Instituição H', 'Administrador H', 'admin_h@instituicao.com', '2222-3333', '22222-333', 'Manaus', 'Instituição H LTDA', '22.222.333/0001-88', '2012-06-15', 'R$ 800000.00', '15:00:00', '01:00:00', MD5('Senha123')),
(9, 'Instituição I', 'Administrador I', 'admin_i@instituicao.com', '4444-5555', '44444-555', 'Recife', 'Instituição I LTDA', '44.444.555/0001-99', '2018-09-05', 'R$ 900000.00', '16:00:00', '02:00:00', MD5('Senha123')),
(10, 'Instituição J', 'Administrador J', 'admin_j@instituicao.com', '6666-7777', '66666-777', 'Belém', 'Instituição J LTDA', '66.666.777/0001-10', '2000-02-20', 'R$ 1000000.00', '17:00:00', '03:00:00', MD5('Senha123')),
(11, 'Instituição K', 'Administrador K', 'admin_k@instituicao.com', '8888-9999', '88888-999', 'Porto Velho', 'Instituição K LTDA', '88.888.999/0001-11', '2005-05-10', 'R$ 1100000.00', '18:00:00', '04:00:00', MD5('Senha123')),
(12, 'Instituição L', 'Administrador L', 'admin_l@instituicao.com', '0000-1111', '00000-111', 'Florianópolis', 'Instituição L LTDA', '00.000.111/0001-12', '2010-10-30', 'R$ 1200000.00', '19:00:00', '05:00:00', MD5('Senha123')),
(13, 'Instituição M', 'Administrador M', 'admin_m@instituicao.com', '2222-3333', '22222-333', 'São Luís', 'Instituição M LTDA', '22.222.333/0001-13', '2015-03-25', 'R$ 1300000.00', '20:00:00', '06:00:00', MD5('Senha123')),
(14, 'Instituição N', 'Administrador N', 'admin_n@instituicao.com', '4444-5555', '44444-555', 'Goiânia', 'Instituição N LTDA', '44.444.555/0001-14', '2020-04-15', 'R$ 1400000.00', '21:00:00', '07:00:00', MD5('Senha123')),
(15, 'Instituição O', 'Administrador O', 'admin_o@instituicao.com', '6666-7777', '66666-777', 'João Pessoa', 'Instituição O LTDA', '66.666.777/0001-15', '2003-09-10', 'R$ 1500000.00', '22:00:00', '08:00:00', MD5('Senha123')),
(16, 'Instituição P', 'Administrador P', 'admin_p@instituicao.com', '8888-9999', '88888-999', 'Maceió', 'Instituição P LTDA', '88.888.999/0001-16', '2007-11-20', 'R$ 1600000.00', '23:00:00', '09:00:00', MD5('Senha123')),
(17, 'Instituição Q', 'Administrador Q', 'admin_q@instituicao.com', '0000-1111', '00000-111', 'Palmas', 'Instituição Q LTDA', '00.000.111/0001-17', '2012-04-05', 'R$ 1700000.00', '00:00:00', '10:00:00', MD5('Senha123')),
(18, 'Instituição R', 'Administrador R', 'admin_r@instituicao.com', '2222-3333', '22222-333', 'Teresina', 'Instituição R LTDA', '22.222.333/0001-18', '2018-06-15', 'R$ 1800000.00', '01:00:00', '11:00:00', MD5('Senha123')),
(19, 'Instituição S', 'Administrador S', 'admin_s@instituicao.com', '4444-5555', '44444-555', 'Aracaju', 'Instituição S LTDA', '44.444.555/0001-19', '2000-08-20', 'R$ 1900000.00', '02:00:00', '12:00:00', MD5('Senha123')),
(20, 'Instituição T', 'Administrador T', 'admin_t@instituicao.com', '6666-7777', '66666-777', 'Natal', 'Instituição T LTDA', '66.666.777/0001-20', '2005-10-10', 'R$ 2000000.00', '03:00:00', '13:00:00', MD5('Senha1234'));

-- na tabela usuario:
INSERT INTO Usuario (nome, sobrenome, cpf, email, telefone, cep, cidade, dataDeNascimento, genero, estadoCivil, escolaridade, nacionalidade, ocupacao, experienciaPrevia, senha, id_user) VALUES
('João', 'Silva', '123.456.789-10', 'joao.silva@email.com', '1234-5678', '12345-678', 'São Paulo', '1990-01-01', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Programador', 'Experiência em desenvolvimento web', MD5('Senha123'), 1),
('Maria', 'Santos', '987.654.321-00', 'maria.santos@email.com', '9876-5432', '98765-432', 'Rio de Janeiro', '1988-05-10', 'Feminino', 'Casada', 'Ensino Superior', 'Brasileira', 'Médica', 'Experiência em cirurgias cardíacas', MD5('Senha123'), 2),
('Pedro', 'Oliveira', '456.789.123-20', 'pedro.oliveira@email.com', '4567-8912', '45678-912', 'Belo Horizonte', '1995-07-20', 'Masculino', 'Solteiro', 'Ensino Médio', 'Brasileira', 'Atendente de loja', 'Experiência em vendas', MD5('Senha123'), 3),
('Ana', 'Ferreira', '789.123.456-30', 'ana.ferreira@email.com', '7890-1234', '78901-234', 'Porto Alegre', '1986-11-15', 'Feminino', 'Divorciada', 'Ensino Superior', 'Brasileira', 'Advogada', 'Experiência em direito trabalhista', MD5('Senha123'), 4),
('Lucas', 'Pereira', '321.654.987-40', 'lucas.pereira@email.com', '3216-5498', '32165-498', 'Curitiba', '1998-03-25', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Engenheiro Civil', 'Experiência em construção civil', MD5('Senha123'), 5),
('Juliana', 'Rodrigues', '654.987.321-50', 'juliana.rodrigues@email.com', '6549-8732', '65498-732', 'Salvador', '1992-09-30', 'Feminino', 'Casada', 'Ensino Superior', 'Brasileira', 'Psicóloga', 'Experiência em terapia cognitivo-comportamental', MD5('Senha123'), 6),
('Rafael', 'Martins', '987.321.654-60', 'rafael.martins@email.com', '9873-2165', '98732-165', 'Fortaleza', '1980-12-05', 'Masculino', 'Divorciado', 'Ensino Médio', 'Brasileira', 'Motorista', 'Experiência em transporte de carga', MD5('Senha123'), 7),
('Carolina', 'Lima', '258.369.147-70', 'carolina.lima@email.com', '2583-6914', '25836-914', 'Recife', '1997-06-18', 'Feminino', 'Solteira', 'Ensino Superior', 'Brasileira', 'Professora', 'Experiência em ensino fundamental', MD5('Senha123'), 8),
('Gustavo', 'Gomes', '147.258.369-80', 'gustavo.gomes@email.com', '1472-5836', '14725-836', 'Manaus', '1993-08-07', 'Masculino', 'Casado', 'Ensino Superior', 'Brasileira', 'Contador', 'Experiência em auditoria financeira', MD5('Senha123'), 9),
('Aline', 'Araujo', '369.147.258-90', 'aline.araujo@email.com', '3691-4725', '36914-725', 'Brasília', '1985-04-12', 'Feminino', 'Viúva', 'Ensino Médio', 'Brasileira', 'Recepcionista', 'Experiência em atendimento ao cliente', MD5('Senha123'), 10),
('Felipe', 'Costa', '147.369.258-01', 'felipe.costa@email.com', '1473-6925', '14736-925', 'Porto Velho', '1991-02-28', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Engenheiro de Software', 'Experiência em desenvolvimento de aplicativos móveis', MD5('Senha123'), 11),
('Mariana', 'Nascimento', '369.258.147-02', 'mariana.nascimento@email.com', '3692-5814', '36925-814', 'Florianópolis', '1983-10-22', 'Feminino', 'Casada', 'Ensino Médio', 'Brasileira', 'Dona de casa', 'Experiência em cuidar dos filhos', MD5('Senha123'), 12),
('Carlos', 'Rocha', '258.147.369-03', 'carlos.rocha@email.com', '2581-4736', '25814-736', 'Belém', '1994-05-08', 'Masculino', 'Solteiro', 'Ensino Superior', 'Brasileira', 'Engenheiro Eletricista', 'Experiência em instalações elétricas', MD5('Senha123'), 13),
('Fernanda', 'Melo', '741.852.963-04', 'fernanda.melo@email.com', '7418-5296', '74185-296', 'Vitória', '1987-07-17', 'Feminino', 'Divorciada', 'Ensino Superior', 'Brasileira', 'Jornalista', 'Experiência em redação e edição de textos', MD5('Senha123'), 14),
('Rodrigo', 'Lopes', '963.852.741-05', 'rodrigo.lopes@email.com', '9638-5274', '96385-274', 'Natal', '1989-11-29', 'Masculino', 'Casado', 'Ensino Médio', 'Brasileira', 'Vendedor', 'Experiência em vendas de automóveis', MD5('Senha123'), 15),
('Patricia', 'Almeida', '159.357.852-06', 'patricia.almeida@email.com', '1593-5785', '15935-785', 'João Pessoa', '1996-09-03', 'Feminino', 'Solteira', 'Ensino Superior', 'Brasileira', 'Advogada', 'Experiência em direito civil', MD5('Senha123'), 16),
('Ricardo', 'Cardoso', '357.852.159-07', 'ricardo.cardoso@email.com', '3578-5219', '35785-219', 'Campinas', '1982-02-14', 'Masculino', 'Viúvo', 'Ensino Superior', 'Brasileira', 'Analista de Sistemas', 'Experiência em desenvolvimento de software', MD5('Senha123'), 17),
('Camila', 'Pinto', '852.159.357-08', 'camila.pinto@email.com', '8521-5937', '85215-937', 'Campo Grande', '1990-06-25', 'Feminino', 'Solteira', 'Ensino Superior', 'Brasileira', 'Farmacêutica', 'Experiência em controle de qualidade de medicamentos', MD5('Senha123'), 18),
('Marcelo', 'Ferreira', '951.753.852-09', 'marcelo.ferreira@email.com', '9517-5382', '95175-382', 'Cuiabá', '1984-08-11', 'Masculino', 'Divorciado', 'Ensino Superior', 'Brasileira', 'Professor Universitário', 'Experiência em ensino de matemática', MD5('Senha123'), 19),
('Vanessa', 'Cruz', '753.951.852-10', 'vanessa.cruz@email.com', '7539-5182', '75395-182', 'Teresina', '1993-12-27', 'Feminino', 'Casada', 'Ensino Superior', 'Brasileira', 'Psicóloga', 'Experiência em terapia familiar', MD5('Senha1234'), 20);

-- na tabela administrador:
INSERT INTO Administrador VALUES (1, '10a9c136d796bab18d3e144092a4f20a', 'admin1@email.com', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b7900010004000000580000ffee000e41646f62650064c000000001ffdb008400010101010101010101010201010102020201010202030202020202030403030303030304040404050404040606060606060808080808090909090909090909090102020203030305040405080605060809090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909090909ffc000110800a000a003011100021101031101ffc400b4000001030501010100000000000000000000020309010607080a04050b0100010403010000000000000000000000000102050603040708100001030302040206050b02050500000001020304001105060721311208411351b122721409617181323491a1425262d223335494158224435316170af0f1a2631811000201030204020804030803000000000001021103042105314112065113617181223223140791a15233b1d162f0c1e1f142722415925335ffda000c03010002110311003f00ded8ff00c867dc4faabc957ff719c6eebab1e358864522973e9a51d40b9f4d150a00a54141429d41b248ad03688a1a04717a354d0f9793cd62308c9919aca46c3c602e244a90db083e3c0ad401fb3953a10949e8892c7db72f25d6d5994bd48b0d5bd9b4285290bdccc285a090a489ed1b11c398241a7f9377f493b0ecedd5c3abe9a7ff008b2e5c36bad15a8521583d5f8cca95714a199ec2d641f1080beafcd4d9db9c56aa8466476cee569d658f34bd45d4920f10abd308abf094174ca3d2c55250c096826974322406918b42809f4d220a15a750281451050280a0dbdc63c9bf1f60fe7e1474a7c4741d1898ff00c863dc4faa9975fcc12e7163f4e82d462034f92438a0a48a402a964232869a223c73e7c2c5c29792c9cb6f1f8d80dade9f907961b65869b1d4a5ad4a22c00a470727a1b98783772ae2b769564f811f7bb3ddecb9ab9b82daa51c7440a2891ab9d642df793637f856dcba5b07810a524abe8152f898b4d64aa77becefb4d6eca8deceac9bd7a797a9a34a33399cd6a295f1d9fcb49cd4d26eb952df5c870ffa9649a908db845d52a1d9aced5838e946c598c28b92a1e6415048ba8fd1c69e4828ca94e436a681505585c1ba4f883e9a6ca0a4b55530ddc684d52714d7a4c97a4b78773345bb1d381d5f35a890c82d62a43a65c4b245ba7ca77a9207d02b56fe345c74457770ecddab3a2e33b314fc52d4dcfdb8ef030b957d8c6ee24018096efb2ad471bacc15a89162e304ad4c0e6490a23ea151f73064d68713ee9fb51771baaf613ea4b93e3ec374634b8b3196a44492890c48421d8cf21414975a705d2b411cc11e351f471974b38fe4e3ddb171c2e45c65e07a29e600a0029402800a006defc3c9f70fac52a11ba148fc5863dc4faab1dc5f33d82dc7a8f1a721a8a528e2a296200695882494252a5b8e25a6d00a96e2d41294a522e492780b0ac6e2e4f433e3da9dc9ab705594b444587707be93371b2cf69dd3b24c7d018c5a837d2a3d594790ae121cff00ebff00968f47b478f04cbe1e353567a83edef61436db51c8be93bb255a3e46b01092aeab7d03eaa924a875aad00253702dcfe8bfaa952a88d26ebccbab15a3b379768c861811a2000896f75368209b70e04f8fa2b2a8192dd6b454f697049da9d450d45b7a53489212973e11c6de655e5ac5d2b1d69bf4a871492002388a1c2a3ee5a6f44d3459f94d3b99c3acfc763d6da3c2426cb6d43d21492785637031f92e27c422e52470524dd2af107d3494f0315eb69a46ccec37703376c6644d3fa8e53d2f414a584be8512e8c4ad6a1d525949fd03ff111cbc40bdefa19387d6b45a9cbbbdfb16c6e36677acc546ec53e1cc9566e4b1363b33233a87e3ca4a5c61f6c8285a163a92a491cc106e2a11c5c65d2796f230e78f39425c53a34cad38d70a002800a006defc3c9f70fac52a1b2131f84767dc47aa9b7d3f3013ab63c2880e2a69ec0a53402f4aa697115334d7bb8dd8774de0206dd616479397d4e953d9f7926ce318d4aba422fcc79fc79734820f035b9836ab71b7c0ecdf6afb5219b7de64fe0870afea446c05ad64f51e7c7a7d06a692491e98b714e35f0d0f64388fce90dc58ad97643c6cd3439a8fd14e4aa2cadb7c0cf1a1b6f5c44cc7c16716e6a5d4f9b7db63158d61854a7d725d366998ed25254a5a8f01617ad88db37a161421d52e07403da2fcb92369738adc9ee0a0b59dd4bd687f07b66b21ec7e3949f692b9ca412890e8e166c12da4f3ea50e1b2ad7894fdd778f324e16748ae7e3eaf41217bc1dbaed06f861dac46e3e8d8d9bf8747463b329063e4a08b5af1e535d2e376f45fa7e8a576ea44d8cebd69d63264187755f2f4d71b2cde5358e825bbba1b5d1479b9592638398c2b405faa634da425e6c0b953ad8e038a92071ac53b25b76cdf6dde6a17574cbf2644b6b4d20186a4e6716c7436dfb5371e94dc8b9b15a7d1c79a790ac2edd096c9b7094d38b3155eff47a478d3781a172292745ab24a3b41dc77750e999fa173136f3f47a03986716a27ccc7bae04f47893e428803d09361c0541e7c12d69a9e64fbabdb2f0f2165417b93e3eb66e39047022c473151a71e294005001400dbdf8793ee1f58a54364258fc3b1ee27d54643f7c12a363c9a6c0732a69f20294d03cb3a6c6c6419b929b2045858d65c9135f500ab32c24adcb5f85fa41b52c629b3670b15e4df85a5c64d24425ee26af93aff5a67f5748241cd3e571da512af2a335fc361b04926c96c0fb6f53d8f14a27b53b6f6ab781b7dab518a4fa57553c4b3129e9ba89e15b24f26eb436a362367b576b9ce60f4d695d3eacfeb2d5ee253071c8012b618427ccea754b4ff0d1d16538ae413c6f7b03b16e0cdf77216adf5cdd123a76ed2bb27d17db862e3e7b2459d5bbab92612333ab17d4b66115247547c7257c5b6f9f538af6d7e361ecd6ec22970291b96f373266e316d5bf0fe7fdbfc37892920dc9bf3fcfc6b2a4440a2291a02aea029b2829050ea7a5d41174a92471047220d234c4afe473a1f317ed9b15b2daf20ebbd118d440d01b9aa7bcec5329e88d8dcb363adf8eda00094b4fa4f5a103ee90a02c90056a5c45e362cc57ed38cbe38fe6bc4844d4f0518ccfe4a23092dc64ac2a3a79592e0eae91f427956a499bf7151b322ec4eb23a1f74747659d92a8f8e952930b2f655818d3acd2efe160483f656ade827175f0295df7b4acfd96f2a55c1392f5a44c8a52a40e85a7a56d9295a7d0526c45405343c5f184a0fa65f10aa41e140050036f7e1e4fb87d62950d9098ff0087607ec26ff929971d6efb0735ab1ea500a500a41524f99adddd66a74e0767f3105b792dc9d56fb38d6c5aebf29443b20a7c47f0d245c7a6dcab77022a53755c8e8df6bf679656f09c95541757e0c89c6c957dee06dc454da543d611746d176e8ec22f50ea1c7e352d79e9715775b1fa413fa3e92546c91604dcf017a7c7899e348fbcf81d06f6afdb6f7f9b61a6f3199db1db9db9daccdea1b7c56a3d7ce4ecae7e74547b4cc66e3e2c16b1cc8e0b295a94b52ac56059204fe35a8f4ea8a76ebb879f3a2968b82afe666893baff00374db99cc1d51db36ddef86152a099034ae71dc4cc3d47925131f4293c2e6e5a3592e4614f753a9111a53474256a0ae5b90a1b9908c214e71a6d53618703c1a78a415a0389002ba4dc5c000d6b50ca5b9af729a9b07a2b5666b466963ae7566231f2a4e9cd1826378e39598d20a9a8a253bec345d558051e00d648422f8b18d91a587d7ff385dc492dc8c3ec2ed8ec760e513e47fd4b93999796d7571487110df7544807f513cab6236edfacc2e5caa606ef6fff00db70f6599c27729a576f353e978597c54c8fb97a424cec74dc6e4acb692c3d88c9a7f8a8782d68f31a5f0b8b8f46b66c23d1a45a7e92c1db736f2747a5080adcc6c9d431dd49f65c88d1253c89ea50bf8f80f4d425c2ed7e3ef18fca9d654cba85105b5052540d8a549e293f96d582e2ac591f936fccc7943f52689d5d2395ff003ba534ce72fd5fe6b1f0e595789f89692e5fff009557ef2a4a878737ec6f2773c88f84da2e1ac44505001400dbdf8793ee1f58a54364263ff2183fb09f55326a977d86493d58f53868500147211ba6a477f7b19cf3b37a234c34e1e987164ce98cdfd90e4977ca6c917e7d2d1fb2a5b6f4ba2a7a2becee13562e64736dc6a68f2524124d491dc61155a9289f2a0d958dbafdc2af3b951d184db38cacc3f23a10a226a141b8491e62168ba5f21db28107cbe208e0773060a575578223f79beed633a3f8b42e3f9f76c24ddb2d0bb1daf364b0bae751e6735232e772f72b33b87a9f2ee35926031f050dc4aa6a61c065c4b8f3882d32d254a4840e948b1b565e5d8ac3a574ae7428bb6dabcfcceb75e6bd46d77ca0f6b3befd11dbded8efa6abd7ba877076575ee772189d55b0bad1e764e6b0588052cc1d51a5b232c7c62e3a5e2512613d74b8d24bec90a012bcff004d09e34ae4fddd5d3d28d4bf95d3931b50d7455f47a3fb7f9cf7042c70280803c01e03e8155f692ad1d7525742d2d7994d5d87d1da8a6681d30d6b3d71f0cb6b48e98913063a1cbc8bdec474cb96a0a0c470b214f396252d8514a54ae949dbc0b51b979464d25e93164371b726b8a47199f398d94ef8f66b7db40c3dd9dedd65bf69d7b89c6e464eacc74b9fa6741c49f21e7dbc9c0d378fc5292db0dc0096d2da1d5392160f5a892a004cee0ad625dd28e34d1ad75fe46aed69dfb556e92ad1a7c5225875d6c1b7b6ff002c4d98d5f3ceb7d1db8da8a1e917f75f6ab2dabf339ec0b13e62d47cf18ecec894e417d494a1c28616d041514282800069ee97ed5cc6824bde746e9c09ced984e3b8cd57dc55a578f2e64236e5b2e233105c5a8282a2a11d56b75290a3d440e5ccd536f2a48e8791f17b0c6aa4950b0fb6994d19a7d2dc5132db1139cc86ceeddc87161c28c636c703720445a98483f622ab77dfcc678b3be2c3b3bd5f5faa4dfe665aac65502800a006defc3c9f70fac52a1b2131ff0090c7b89f551757ccf602756c7a907050014726236b99141dd8e495337af3acd8867170b171917e64f91e69fb2ee1a97dbbf6cf58fdabb6adecdd34d5cabf91ae17047d7521c99d2754741df24e462711a237d750cf6c19191cd6331fe6840510dc68a5f0093e04bd7faea5f06df55ad38d487ddedcee42292a93b8ccdc7655a744775329a70ffb86f871205aca079dad6adbfa77ccafbb73b7c550fac5c71e08f3165cf2f82028dfa7eabd2dcbb371e96db46bf9514eb4d47813615816882830e24281b8bd8dc7d740e1365f425b2abb4829521a3c52149160403c380e54e94e52546ea36308c782a1a69dfae1636abed7b75b14cba1595c5448f978cc26fd6462a43721cb587fcb4aa929a5095d92d4ede4a9eb47a1c9eee1e2d5330ed4f6db0b7b16a25c5f886177ea03fd5635137e2fa8e817a3d4aa60c42c2c0201e22e2b5ee268d3812dbdaebaa7f63b48104ddb77288249f04cb72c3ea1e150396be61e41fba314b7c953c3fbcd831c85eb58e76569402801b7bf0f27dc3eb14a86c84b1fc863dc4faa96f7ee02546c7a9a382800a393315de0443f7304ab7bb5d751bf4af1e120f801059a97dbbe03d87f6de2bfe9adfb3f81826a494947897f49519301f281ee0f4cc5dc4de7ed73228661ea8978ac6ebcd2cf75ddc9f152b38bc8336f1530a0c2c002fd2b513f76acdb35aff8ce5fd4455ec85e7ab7ce9527bd97d6cb8895196a61c3c52e26e1401faaa42704d0384649d554ceda766bf3f11164484290edba54b50b75f4f0ea1f5d445ee255efa4ae348f7c7c9c096ec98f166b721f84b2dcc610e02b69639a569bdc1fac56231154cf84a9cac6a6536a9e86c3ce430b49712d9200514837b5cf3a5405bfaca64c85880b85d4975d712852d17ba524124dc711cab6b1e29b7a1bb816e32bbef781833318d87a9b1f99c3e5506563b38c488f90ea3c4b325250e1e37b92951e75b6adc68f42c16d28354472efaff45bfa2b57eb2dbfcaa15e7e9b9b331d292a06ea434a5210be2392d3650f48e3558c95f3285a6dfbd6ea6943f0d78f952202ee57094a6964f325b3d279fd55ab79512f59a295244b176abec6c8e964937f36465568fa12252811f96a032ff70f20fdd2ff00ee4bd5fde6c4d6b1ce82800a006defc3c9f70fac52a1b2131ff0ec0fd84faa99375bbec1cd6ac7a9c0140051e22a697122afbb8c0bd87ddf95922d110f5341872a33dface34811dc1f582d8fb08a98dbfe03d59f6ab708ded99c39c654fc8d65e16bfa6b7dd19d32ad9a81a83b91d5fda2f7d7b25dc3e8e69593ca6d9b18b9791d3a4ff0b318690b92c64b1ae5fc25455ad23870574abf4455ebb7e0a78728fa4a3efd7a5672d493a687e8d1b49afb6cb7a76cb406f2ed74b8ba8340ee8e22166f4866da426efc0c8361d6cac734293c52b49e2952483c41a8fc885cb371c5b6618664e71f89fe25ff0097cd6074e62dcc9ea1cdc2d37878813e764e7496a1456ca8d920baea9281d44d85cf135aea3293d15423d527a26dfa35314bdab3b7fd7d9b8b8f6b56e94d5fa9dd68fc2418b9a832320eb2d02a202597fcc5848e36e36a3c8bbfa4cbf4d7f8f4492f53fe479b11bc1db7e9a933b0187dd4d17869f1dd08c9625ad418c6a40909b8e97925feaea001bf571e143b738f15409e35fa5541fe0ccdecb91e74665f696891165212b6dc4a82d0b42c5c10524a4823c41b522935c0d7839465ae8cd7dee8379b6bfb56edfb76fb89dc562346d2fb4d869397951ba50db99194d593120346c6ee4c90a43281facb15b589195cbaa35e23ef665cb706fa9fe270a3d99f749aab7fb39bccdee965bfc8ee367b3592d62a7cb8568719cdc95b92e3b5d4a559111e212d81701b2900d85a9fdc1871b4e2d24b9165ed2ddddf83b52757c75f03306b78de46a9cb21b2901c2db89e91649eb4f513f6def557b9468b25c74ba4b076fb88ff000db37b7d1ca7a5c950552dc1e8f8d796f03f6a540d55f29fce7e078afbef29dfde6fbafc326bf333356229e140050036f7e1e4fb87d62950d9098ffc860fec27d54c9aa5df61924f563d4e1a140052050d69ee876cdcd7ba09596c543f3f3fa33cc97110da415bb1549ff748e1c49b212a03c48f49adac5bce0e874afb69dc4f6edc542727e5cf4a72abe6453278a53f50a9d847ddea3d6919c6e43a973e14e142323be4c73adee068ccc29b0a8f91c3964aed721d832176bf87dd70115d07b42e45599557339cf76af9ebd44f07fe38df3238ba07542fb00ddfd42dc3d1db853dc9fdb7e62638109c76a3923ae6e0c2d46c96f2053e6b09ff009fd49e25c15b7bae03baba97120b0272eb69f0a1da16730788d4788c8e033d8b8d9ac4e5595b190c5cc611262bed383a56871b58295020f8d55db76e54aea4eda9ca324d3a10ff00b85f28ddbac8ea27329b7f03038dc729d5bb162c9624407e2f51b8425d85c1c09bd812949b7324f1ad8b79347c4b2e3efbe5c52926ccabdba7cb1767767f5541d6faa34a69fd4f9cc402ac1e3863cca89164dbd97caa675971493c53ec8b137bdc0b17b215c54662cede9df874c538927cdb49692d30d202502c8619427ec094a523f3568cb468819cd2d59c3fff00e46ff31683bbdb8d8aec6b68b507c7e83d99c8a727beb9e8ceddac86b16ae23e290b6cf4adbc52147cde60c855b9b356eda30ba29719039b91d5ee9ced6c56e93fb39bb5a235e36e5b1b0a62236a46544d9ec64d05890927f652aeb17f14835bdb961ac8b32d2ad6a65d9331e3654249d3913dfacb1aee635c62b1586e994ee7130da86e24dd2e07d5e5a14081c7d3cab96dd8f4ca51f03a9ef19b1c7c3b97df28364cae1b0f1f4f62319828880dc5c347662c7400000861210070e1e1554beeb719e18dd333ea336f5cfd526ff13e9530d20a002801b7bf0f27dc3eb14a86c84c7fe431ee27d545d5f33d809d5b1ea41c140050025490ab71e9524dd0a1cc1f48a4eb51664b57dd99a92e3c88c9ee4b62ded1d9391adf4ac553da532af5f2d110386326485295637e4d3a78a3c124f4fead4cd9c9728a553d33f6efbe63996e3899124ae45517a7fc4882ef3f46cacdedde3355468fe63fa425de5281b144198908714ae1e0ea51e3c055d7b672bcabd47c25fc4b8f73e22b91eba6b122ea1ce958f911e7417dd853a338d3b0a634e2d87e3becac38dbadb8da92a42db5a4292a06e08047115d16f5124bc4e7d0bf5af4e87e9c9d89775397d6fdad76cf98df2cdc997afb59689d3791ca6bd98cf94de5a44b82d2dc9121602129716a24a9413d2ae7c09e340cf8af325a732d98d1f9517e824521e5b1d3994bd1273535955aceb0e25f41bfed36542b4fa6a65a1e5cb6a7d3f8161c959accc5c4c768752dc90ea5ab24f8d94413f92b22b62c60e5c08aef997776dac348f66ddcf647b7acfcbd33ae303a3b2f2313b85193e5498ab6ba7cc5c12a374b859eb0972c14824293650046d61dbb6eec7af854c59b8d4b12949d28aa7e6bf2e724ca79f9d33adf7d4e38a7de78ad6b53ab2b528b8e1ba8a9449249b926e78d5d6dca1c22ca57d55bbb3a45ea91553cdbadb5e5bc9536e70756db895d90527ab8a49fa8d6d5be34f132568d3e674f9f2fd852374e1eca6b99d1d6fc4d27a4e03f9894bfb867341d8719039852aed959079117e75c73b91f464cd474e24afdc2ee6863ec56ed465f326945fa9a2600fd1c0780aa5b6db3cc4acc52ea4ea14e420528050036f7e1e4fb87d62950d90963f90c7b89f552defdc04a8d8f5347050014005234981e69b122e4624b813e3a26c29ed2d89d11c485b6f32e0b290b07983426e34a33631b2eee3dd576dca924eb5230bb88ed364c5819c3a7b1ebd51b7b9d69f6f2d846917958e8efa4b6b428241538d80aba5691d40db8585c5870b7356e50a35d49f33d15d9ff007131372c7fa4cc928dca53a9f068809d3dd8cf72bb89aef52e88db0db4c8eaa6f12f39191acde40858729500a65d5ce9250d12a4117095295d5716ae9b6fb8f17cb8bb935d4d704d557b397b4d3ddb371716f7956e49d5e94f0f13f4ccedf368a06d976d7b05b2f9cc5c5c87fdb2d19a6b019388e3699318c9c563988cf9405a45c29c42883606ab57f22576e3953dd2d980df90aa7ab3ddbcedf6643ce63e23da5e53a93d2ee3df2db4144dfa8b0a0a41345a9a4f537633a3a983b5076c1aba292ee032f1b5136cfe1d979263cc22dcbad65693f6a8567f362678df8ad69435f35d681d5786c66520ea1d3522232b65d6dc71d64bb19cea4116eb4f52140fd76ad3cebbf265d3c5223b7cbee581792e3d2cd339ba5749650286574962f20870594dc9c6467956f42bcd6d5f6d51dee7970969764b4f13cb0b70ca85f974dc92a69c4c599eed7fb6cd5bd69d47b03a372a5dbf9afb9a6e021e37e06ceb6d2169e7e0456786f39dff00ba5f89b1ff006f96b8dd97e2642dbcdafdbdda3d32d693db5d251346e9d65c5b91f110c2c34df5a94ab02b52956f6b8026c3c2c2b5f2726e5c5d5393727cd9873774bd9b4739b974e9a97b569234382a15a788140050036f7e1e4fb87d62950d9098ff0087607ec27d54c9baddf60e6b563d4e00a00290029402900408efbefb3f0d0dc952d44063c94171c2a5724a7a6e6e7d14fb38eee4bdd4dbf405ac6bb29af293ea5e06e86c176b7a9b299ec2eacdc4c6b9a7f4de2942563f4fca6ba64cd710a2b485307f94852882a2ab288b80399139b7ed973cdeab89529ed3a7f6bf6be6e55f8deca6e318f0af124f6ea3c56aea51e6a3cc9f4f0e1566524a3d0768874c6908f0487c7214d68c8d542de3e2391a4e913a50d2908b143ad2644678a8488eb01495a57f7810781eaf1a6ce29c5af130dfb0ae5b941f06a845d6bbecd35e633279497a1971b5160dd716e63b1ce3e8872d868aac96cf9eb085d81fbdd42fe8aace4ecf76e5c5e5aab670fee1ec2cbb37257ac34e2df0344b01ad3466a932d3a6f5663736e4252d12598b31a79c4a907a4fb2924dafc8f23e069b95b16e18d152b9664bd9a145bfb6e4da97cc8b5fc0b9fad2b400398b5d2458d43b534e92fc0c158a5d295194a06052805001400dbdf8793ee1f58a54364263ff002183fb09f55326a977d86493d58f5386852a9a5c465c52a685e7a2f6f759ee164158ed1fa7a4669d6ba7e2e4213d1198ea1705d79766d1f69acd8f8f72e49b8aae84aed1b3e5e7ba5a85578f231477c180de9ed1b46edf6b3ff038acee1b5a4a7b1d3b2c97e43dfe2277941e61a7db4a1b4abcf475149eae052a4f1e06ba4765f64e2eeb71c7266e324ab45e05cedf64cecc14f239f8112b9deea77bf3de6b4ad5c30cdaee0b7020b314a45f905594b16f4f55ebb062fdb8dab1f847a9ff0051b58db0e25a9552eaf594d9dee235f6d96f6ed9ef1cfd5590ce48d0798893f27164cb71c4cac7f5795358e92a09fe2477169f471a97caed8c1862ce36f1e11951ea96a4ce162e3d9bd192825af81dc761b358ad4d84c3ea6c0cd4e4f01a8a2c69d84c920f52244396d25e61c49f4290b045707c8b6ed5c95be699d26d5c8ca292f03e8d927c2b51c75a99a11a31541942800b03cc5e904344fe643bf27b7fed2f71f51636506358eb668695d10b04079333369534eba8e4afe046f31cba4dc102ad1da580f2b3e297fa7523374baadd86bc4e2e18088efa1c8b768c7378ce0f6168b72208e47eaaef37f1ac5eb6a1720a54f1473c9e3a9a7d6bab5e6658d39bd5bb1a6fa1ac46e26462c76cfb31df9065b005c700991e60481f47854065768ed57d51d8826f9a5a9acf68c49e8eda55f0474bdda6f6b79fddced7f6bf72771357c9c56e1ebb82e64c84c16131938e92f2ff00c78534909f6d4c252b529278deb82f7376de358cb9c6c705a19aefdbbc7bd6faedcda6ff0003e36e976d9b8bb5315fcc4af2b526988a51f159c8a14931d2e1b254f32a1d691e929ea03d3541cbc1959d5f029bbc767e66df073d271f46ba18052beaf0293e20f856994f55a0aa006defc3c9f70fac52a1b2131ff90c7b89f551757ccf602756c7a90719476736de56ea6bcc6697696b8b0021d959cc8252145886c0b2ca6fc3ad570947d241e40d6d62e2f9d3a786a4ef6f6d32dc3295a5c38bf51337a6f4d60b4a61e06074fe359c6e331ad86e3c669094f202ea51007529445d4a3c49e278d5cb0ecab51a25467a2769daed60da56edc52497b4d3cf99268785aefb25ee0a2ca45e5e9ec3a73f8991d214a6a5609f6e58526fcaeda1693f4288e44d5bfb5b2fc8ce8bfd5a1937482958755c0e30bd9ea514dc713c146eab7d279935dfed4aa511a54027911cc7fed592e37d34e435479f81d467c9e7ba689b9bb46e76efa97348ff00aeb66da51d2e975cb2f25a61e76ed047a5501c5f92a02e7cb2dfa0d712ef2d97c8bde7c17bb2e3eb2d9b365ab91e9e689990929363cc7035459ad0b044ad631e1400951b24926c05c9e2072e3e3596cc1ce544aac6ca4a29b7c8e463e69fddae3fb92ded6746e86cafc7ed4ecc99307012dabfc36572efaad90c8a78d8a3a9b0cb2ab7b494150e0be3dbfb4362fa2c75764be64ff83e451774cb95db9a3d08bcf2957bdc5fd35734911ce5516dc37a5ad3099014f4e5258641bfdf7d41b4fe750ac19958da725fe9d4c96a3ef23bff00d0ba561685d17a4f45e35b0d63b48e2b198bc732121210ce3a3a580024701caf5e74dd6eca7937255d1c997bc15f2d171c98d1e64791125b4991165b4eb32a2ad214dbad3c9295a1493c08503c4542ddb11bb169aa993271617ad4a0d68d1093bdbb73ff006b772f50696612462094cbd3c49249832aea6d373c496f8a49f48aa6e6633b3371679afb8f6d7839b3b7c13755ea31556990236f7e1e4fb87d62950d90963f90c7b89f552defdc04a8d8f5307127dd95e8d18dd079bd68f35fef354cc31e23aa165a61401d2120f1b85ba5679f80ab56cd6d2b6dd353b77db7c051c795e92a49ba2f51b9c1b3c7c2fcea68e9d266bcf776cb4bed4bb954c95252c1d0baa3cd52b8d87f8f76df9ea5b62d770b1fee446e7fec4bd470b2d29c2842964752920a88f4d7a4a0b528a7a8721598548bd76b772f5b6ccee169bdcddb9cfb9a6358e949289588cb3480e0ea4fb2b6dd6890975b751742d07814923870223771dbece55976e71aa7fc7c4c96af3b32ac5d0eb2bb42f9996c7772385c5e1b55e721ed36f129a42729a1324f8620cd9091652f1331ee94bc85104869643a91e0a1ed5716defb4b2f12e3718f55b7c3c4b4edfbb5bb9eec9ea9124ed75bccfc436d2dc655d3d0e2505415d42fc08f0fa79554ef624e2e8e2d3257ea6d4b4a98fb7177676c368b032f536e8ee061f40e12123adf9995c8310c94f23e5b6b505b847a10093e02b6f1b66cdbcd285b93f60d9e4da82ab91ceef7edf3595ee9e0b35b33db33f3b0ba1f35e7c6d69bb2fa5c8990cac457b2b898d6494ae330bb90b757d2e2d3ec8094924f52edbed3fa692bb7d26e9c3c0acee1ba4ee2e88ba220e55d4907a4f4a0916403e8e03d1c85740b71a6841f11bea57eb1fcb5940fad8096d42cee0e6c924b10a74079eb71210cc96d6a22fe8009ad6cdd71ee2f14ccd63e347e824cc944c4a2534ef9ccca4875a76f70a4b83a81fb41af346749bc9b8b926d17dc5548216e7e8fd26b5d1b68d06ef8b49b6bc6e89d66d20a1c86ec8c64e7af6414c8ea90d5c016bf52542fe24d416fb15e529535a9c8fee560c690bf4d78548eaf136371e06aad1390ca941b7bf0f27dc3eb14f4629098ff0087607ec27d54c9baddf60e6b563dc92a55ae120957d439d2874f55178938fb39816f4ced8683c3a1a0cb8ce2a13935a1cbe29f479af1e439ad66af787051b11a2e47a73b6f1558dbad2a6ae28c975b24e36c8e9f9a96ecc4daeecc3746089059ceee8a23e95d36c8584add7326aeb956170484446dd279f87a6ad7d9b8be76e30fe9d7f023373b9d167d671d0a292a514fdc24f4f009e1f50e02bd009524ca34d352af21e4f21f55236152bd293e0292ac5e234b642c105214926e52788e60fac0a6ce2a4a92d50f5eeeab465df0370f71f0b0558dc36e1e7b118f20a463e2e6e7476003e01b6de4a40fa2d51f3db7164eaedc5bf50ef3a7e2cb532136765e489f989af65f21704cf94eae4be4816b971d2a55fedadab16616fe0497a81dd9be2caa7eea3e81c3e8bf3f556668c6db1b77ee8fae88a04314e144b8da5e65f694be8f350a4f583650ea163d3f4d8d24a9d2d342c67d324cee1fb26ddb6b7a7b58d8fd785e123232705171da8dcb92b196c2244099d7d57375bad159e3fa40f8d79d3b930be9f3ee72526d979dbaf75c11b57c0d8fe4a8224cd79eea304d66f63b5975341d7712234e8dc2ea4aa3bc8ea29f41082aa8ddd229d97529ddef89e7edd2d3e1d487509294806d716b8f4552e1c0f396ad8d3df8793ee1f58ac8824258fe431ee27d558e7fbbec3249eacf7c28cb9b321c14254b54f7998e109e64beb0803edbf1acd6e9d71af89b18347916e2f9c9227f598a988db7158e0d46486daf01d28e03f30abf4152d2a1ea7db928e2db8f8247a85ec3c6c38d2c19b32923980f9dceec4ed47bf3a0b6823bc5bc2ed6e0d190951c2ae1ccaea25152967c4144665b0078751f035da7b0b6f8c719de715d4dd2a54779badcfa6ba10a17ae824131e5f06d36e1cbd540941aea57eb1fcb40a1d4afd63f96802972799268a202945005752bf58fe5a00a124f337a00a50016e20fea9b8fae871aa6238d4e8dfe46fbb9f15a637a76326cb2e2b112a16a8d2f1556b2189a0c4c8251e360fb6dacf85d7f4d727eff00c249c2f25e82cfb1c9f4ba93f29fba3eaae5ccb16a597b8d8a19cd03ad31053e62a7e2e7b6db76bf52cb0be91f96b5329276a75f02337a4a581793fd0c81d694b5b6dad5fa69078fdeb9f4d526492a1e5f9ad5d3932af7e1e4fb87d6291189aa9e48d3a188f1fae4b6dac213d4d95a4949b7106c48e1f456d5cb13ea7ee8e9599a7a17dedb18392dc7dbec7fc5a55f1b9cc4a2c958bfe29b3f93871a7e3d8b8ef42b1e64aec38f296e167a969d489e1f30171763ec926c091e9abcf9572b4a1e9cb738a8f4f80aea1ffa34d958b9cd50729238def9ae3b31befc37a4659e4473e4e9b30bcc7426f195888de511d44730936fa8d77cecd9a5b728fa4a4eeb3ff90c8ecf8a87fd747fee1bfdeab591dd48519d0540204e8f74f3ff0070df87faa813a84fc543feba3ff70dfef502f520f8a87fd747fee1bfdea03a907c543feba3ff0070dfef501d483e2a1ff5d1ff00b86ff7a80ea41f150ffae8ff00dc37fbd407520f8a87fd747fee1bfdea03a907c543feba3ff70dfef501d483e2a1ff005f1ffb86ff007a8a88e44b5fc97b512317de2ab16de45b2c6a0d1fa91a94c36fa5485f90e459482a4a4f1b2903c2a91df5654f017fb896da2fb85ca574a1d6607a2ac254994801401e7e9ae250c79d3854b9c6f271a8d3ea84a4a5b72520b6ea825c20f20ae07f351771ee38b5d260ca50bd66707cd3200334c338ccc65b1c5d6d071f25f60a0b88053e52ca6d626e2d6ae7d7ecdd57a4a9a26797b71c7b96f22ec22b4eb67c979f63e1e47f1dafb87fe2a3d23f6a98b16ecf950d18dbb8be247fffd9);

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
INSERT INTO Evento (id_evento, rua, numero, cidade, cep, dataPostagem, dataEvento, conteudo, numeroVagas, horaInicial, horaFinal, fk_Instituicao_id_Inst, titulo, imagem) VALUES
(1, 'Rua das Flores', '123', 'São Paulo', '01234-567', '2024-03-30', '2024-04-15', 'Venha participar do nosso mutirão de limpeza urbana! Juntos podemos fazer a diferença.', 50, '08:00:00', '12:00:00', 1, 'Mutirão de Limpeza Urbana', NULL),
(2, 'Avenida Principal', '456', 'Rio de Janeiro', '98765-432', '2024-04-02', '2024-04-20', 'Participe do nosso workshop de reciclagem! Aprenda a reutilizar materiais e contribua para um mundo mais sustentável.', 30, '14:00:00', '17:00:00', 2, 'Workshop de Reciclagem', NULL),
(3, 'Praça Central', '789', 'Belo Horizonte', '54321-098', '2024-03-28', '2024-04-25', 'Estamos promovendo uma feira de adoção de animais. Venha conhecer nossos amiguinhos!', 20, '10:00:00', '14:00:00', 3, 'Feira de Adoção de Animais', NULL),
(4, 'Avenida das Árvores', '321', 'Curitiba', '87654-321', '2024-04-01', '2024-04-30', 'Participe da nossa palestra sobre saúde mental. Um momento importante de conscientização.', 50, '18:00:00', '20:00:00', 4, 'Palestra sobre Saúde Mental', NULL),
(5, 'Rua dos Voluntários', '654', 'Porto Alegre', '23456-789', '2024-04-03', '2024-05-05', 'Venha ajudar a construir casas para famílias carentes em nosso mutirão de construção!', 40, '09:00:00', '16:00:00', 5, 'Mutirão de Construção', NULL),
(6, 'Praça da Paz', '987', 'Recife', '67890-123', '2024-03-29', '2024-05-10', 'Estamos organizando uma tarde recreativa para as crianças da comunidade. Venha participar!', 60, '14:00:00', '18:00:00', 6, 'Tarde Recreativa para Crianças', NULL),
(7, 'Avenida dos Artistas', '246', 'Salvador', '54321-987', '2024-04-01', '2024-05-15', 'Participe do nosso festival de música beneficente. Todos os fundos arrecadados serão destinados a projetos sociais.', 100, '16:00:00', '22:00:00', 7, 'Festival de Música Beneficente', NULL),
(8, 'Rua da Esperança', '135', 'Fortaleza', '01234-567', '2024-03-31', '2024-05-20', 'Venha participar da nossa campanha de doação de sangue. Sua doação pode salvar vidas!', 50, '08:00:00', '13:00:00', 8, 'Campanha de Doação de Sangue', NULL),
(9, 'Praça das Flores', '753', 'Manaus', '87654-321', '2024-04-02', '2024-05-25', 'Estamos promovendo uma feira de artesanato local. Venha conhecer o talento dos nossos artesãos!', 30, '10:00:00', '16:00:00', 9, 'Feira de Artesanato Local', NULL),
(10, 'Avenida dos Esportes', '258', 'Brasília', '23456-789', '2024-04-04', '2024-05-30', 'Participe do nosso torneio de futebol solidário. Junte sua equipe e ajude a fazer a diferença!', 80, '14:00:00', '18:00:00', 10, 'Torneio de Futebol Solidário', NULL),
(11, 'Rua das Artes', '369', 'São Paulo', '01234-567', '2024-03-30', '2024-06-05', 'Venha participar da nossa oficina de pintura em tela. Não é necessário ter experiência!', 20, '10:00:00', '12:00:00', 1, 'Oficina de Pintura em Tela', NULL),
(12, 'Avenida da Paz', '147', 'Rio de Janeiro', '98765-432', '2024-04-02', '2024-06-10', 'Participe do nosso mutirão de plantio de árvores. Vamos juntos cuidar do meio ambiente!', 40, '08:00:00', '11:00:00', 2, 'Mutirão de Plantio de Árvores', NULL),
(13, 'Praça das Crianças', '258', 'Belo Horizonte', '54321-098', '2024-03-28', '2024-06-15', 'Estamos organizando uma tarde de contação de histórias para os pequenos. Traga sua família!', 30, '15:00:00', '17:00:00', 3, 'Contação de Histórias', NULL),
(14, 'Avenida da Saúde', '369', 'Curitiba', '87654-321', '2024-04-01', '2024-06-20', 'Participe da nossa palestra sobre alimentação saudável. Aprenda dicas para uma vida mais saudável!', 50, '19:00:00', '21:00:00', 4, 'Palestra sobre Alimentação Saudável', NULL),
(15, 'Rua dos Sonhos', '654', 'Porto Alegre', '23456-789', '2024-04-03', '2024-06-25', 'Estamos organizando uma visita guiada aos pontos turísticos da cidade. Venha conhecer mais sobre nossa cultura!', 25, '09:00:00', '12:00:00', 5, 'Visita Guiada aos Pontos Turísticos', NULL),
(16, 'Praça da Alegria', '987', 'Recife', '67890-123', '2024-03-29', '2024-06-30', 'Venha participar da nossa festa junina! Teremos comidas típicas, música ao vivo e muita diversão!', 100, '17:00:00', '22:00:00', 6, 'Festa Junina', NULL),
(17, 'Avenida da Solidariedade', '246', 'Salvador', '54321-987', '2024-04-01', '2024-07-05', 'Participe da nossa campanha de doação de agasalhos. Ajude a aquecer o inverno de quem mais precisa!', 50, '10:00:00', '14:00:00', 7, 'Campanha de Doação de Agasalhos', NULL),
(18, 'Rua da Esperança', '135', 'Fortaleza', '01234-567', '2024-03-31', '2024-07-10', 'Estamos organizando uma visita aos pacientes do hospital. Traga sua solidariedade!', 20, '15:00:00', '17:00:00', 8, 'Visita aos Pacientes do Hospital', NULL),
(19, 'Praça da Cultura', '753', 'Manaus', '87654-321', '2024-04-02', '2024-07-15', 'Venha participar do nosso sarau literário. Traga seus poemas e contos para compartilhar!', 30, '18:00:00', '20:00:00', 9, 'Sarau Literário', NULL),
(20, 'Avenida da Integração', '258', 'Brasília', '23456-789', '2024-04-04', '2024-07-20', 'Participe da nossa caminhada pela paz. Juntos podemos construir um mundo melhor!', 50, '07:00:00', '10:00:00', 10, 'Caminhada pela Paz', NULL);

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
