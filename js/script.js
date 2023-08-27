function submitMessage() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    var result = document.getElementById("result");
    result.innerHTML = "tên: " + name + "<br>" + "email: " + email + "<br>" + "message: " + message;

}