use fullstackmotos;

create table produto(
idproduto int primary key auto_increment,
nome varchar(150) not null,
descricao varchar(150) not null,
preco varchar(45) not null,
preco_final varchar(45) not null,
imagem varchar(200) not null);


-- ALTER TABLE `fullstackmotos`.`produto` 
-- DROP COLUMN `produtocol`;

-- DELETE FROM produto 
 -- WHERE idproduto = 6;

select * from produto;

insert into produto ( nome, descricao, preco, preco_final, imagem) value
 ('honda',' CBR 1000 rr', '80.000,00', '78.000,00', 'img/honda_1.jpg'),
 ('honda','CB Twister CBS', '12.000,00', '11.000,00','img/honda_2.jpg'),
('honda',' CB 600 2006', '22.000,00', '21.000,00', 'img/honda_3.jpg');

insert into produto ( nome, descricao, preco, preco_final, imagem) value
 ('Yamaha','  R1', '90.000,00', '87.000,00', 'img/yamaha_1.jpg'),
('Yamaha','R3', '106.500,00', '103.000,00','img/yamaha_3.jpg'),
('Yamaha',' R6', '22.000,00', '19.000,00', 'img/yamaha_2.jpg');


insert into produto ( nome, descricao, preco, preco_final, imagem) value
('Ducati','  Monster 1200', '45.000,00', '44.000,00', 'img/ducati_2.jpg'),
('Ducati',' 1299 Panigale', '65.000,00', '58.000,00','img/ducati_3.jpg');


insert into produto ( nome, descricao, preco, preco_final, imagem) value
('Harley Davidson',' Harley Davidson Xl 883n', '53.500,00', '44.000,00', 'img/Harley_Davidson_2.jpg'),
('Harley Davidson','HD Streetfighter 975', '120.000,00', '117.000,00','img/Harley_Davidson_4.jpg');


insert into produto ( nome, descricao, preco, preco_final, imagem) value
('Kawasaki',' ER-6n', '93.000,00', '89.000,00', 'img/Kawasaki_1.jpg'),
('Kawasaki','Ninja', '85.000,00', '78.000,00','img/Kawasaki_2.jpg');


 CREATE TABLE tb_pedido (
id_pedido INT auto_increment,
nome_cliente VARCHAR(45) NOT NULL,
endereco VARCHAR(150) NOT NULL,
telefone VARCHAR(15) NOT NULL,
nome_produto VARCHAR(45) NOT NULL,
valor_unitario VARCHAR(15) NOT NULL,
quantidade VARCHAR(15) NOT NULL,
valor_total VARCHAR(15) NOT NULL,
data datetime default now(),
PRIMARY KEY (id_pedido));


insert into tb_pedido (nome_cliente, endereco, telefone,  nome_produto, valor_unitario, quantidade,
     valor_total)
      values
      ('josiel',' teste', '56355326','honda', '78.000,00', '1','78.000,00');

  select * from tb_pedido;
  
  
 -- DELETE FROM tb_pedido 
-- WHERE id_pedido = 1;

-- drop table  tb_pedido;
  
create table comentario(
id int auto_increment,
nome varchar(45),
msg varchar(200),
data datetime default now(),
primary key(id));

select * from comentario;




