<!--

create table categoria( 
    id_categ int not null PRIMARY KEY AUTO_INCREMENT, 
    nome_categ varchar(50) not null 
);

create table produto( 
    id int not null PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(50) not null, id_categ int not null, 
        CONSTRAINT fk_id_categ FOREIGN KEY(id_categ) REFERENCES categoria(id_categ), 
    descricao varchar(50) not null, 
    preco decimal(12, 2) not null
);

insert into categoria values('', 'fruta');
insert into categoria values('', 'ferramenta');
insert into categoria values('', 'roupa');
insert into categoria values('', 'outro');

insert into produto values('', 'banana', '1', 'uma fruta amarela', 4.30);
insert into produto values('', 'martelo', '2', 'uma ferramenta', 18.00);
insert into produto values('', 'maçã', '1', 'uma fruta vermelha', 5.50);

-->

