function formValidate() {
    emailUsername();
}

function emailUsername() {
    // var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    if (email == "" || password == "") {
        document.getElementById('demo').innerHTML = '<h4> Please enter email or password </h4>';
        // alert('dfghj');
        //return false;
    }
}