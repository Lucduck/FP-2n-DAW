CREATE or REPLACE type ADRESSA as object (
  carrer VARCHAR2(50),
  cp VARCHAR2(10), /* Es varchar i no un number, per que tenim de mantenir els ceros inicials */
  poblacio VARCHAR2(40),
  provincia VARCHAR2(30)
);
/
CREATE or REPLACE type PERSONA as object (
  id NUMBER,
  nif VARCHAR2(20),
  nom VARCHAR2(20),
  cognom1 VARCHAR2(20),
  cognom2 VARCHAR2(20),
  data_naixement DATE,
  MEMBER PROCEDURE mostrarNomSencer,
  MEMBER PROCEDURE mostrarEdat
);
/

CREATE OR REPLACE TYPE BODY PERSONA AS
  MEMBER PROCEDURE mostrarNomSencer is
    BEGIN
      DBMS_OUTPUT.PUT_LINE(SELF.nom || ' ' || SELF.cognom1 || ' ' || SELF.cognom2);
  END;
  MEMBER PROCEDURE mostrarEdat is
    BEGIN
      DBMS_OUTPUT.PUT_LINE(trunc((to_number(to_char(sysdate,'yyyymmdd')) - to_number(to_char(SELF.data_naixement,'yyyymmdd')))/10000));
  END;
END;
/

SET SERVEROUTPUT ON
DECLARE
  elMeuCarrer ADRESSA;
  Lucas PERSONA;
  fecha DATE;
BEGIN
  DBMS_OUTPUT.PUT_LINE('--- ADRESSA ---');
  elMeuCarrer := NEW ADRESSA('Tresserra', '08529', 'Muntanyola', 'Barcelona');
  DBMS_OUTPUT.PUT_LINE('Carrer: ' || elMeuCarrer.carrer);
  DBMS_OUTPUT.PUT_LINE('CP: ' || elMeuCarrer.cp);
  DBMS_OUTPUT.PUT_LINE('Població: ' || elMeuCarrer.poblacio);
  DBMS_OUTPUT.PUT_LINE('Provincia: ' || elMeuCarrer.provincia);
  
  DBMS_OUTPUT.PUT_LINE('--- PERSONA ---');
  fecha := TO_DATE('22/08/1995', 'dd/mm/yyyy');
  Lucas := NEW PERSONA(1,'47853011q', 'Lucas', 'Perez', 'Gonzalez', fecha);
  Lucas.mostrarNomSencer;
  Lucas.mostrarEdat;
END;
/