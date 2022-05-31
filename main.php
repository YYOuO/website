<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="strawberry.jpg">
    <script src="main.js"></script>
    <title>
        建構中歐..
    </title>
</head>

<body>
    <div id="ad" style="position:fixed; top:0px;z-index:999 ">
        <a href="https://genshin.hoyoverse.com/zh-tw/home" target="_blank">
            <img src="https://blog.zh-hant.playstation.com/tachyon/sites/8/2022/03/980ab6ed12df9a004fadaad7880a3460cfff93b6-scaled.jpg?resize=1088%2C612"
                style="width:100vw;"></a><br>
        <a href="javascript:;" onclick="javascript:document.getElementById('ad').style.display='none';bgm.play();"><img
                src="https://png.pngtree.com/png-clipart/20190916/original/pngtree-black-fork-free-map-png-image_4591808.jpg"
                style="width:50px;display:none;position:fixed;right:1px ;top:1px;" id="x"></a>
    </div>
    <div class="cc">
        <?php
        if (!$_SESSION["username"]) {
            header('location:index.php');
        } else {
            echo 'welcome!  ' ?><a style="color:yellow;border:2px double white"
            href="hi.php?id=<?php echo $_SESSION["username"]; ?>"><?php echo $_SESSION["username"]; ?></a>
        <?php
        } ?>
        <button onclick="javascript:window.location.href='change.html'" class="ccc">change password</button>
        <button onclick="javascript:window.location.href='delete.php'" class="ccc">delete account</button>
        <button class="ccc" onclick=" javascript:window.location.href='a.php' ;">logout</button>
    </div>
    <div class=" header" style="background:none">
        <a href="main.php"><img src="1651049036628.jpg" width="100px" height="100px" style="display: flex; float:left"
                id="venti"></a>

        <h1 style="text-align: center; padding:0px; float:none ;"> Just a website</h1>
    </div>

    <div class="left">
        <h1>刷機(刷機有一定風險，本人不負任何責任)</h1>
        <h2>我真的還沒寫好喔最好不要亂來</h2>
        <h3>這只是簡易流程說明，如果有出任何錯請去google</h3>
        <div style="border:2px dotted yellow;border-radius:20px;width:500px">
            <ol>
                <li><a href="#install">前置作業</a>
                    <ul>
                        <li><a href="#miflash">miflash</a></li>
                        <li><a href="#twrp">twrp</a></li>
                        <li><a href="#sdk">platform-tools</a></li>
                        <li><a href="#miunlock">miunlock</a></li>
                    </ul>
                </li>

                <li><a href="#account">綁定帳號</a></li>
                <li><a href="#bootloader">解鎖bootloader</a></li>
                <li><a href="#flash">刷機</a>
                    <ul>
                        <li><a href="#pe">pixel experience</a></li>
                        <li><a href="#eu">xiaomi.eu</a></li>
                        <li><a href="#original">原廠rom</a></li>
                    </ul>
                </li>
                <li>
                    (option)<a href="#root">magisk</a>
                    <ul>
                        <li><a href="#boot">修補boot</a></li>
                        <li><a href="#twrpflash">recovery刷入</a></li>
                    </ul>
                </li>
            </ol>
        </div>
        <br />
        <iframe width="300" height="168.777614138" src="https://www.youtube.com/embed/1_wHgvZyZdk?autoplay=1&mute=1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="border-radius: 20px 20px 20px 20px;"></iframe>

        <h3 id="install">前置作業 (以renoir為例)(我也只有這一台🥲)</h3>
        <p id="miflash">安裝miflash <a href="https://xiaomirom.com/download-xiaomi-flash-tool-miflash/"
                target="_blank">連結</a></p>
        <p id="twrp">(在手機上安裝)twrp(❗❗❗<a href="#bootloader">請先解鎖bl</a>) <a href="https://twrp.me/Devices/">連結</a>
        <ol>
            <li>在官網找到你的手機型號(如果沒有請左轉xda看有沒有大佬幫你做</li>
            <li>進入fastboot模式(音量下鍵+電源鍵)或者可以打<code>adb reboot bootloader</code></li>
            <li>把下載的檔案的檔名改成twrp(大家都說要我是不知道為什麼)</li>
            <li>安裝twrp打<code>fastboot flash twrp.img</code></li>
            <li>重啟到recovery(音量上+電源鍵)或者可以打<code>fastboot reboot recovery</code>(我其實忘記可不可以了=_=)</li>
        </ol>
        </p>
        <p id="sdk">安裝platform-tools <a href="https://developer.android.com/studio/releases/platform-tools">連結</a></p>
        <p id='miunlock'>安裝miunlock <a href="https://en.miui.com/unlock/download_en.html">連結</a></p>

        <br />
        <iframe width="300" height="168.777614138" src="https://www.youtube.com/embed/e3UDf15r5qQ?autoplay=1&mute=1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="border-radius:20px;"></iframe>
        <h3 id="bootloader">解鎖bl</h3>
        <p style="color:red">注意！！解鎖會清除資料請先做好備份</p>
        <p>設定→我的裝置→更多規格→MIUI版本連續點10下→（會提示已經是開發人員）→返回兩下→更多設定→開發者選項→OEM解鎖打開→USB偵錯打開→USB安裝打開→USB偵錯（安全設定）打開→</br>裝置解鎖狀態→綁定帳號與裝置→接下來等168小時（7天）
        <ul>
            <li>［然後請勿關閉開發者選項，也請勿更新系統、手機管家按最佳化，按了要重頭來］</li>
            <li>［等待的7天內手機皆可正常使用，單純解鎖要過7天才可以］</li>
            <li>［只有按下綁定帳號與裝置的時候需要插SIM卡，按完後如果要拔掉SIM卡沒關係］
            <li>［如果綁定失敗就重新登入小米帳號或重新開機後再試試］</li>
            <li>［按下「綁定裝置與帳號」後，有顯示「綁定成功」幾秒即可，如果再重新點進「裝置解鎖狀態」會顯示未解鎖是正常的，因為手機尚未解Bootloader鎖，只是「綁定裝置與帳號」而已，按下「綁定裝置與帳號」後要等7天才能解鎖］
            </li>
        </ul>
        </p>
        <p>
            打開Mi flash
            unlock應用程式→授權同意→登入和手機相同的小米帳號→手機關機→關機狀態同時按電源鍵+音量下幾秒（手機進入fastboot模式）或者可以打<code>adb reboot bootloader</code>→手機插線接電腦→解鎖
        </p>
        <iframe width="300" height="168.777614138" src="https://www.youtube.com/embed/Da6hE1zSh1Q?autoplay=1&mute=1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="border-radius: 20px 20px 20px 20px;"></iframe>
        <h3 id="flash">刷機</h3>
        <ul>
            <li>
                <p id="pe">pixel experience <a
                        href="https://download.pixelexperience.org/devices">連結</a>(由於android12的關係不能用twrp刷)(圖片下禮拜心情好再補)
                </p>
                <ol>
                    <li>進入fastboot模式(音量下鍵+電源鍵)或者可以打<code>adb reboot bootloader</code></li>
                    <li>刷入vendor_boot</br><code>fastboot flash vendor_boot (檔案名稱).img</code></li>
                    <li>安裝 Pixelexperience recovery</br><code>fastboot flash boot (檔案名稱).img</code></li>
                    <li>進入recovery模式(音量上鍵+電源鍵)或者可以打<code>fastboot reboot recovery</code>(我其實忘記可不可以了=_=)</li>
                    <li>選擇恢復原廠(Factory Reset)</li>
                    <li>選擇重置(Format data / factory reset)</li>
                    <li>選擇adb sidelaad</li>
                    <li>刷入rom(使用adb sideload)</br>打<code>adb sideload (檔案名稱).zip</code>刷入</li>
                    <li>重啟</li>
                </ol>
            </li>
            <li>
                xiaomi.eu <a id="eu"
                    href="https://sourceforge.net/projects/xiaomi-eu-multilang-miui-roms/files/xiaomi.eu/MIUI-WEEKLY-RELEASES/">連結</a>
                <p>如果目前版本不是EU版，無法保留資料直接更新!!</p>
                <ol>

                    <li>進入fastboot模式(音量下鍵+電源鍵)或者可以打<code>adb reboot bootloader</code></li>
                    <li>安裝rom(用管理員身分開啟)
                        <ul>
                            <li>第一次安裝EU版、降版、跨版本點windows fastboot_ first install with data_format.bat</br>
                                <p style="color:red">注意！資料會清除</p>
                            </li>
                            <li>如果目前已經刷EU版，可以保留資料直接更新同版的新版本，點windows fastboot update rom.bat</br>
                                <p>資料不會清除</p>
                            </li>
                        </ul>
                    </li>
                    <li>跳出執行窗→輸入Y→按Enter</li>
                    <li>讓他自己跑</li>
                    <li>他會自己開機(如果沒開，手動重開)</li>
                </ol>
            </li>
            <audio src="music.mp3" loop="true" id="bgm">不支援</audio>
            <li id="original">原廠rom <a href="https://xiaomirom.com/series/">連結</a>
                <p>
                <ul>
                    <li>線刷
                        <p style="color:red">注意！！</br>
                            非陸版手機刷官方ROM可以選擇「全部清除並Lock」，上鎖才可以通過Safety Net（正常使用銀行APP和NFC）/ 如需刷機要重新解鎖，但不用重等168小時</br>
                            陸版手機刷非陸版ROM請勿選擇「全部清除並Lock」會刷失敗，要重刷</br>
                            如果是刷同版ROM，僅要更新系統可選擇「保留用戶資料」</br>
                            除非刷回出廠ROM，不然不建議選擇「全部清除並lock」</p>
                        <ol>
                            <li>進入fastboot模式(音量下鍵+電源鍵)或者可以打<code>adb reboot bootloader</code></li>
                            <li>線刷包就是fastboot包，檔案格式是.tgz</br>
                                下載好的線刷包解壓縮兩次(Windows系統無法解壓縮，需透過第三方解壓縮程式，例如7zip)(反正最後要是資料夾樣)</br></li>
                            <li>開啟miflash→選擇剛剛解壓縮過的資料夾→點擊加載設備→刷機</br></li>
                            <li>他會自己開(如果沒開，手動重開)</br></li>
                        </ol>
                    </li>
                    <li>卡刷(使用twrp)
                        <ol>
                            <li>下載卡刷包(recovery),檔案格式為.zip</li>
                            <li>進入recovery(音量鍵上+電源鍵 or <code>adb reboot recovery</code>)</li>
                            <ul>
                                <li>(僅更新系統)
                                    <ol>
                                        <li>點擊安裝</li>
                                        <li>選擇剛剛下載的.zip檔安裝</li>
                                        <li>重啟系統</li>
                                    </ol>
                                </li>
                                <li>換版本、降版本...等
                                    <ol>
                                        <li>點擊清除</li>
                                        <li>格式化data分區→輸入yes→按勾勾</li>
                                        <li>跑完就返回TWRP主畫面→重啟→Recovery</li>
                                        <li>電腦複製系統到手機內建儲存空間</li>
                                        <li>點擊安裝，選擇剛剛傳的系統安裝</li>
                                        <li>重啟系統</li>
                                    </ol>
                                </li>

                            </ul>
                        </ol>
                    </li>

                </ul>
                </p>
            </li>

        </ul>
        <h3 id="root">Magisk(option)</h3>
        <ul>
            <li>
                <h5 id="boot">修補boot</h5>
                <ol>
                    <li>手機下載magisk manager</li>
                    <li>找出你的rom安裝包裡images資料夾裡有一個boot.img的檔案，丟到手機</li>
                    <li>打開安裝的magisk manager點擊magisk旁邊的安裝</li>
                    <li>點擊選擇並修補檔案</li>
                    <li>選擇boot.img檔</li>
                    <li>等他執行</li>
                    <li>將修補過的boot.img丟到電腦</li>
                    <li><code>adb reboot bootloader</code></li>
                    <li><code>fastboot devives</code></li>
                    <li><code style="background-color:lightblue;">fastboot flash boot (filename).img</code></li>
                    <li><code>fastboot reboot</code></li>

                </ol>

            </li>

            <li>
                <h5 id="twrpflash">recovery刷入(請先刷入twrp)</h5>
                <ol>
                    <li>下載magisk manager <a href="https://github.com/topjohnwu/Magisk/releases/tag/v24.3">連結</a></li>
                    <li>將下載的apk檔改附檔名為zip</li>
                    <li>進入recovery(音量鍵上+電源鍵 or <code>adb reboot recovery</code>)</li>
                    <li>點選安裝(install)</li>
                    <li>選擇剛剛改的zip檔</li>
                    <li>確認後滑滑塊</li>
                    <li>重啟系統</li>
                </ol>
            </li>



    </div>
    <div class="right">
        <?php
        require_once 'list.php';
        ?>
        <p style="text-align: center;">Try to click me!↓</p>
        <a href="https://sg-public-api.hoyoverse.com/event/download_porter/link/ys_global/genshinimpactpc/default"><img
                src="genshinimpact.webp" width="50px"></a>

    </div>
    <div class="right">
        <?php
        require_once 'bad.php';
        ?>
    </div>
    <div class="right">
        <img src="akaya.png" width="75px" height="75px" style="float: left;" onclick="javascript:bgm.pause();">
        <h2>About me</h2>
        <p>TNFSH112</p>
        <ul>
            <li><a href="https://www.facebook.com/profile.php?id=100011642190094">Facebook</a></li>
            <li><a href="https://www.instagram.com/tusikuan/">Instagram</a></li>
            <li><a
                    href="https://docs.google.com/document/d/16wPszQsl9RrTEVyVXsAODV_18MTQ8Tde/edit?usp=sharing&ouid=103519410945927565913&rtpof=true&sd=true">心得在這</a>
            </li>
        </ul>
        <p>MiHoYo是我大哥</p>
    </div>
    <div class="right">
        <img src="kazuha.jpg" style="width: 300px;">
        <img src="akaya.jpg" style="width: 300px;">
        <img src="kazuha2.jpg" style="width: 300px;">
        <img src="kazuha3.png" style="width: 300px;">
    </div>

</body>

</html>