--TYPE ADRECA
CREATE OR REPLACE TYPE Adreca AS OBJECT(
  carrer VARCHAR2(20),
  ciutat VARCHAR2(20),
  cod_pos INTEGER(5)
)
/
--TYPE CLIENT
CREATE OR REPLACE TYPE Client AS OBJECT(
  cli_num NUMBER(8),
  cli_nom VARCHAR2(20),
  tel NUMBER(9),
  cli_adres ADRECA
)
/
--TABLE CLIENT
CREATE TABLE Clients OF CLient(PRIMARY KEY(cli_num));

DESC Clients;

DROP TABLE Clients;

insert into Clients values (new Client(2, 'uno', 3333, new Adreca('piruleta','caramelo',05814)));
insert into Clients values (new Client(3, 'dos', 4444, new Adreca('lo del otro','igualmente',05814)));

select * from Clients;

/
--TABLE COMANDES
CREATE TABLE Comandes (
  ord_num NUMBER(8) PRIMARY KEY,
  cli_num NUMBER(8),
  cli_adres ADRECA
);

DESC Comandes;

DROP TABLE Comandes;

insert into Comandes values (542, 2, new Adreca('piruleta','caramelo',05814));
insert into Comandes values (543, 3, new Adreca('lo del otro','igualmente',05814));

select * from Comandes;

/