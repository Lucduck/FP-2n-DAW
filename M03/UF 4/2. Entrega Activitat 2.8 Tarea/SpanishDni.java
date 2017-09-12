package m03ac;

/**
 * Clase del dni espanyol
 * @author Lucas
 */
public class SpanishDni {
    /****  ATRIBUTS  ****/
    private int dni;
    private final static int DNI = 1;
    
    /****  CONSTRUCTORS  ****/
    
    /**
     * Constructor.
     * @param dni int
     */
    SpanishDni(int dni){
        if(this.validarDni(dni)){
            this.dni = dni;
        }else{
            this.dni = DNI;
        }
    }

    /****  METODES  ****/

    /**
     * Retorna el Dni.
     * @return int dni
     */
    public int getDni(){
        return dni;
    }

    /**
     * Retrona el Nif.
     * @return String nif
     */
    public String getNif(){
        return dni + this.calcularLletraNif(dni);
    }

    /**
     * Guarda el Dni si és valid, si no és valid no el guardara.
     * @param dni int
     */
    public void setDni(int dni){
        if(this.validarDni(dni)){
            this.dni = dni;
        }
    }

    /**
     * Guarda el Nif si és valid, si no és valid no el guardara.
     * @param nif String
     */
    public void setNif(String nif){
        if (this.ValidarNif(nif)){
            //Trec els numeros del nif y guardo aquests numeros al dni
            int dni = this.extreureNumeroNif(nif);
            this.dni = dni;
        }
    }

    /**
     * Calcula la lletra corresponent al dni.
     * @param dni int
     * @return String
     */
    public String calcularLletraNif(int dni){
        if(this.validarDni(dni)){
            String Lletres="TRWAGMYFPDXBNJZSQVHLCKE";
            int modul = dni % 23;
            //Agafa el caracter corresponent de l'array de Lletres
            String lletra = String.valueOf(Lletres.charAt(modul));
            
            return lletra;
        }
        return "";
    }
    /*
    Retorna la lletra del nif introduit per parametres
    */
    private String extreureLletraNif(String nif){
        String lletra = nif.substring(nif.length()-1,nif.length());
        return lletra;
    }
    /*
    Retorna el numero del nif introduit per parametres .
    Si no és correcte retornara el dni actual.
    */
    private int extreureNumeroNif(String nif){
        String numeros = nif.substring(0,nif.length()-1);
        if(this.isNumeric(numeros))
            return Integer.parseInt(numeros);
        return this.dni;
    }

    /**
     * Valida el Nif.
     * Si es correcte retorna true, del contrari retornara false.
     * @param nif String
     * @return boolean
     */
    public boolean ValidarNif(String nif){
        String lletra = this.extreureLletraNif(nif);
        int dni = this.extreureNumeroNif(nif);
        if(this.validarDni(dni)){
            if(this.calcularLletraNif(dni).equals(lletra)){
                return true;
            }
        }
        return false;
    }
    
    /*
    Valida el Dni.
    Si es correcte retorna true, del contrari retornara false.
    */
    private boolean validarDni(int dni){
        if(dni>=1 && dni<=99999999){
            return true;
        }
        return false;
    }
    /*
    He creat aquet metode, per comprobar si el dni es un numeric,
    si es un numeric fare la conversio a integer i retornara true, 
    del contrari petara i retornara false.
    */
    private static boolean isNumeric(String cadena){
	try {
            Integer.parseInt(cadena);
            return true;
	} catch (NumberFormatException nfe){
            return false;
	}
    }
}
