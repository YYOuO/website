window.onload = function () {
    var submit = document.getElementById("submit");
    submit.onclick = function () {
        if (!document.getElementById("checkbox").checked) {
            alert("給我選喔不然不給你註冊😊");
            return false;
        }
    }
}
