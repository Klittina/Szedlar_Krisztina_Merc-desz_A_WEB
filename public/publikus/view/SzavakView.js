import SzoView from '../view/SzoView.js';
console.log("ciklus nem")

class SzavakView{
    contructor(tomb, szuloElem){
        console.log(tomb)
        szuloElem.html(`<div class = "szavak">legördülő menű helye</div>`);
        this.divElem = szuloElem.children("div:last-child");
        
        console.log("ciklus")
        tomb.forEach(element => {
            const szok = new SzoView(element,this.divElem);
        });
    }
}
export default SzavakView;