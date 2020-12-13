//efface les boutons
let buttons= document.getElementsByTagName("Button");
for(let button of buttons) {

        button.addEventListener("click", function () {
            console.log("click");
            let id = button.getAttribute("data-delete-id");
            fetch("PHP/deleteButton.php?id=" + id, myInit)
                .then(function (response) {
                    response.text().then(function (text) {
                        console.log(text);
                        eraseButton(text)
                    });
                })

                /*.catch(alert("Erreur !"));*/
        })

};


function eraseButton  (id){
    let tr = document.getElementById(id);
    tr.parentNode.removeChild(tr);

}

let myheaders = new Headers();

let myInit = {
    method: 'GET',
    headers: myheaders,
    mode:'cors',
    cache:'default'
};