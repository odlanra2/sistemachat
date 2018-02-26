
CREATE TABLE usuarios (
  id int    NOT NULL auto_increment,
  nombre varchar(40) default NULL,
  email  varchar(40) default NULL,
  telefono varchar(40) default NULL,
  PRIMARY KEY  (ID)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;




CREATE TABLE mensaje (
    id int NOT NULL auto_increment,
     para int ,
     de int,
    leido varchar(180) default NULL,
  fecha varchar(180) default NULL,
  asunto varchar(180) default NULL,
  texto text,
   PRIMARY KEY (id),
   CONSTRAINT usuarios_ibfk_1 FOREIGN KEY (para)  REFERENCES Usuarios (id),
   CONSTRAINT usuarios_ibfk_2 FOREIGN KEY (de)  REFERENCES Usuarios (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;