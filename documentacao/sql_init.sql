#trigue para o data de cadstro
delimiter //
DROP TRIGGER IF EXISTS usuario_data_cadatro;
CREATE TRIGGER usuario_data_cadatro before
INSERT ON usuario
FOR EACH ROW
    BEGIN
        SET NEW.data_cadastro = now();
    END;
//
DELIMITER ;

# trigger para o tipo
delimiter //
DROP TRIGGER IF EXISTS usuario_tipo;
CREATE TRIGGER usuario_tipo before
INSERT ON usuario
FOR EACH ROW
    BEGIN
        DECLARE _tipo INT;
        SET _tipo := 1;
        IF NEW.cod_cliente IS NULL THEN
            SET _tipo := 2;
        END IF;


        SET NEW.tipo = _tipo;
    END;
//
DELIMITER ;

#estados
INSERT INTO estado VALUES (1,'Minas Gerais'),(2,'Rio de Janeiro'),(3,'São Paulo');

#cidades
INSERT INTO cidade VALUES (1, 'Belo Horizonte', 1),(2, 'Ipatinga', 1),(3, 'João Molevade', 1),
                        (4, 'Rio de Janeiro', 2),(5, 'Macuco', 2),(6, 'Cordeiro', 2),
                        (7, 'São Paulo', 3),(8, 'Campinas', 3),(9, 'Avaí', 3);

# localidade
INSERT INTO localidade VALUES 
(1, 'Rua 1', 1, 1, 'Qualquer bairro', 11, 112233, 'Qualquer complemento', 'Outras coisas', 'Meu local predileto', 111222, '10 - 10');
