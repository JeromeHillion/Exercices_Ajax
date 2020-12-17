let form = document.getElementById("register-form")

form.addEventListener('submit', function (e) {
    e.preventDefault();
    let name = document.getElementById('name').value;
    let firstname = document.getElementById('firstname').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;
    const formData = new FormData(this);
    formData.append('name', name);
    formData.append('firstname', firstname);
    formData.append('password', password);
    formData.append('email', email);

    fetch('PHP/addUser.php', {
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



