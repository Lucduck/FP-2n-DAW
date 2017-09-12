CREATE or REPLACE type VEHICLE as object (
  marca VARCHAR2(20),
  model VARCHAR2(50),
  color VARCHAR2(20),
  cilindrada NUMBER,
  motor VARCHAR2(10)
);

SET SERVEROUTPUT ON
DECLARE
  vehicleLucas VEHICLE;
BEGIN
  vehicleLucas := NEW VEHICLE('Skaro','Luduck','Verde oscuro',555,'Espacial(Diesel)');
  DBMS_OUTPUT.PUT_LINE('Marca: ' || vehicleLucas.marca);
  DBMS_OUTPUT.PUT_LINE('Model: ' || vehicleLucas.model);
  DBMS_OUTPUT.PUT_LINE('Color: ' || vehicleLucas.color);
  DBMS_OUTPUT.PUT_LINE('Cilindrada: ' || vehicleLucas.cilindrada);
  DBMS_OUTPUT.PUT_LINE('Motor: ' || vehicleLucas.motor);
END;
/