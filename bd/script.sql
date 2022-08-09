create database if not exists supermanga;
use supermanga;

create or replace table favorite(
    favorite_id int primary key auto_increment, 
    favorite_by int not null, 
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP, 
    CONSTRAINT FK_UserID FOREIGN KEY (favorite_by) REFERENCES login(id) on delete cascade
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

create or replace table manga(
    id int primary key auto_increment,
    titulo varchar(250) not null,
    anime varchar(250) not null,
    volume int not null,
    autor varchar(250) not null,
    categoria varchar(250) not null,
    sumario varchar(250) not null, 
    capa longtext not null default,
    conteudo text not null,
    nota int not null,
    acesso int not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP,
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

create or replace table login(
    id int primary key auto_increment,
    user varchar(240) not null,
    age int not null,
    foto longtext not null,
    email varchar(250) not null unique,
    senha varchar(255) not null,
    cargo int not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into login(user, age, email, senha, cargo) values('admin', 100, 'admin@manga.com', md5('admin123'), 1);