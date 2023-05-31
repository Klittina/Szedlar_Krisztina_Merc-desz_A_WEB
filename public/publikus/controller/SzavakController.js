import SzavakModel from '../model/SzavakModel.js';
import Szavak from '../view/SzavakView.js';

class SzavakController{
    #szavakController;
    #token;
    constructor(){
        const token = $('meta[name="csrf-token"]').attr("content");
        this.#token = token;
        this.vegpont="/api/szavak";
        console.log(this.vegpont)
        $(window).on("click",() => {
            SzavakModel.adatBe(this.vegpont,this.MegtekintEsemeny);
        })
    }

    MegtekintEsemeny(tomb){
        const szuloElem=$("article");
        new Szavak(tomb,szuloElem);
    }
}
export default SzavakController;