package m03aa;

/*Classe satelit*/
public class Satelit{ //és class y no clas, també he escrit Satelit amb S mayuscula
    private double meridia;
    private double paral_lel; //He escrit un punt y coma
    private double distancia_terra;

    Satelit (){
        this(0,0,0);//He redireccionat al altre constructor
    }
    
    Satelit (double m, double p, double d){ //Satelit estava mal escrit, tenia accent
        setPosicio(m,p,d);//Com la funcio setPosicio fa el que vol, he fet que cridi la funcio, i he tret aquelles tres linies
    }
    
    public void setPosicio(double m, double p, double d){ //Els valors es separen per comes
        meridia=m;
        paral_lel=p;
        distancia_terra=d; //es distancia_terra, no es distancia_tierra
    }
    
    public void printPosicio(){
        System.out.println("El satèlit es troba en el paral·lel " +  //he tret el put de output, i he cambiat la cometa simple per una cometa doble
        paral_lel+" Meridià " + meridia + " a una distància de la terra de " +
        distancia_terra + " Quilòmetres");
    }
    
    /**
     * Canvia l'alssada hon esta.
     * Si arriba a donar un numero més baix 
     * de 0, es parara a 0
     * @param desplassament
     */
    public void variaAlsada(double desplassament){
        if((distancia_terra+desplassament)<0){
            distancia_terra = 0;
            return;
        }
        distancia_terra+=desplassament;
    }
    
    /**
     * Comprobacio per mirar si esta en Orbita
     * @return true si esta en orbita, i false si esta en la tierra
     */
    public boolean enOrbita(){
        if(distancia_terra<=0)
            return false;
        return true;
    }
    
    /**
     * Canvia les cordenades hon esta
     * @param variap paral_lel
     * @param variam meridia
     */
    public void variaPosicio(double variap, double variam){
        this.paral_lel += variap;
        this.meridia += variam;
    }
}