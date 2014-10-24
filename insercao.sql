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

INSERT INTO produto_has_marca (`id`, `Produto_id`, `Marca_id`, `img`) VALUES (1, 1, 3, NULL);

INSERT INTO produto_has_marca (`id`, `Produto_id`, `Marca_id`, `img`) VALUES (2, 2, 1, null);

INSERT INTO produto_has_marca (`id`, `Produto_id`, `Marca_id`, `img`) VALUES (3, 3, 4, null);

INSERT INTO produto_has_marca (`id`, `Produto_id`, `Marca_id`, `img`) VALUES (4, 4, 2, null);

INSERT INTO pais (`id`, `nome`, `pais_name`) VALUES ('1', 'Brasil', 'Brazil');

INSERT INTO estado (`id`, `nome`, `Pais_id`) VALUES (1, "São Paulo", 1);

INSERT INTO cidade (`id`, `nome`, `Estado_id`) VALUES (1, "São Paulo", 1);

INSERT INTO mercado (`id`, `nome`, `endereco`, `Cidade_id`, `latitude`, `longitude`) VALUES (1, "Big Bom Supermercado", "Avenida Brasília, 1950 - Vila Zanetti", 1, -21.9799920, -46.7853860);

INSERT INTO mercado (`id`, `nome`, `endereco`, `Cidade_id`, `latitude`, `longitude`) VALUES (2, "Sempre Vale Supermercados", "Avenida Rodrigues Alves, 606 - Rosário", 1, -21.9618050, -46.7985630);

INSERT INTO mercado (`id`, `nome`, `endereco`, `Cidade_id`, `latitude`, `longitude`) VALUES (3, "Supermercado Ideal", "Rua Capitão Joaquim Rabelo de Andrade, 225 - Santa Terezinha", 1, -21.7074010, -46.8170370);

INSERT INTO mercado (`id`, `nome`, `endereco`, `Cidade_id`, `latitude`, `longitude`) VALUES (4, "Supermercado Guimarães Teixeira", "Rua Família Romano, 319 - Jardim América", 1, -21.7647610, -47.0918740);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (1, 4.99, 1, 3);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (2, 5.99, 1, 1);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (3, 0.99, 1, 4);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (4, 8.00, 1, 2);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (5, 4.89, 2, 3);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (6, 6.09, 2, 1);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (7, 0.88, 2, 4);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (8, 7.00, 2, 2);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (9, 4.69, 3, 3);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (10, 5.09, 3, 1);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (11, 1.88, 3, 4);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (12, 8.00, 3, 2);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (13, 2.69, 4, 3);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (14, 1.09, 4, 1);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (15, 3.88, 4, 4);

INSERT INTO preco (`id`, `valor`, `Mercado_id`, `produto_has_marca_id`) VALUES (16, 9.00, 4, 2);



,