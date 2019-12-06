CREATE DATABASE solidarie_vagas;

USE solidarie_vagas;

create table usuarios (
	id int(11) primary key not null auto_increment,
    nivel_acesso int(10) not null,
    nome varchar(50) not null,
    cpf_cnpj varchar(14) null unique,
    email varchar(50) not null unique,
    senha varchar(50) not null,
    id_ong int(11),
    id_contratante int(11),
    data_criacao datetime not null,
    data_modificacao datetime null
);

create table ongs (
	id int(11) primary key not null auto_increment,
    nome varchar(50) not null,
    cnpj varchar(14) not null unique,
    data_de_inicio date not null,
    finalidade_ong varchar(100) not null,
    logo varchar(100),
    sobre_ong varchar(500) not null,
    cep varchar(8) not null,
    logradouro varchar(50) not null,
    numero varchar(10) not null,
    complemento varchar(50),
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    uf varchar(2) not null,
    telefone varchar(12),
    celular varchar(12) not null,
    site_ong varchar(100),
    email varchar(50) not null unique,
    senha varchar(50) not null,
    nome_responsavel varchar(50) not null,
    cpf_responsavel varchar(11) not null,
    funcao_responsavel varchar(50),
    celular_responsavel varchar(12),
    email_responsavel varchar(50),
    data_criacao datetime not null,
    data_modificacao datetime null
);

create table contratantes (
	id int(11) primary key not null auto_increment,
	nome varchar(50) not null,
    cpf varchar(11) not null unique,
    data_de_nascimento date not null,
    cep varchar(8) not null,
    logradouro varchar(50) not null,
    numero varchar(10) not null,
    complemento varchar(50),
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    uf varchar(2) not null,
    telefone varchar(12),
    celular varchar(12) not null,
    email varchar(50) not null unique,
    senha varchar(50) not null,
    data_criacao datetime not null,
    data_modificacao datetime null
);

create table profissionais (
	id int(11) primary key not null auto_increment,
    nome varchar(50) not null,
    cpf varchar(11) not null unique,
    rg varchar(10) not null unique,
    data_de_nascimento date not null,
    foto varchar(100) not null,
    id_ong int(11),
    tempo_na_ong varchar(50) not null,
    resumo_historia varchar(500) not null,
    cep varchar(8) not null,
    logradouro varchar(50) not null,
    numero varchar(10) not null,
    complemento varchar(50),
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    uf varchar(2) not null,
    telefone varchar(12),
    celular varchar(12) not null,
    email varchar(50),
    id_grupo_servico int(11),
    id_servico int(11),
    data_criacao datetime not null,
    data_modificacao datetime null
);

create table pedidos_orcamentos (
	id int(11) primary key not null auto_increment,
    id_usuario_contratante int(11),
    id_usuario_ong int(11),
    id_profissional int(11),
    id_servico int(11),
    descricao varchar(300) not null,
    quantidade varchar(100) not null,
    data_criacao datetime not null
);

create table servicos (
	id int(11) primary key not null auto_increment,
    nome varchar(50) not null unique,
    descricao varchar(100) not null,
    id_grupo_servico int(11),
    data_criacao datetime not null,
    data_modificacao datetime null
);

create table grupos_servicos (
	id int(11) primary key not null auto_increment,
    nome varchar(50) not null unique,
    id_servico int(11),
    data_criacao datetime not null,
    data_modificacao datetime null
);

/* USUARIOS - ADICIONANDO AS FOREIGN KEYS */
alter table usuarios add foreign key (id_ong) references ongs(id);
alter table usuarios add foreign key (id_contratante) references contratantes(id);
describe usuarios;

/* PEDIDOS_ORCAMENTOS - ADICIONANDO AS FOREIGN KEYS */
alter table pedidos_orcamentos add foreign key (id_usuario_contratante) references usuarios(id_contratante);
alter table pedidos_orcamentos add foreign key (id_usuario_ong) references usuarios(id_ong);
alter table pedidos_orcamentos add foreign key (id_profissional) references profissionais(id);
alter table pedidos_orcamentos add foreign key (id_servico) references servicos(id);
describe pedidos_orcamentos;

/* PROFISSIONAIS - ADICIONANDO AS FOREIGN KEYS */
alter table profissionais add foreign key (id_ong) references ongs(id);
alter table profissionais add foreign key (id_grupo_servico) references grupos_servicos(id);
alter table profissionais add foreign key (id_servico) references servicos(id);
describe profissionais;

/* SERVICOS - ADICIONANDO AS FOREIGN KEYS */
alter table servicos add foreign key (id_grupo_servico) references grupos_servicos(id);
describe servicos;

/* GRUPOS SERVICOS - ADICIONANDO AS FOREIGN KEYS */
alter table grupos_servicos add foreign key (id_servico) references servicos(id);
describe grupos_servicos;
