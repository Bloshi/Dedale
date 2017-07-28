
use dedale;

create table players(
	mail varchar(255) NOT NULL PRIMARY KEY,
	password varchar(100),
	picture varchar(255),
	location varchar(255),
	firstname varchar(100),
	name varchar(100),
	sex tinyint(1),
	birthdate date
);

create table categories(
	id integer not null auto_increment primary key,
	name varchar(255) not null,
	description varchar(1000)
);

create table games(
	id varchar(255) not null primary key,
	name varchar(255) not null,
	picture varchar(255),
	description varchar(1500),
	category integer,
	foreign key (category) references categories(id)
);

create table grade(
	id_p varchar(255),
	id_g varchar(255),
	value integer(1) check(value >=0 and value <= 5),
	primary key (id_g, id_p),
	foreign key (id_g) references games(id),
	foreign key (id_p) references players(mail)
);


create table posts(
	id integer not null auto_increment primary key,
	texte varchar(2400),
	game varchar(255),
	post_date date,
	visibility integer,
	poster varchar(255) not null,
	foreign key (game) references games(id),
	foreign key (poster) references players(mail)
);

create table comments(
	id integer not null auto_increment primary key,
	id_player varchar(255),
	texte varchar(2400),
	rep_date date,
	post integer,
	foreign key (post) references posts(id),
	foreign key (id_player) references players(mail)
);

create table achievements(
	id integer not null auto_increment primary key,
	logo varchar(255),
	name varchar(100) not null,
	cond varchar(255) not null,
	description varchar(1000)
);

create table achievements_get(
	id_p varchar(255),
	id_a integer,
	primary key (id_a, id_p),
	foreign key (id_p) references players(mail),
	foreign key (id_a) references achievements(id)
);

create table parties(
	id integer not null auto_increment primary key,
	p_date date,
	picture varchar(255),
	game varchar(255) not null,
	comment varchar(255),
	foreign key (game) references games(id)
);

create table scores(
	id_pl varchar(255),
	id_pa integer,
	score integer,
	primary key (id_pl, id_pa),
	foreign key (id_pl) references players(mail),
	foreign key (id_pa) references parties(id)
);

create table events(
	id integer not null auto_increment primary key,
	name varchar(255) not null,
	location varchar(255),
	description varchar(255),
	date_event date not null,
	autor varchar(255) not null,
	visibility integer,
	foreign key (autor) references players(mail)
);

create table participants(
	id_e integer,
	id_p varchar(255),
	primary key (id_e, id_p),
	foreign key (id_p) references players(mail),
	foreign key (id_e) references events(id)
);

create table event_games(
	id_e integer,
	id_g varchar(255),
	primary key (id_e, id_g),
	foreign key (id_e) references events(id),
	foreign key (id_g) references games(id)
);

commit;