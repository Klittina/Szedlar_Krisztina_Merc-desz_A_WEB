class SzoView{
    #elem;
    constructor (elem, szuloElem){
        this.#elem = elem;
        console.log("szoview")
    szuloElem.append(
        `<div class="osszdiv">
       <div class="harmasaval">
       <h1>ANGOL</h1>
       <h1>MAGYAR</h1>
       <h1>Visszajelzés</h1>
       </div>
       <div class="harmasaval">
       <form action="/action_page.php">
         <label for="fname">${elem.angol}</label>
         <input type="text" id="fname" name="fname"><br><br>
        </form>
        <div class="visszajelzes"></div>
       </div>
        </div>`
    )
    }
}
export default SzoView;