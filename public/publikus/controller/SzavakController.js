import SzavakModel from '../model/SzavakModel.js';
import SzavakView from '../view/SzavakView.js';

class SzavakController{
    #szavakmodel;
    #token;
    constructor(){
        const token = $('meta[name="csrf-token"]').attr("content");
        this.#token = token;
        this.#szavakmodel = new SzavakModel(token);
        $("#nincsmas").on("click",() => {
            this.#szavakmodel.adatBe(("/szavak"),this.MegtekintEsemeny);
        })
    }

    MegtekintEsemeny(tomb){
        new SzavakView(tomb,$("article"));
        console.log(tomb)
    }
}
export default SzavakController;