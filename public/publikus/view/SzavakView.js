import Szo from '../view/SzoView.js'

class Szavak{
    contructor(tomb, szuloElem){
        szuloElem.html(`<div class = "szavak"></div>`);
        this.divElem = szuloElem.children("div:last-child");
console.log("szavak.view")
        let szavak = new Szo(tomb, this.divElem);
    }
}
export default Szavak;