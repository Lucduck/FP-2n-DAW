-- Inserció d'Objectes. Sentència INSERT
CREATE OR REPLACE TYPE Usuari AS OBJECT(
  login VARCHAR2(30),
  nom VARCHAR2(30),
  cognoms VARCHAR2(40),
  data_ingres DATE,
  credit NUMBER,
  ORDER MEMBER FUNCTION ordenUsuari(u Usuari) RETURN INTEGER
);
/

CREATE TABLE UsuarisObj OF Usuari;
/

DECLARE
  u1 Usuari;
  u2 Usuari;
BEGIN
  u1 := NEW Usuari ('lluhom57', 'LLUIS', 'HOMAR I TOBOSA', '24/10/2007', 50);
  u2 := NEW Usuari ('carsa62', 'CARLOS', 'SAINZ CENAMOR', '06/07/2007', 100);
  INSERT INTO UsuarisObj VALUES (u1);
  INSERT INTO UsuarisObj VALUES (u2);
  COMMIT;
END;
/

SELECT * FROM UsuarisObj;
/

INSERT INTO UsuarisObj VALUES(Usuari('brapit63', 'BRAD', 'PITT', '15/02/2008', 50));
SELECT * FROM UsuarisObj;
/

CREATE TABLE Jugadors(
  nif VARCHAR2(10) PRIMARY KEY,
  unUsuari Usuari,
  partidesJugades SMALLINT
);
/

DECLARE
  u1 Usuari;
  u2 Usuari;
BEGIN
  u1 := NEW Usuari ('lluhom57', 'LLUIS', 'HOMAR I TOBOSA', '24/10/2007', 50);
  u2 := NEW Usuari ('carsa62', 'CARLOS', 'SAINZ CENAMOR', '06/07/2007', 100);
  INSERT INTO Jugadors VALUES ('23T', u1, 8);
  INSERT INTO Jugadors VALUES ('11Y', u2, 6);
  COMMIT;
END;
/

SELECT * FROM Jugadors;
/

-- Modificació d'Objectes. Sentència UPDATE
UPDATE UsuarisObj SET UsuarisObj.credit = 0 WHERE UsuarisObj.login = 'lluhom57';
SELECT * FROM UsuarisObj;
/

UPDATE UsuarisObj u SET u.credit = 5 WHERE u.login = 'lluhom57';
SELECT * FROM UsuarisObj;
/

UPDATE UsuarisObj u SET u = Usuari('feralo81', 'FERNANDO', 'ALONSO DIAS', '10/04/2011', 0) WHERE u.login = 'carsa62';
SELECT * FROM UsuarisObj;
/

UPDATE Jugadors j SET j.unUsuari.credit = 10 WHERE j.unUsuari.login = 'lluhom57';
SELECT * FROM Jugadors;
/

UPDATE Jugadors j SET j.unUsuari = Usuari('feralo81', 'FERNANDO', 'ALONSO DIAS', '10/04/2011', 0) WHERE j.unUsuari.login = 'carsa62';
SELECT * FROM Jugadors;
/

-- Eliminació d'Objectes. Sentència DELETE
DELETE FROM UsuarisObj u WHERE u.credit = 0;
SELECT * FROM UsuarisObj;
/

DELETE FROM Jugadors j WHERE j.unUsuari.credit = 0;
SELECT * FROM Jugadors;
/

-- Consultes amb la Funció VALUE
DECLARE
  u1 Usuari;
  u2 Usuari;
BEGIN
  SELECT VALUE(u) INTO u1 FROM UsuarisObj u WHERE u.login = 'lluhom57';
  dbms_output.put_line(u1.nom);
  u2 := u1;
  dbms_output.put_line(u2.nom);
END;
/
SELECT * FROM UsuarisObj;
/