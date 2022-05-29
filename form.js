function jump() {
    // 跳轉網頁(不開新視窗)
    window.location.href = 'main.php';
}
//setinterval 無限重複執行
setInterval(myTimer, 1000);
//settimmout只執行一次
setTimeout(jump, 10000);
//10000ms後執行jump
var d = 9;
function myTimer() {
    // 取得id getElementById("countdown")
    // innerText 取代文字
    document.getElementById("countdown").innerText = d;
    d--;
}

