function cRectagle(base, altura){
    this.base=base;
    this.altura=altura;
    var alt = altura;

    this.area =function () {
        return (this.base*this.altura);
    }

    this.perimetre = function () {
        return 2*(this.base+this.altura);
    }

    this.toString = function(){
        return "(b= " + this.base + ", h " + this.altura + ", a = " +
        this.area() + ", p =" + this.perimetre()+ ")";
    }
}

Array.prototype.ordenaPerArea = ordenaPerArea
function ordenaArea (a, b) {
  var aArea = a.area()
  var bArea = b.area()

  return aArea - bArea
}
function ordenaPerArea () {
  this.sort(ordenaArea)
}

Array.prototype.ordenaPerPerimetre = ordenaPerPerimetre 
function ordenaPerimetre (a, b) {
  var aPer = a.perimetre()
  var bPer = b.perimetre()

  return bPer - aPer
}
function ordenaPerPerimetre () {
  this.sort(ordenaPerimetre)
}