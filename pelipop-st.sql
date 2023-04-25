create table usuario(
pk_usuario smallint not null primary key AUTO_INCREMENT,
email varchar(20) not null,
nom_usuario varchar(65) not null,
sexo char(1) not null,
fnac date null,
pwr varchar(15) not null,
avatar text null,
estatus smallint not null,
tipo BOOLEAN NOT NULL
);

create table genero(
pk_genero smallint not null primary key AUTO_INCREMENT,
nom_genero varchar(30) not null
);

create table directores(
pk_director smallint not null primary key AUTO_INCREMENT,
nom_director varchar (60) not null
);

create table actores(
pk_actor smallint not null primary key AUTO_INCREMENT,
nom_actor varchar (60) not null
);

create table peliculas(
pk_pelicula smallint not null primary key AUTO_INCREMENT,
titulo varchar(70) not null,
descripcion text not null,
duracion time not null,
calificacion smallint not null,
fech_lanzamiento date not null,
portada text not null,
fk_genero smallint not null,
foreign key(fk_genero) references genero(pk_genero),
estatus smallint not null
);

create table url_trailer(
pk_url_trailer smallint not null primary key AUTO_INCREMENT,
dato_trailer text not null,
fk_pelicula smallint not null,
foreign key(fk_pelicula) references peliculas(pk_pelicula)
);

create table url_pelicula(
pk_url_pelicula smallint not null primary key AUTO_INCREMENT,
dato_pelicula text not null,
fk_pelicula smallint not null,
foreign key(fk_pelicula) references peliculas(pk_pelicula),
estatus smallint not null
);

create table pelicula_director(
pk_pelicula_director smallint not null primary key AUTO_INCREMENT,
fk_director smallint not null,
foreign key(fk_director) references directores(pk_director),
fk_pelicula smallint not null,
foreign key(fk_pelicula) references peliculas(pk_pelicula)
);

create table pelicula_actor(
pk_pelicula_actor smallint not null primary key AUTO_INCREMENT,
fk_actor smallint not null,
foreign key(fk_actor) references actores(pk_actor),
fk_pelicula smallint not null,
foreign key(fk_pelicula) references peliculas(pk_pelicula)
);

create table favoritos(
pk_fav smallint not null primary key AUTO_INCREMENT,
fk_pelicula smallint not null,
foreign key(fk_pelicula) references peliculas(pk_pelicula),
fk_usuario smallint not null,
foreign key(fk_usuario) references usuario(pk_usuario)
);