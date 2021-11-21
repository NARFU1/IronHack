<html><head>
		<meta charset="utf-8">
<meta name="google-site-verification" content="UfT_e5fDUyamire10Qx49btjJcyLpeMZExAbqKfjz_8" />
		<meta name="viewport" content="width=device-width">
		<title>Каспийский лотос</title>
		<link rel="icon" href="logo.png" type="image/png">
		<script type="text/javascript" src="https://deve.lol/js/jquery.js"></script>
		<style>
		@font-face {
            font-family: fnt;
            src: url("fnt.otf") format("opentype");
        }
		* {
          scrollbar-width: thin;
          scrollbar-color: #fff #f1ecec;
        }
        *::-webkit-scrollbar {
          height: 12px;
          width: 12px;
        }
        *::-webkit-scrollbar-track {
          background: #f1ecec;
        }
        *::-webkit-scrollbar-thumb {
          background-color: #fff;
          border-radius: 4px;
          border: 1px solid #bbb;
        }
        
		.menu_btn{
            position: relative;
            float: left;
            padding: calc(34px - 1.2vw);
            padding-left: 1%;
            padding-right: 1%;
            font-size: 1.25vw;
            font-family: fnt;
            color: #053d57;
            text-decoration: unset;
            cursor: pointer;
            max-width: calc(50% - 62px);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
		}
		.menu_btn_1{
            padding: 14px;
            padding-left: 1%;
            padding-right: 1%;
            font-size: 1em;
            font-family: fnt;
            color: #053d57;
            text-decoration: unset;
            font-weight: bold;
            cursor: pointer;
            max-width: calc(50% - 62px);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
		}
		.menu_btn:hover{
			text-decoration: underline;
		}
		.menu_btn_1:hover{
			text-decoration: underline;
		}
		.img_i{
            width: 100%;
            box-shadow: 0px 5px 20px rgb(186 203 207 / 50%);
		}
		</style>
	</head>
	<body style="
    margin: 0px;
">
		<!-- HEAD -->
		<div style="

    height: 50px;
    padding: 5px;
    //border-bottom: 1px solid #bbb;
    position: fixed;
    width: calc(100% - 11px);
    background: #fff;
    z-index: 3;
    border-right: 1px solid #bbb;
    box-shadow: 0px -2px 6px 0px #000;
">
			<img id="img_logo" src="logo_w2.png" style="
    height: 100%;
    cursor: pointer;
    padding-left: 14px;
    float: left;
    padding-right: 28px;
" onclick="location.href='/kl'">
			<a class="menu_btn" href="/kl">БАЗА ОТДЫХА</a>
			<a class="menu_btn" href="cs.php">ЧЕМ ЗАНЯТЬСЯ?</a>
			<a class="menu_btn" href="360.php">360°</a>
			<a class="menu_btn" style="padding: calc(28px - 1.2vw);" href="kk.php">КОРПОРАТИВНЫМ<br>КЛИЕНТАМ</a>
			<a class="menu_btn" style="padding: calc(28px - 1.2vw);" href="ss.php">ШКОЛЬНИКАМ<br>И СТУДЕНТАМ</a>
			<a class="menu_btn"  onclick="
                if($('#m_cont').css('top')=='0px'){
                    $('#m_cont').css('top', '-100%');
                }else{
                    $('#m_cont').css('top', '0px');
                }
                    ">КОНТАКТЫ</a>
			<img id="img_menu" src="menu.png" style="
	display:none;
    height: 100%;
    cursor: pointer;
    padding: 0;
    position: relative;
    float: right;
    font-size: 16px;
    font-family: fnt;
    color: #bbb;
    text-decoration: unset;
    font-weight: bold;
    max-width: calc(50% - 62px);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
" onclick="
    if($('#m_menu').css('top')=='0px'){
        $('#m_menu').css('top', '-100%');
    }else{
        $('#m_menu').css('top', '0px');
    }
        ">	
        
	<img id="div_search" src="search.png" onclick="fvn();" style="
    	display:none;
        height: 100%;
        cursor: pointer;
        padding: 0;
        position: relative;
        float: right;
        font-size: 16px;
        font-family: fnt;
        color: #bbb;
        text-decoration: unset;
        font-weight: bold;
        max-width: calc(50% - 62px);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    ">
		</div>
		<!-- BODY -->
        <div id="m_menu" style="
    top: -100%;
    width: calc(100% - 28px);
    height: calc(100% - 88px);
    padding: 14px;
    padding-top: 74px;
    font-size: 1.75em;
    font-family: fnt;
    color: #444;
    text-align: left;
    background: #fff;
    position: fixed;
    z-index: 2;
    transition: all calc(0.5s) cubic-bezier(0, 0, 0.5, 1) 0s;
    overflow: auto;
        ">
    		<div style="
                padding: 0.5em;
            ">
    			<a class="menu_btn_1" href="/kl">БАЗА ОТДЫХА</a>
    	    </div>
    		<div style="
                padding: 0.5em;
            ">
    		    <a class="menu_btn_1" href="cs.php">ЧЕМ ЗАНЯТЬСЯ?</a>
    		</div>
    		<div style="
                padding: 0.5em;
            ">
    		    <a class="menu_btn_1" href="360.php">360°</a>
    		</div>
    		<div style="
                padding: 0.5em;
            ">
    			<a class="menu_btn_1" href="kk.php">КОРПОРАТИВНЫМ<br>КЛИЕНТАМ</a>
    	    </div>
    		<div style="
                padding: 0.5em;
            ">
    		    <a class="menu_btn_1" href="ss.php">ШКОЛЬНИКАМ<br>И СТУДЕНТАМ</a>
    		</div>
    		<div style="
                padding: 0.5em;
            ">
    		    <a class="menu_btn_1" onclick="
    		    if($('#mb_cont').css('display')=='none'){
    		        $('#mb_cont').css('display', 'block');
    		    }
    		    else{
    		        $('#mb_cont').css('display', 'none');
    		    }
    		    ">КОНТАКТЫ</a>
    		</div>
    		<div id="mb_cont" style="
                padding: 0.5em;
                display: none;
            ">
Предприятие находится на территории Приволжской железной дороги<br>
<br>
<a style="color: #6d2a53;">Адрес</a><br>
Россия, Астраханская область, Лиманский район, в 1,5 км северо-восточнее села Вышка<br>
<br>
<a style="color: #6d2a53;">Контакты</a><br>
<a href="tel:+79272844193" style="text-decoration-line: none;">+7 (927) 284-41-93</a><br>
<a href="tel:+78452410756" style="text-decoration-line: none;">+7 (845) 241-07-56</a><br>
<a href="tel:+78452418019" style="text-decoration-line: none;">+7 (845) 241-80-19</a><br>
<a href="tel:+78452410664" style="text-decoration-line: none;">+7 (845) 241-06-64</a><br>
<br>
<a href="mailto:soc_zinovevana@pvrr.ru" style="text-decoration-line: none;">soc_zinovevana@pvrr.ru</a><br>
    		</div> 
        </div>
        <div id="m_cont" style="
    top: -100%;
    width: calc(100% - 64px);
    padding: 32px;
    padding-top: 74px;
    font-size: 1.25em;
    font-family: fnt;
    color: #444;
    text-align: left;
    background: #fff;
    position: fixed;
    z-index: 2;
    transition: all calc(0.5s) cubic-bezier(0, 0, 0.5, 1) 0s;
    box-shadow: 0px -2px 6px 0px #000;
        ">
Предприятие находится на территории Приволжской железной дороги<br>
<br>
<a style="color: #6d2a53;">Адрес</a><br>
Россия, Астраханская область, Лиманский район, в 1,5 км северо-восточнее села Вышка<br>
<br>
<a style="color: #6d2a53;">Контакты</a><br>
<a href="tel:+79272844193" style="text-decoration-line: none;">+7 (927) 284-41-93</a><br>
<a href="tel:+78452410756" style="text-decoration-line: none;">+7 (845) 241-07-56</a><br>
<a href="tel:+78452418019" style="text-decoration-line: none;">+7 (845) 241-80-19</a><br>
<a href="tel:+78452410664" style="text-decoration-line: none;">+7 (845) 241-06-64</a><br>
<br>
<a href="mailto:soc_zinovevana@pvrr.ru" style="text-decoration-line: none;">soc_zinovevana@pvrr.ru</a><br>
        </div>
		<div style="
    width: calc(100% - 28px);
    min-height: calc(100% - 310px);
    background: #f1ecec;
    position: relative;
    z-index: 1;
    padding: 14px;
    padding-top: 78px;
    font-size: 18px;
    font-family: fnt;
    text-align: justify;
    color: #444;
    text-align: center;
">
        <div style="
        	width: calc(100% - 28px);
        	max-width: 1024px;
        	display: inline-block;
    	">
            <div style="
                margin-top: 16px;
                padding: 8px;
                width: calc(100%);
                text-align: center;
                font-size: 2em;
                float: left;
            ">
                Корпоративные тарифы
            </div>
            <div style="
                margin-top: 32px;
                padding: 8px;
                width: calc(100%);
                text-align: justify;
                font-size: 1.2em;
                float: left;
            ">
Размер частичной оплаты стоимости путевки в соответствии с распоряжением ОАО «РЖД» от 5 мая 2017 года 887р «О внесении изменений в распоряжение ОАО «РЖД» о порядке бронирования, распределения и оплаты путевок в структурные подразделения филиалов ОАО «РЖД», специализирующиеся на санаторно-курортном лечении, оздоровлении и отдыхе ОАО «РЖД» от 4 сентября 2013 года 1907р».<br>
<br>
Выделение путевок: осуществляется по месту работы. Более подробную информацию можно получить у сотрудников кадровых подразделений на местах и в Дирекции социальной сферы.<br>
<br>
Необходимые документы для заезда:<br>
 - для железнодорожников – паспорт, выписка из протокола, удостоверение, путевка;<br>
 - для сторонних отдыхающих – паспорт.<br>

            </div>
        </div>
    </div>
		<!-- FOOT -->		
		<div style="
    height: 200px;
    padding: 5px;
    border-top: 8px solid #6d2a53;
    width: calc(100% - 10px);
    z-index: 3;
    position: relative;
    background-image: url(img1311.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
">

		</div>		

	<script>
    	
    	function $_GET(key) {
            var p = window.location.search;
            p = p.match(new RegExp(key + '=([^&=]+)'));
            return p ? p[1] : false;
        }

		var date = new Date();
		$('#t_date').html(date.getFullYear());
		
		resize();
		window.onresize = function(){
            resize();
        }
		function fvn(){
		    alert("Элемент временно не доступен!\r\nОн станет доступен для будущих версий программного продукта.");
		}
        function resize(){
            var wd0=document.body.clientWidth;
            var hg0=document.body.clientHeight;
            if(wd0<hg0){
				$('#img_logo').attr('src', 'logo2.png');
				$('#img_menu').css('display', 'block');
				$('.menu_btn').css('display', 'none');
				$('#div_search').css('display', 'none');
            }
            else{
            	$('#img_logo').attr('src', 'logo_w2.png');
            	$('#img_menu').css('display', 'none');
            	$('.menu_btn').css('display', 'block');
            	$('#div_search').css('display', 'block');
            }
		}
		
</script>
</body></html>