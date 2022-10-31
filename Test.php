<html>
<title>萬年曆查詢系統</title>
<style>
    /*請在這裹撰寫你的CSS*/
    * {
        box-sizing: border-box;
        margin: 0;
    }

    .festival {
        /*節日句*/
        color: chocolate;
        font-size: 40px;
        font-weight: bolder;
        text-align: center;
    }

    .festival:hover {
        font-size: 80px;
        color: transparent;
        -webkit-text-stroke: 4px darkmagenta;
    }

    .f1:hover {
        width: 60%;
        font-size: 80px;
    }

    .f2:hover {
        width: 60%;
        font-size: 80px;
    }

    nav {
        /*兩大區塊排版 */
        display: flex;
        justify-content: space-around;
        align-content: center;
        margin: 10px auto;
    }

    .bar {
        /*上下月之區塊*/
        width: 100%;
        display: flex;
    }

    .bar>.a1 {
        /*上下年區塊調色*/
        width: 27.5%;
        box-shadow: 5px 5px 10px black;
        background-color: black;
        border-bottom: 1px solid white;
        height: 100%;
        font-size: 40px;
    }

    .bar>.a2 {
        /*上下月區塊調色*/
        width: 10%;
        box-shadow: 5px 5px 10px black;
        background-color: black;
        border-bottom: 1px solid white;
        height: 100%;
        font-size: 40px;
    }

    .a1>a {
        /*上下年文字CSS修改 */
        text-decoration: none;
        color: white;
        line-height: 140%;
    }

    .a1>a:hover {
        color: lime;
        font-weight: bold;
    }

    .a2>a {
        /*上下月文字CSS修改 */
        text-decoration: none;
        color: white;
        line-height: 140%;
    }

    .a2>a:hover {
        color: aqua;
        font-weight: bold;
    }

    .table0 {
        /*左邊大區塊 */
        width: 830px;
        height: 820px;
        backdrop-filter: blur(5px);
        padding: 50PX;
        background-color: rgba(245, 245, 245, 0.1);
        box-shadow: 10px 10px 10px black;
        border-radius: 10% 10%;
        margin: auto;
    }

    .table0:hover {
        /* background-color: lightblue; */
        box-shadow: 20px 20px 10px black;
        backdrop-filter: blur(5px);
    }

    .table {
        /*右邊月曆大區塊 */
        display: flex;
        flex-wrap: wrap;
        width: 830px;
        height: 820px;
        justify-content: space-between;
        align-content: center;
        margin: auto;
        box-shadow: 10px 10px 10px black;
        backdrop-filter: blur(5px);
        padding: 50PX;
        border-radius: 10% 10%;
        background-color: rgba(245, 245, 245, 0.1);
    }

    .table:hover {
        box-shadow: 20px 20px 10px black;
        backdrop-filter: blur(5px);
    }

    .table>.weekend,
    .workday {
        /*平日/假日區塊調整 */
        font-family: 'Times New Roman', Times, serif;
        flex-basis: calc(100% / 7.5);
        margin: 2px auto;
        opacity: 0.7;
        box-shadow: 5px 5px 10px black;
        border-radius: 50% 50%;
        margin-bottom: 10px;
    }

    .weekend:hover,
    .workday:hover {
        /*將區塊做水平翻轉*/
        animation: 0.4s linear 0s alternate none 1 featuresicon;
        -webkit-animation: 0.4s linear 0s alternate none 1 featuresicon;
        color: gold;
        text-shadow: 3px 3px 5px black;
        border-radius: 50% 50%;
    }

    @keyframes featuresicon {
        50% {
            transform: scaleX(0);
        }

        100% {
            transform: scaleX(1);
        }
    }

    @-webkit-keyframes featuresicon {
        50% {
            -webkit-transform: scaleX(0);
        }

        100% {
            -webkit-transform: scaleX(1);
        }
    }

    .header0 {
        /*月曆標題欄 */
        font-family: monospace;
        font-size: 40px;
        text-align: center;
        font-weight: bolder;
        line-height: 140%;
        background-color: black;
        color: white;
        width: 70%;
        height: 100%;
        border-bottom: 1px solid white;
        margin: 0 auto;
        box-shadow: 5px 5px 10px black;
    }

    .header {
        /*平日欄位欄*/
        font-family: 'Microsoft JhengHei';
        font-size: 50px;
        font-weight: bolder;
        text-align: center;
        line-height: 100%;
        background-color: black;
        color: white;
        width: calc(100% / 7);
        height: calc(100% / 14);
        border-bottom: 1px solid white;
        border-left: 1px solid white;
        border-right: 1px solid white;
        margin: 0 auto;
        box-shadow: 5px 5px 10px black;
        margin-bottom: 5px;
    }

    .header2 {
        /*假日欄位欄 */
        font-family: 'Microsoft JhengHei';
        font-size: 50px;
        text-align: center;
        font-weight: bolder;
        line-height: 100%;
        color: red;
        background-color: black;
        width: calc(100% / 7);
        height: calc(100% / 14);
        border-bottom: 1px solid white;
        margin: 0 auto;
        box-shadow: 5px 5px 10px black;
        margin-bottom: 5px;
    }

    .header3 {
        /*假日欄位欄 */
        font-family: 'Microsoft JhengHei';
        font-size: 58px;
        text-align: left;
        font-weight: bolder;
        color: crimson;
        width: 100%;
        margin: 0 auto;
        -webkit-text-stroke: 1px black;
        text-shadow: 5px 5px 10px black;
        margin-bottom: 5px;
    }

    .header3>span {
        color: gold;
        text-decoration: underline wavy aqua 5px;
    }

    .workday {
        /*平日區塊 */
        color: black;
        font-size: 80px;
        text-align: center;
        background-color: lightgray;
        border: 1px solid lightgray;
    }

    .weekend {
        /*假日區塊 */
        color: red;
        font-size: 80px;
        text-align: center;
        background-color: lightpink;
        border: 1px solid lightpink;
    }

    .today {
        /*今日日期標出來 */
        background: linear-gradient(to top, #FFBFBF, #C2C2FF, #00FF00);
        background: -webkit-linear-gradient(to top, #FFBFBF, #C2C2FF, #00FF00);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        font-size: 80px;
        font-weight: bolder;
        text-align: center;
        border: none;
    }

    #myVideo {
        /*將影片設成背景影片 */
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
    }

    section {
        /*月曆區塊修改 */
        display: flex;
        justify-content: center;
        color: red;
        font-size: 40px;
        font-weight: bold;
        margin: auto;
        font-family: '標楷體';
    }

    .showtime {
        /*實時時間修改 */
        display: flex;
        justify-content: center;
    }

    iframe {
        /*天氣資訊*/
        box-shadow: 5px 5px 5px black;
    }

    iframe:hover {
        box-shadow: 8px 8px 5px black;
    }

    form {
        /*查詢區修改 */
        height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .text {
        /*查詢欄位*/
        text-align: center;
        font-size: 30px;
        color: aqua;
    }

    .text>#year,
    #month {
        /*查詢欄位內文字*/
        width: 200px;
        text-align: center;
        font-size: 30px;
    }

    .btn {
        /*萬年曆下方按鈕排版設定*/
        display: flex;
        margin: 20px auto;
        justify-content: space-between;
        font-size: 30px;
        align-items: baseline;
        align-content: center;
    }

    #now {
        /*現在日期*/
        color: gold;
        text-decoration: none;
        font-size: 31px;
        border: 5px solid white;
        padding: 5px;
        background-color: black;
        box-shadow: 5px 5px 5px black;
        text-shadow: 2px 2px 5px white;
    }

    #submit,
    #reset {
        /*送出&重置按鈕*/
        color: black;
        text-decoration: none;
        height: 50px;
        font-size: 31px;
        border: 5px solid black;
        padding: 5px auto;
        border-radius: 25%;
        background-color: lightgray;
        box-shadow: 5px 5px 5px black;
        line-height: 100%;
        text-shadow: 2px 2px 5px black;
    }

    #submit:hover {
        color: blue;
        height: 60px;
        font-size: 40px;
        background-color: lightgreen;
        box-shadow: 8px 8px 5px black;
        border: 5px solid black;
        text-shadow: 2px 2px 5px black;
    }

    #reset:hover {
        color: blue;
        height: 60px;
        font-size: 40px;
        background-color: lightpink;
        box-shadow: 8px 8px 5px black;
        border: 5px solid black;
        text-shadow: 2px 2px 5px black;
    }

    #now:hover {
        color: black;
        height: 60px;
        font-size: 40px;
        border: 5px solid black;
        background-color: gold;
        box-shadow: 8px 8px 5px black;
        text-shadow: 5px 5px 5px black;
    }

    @media (min-width:577px) and (max-width:1705px) {

        /*RWD平板尺寸 */
        nav {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin: 20px auto;
        }

        .festival {
            color: darkslategray;
        }

        .table {
            margin-top: 20px;
        }

        section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            color: red;
            font-size: 40px;
            font-weight: bold;
            margin: 1px auto;
            font-family: '標楷體';
            text-align: center;
        }

        .showtime {
            display: flex;
            justify-content: center;
        }

        #showtime>#titletop2,
        #showbox {
            color: darkviolet;
        }

        .table {
            flex-direction: row;
        }
    }

    @media (max-width:576px) {

        /*RWD手機尺寸*/
        nav {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin: 10px auto;
        }

        .festival {
            color: darkslategray;
        }

        .table {
            margin-top: 20px;
        }

        section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            color: red;
            font-size: 40px;
            font-weight: bold;
            margin: 1px auto;
            font-family: '標楷體';
            text-align: center;
        }

        .showtime {
            display: flex;
            justify-content: center;
        }

        #showtime>#titletop2,
        #showbox {
            color: darkslateblue;
        }

        .table {
            flex-direction: row;
        }
    }
</style>
<script language="JavaScript">
    /*設定時間 */
    function ShowTime() {
        /*抓取時間資料 */
        var NowDate = new Date();
        var h = NowDate.getHours();
        var m = NowDate.getMinutes();
        var s = NowDate.getSeconds();
        document.getElementById('showbox').innerHTML = h + '時' + m + '分' + s + '秒';
        setTimeout('ShowTime()', 1000); //每秒(1000毫秒)更新一次時間資料
    }
</script>

<body>
    <?php
    /*請在這裹撰寫你的萬年曆程式碼*/
    date_default_timezone_set("Asia/Taipei"); //調整時區 
    if (isset($_GET['month'])) { //年月若有接收到資料則引用接收到的資料
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else { //否則預設年月值為當前年月值
        $month = date("n");
        $year = date("Y");
    }
    switch ($month) {
        case 1: //1月時設定上月為12月
            $prevMonth = 12;
            $prevYear = $year - 1;
            $nextMonth = $month + 1;
            $nextYear = $year;
            break;
        case 12: //12月時設定下月為1月
            $prevMonth = $month - 1;
            $prevYear = $year;
            $nextMonth = 1;
            $nextYear = $year + 1;
            break;
        default: //其他月之上下月正常+1-1
            $prevMonth = $month - 1;
            $prevYear = $year;
            $nextMonth = $month + 1;
            $nextYear = $year;
    }
    $firstday = $year . "-" . $month . ("-1"); //某月第一天
    $firstweekday = date("w", strtotime($firstday)); //某月第一天為星期幾
    $monthdays = date("t", strtotime($firstday)); //某月總天數
    $lastday = $year . "-" . $month . ("-") . $monthdays; //某月最後一天
    $lastweekday = date("w", strtotime($lastday)); //某月最後一天為星期幾
    $today = date("Y-m-d"); //當前日期
    $day2 = date("j"); //當前-天
    $datedays = []; //即將放入日期的空陣列
    $festivalday = array('0101', '0214', '0312', '0401', '0501', '0903', '1007', '1010', '1031', '1224', '1225'); //節日日期陣列
    //節日陣列
    $festival = array('0101' => '元旦', '0214' => '情人節', '0312' => '植樹節', '0401' => '愚人節', '0501' => '勞動節 ', '0903' => '軍人節 ', '1007' => '劉老師和我的生日!!加分~', '1010' => '國慶節', '1031' => '萬聖節', '1224' => '平安夜', '1225' => '聖誕節');
    $week = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六']; //星期陣列
    for ($i = 0; $i < $firstweekday; $i++) { //1號以前補印出空白
        $datedays[] = "";
    }
    for ($i = 0; $i < $monthdays; $i++) { //印出日期
        $date = date("Y-m-d", strtotime("+$i days", strtotime($firstday)));
        $datedays[] = $date;
    }
    for ($i = 0; $i < (6 - $lastweekday); $i++) { //當月最後一天以後補印出空白
        $datedays[] = "";
    }
    ?>
    <section>
        <?php
        //設定節日
        $festivaldays = "";
        if (date("md") == $festivalday[0] || date("md") == $festivalday[1] || date("md") == $festivalday[2] || date("md") == $festivalday[3] || date("md") == $festivalday[4] || date("md") == $festivalday[5] || date("md") == $festivalday[6] || date("md") == $festivalday[7] || date("md") == $festivalday[8] || date("md") == $festivalday[9] || date("md") == $festivalday[10]) {
            $festivaldays = "<span class='festival'>今天是" . $festival[date("md")] . "。</span>";
        }
        echo "<p>&nbsp;今天是 $today " . $week[date('w')] . "，" . $festivaldays . " </p>"; //輸出今天日期星期(若有節日則增加節日文字上去)
        ?>
        <div class="showtime">

            <body onload="ShowTime()">
                <!-- 現在時間 -->
                <p class="titletop2">&nbsp;現在時間&nbsp;:&nbsp;</p>
                <div id="showbox"></div>
            </body>
        </div>
    </section>
    <?php

    //名言陣列
    $words = [
        "你不一定要很厲害，才能開始；但你要開始，才能很厲害。", "記住你的價值，它不因外觀的不雅而貶值，是金子總有發光的一天。",
        "沒有退路時，潛能就發揮出來了。", "永不言敗，是成功者的最佳品格。", "如果你向神求助，說明你相信神的能力；如果神沒有幫助你，說明神相信你的能力。",
        "要成功，先發瘋，頭腦簡單向前衝。", "一個人只要有夢想，生命就有了依託；一個人只有不懈地追逐著夢想，活著才覺得意義深遠，趣味無窮，也才能將生命的潛能發揮到極致。",
        "有了夢想，就應該迅速有力地實施。坐在原地等待機遇，無異於盼天上掉餡餅。毫不猶豫儘快拿出行動，為夢想的實現創造條件，才是夢想成真的必經之路。",
        "人生觀決定了一個人的人生追求；世界觀決定了一個人的思想境界；價值觀決定了一個人的行為準則。", "人生就是生活的過程。哪能沒有風沒有雨？正是因為有了風雨的洗禮才能看見斑斕的彩虹；有了失敗的痛苦才會嘗到成功的喜悅。",
        "擁有夢想只是一種智力，實現夢想才是一種能力。", "人生只有走出來的美麗，沒有等出來的輝煌。", "人生就像騎腳踏車，想保持平衡就得往前走。",
        "不求與人相比，但求超越自己，要哭就哭出激動的淚水，要笑就笑出成長的性格！", "我們必須在失敗中尋找勝利，在絕望中尋求希望。", "一個人的夢想也許不值錢，但一個人的努力很值錢。",
        "在真實的生命裡，每樁偉業都由信心開始，並由信心跨出第一步。", "這個世界不是因為你能做什麼，而是你該做什麼。", "積極向上的心態，是成功者的最基本要素。",
        "真正能讓你倒下的，不是對手，而是你絕望的內心。", "所有的憂傷都是過往，當時間慢慢沉澱，你會發現，自己的快樂比想像的多得多。", "生活總會給你另一個機會，這個機會叫明天。",
        "強大的信心，能克服來自內心的惡魔，產生無往不勝的勇氣。", "寧願辛苦一陣子，不要辛苦一輩子。", "遠大的目標非常重要，一定要有成功的企圖心，而且越大越好。",
        "人生最大的敵人是自己怯懦。", "每天只看目標，別老想障礙。", "過去不等於未來；沒有失敗，只有暫時停止成功；採取更大量的行動。", "一個人只有在全力以赴的時候才能發揮最大的潛能。",
        "現在不玩命，將來命玩你， 現在不努力，未來不給力。", "當你的能力還駕馭不了你的目標時，那你就應該沉下心來歷練。", "健康的身體是實現目標的基石。",
        "與積極的人在一起，可以讓我們心情高昂。", "熱情和欲望可以突破一切難關。", "永不放棄是你夢想實現的唯一秘訣。", "意志堅強的人，他的世界充滿著無限的可能性。",
        "永不言敗是追究者的最佳品格。", "成功的秘訣是努力，所有的第一名都是練出來的。", "付出才會傑出。", "目標的實現建立在我要成功的強烈願望上。", "不管失敗多少次，都要面對生活，充滿希望。",
        "人的潛能是一座無法估量的豐富的礦藏，只等著我們去挖掘。", "要成功，不要與馬賽跑，要騎在馬上，馬上成功。", "實現夢想往往是一個艱苦的堅持的過程，而不是一步到位，立竿見影。那些成就卓越的人，幾乎都在追求夢想的過程中表現出一種頑強的毅力。",
        "用心觀察成功者，別老是關注失敗者。", "磨練，使人難以忍受，使人步履維艱，但它能使強者站得更挺，走得更穩，產生更強的鬥志。", "要跟成功者有同樣的結果，就必須採取同樣的行動。",
        "人生，最寶貴的莫過於光陰；人生，最璀璨的莫過於事業；人生，最快樂的莫過於奮鬥。", "成功就是簡單的事情不斷地重複做。", "偉大的成就，來自為遠大的目標所花費的巨大心思和付諸的最大努力。",
        "向著目標奔跑，何必在意折翼的翅膀，只要信心不死，就看的見方向，順風適合行走，逆風更適合飛翔，人生路上什麼都不怕，就怕自己投降。", "善待自己，不被別人左右，也不去左右別人，自信優雅。",
        "心存希望，幸福就會降臨你；心存夢想，機遇就會籠罩你。", "年輕人，更重要的是看到明天，抓住今天，在寧靜中奮進，也許在明天旭日出山之前，你又創造了奇蹟！", "人生只有創造才能前進；只有適應才能生存。",
        "勝利女神不一定眷顧所有的人，但曾經嘗試過，努力過的人，他們的人生總會留下痕跡！", "夢想不拋棄苦心追求的人，只要不停止追求，你們會沐浴在夢想的光輝之中。", "再美好的夢想與目標，再完美的計畫和方案，如果不能儘快在行動中落實，最終只能是紙上談兵，空想一番。",
        "只要瞄準了大方向，堅持不懈地做下去，才能夠掃除擋在夢想前面的障礙，實現美好的人生藍圖。", "在人生中只有曲線前進的快樂，沒有直線上升的成功。只有珍惜今天，才會有美好的明天；只有把握住今天，才會有更輝煌的明天！",
        "無人理睬時，堅定執著。萬人羨慕時，心如止水。", "生活總會給你答案的，但不會馬上把一切都告訴你。只要你肯等一等，生活的美好，總在你不經意的時候，盛裝蒞臨。", "為了不讓生活留下遺憾和後悔，我們應該儘可能抓住一切改變生活的機會。",
        "每一個人都擁有生命，卻不是每個人都能讀懂生命；每一個人都擁有頭腦，卻不是每個人都善用頭腦。", "為明天做準備的最好方法，就是要集中你所有的智慧，所有的熱誠，把今天的事情做得盡善盡美。",
        "不要放棄自己，勇敢地接受生命的挑戰。有一天我們可以老死、病死、窮死，但絕不要允許自己失望而死，消極而死！", "無志者常立志，有志者立常志，咬定一個目標的人最容易成功。",
        "哪怕是最沒有希望的事情，只要有一個勇敢者去堅持做，到最後就會擁有希望。", "如果你盼望明天，那必須先腳踏現實；如果你希望輝煌，那麼你須腳不停步。", "學會改變生活，學會品味滄桑，方可無悔青春，無憾歲月的消逝。",
        "有望得到的要努力，無望得到的不介意，無論輸贏姿態都會好看。", "運氣永遠不可能持續一輩子，能幫助你持續一輩子的東西，只有你個人的能力。", "人生最重要的價值是心靈的幸福，而不是任何身外之物。",
        "做正確的事，再把事情做正確。", "人生要成沉澱，要有定力，一個人定力不夠會浮躁。", "人生在世，最重要的不是自己處境如何，而是你如何看待自己的處境。", "機會是自己創造的，而不能一味的等待別人的賜予。",
        "一個人幸運的前提，其實是他有能力改變自己。", "當你再也沒有什麼可以失去的時候，就是你開始得到的時候。", "世界不會在意你的自尊，人們看的只是你的成就。在你沒有成就以前，切勿過分強調自尊。", "不要為已消逝之年華嘆息，須正視欲匆匆溜走的時光。",
        "遇到困難時不要抱怨，既然改變不了過去，那麼就努力改變未來。", "生命就是一個一直在支出時間的過程，等時間支完了，生命也就走到了盡頭。", "不要抱怨，不要總是覺得自己懷才不遇，這種狀況大部分是自己造成的。",
        "當你感到痛苦時，就去學習點什麼吧，學習可以使我們減緩痛苦。", "你經歷的所有的困苦都是有意義的，因為這是你要承擔重任的先兆。", "人有了信念和追求就能忍受一切艱苦，適應一切環境。",
        "成大事不在於力量多少，而在能堅持多久。", "做事有始有終值得開始的事就值得完成。聰明人做事總是有始有終。", "因為有悔，所以披星戴月；因為有夢，所以奮不顧身。", "一生中你唯一需要回頭的時候，是為了看自己到底走了多遠。",
        "永遠不讓「恐懼」阻止自己去做真心喜歡的事。", "Never say die.", "Never put off what you can do today until tomorrow.", "Believe in yourself.", "Jack of all trades and master of none.", "Knowledge is power.",
        "Learn to walk before you run.", "Constant dropping wears the stone.", "Experience is the mother of wisdom.", "Every man is his own worst enemy.", "From small beginnings comes great things.",
        "All things in their being are good for something.", "Failure is the mother of success.", "Never underestimate your power to change yourself！"
    ];
    $num = rand(0, 104); //亂數
    //亂數抽取名言並輸出
    echo "<marquee style='font-family:Microsoft JhengHei;color:darkgreen;font-size:25px;font-weight:bold;margin-top:10px;'>每日一句: " . $words[$num] . "</marquee>";
    ?>
    <video autoplay muted loop id="myVideo">
        <!--置入影片上方CSS調整為背景影片-->
        <source src="./resource/video.mp4" type="video/mp4">
    </video>
    <nav>
        <div class="table0">
            <!-- 置入氣象資訊 -->
            <P style="font-size: 40px;color:lightgreen;text-align:center;font-weight:bold;text-shadow:5px 5px 5px black;-webkit-text-stroke: 1.5px black;">氣象資訊</P>
            <iframe width="730" height="450" src="https://embed.windy.com/embed2.html?lat=23.140&lon=121.641&detailLat=24.939&detailLon=121.542&width=730&height=450&zoom=6&level=surface&overlay=clouds&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=true&metricWind=m%2Fs&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
            <!-- 萬年曆查詢 -->
            <form action="index.php" method="get">
                <h1 style="color:red;text-align:center; font-size:50px;margin-top:50px;text-shadow:5px 5px 5px black;">萬年曆查詢</h1>
                <div class="text">
                    年份: <input type="number" name="year" placeholder="<?= $year ?>" min="-10000" max="10000" id="" style="font-size: 30px;width:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    月份: <select name="month" id="" style="font-size: 30px;">
                        <!-- 年月份預設值為當前年月份，若已查詢或點擊按鈕則會保留當下的資料 -->
                        <option value="1" <?= ($month == "1") ? 'selected' : ''; ?>>1</option>
                        <option value="2" <?= ($month == "2") ? 'selected' : ''; ?>>2</option>
                        <option value="3" <?= ($month == "3") ? 'selected' : ''; ?>>3</option>
                        <option value="4" <?= ($month == "4") ? 'selected' : ''; ?>>4</option>
                        <option value="5" <?= ($month == "5") ? 'selected' : ''; ?>>5</option>
                        <option value="6" <?= ($month == "6") ? 'selected' : ''; ?>>6</option>
                        <option value="7" <?= ($month == "7") ? 'selected' : ''; ?>>7</option>
                        <option value="8" <?= ($month == "8") ? 'selected' : ''; ?>>8</option>
                        <option value="9" <?= ($month == "9") ? 'selected' : ''; ?>>9</option>
                        <option value="10" <?= ($month == "10") ? 'selected' : ''; ?>>10</option>
                        <option value="11" <?= ($month == "11") ? 'selected' : ''; ?>>11</option>
                        <option value="12" <?= ($month == "12") ? 'selected' : ''; ?>>12</option>
                    </select>
                </div>
                <div class="btn">
                    <button type="submit" value="送出資料" id="submit">送出查詢</button>
                    <p style="margin: 30px;font-size: 30px;"><a href='index.php?year=<?= $year = date('Y'); ?>&month=<?= $month = date('n'); ?>' id="now">現在日期</a></p>
                    <button type="reset" value="清空資料" id="reset">清空資料</button>
                </div>
            </form>
        </div>
        <section class="table">
            <?php
            $_GET['year'] = isset($_GET['year']) ? $_GET['year'] : $year; //收到年月的資料為空，則預設為當前年月資料
            $_GET['month'] = isset($_GET['month']) ? $_GET['month'] : $month;
            ?>
            <div class="bar">
                <!-- 去年&上月連結 -->
                <p class="a1" style="text-align: left;"><a href="index.php?year=<?= ($_GET['year'] - 1); ?>&month=<?= $_GET['month']; ?>">《《</a></p>
                <p class="a2" style="text-align: left;"><a href="index.php?year=<?= $prevYear; ?>&month=<?= $prevMonth; ?>">←</a></p>
                <?php
                echo "<p class='header0'>" . $_GET['year'] . " 年 " . $_GET['month'] . " 月份</p>"; //月曆標題
                ?>
                <!-- 明年&下月連結 -->
                <p class="a2" style="text-align: right;"><a href="index.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>">→</a></p>
                <p class="a1" style="text-align: right;"><a href="index.php?year=<?= ($_GET['year'] + 1); ?>&month=<?= $_GET['month']; ?>">》》</a></p>
            </div>
            <div class="header2">日</div><!-- 星期欄位 -->
            <div class="header">一</div>
            <div class="header">二</div>
            <div class="header">三</div>
            <div class="header">四</div>
            <div class="header">五</div>
            <div class="header2">六</div>
            <?php
            foreach ($datedays as $k => $day) { //印出日期
                $hol = ($k % 7 == 0 || $k % 7 == 6) ? 'weekend' : 'workday'; //判定假日與非假日套用CSS

                if (!empty($day)) {
                    $dayFormat = date("j", strtotime($day));
                    if ($day == $today) { //判斷今天日期並做變化
                        echo "<div class='today {$hol}'>{$dayFormat}</div>";
                    } else {
                        echo "<div class='{$hol}'>{$dayFormat}</div>";
                    }
                } else {
                    echo "<div class='{$hol}' style='opacity: 0.3;'></div>"; //印空白+透明效果

                }
            }
            ?>
        </section>
    </nav>
</body>
<html>