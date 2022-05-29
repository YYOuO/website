
window.onload = function () {
    var submit = document.getElementById('submit');
    function clickit() {
        var yes = confirm('你確定嗎？');

        if (yes) {
            alert('已刪除');
        } else {
            alert('其實按了還是會刪掉😝');
        }

    }
    submit.addEventListener("click", clickit);
}