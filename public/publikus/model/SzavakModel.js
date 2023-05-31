class SzavakModel{
    #szavaimTomb = [];
    constructor(token){
        this.token = token;
        console.log("ef")
    }

    adatBe(vegpont,calllback){
        fetch(vegpont,{
            method: "GET",
            headers:{
                "Content-Type":"application/json",
                //"X-CSRF-TOKEN": this.token,
            },
          
        })
        .then((response)=>response.json())
        .then((data)=>{
            console.log("Új adat"+data);
            calllback(data);
        })
        .catch((error)=>{
            console.error("Error:", error)
        })
    }

}
export default SzavakModel;