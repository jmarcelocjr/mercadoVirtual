INSERT INTO quantidade VALUES (1, 1, "Kg");

INSERT INTO quantidade VALUES (2, 100, "g");

INSERT INTO quantidade VALUES (3, 1, "L");

INSERT INTO quantidade VALUES (4, 100, "mL");

INSERT INTO setor VALUES (1, "Alimentício");

INSERT INTO setor VALUES (2, "Limpezas em Geral");

INSERT INTO setor VALUES (3, "Congelados");

INSERT INTO setor VALUES (4, "HortiFruti");

INSERT INTO produto VALUES (1, "Arroz", 1, 1, 1);

INSERT INTO produto VALUES (2, "Detergente", 4, 1, 2);

INSERT INTO produto VALUES (3, "Iorgute", 3, 0, 3);

INSERT INTO produto VALUES (4, "Maça", 2, 1, 1);

INSERT INTO marca VALUES (1, "Ype");

INSERT INTO marca VALUES (2, "Turma da Mônica");

INSERT INTO marca VALUES (3, "João");

INSERT INTO marca VALUES (4, "Danone");

INSERT INTO produto_has_marca (1, 1, 3, null);

INSERT INTO produto_has_marca (2, 2, 1, null);

INSERT INTO produto_has_marca (3, 3, 4, null);

INSERT INTO produto_has_marca (4, 4, 2, null);

INSERT INTO pais (1, "Brasil", "Brazil");

INSERT INTO estado (1, "São Paulo", 1);

INSERT INTO cidade (1, "São Paulo", 1);

INSERT INTO mercado (1, "Mercado De lá", "Endereço Daqui", 1, null, null);

INSERT INTO mercado (2, "Mercado De cá", "Endereço de Lá", 1, null, null);

INSERT INTO preco (1, 4.99, 1, 3);

INSERT INTO preco (2, 5.99, 1, 1);

INSERT INTO preco (3, 0.99, 1, 4);

INSERT INTO preco (4, 4.89, 2, 3);

INSERT INTO preco (5, 6.09, 2, 1);

INSERT INTO preco (6, 0.88, 2, 4);

