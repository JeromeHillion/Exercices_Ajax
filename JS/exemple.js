//efface les boutons
let buttons= document.getElementsByTagName("Button");
for(let button of buttons) {

        button.addEventListener("click", function () {
            console.log("click");
           console.log(document.getElementById('id').value)
            let id =document.getElementById('id').value;
           console.log(id);
            fetch("PHP/addUser.php?id=" + id, myInit)
                .then(function (response) {
                    response.text().then(function (text) {
                        console.log(text);
                    });
                })

                /*.catch(alert("Erreur !"));*/
        })

};


function eraseButton  (id){
    let tr = document.getElementById(id);
    tr.parentNode.removeChild(tr);

}

let headers = new Headers({
    "Content-Type" : "multipart/form-data;boundary=something"
});


let myInit = {
    method: 'POST',
    headers: headers,
    mode:'cors',
    cache:'default'
};