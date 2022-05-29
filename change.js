window.onload = function () {
    var submit = document.getElementById('submit');
    function clickit() {
        var change = document.getElementById('change').value;
        var again = document.getElementById('again').value;
        var original = document.getElementById('original').value;
        submit.onclick = function () {
            if (again === change) {
                if (original === change) {
                    alert("阿都一樣你是在改殺虫？？？");
                    return false;
                }
                else {
                    return true;
                }
            }
            else {
                alert("密碼不同請重新輸入！！");
                return false;
            }
        }
    }
    submit.addEventListener("click", clickit);
}