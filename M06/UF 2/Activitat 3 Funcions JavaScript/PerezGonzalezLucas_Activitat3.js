//<editor-fold desc="EXERCICI 1">

    /**
     * Calcula el numero de control, es recomenable que sigui un string,
     * si és un numeric que comenci per cero, els ceros s'esborraran i no
     * els tindra en compte.
     * No poden ser numero negatius
     * @param {Number/String} entitat
     * @param {Number/String} compte
     * @returns {String}
     */
    function calcularDigitControl(entitat, agencia,compte){
        //<editor-fold desc="Controls de Parametres">
            //comprova que tingui el numero de parametres demanats
            if(arguments.length != 3)
                throw "Nombre de paràmetres incorrectes";

            //Comprovo que la entitat i la agencia tinguin una allargaria de 4 i que siguin numerics
            var regex = /^\d{4}$/;
            if(!regex.test(entitat)){
                throw("Format de codi de entitat incorrectes")
            }
            if(!regex.test(agencia)){
                throw("Format de codi de agencia incorrectes")
            }
            //Comprovo que el compte tingui una allargaria de 10 i que sigui numeric
            var regex = /^\d{10}$/;
            if(!regex.test(compte) || !regex.test(compte)){
                throw("Format de codi de compte incorrectes")
            }
        //</editor-fold>
        
        /**
         * Calcula un digit de control
         * @param {Number} num
         * @returns {Number}
         */
        function cacularNumControl(num){
            //comprova que tingui el numero de parametres demanats
            if(arguments.length != 1)
                throw "Nombre de paràmetres incorrectes";
            num = num.toString();
            var x = 10 - num.length;

            var numControl = 0;
            for(var i = x; i<10 ; i++){
                numControl += num.charAt(i-x)*(Math.pow(2, i)%11);
            }
            numControl = numControl%11;
            numControl = (11 - numControl)%11;
            if(numControl == 10)
                return 1;
            return numControl;
        }

        //Calcular numero de control de ENTITAT I AGENCIA
            //Ajunto el numero de entitat i agencia
            var numFinal = "" + entitat + agencia;

            //Calculo el primer digit de control
            var num_1 = cacularNumControl(numFinal);

        //Calcular numero de control de COMPTE
            //Calculo el segon digit de control
            var num_2 = cacularNumControl(compte);
        
        //RETURN
            //Retornara el numero de control en String, per que aixi si es un cero el primer, no el borrara
            return "" + num_1 + num_2;
    }

//</editor-fold>
//<editor-fold desc="EXERCICI 2">
    /**
     * Calcula el numero d'IBAN en espanya.
     * És recomenable pasar per parametres un String, perque si hi ha ceros al comenzament, els mantindra.
     * Si és un numeric el que es pasa per parametres, els ceros primers es treuran.
     * @param {String} numero de compte
     * @returns {String} numero de IBAN
     */
    function calcularIBAN_ES(numCuenta){
        //<editor-fold desc="Controls de Parametres">
            //comprova que tingui el numero de parametres demanats
            if(arguments.length != 1)
                throw "Nombre de paràmetres incorrectes";

            //Comprovo que el numero de compte tingui una allargaria de 20 i que sigui numeric
            var regex = /^\d{20}$/;
            if(!regex.test(numCuenta)){
                throw("Format de codi de numero de compte incorrecte")
            }
        //</editor-fold>
        
        var IBAN = numCuenta.substring(0, 10)%97 + numCuenta.substring(10);
        IBAN = IBAN%97 + "142800";
        IBAN = IBAN%97;
        IBAN = 98 - IBAN + "";
        
        //Si és un numero de un digit, s'afegira un 0 d'abant
        if(IBAN.length <10)
            IBAN = "0" + IBAN
        
        //RETURN
        //Retornara el numero de control en String, per que aixi si es un cero el primer, no el borrara
        return IBAN;
    }
//</editor-fold>
//<editor-fold desc="EXERCICI 3">
    /**
     * Comproba si el número de la targeta de crèdit és valida
     * És recomenable pasar com a parametre un String, si no, podria donar error.
     * @param {String} número de la targeta de crèdit
     * @returns {boolean}
     */
    function ComprovarTargetaCredit(numTargeta){
        //<editor-fold desc="Controls de Parametres">
            //comprova que tingui el numero de parametres demanats
            if(arguments.length != 1)
                throw "Nombre de paràmetres incorrectes";

            //Comprovo que el numero de compte tingui una allargaria de 16 i que sigui numeric
            var regex = /^\d{16}$/;
            if(!regex.test(numTargeta)){
                throw("Format de codi de numero de Targeta incorrecte")
            }
        //</editor-fold>
        
    //Calculacio per comprobar que és valid
    /*
     * Agafo numero per numero, si es senar és multiplica per 2, sino és multiplica per 1.
     * Si el producte té dues xifres es redueixen a una sumant les del producte.
     */
        var numero;
        var resultat = 0;
        for(var i = 0; i < numTargeta.length; i++){
            numero = parseInt(numTargeta.charAt(i));
            //nomes entra al if, si es senar
            if((i+1)%2 != 0){
                //multiplicant per 2
                numero = (numero * 2) + "";
                if(numero.length == 2){
                    //sumant les dues xifres
                    var un = parseInt(numero.charAt(0));
                    var dos = parseInt(numero.charAt(1));
                    numero = un + dos;
                }
            }
            //pasar numero a Numeric
            numero = parseInt(numero);
            //sumo el numero Numeric a resultat
            resultat += numero;
        }
        
        //Si es resultat es divisible per 10, és un número de targeta correcte
        if(resultat%10 == 0)
            return true;
        return false;
    }
//</editor-fold>

