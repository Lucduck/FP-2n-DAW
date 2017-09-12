--POLIGON
CREATE OR REPLACE TYPE Poligon AS OBJECT(
  numCostats INTEGER,
  MEMBER FUNCTION getNumCostats RETURN INTEGER,
  NOT INSTANTIABLE MEMBER FUNCTION getArea RETURN NUMBER,
  NOT INSTANTIABLE MEMBER FUNCTION getPerimetre RETURN NUMBER,
  MAP MEMBER FUNCTION ordenar RETURN NUMBER
) NOT INSTANTIABLE NOT FINAL;
/

CREATE OR REPLACE TYPE BODY Poligon AS
    MEMBER FUNCTION getNumCostats RETURN INTEGER IS
    BEGIN
      RETURN SELF.numCostats;
    END getNumCostats;
    MAP MEMBER FUNCTION ordenar RETURN NUMBER IS
    BEGIN
      RETURN SELF.getArea;
    END ordenar;
END;
/

--*TRIANGLE
CREATE OR REPLACE TYPE Triangle UNDER Poligon(
  base NUMBER,
  altura NUMBER,
  CONSTRUCTOR FUNCTION Triangle RETURN SELF AS RESULT,
  CONSTRUCTOR FUNCTION Triangle(base NUMBER, altura NUMBER) RETURN SELF AS RESULT,
  MEMBER PROCEDURE Init(base NUMBER,altura NUMBER),
  OVERRIDING MEMBER FUNCTION getNumCostats RETURN INTEGER,
  OVERRIDING MEMBER FUNCTION getArea RETURN NUMBER,
  OVERRIDING MEMBER FUNCTION getPerimetre RETURN NUMBER
) NOT FINAL;
/

CREATE OR REPLACE TYPE BODY Triangle AS
    CONSTRUCTOR FUNCTION Triangle RETURN SELF AS RESULT IS
    BEGIN
      SELF.Init(0, 0);
      RETURN;
    END Triangle;

    CONSTRUCTOR FUNCTION Triangle(base NUMBER, altura NUMBER) RETURN SELF AS RESULT IS
    BEGIN  
      SELF.Init(base, altura);
      RETURN;
    END Triangle;
    
    MEMBER PROCEDURE Init(base NUMBER, altura NUMBER) IS
      bas SELF.base%type;
      alt SELF.altura%type;
    BEGIN
      bas := base;
      alt := altura;
      IF base < 0 THEN
        bas := 0;
      END IF;
      IF altura < 0 THEN
        alt := 0;
      END IF;
      SELF.base := bas;
      SELF.altura := alt;
    END Init;
  
    OVERRIDING MEMBER FUNCTION getNumCostats RETURN INTEGER IS
    BEGIN
      RETURN 3;
    END getNumCostats;
    
    OVERRIDING MEMBER FUNCTION getArea RETURN NUMBER IS
    BEGIN
      RETURN (SELF.base * SELF.altura) / 2;
    END getArea;
    
    OVERRIDING MEMBER FUNCTION getPerimetre RETURN NUMBER IS
    BEGIN
      RETURN SELF.base * 3;
    END getPerimetre;
END;
/

--*QUADRILATER
CREATE OR REPLACE TYPE Quadrilater UNDER Poligon(
  OVERRIDING MEMBER FUNCTION getNumCostats RETURN INTEGER
) NOT INSTANTIABLE NOT FINAL;
/

CREATE OR REPLACE TYPE BODY Quadrilater AS
    OVERRIDING MEMBER FUNCTION getNumCostats RETURN INTEGER IS
    BEGIN
      RETURN 4;
    END getNumCostats;
END;
/

--*--RECTANGLE
CREATE OR REPLACE TYPE Rectangle UNDER Quadrilater(
  base NUMBER,
  altura NUMBER,
  CONSTRUCTOR FUNCTION Rectangle RETURN SELF AS RESULT,
  CONSTRUCTOR FUNCTION Rectangle(base NUMBER, altura NUMBER) RETURN SELF AS RESULT,
  MEMBER PROCEDURE Init(base NUMBER,altura NUMBER),
  OVERRIDING MEMBER FUNCTION getArea RETURN NUMBER,
  OVERRIDING MEMBER FUNCTION getPerimetre RETURN NUMBER
) NOT FINAL;
/

CREATE OR REPLACE TYPE BODY Rectangle AS
    CONSTRUCTOR FUNCTION Rectangle RETURN SELF AS RESULT IS
    BEGIN
      SELF.Init(0, 0);
      RETURN;
    END Rectangle;

    CONSTRUCTOR FUNCTION Rectangle(base NUMBER, altura NUMBER) RETURN SELF AS RESULT IS
    BEGIN  
      SELF.Init(base, altura);
      RETURN;
    END Rectangle;
    
    MEMBER PROCEDURE Init(base NUMBER, altura NUMBER) IS
      bas SELF.base%type;
      alt SELF.altura%type;
    BEGIN
      bas := base;
      alt := altura;
      IF base < 0 THEN
        bas := 0;
      END IF;
      IF altura < 0 THEN
        alt := 0;
      END IF;
      SELF.base := bas;
      SELF.altura := alt;
    END Init;
    
    OVERRIDING MEMBER FUNCTION getArea RETURN NUMBER IS
    BEGIN
      RETURN SELF.base * SELF.altura;
    END getArea;
    
    OVERRIDING MEMBER FUNCTION getPerimetre RETURN NUMBER IS
    BEGIN
      RETURN (SELF.base * 2) + (SELF.altura * 2);
    END getPerimetre;
END;
/

--*--QUADRAT
CREATE OR REPLACE TYPE Quadrat UNDER Quadrilater(
  costat NUMBER,
  CONSTRUCTOR FUNCTION Quadrat RETURN SELF AS RESULT,
  CONSTRUCTOR FUNCTION Quadrat(costat NUMBER) RETURN SELF AS RESULT,
  MEMBER PROCEDURE Init(costat NUMBER),
  OVERRIDING MEMBER FUNCTION getArea RETURN NUMBER,
  OVERRIDING MEMBER FUNCTION getPerimetre RETURN NUMBER
) NOT FINAL;
/

CREATE OR REPLACE TYPE BODY Quadrat AS
    CONSTRUCTOR FUNCTION Quadrat RETURN SELF AS RESULT IS
    BEGIN
      SELF.Init(0);
      RETURN;
    END Quadrat;

    CONSTRUCTOR FUNCTION Quadrat(costat NUMBER) RETURN SELF AS RESULT IS
    BEGIN  
      SELF.Init(costat);
      RETURN;
    END Quadrat;
    
    MEMBER PROCEDURE Init(costat NUMBER) IS
      cos SELF.costat%type;
    BEGIN
      cos := costat;
      IF costat < 0 THEN
        cos := 0;
      END IF;
      SELF.costat := cos;
    END Init;
    
    
    OVERRIDING MEMBER FUNCTION getArea RETURN NUMBER IS
    BEGIN
      RETURN SELF.costat * SELF.costat;
    END getArea;
    
    OVERRIDING MEMBER FUNCTION getPerimetre RETURN NUMBER IS
    BEGIN
      RETURN SELF.costat * 4;
    END getPerimetre;
END;
/

SET SERVEROUTPUT ON
DECLARE
  tri Triangle;
  rec Rectangle;
  qua Quadrat;
BEGIN
  DBMS_OUTPUT.PUT_LINE('TRIANGLE');
  tri := NEW Triangle(20,10);
  DBMS_OUTPUT.PUT_LINE(tri.base||' || '||tri.altura||' || '||tri.getNumCostats||' || '||tri.getArea||' || '||tri.getPerimetre);
  tri := NEW Triangle();
  DBMS_OUTPUT.PUT_LINE(tri.base||' || '||tri.altura||' || '||tri.getNumCostats||' || '||tri.getArea||' || '||tri.getPerimetre);
  
  DBMS_OUTPUT.PUT_LINE('RECTANGLE');
  rec := NEW Rectangle(20,10);
  DBMS_OUTPUT.PUT_LINE(rec.base||' || '||rec.altura||' || '||rec.getNumCostats||' || '||rec.getArea||' || '||rec.getPerimetre);
  rec := NEW Rectangle();
  DBMS_OUTPUT.PUT_LINE(rec.base||' || '||rec.altura||' || '||rec.getNumCostats||' || '||rec.getArea||' || '||rec.getPerimetre);
  
  DBMS_OUTPUT.PUT_LINE('QUADRAT');
  qua := NEW Quadrat(40);
  DBMS_OUTPUT.PUT_LINE(qua.costat||' || '||rec.getNumCostats||' || '||qua.getArea||' || '||qua.getPerimetre);
  qua := NEW Quadrat();
  DBMS_OUTPUT.PUT_LINE(qua.costat||' || '||rec.getNumCostats||' || '||qua.getArea||' || '||qua.getPerimetre);
END;
/