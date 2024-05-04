CREATE DATABASE banco;
USE banco;

CREATE TABLE estados (
	id INT PRIMARY KEY auto_increment,
    nome VARCHAR(255) NOT NULL
    );
    
CREATE TABLE cidades (
	id INT PRIMARY KEY auto_increment,
    nome VARCHAR(255) NOT NULL,
    estado_id INT,
    foreign key (estado_id) REFERENCES estados(id));
    
    INSERT INTO estados (NOME) VALUES ('SÃO PAULO'),
							          ('MINAS GERAIS'),
							          ('RIO DE JANEIRO'),
									  ('SANTA CATARINA'),
									  ('BAHIA');
									
	INSERT INTO cidades (NOME,ESTADO_ID) VALUES ('BARRA BONITA',1),
							          ('JAÚ',1),
                                      ('BAURU',1),
                                      ('BELO HORIZONTE',2),
                                      ('MONTES CLAROS',2),
                                      ('UBERLÂNDIA',2),
                                      ('JUIZ DE FORA',2),
                                      ('ARARUAMA',3),
                                      ('ANGRA DOS REIS',3),
                                      ('ARRAIAL DO CABO',3),
                                      ('JOINVILLE',4),
                                      ('FLORIANÓPOLIS',4),
                                      ('CHAPECÓ',4),
                                      ('SALVADOR',5),
                                      ('FEIRA DE SANTANA',5),
                                      ('BARREIRAS',5);
                                      
	SELECT * FROM CIDADES;

                               
                               