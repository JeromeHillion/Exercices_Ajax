/*On récuprère l'id du formulaire*/
let form_rejister = document.getElementById("form_rejister");

form_rejister.addEventListener('submit', function (e){
    e.preventDefault();
    let name= document.getElementById('name').value;
    let firstname= document.getElementById('firstname').value;
    let pseudonyme= document.getElementById('pseudonyme').value;
    let email= document.getElementById('email').value;
    let password= document.getElementById('password').value;

   /* L'objet FormData  permet de créer un ensemble de paires clef-valeur pour un ' +
    'envoi via XMLHttpRequest. Cet objet est destiné avant tout à l'envoi de données de formulaire,
    mais il peut être utilisé indépendamment des formulaires afin de transmettre des données associées à une clef.
    Les données transmises sont dans le même format qu'utiliserait la méthode submit() pour envoyer des données si le type' +
    ' d'encodage du formulaire correspondait à "multipart/form-data".*/
    const formData = new FormData(this);

    /*La méthode append() va permettre
    d’insérer du contenu en tant que premier et dernier enfant d’un élément cible.
    Le contenu à insérer devra être passé en argument de ces méthodes.*/
    formData.append('name', name);
    formData.append('firstname', firstname);
    formData.append('pseudonyme', pseudonyme);
    formData.append('email', email);
    formData.append('password', password);


   /* L'API Fetch fournit une interface JavaScript pour l'accès et la manipulation
    des parties de la pipeline HTTP, comme les requêtes et les réponses.
    Cela fournit aussi une méthode globale fetch() qui procure un moyen facile
    et logique de récupérer des ressources à travers le réseau de manière asynchrone.*/
    fetch('php/addUser.php',{
        method: 'post',
        body: formData
    }).then(function (response) {
        return response.text();
    }).then(function (text) {
        console.log(text);
    }).catch(function (error) {
        console.error(error)
    })
});


