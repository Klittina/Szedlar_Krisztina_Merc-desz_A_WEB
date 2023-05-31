class Szo{
    #elem;
    constructor (elem, szuloElem){
        this.#elem = elem;
        
    szuloElem.append(
        `<div class="osszdiv">
       <div class="harmasaval">
       <h1>ANGOL</h1>
       <h1>MAGYAR</h1>
       <h1>Visszajelzés</h1>
       </div>
       <div class="harmasaval">
       <p>${elem.angol}</p>
       <p>${elem.angol}</p>
       <h1>Visszajelzés</h1>
       </div>
        </div>`
    )
    }
}
export default Szo;