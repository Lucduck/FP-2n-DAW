package llistes;

import java.io.*;
import java.util.ArrayList;
import java.util.Scanner;
import javax.swing.JFileChooser;

/**
 * Activitat 4: Llistes
 * UF5 - M03
 * @author Lucas Pérez González
 */
public class Llistes {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        JFileChooser fileChooser = new JFileChooser();
        if (fileChooser.showOpenDialog(null) == JFileChooser.APPROVE_OPTION)
        {
            File fichero = fileChooser.getSelectedFile();
            try{
                Scanner sc = new Scanner(fichero);
                ArrayList<String> numeros = new ArrayList();
                ArrayList<ArrayList> lineas = new ArrayList();
                
                while(sc.hasNextLine()){
                    numeros = new ArrayList();
                    String line = sc.nextLine();
                    line = line.replace(" ","");//Quita los ceros de la cadena
                    for(int i = 0; i < line.length(); i++)
                        numeros.add(""+line.charAt(i));//introduce los caracteres de la linea en una ArrayList
                    lineas.add(numeros);//introduce la ArrayList en otra ArrayList
                }
                sc.close();
                
                for(int x = 0; x < lineas.size(); x++){
                    //copia el ArrayList de el ArrayList de lineas
                    ArrayList a = lineas.get(x);
                    
                    //recorre el ArrayList a
                    for(int y = 0; y < a.size(); y++){
                        if(a.get(y).equals("0")){
                            a.remove(y);
                            y--;
                        }
                    }
                    if(a.equals(new ArrayList())){
                        //elimina la linea y resta uno a x para que no se pase de linea luego
                        lineas.remove(x);
                        x--;
                    }else{
                        //eliminar la linia y luego volver a ponerla sin los ceros
                        lineas.remove(x);
                        lineas.add(x, a);
                    }
                }
                
            //Abrir archivo de guardado
            JFileChooser fileSave = new JFileChooser();
            if (fileSave.showSaveDialog(null) == JFileChooser.APPROVE_OPTION){
                File ficheroSave = fileSave.getSelectedFile();
                //abro el archivo
                PrintWriter pw = new PrintWriter(ficheroSave);
                
                //recorrer las ArrayList y imprimirlas en el fichero
                for(ArrayList a : lineas){
                    numeros = a;
                    for(String b : numeros){
                        pw.print(b + " ");
                    }
                    pw.println();
                }
                //cierro el fichero
                pw.close();
            }
            }catch(FileNotFoundException e){
                e.printStackTrace();
            }
        }
    }
    
}
