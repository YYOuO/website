setInterval(time, 1000);
setTimeout(jump, 15000);
function jump() {
    window.location.href = 'main.php';
}
var d = 15;
function time() {
    d--;
    document.getElementById("countdown").innerText = d;
}