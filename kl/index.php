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
" onclick="location.href=''">
			<a class="menu_btn" href="">БАЗА ОТДЫХА</a>
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
    			<a class="menu_btn_1" href="">БАЗА ОТДЫХА</a>
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
    min-height: calc(100% - 156px);
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
                color: #f1ecec;
                width: 100%;
                height: 512px;
                max-height: 33%;
                border-radius: 16px 16px 0px 0px ;
                background-image: url('img1611.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 50% 50%;
                position: relative;
            ">
                <div style="
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0px;
                    left: 0px;
                    background: rgba(0,0,0,0.25);
                    border-radius: 16px 16px 0px 0px ;
                ">
                    <div id="fpt" style="
                        position: absolute;
                        top: 50%;
                        left: 25%;
                        transform: translate(-12.5%, -50%);
                        text-align: center;
                        color: #f1ecec;
                        font-size: 1.2em;
                    ">
<a style="font-size: 1.5em;">Новые правила размещения</a><br>
<br>
С 15 октября заселение в отели  и посещение<br>
культурных мероприятий только с QR-кодом или ПЦР-тестом.<br>
                    </div>
                </div>
            </div>
            <div style="
                border-top: 8px solid #6d2a53;
                padding: 16px;
                width: calc(100% - 32px);
                text-align: left;
                font-size: 1.2em;
                background: #053d57;
                color: #f1ecec;
                border-radius: 0px 0px 16px 16px;
                float: left;
            ">
                <div class="br_el" style="float: left; margin: 16px;">
                    Бронирование 
                </div>
                <div class="br_el" style="float: left; margin-right: 8px;">
                    <table style="width: 100%; color: #f1ecec;">
                        <tr>
                            <td>
                                Выберите домик
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select style="width: 100%;  font-size: 16px; font-family: fnt; padding: 7px;">
                                  <option>-</option>
                                  <option>На 2-3 чел.</option>
                                  <option>На 7-12 чел.</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="br_el" style="float: left; margin-right: 8px;">
                    <table style="width: 100%; color: #f1ecec;">
                        <tr>
                            <td>
                                Дата заезда
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" style="width: 100%;  font-size: 14px; font-family: fnt; padding: 4px;"/>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="br_el" style="float: left; margin-right: 8px;">
                    <table style="width: 100%; color: #f1ecec;">
                        <tr>
                            <td>
                                Дата выезда
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" style="width: 100%;  font-size: 14px; font-family: fnt; padding: 4px;"/>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="br_el" style="float: left; margin-right: 8px;">
                    <table style="width: 100%; color: #f1ecec;">
                        <tr>
                            <td>
                                Гости
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select style="width: 100%; font-size: 16px; font-family: fnt; padding: 7px;">
                                  <option>-</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div onclick="fvn();" style="float: left; padding: 12px; margin: 4px; background: #6d2a53; cursor: pointer;">
                    Поиск
                </div>
            </div>
            <table style="
                margin-top: 32px;
                padding: 8px;
                width: 100%;
                font-size: 1.2em;
                border-spacing: 16px;
                float: left;
            ">
                <tr>
                    <td style="
                        width: 50%;
                        text-align: justify;
                    ">
Для наших гостей мы предлагаем большое количество вариантов для активного и для размеренного отдыха. А завораживающие пейзажи никого не оставят равнодушными и оставят у вас только самые волшебные воспоминания. Возможности нашего парк-отеля рассчитаны как на взрослых, так и на самых маленьких гостей. Допускается размещение с животными.
<br><br>
К вашим услугам:<br>
- культурные программы и мастер-классы<br>
- рыбалка<br>
- экскурсии и фотосессии<br>
- фестивали и праздники<br>
- комфортное проживание в домиках<br>
- невероятные пейзажи<br>
                    </td>
                    <td id="td_img" style="
                        width: 50%;
                        background: #053d57;
                        border-radius: 8px;
                        background-image: url('img0.jpeg');
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: 50% 50%;
                    ">

                    </td>
                </tr>
            </table>
            <div style="
                margin-top: 32px;
                width: 33%; 
                border-top: 2px solid #053d57; 
                margin-left: 33%; 
                margin-right: 33%;
                margin-bottom: 16px;
                float: left;
            ">
            </div>
            <div style="
                width: 100%;
                font-size: 1.5em;
                float: left;
            ">
                <i>По мнению 100% наших клиентов, если Вы не были у нас - Вы не отдыхали!</i>
            </div>
            <div style="
                margin-top: 16px;
                width: 33%; 
                border-top: 2px solid #053d57; 
                margin-left: 33%; 
                margin-right: 33%;
                margin-bottom: 32px;
                float: left;
            ">
            </div>
            <div id="b_3" style="
                width: 100%;
                margin-top: 64px;
                float: right;
            ">
            </div>
            <div style="
                margin-top: 64px;
                padding: 16px;
                width: calc(100% - 32px);
                text-align: left;
                font-size: 1.5em;
                background: #053d57;
                color: #f1ecec;
                border-radius:16px;
                float: left;
            ">
                <u style="cursor: pointer;" onclick="
                    if($('#e_pon').css('display')=='none'){
                        $('#e_pon').css('display', 'block');
                    }else{
                        $('#e_pon').css('display', 'none');
                    }
                ">Нажми, чтобы узнать о нас подробнее...</u>
                <div id="e_pon" style="
                    display: none;
                    margin-top: 16px;
                    padding: 8px;
                    width: calc(100% - 16px);
                    text-align: center;
                    font-size: 0.8em;
                    float: left;
                    text-align: justify;
                ">
База отдыха «Каспийский лотос» предлагает отдых с рыбалкой и проживанием в домиках вблизи раскатов Каспия. Местность подходит для охоты на водоплавающую дичь и подводной охоты. Здесь водятся сазан, сом, судак, жерех, лещ, линь, вобла, карась, щука. Отдыхающим с детьми предлагается организация водных прогулок на лодке, катание на лошади по окрестностям.<br>

База «Каспийский лотос» расположена в 1,5 км от села Вышка и в 150 км от Астрахани. Добраться сюда можно на личном автомобиле по трассе E-119, через Лесное, Забурунное, Вышку, или воспользовавшись услугой доставки транспортом базы отдыха (по предварительному заказу).<br>
Территория базы находится у воды. Для гостевого водного транспорта имеется стоянка и оборудованный лодочный спуск.<br>
<br>
Размещение: <br>
Для проживания база отдыха предлагает отдельно стоящие домики с двухместными номерами категорий люкс и стандарт.<br>
В номерах кухня, санузел, кондиционер, электрическая плита, комплект посуды, холодильник, чайник. Выдаются постельное белье и полотенца.<br>
<br>
Рядом с каждым домиком установлена беседка с костровой площадкой и мангалом.<br>
Возможно проживание с домашними животными.<br>
Для сотрудников ОАО «РЖД» действуют скидки на проживание и услуги.<br>
                </div>
            </div>
            <div style="
                margin-top: 64px;
                padding-top: 16px;
                width: calc(100%);
                text-align: center;
                font-size: 1.5em;
                border: 2px solid #053d57;
                float: left;
                background: #053d57;
                color: #f1ecec;
                border-radius: 16px 16px 0px 0px;
            ">
                Как нас найти?
            </div>
            <div style="
                padding-top: 16px;
                background: #053d57;
                color: #f1ecec;
                width: 100%;
                height: 512px;
                max-height: 25%;
                border-radius: 0px 0px 16px 16px;
                border: 2px solid #053d57;
                float: left;
            ">
                <iframe style="
                    border-radius: 16px;
                    float: left;
                " src="https://yandex.ru/map-widget/v1/?um=constructor%3A6e96d7099a30c471eff391cf853728c2ba6d089ada811ffd96abfdd1eb3e98be&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
	    </div>
    </div>
		<!-- FOOT -->		
		<div style="
    height: 50px;
    padding: 5px;
    //border-top: 1px solid #bbb;
    width: calc(100% - 10px);
    background: #fff;
    z-index: 3;
    position: relative;
    box-shadow: 0px 2px 6px 0px #000;
">
			<a style="
    position: relative;
    float: left;
    padding: 14px;
    font-size: 16px;
    font-family: fnt;
    color: #053d57;
    text-decoration: unset;
	padding-right: 0px;
" href="/">© Каспийский Лотос, 2021<a id="t_date" style="
    display: none;
    position: relative;
    float: left;
    padding: 14px;
    font-size: 16px;
    font-family: fnt;
    color: #999;
    text-decoration: unset;
	padding-left: 0px;
"></a></a>
<!--
			<a style="
    position: relative;
    float: right;
    padding: 14px;
    font-size: 16px;
    font-family: fnt;
    color: #999;
" href="mailto:наша_почта@почта.ру">почта@почта.ру</a>
-->
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
				$('#td_img').css('display', 'none');
				$('.br_el').css('width', '100%');
				$('#fpt').css('font-size', '0.9em');
				$('#b_3').html(''+
                    '<div style="width: calc(50% - 4px); float: left; margin-right:8px;">'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img411.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px; margin-bottom: 8px;">'+
                        '</div>'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img2.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px;">'+
                        '</div>'+
                    '</div>'+
                    '<div style="width: calc(50% - 4px); float: left;">'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img3.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 2 + 12px); border-radius: 8px;">'+
                        '</div>'+
                    '</div><br>'+
                    '<div style="border: 2px solid #053d57; background-image: url(\'img4.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px; margin-top: 8px;">'+
                    '</div>'+
                    '<div style="border: 2px solid #053d57; background-image: url(\'img412.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px; margin-top: 8px;">'+
                    '</div>'+
                '');
            }
            else{
            	$('#img_logo').attr('src', 'logo_w2.png');
            	$('#img_menu').css('display', 'none');
            	$('.menu_btn').css('display', 'block');
            	$('#div_search').css('display', 'block');
            	$('#td_img').css('display', 'table-cell');
            	$('.br_el').css('width', 'unset');
            	$('#fpt').css('font-size', '1.3em');
				$('#b_3').html(''+
    				'<div style="width: calc(25% - 8px); float: left; margin-right:8px;">'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img411.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px; margin-bottom: 8px;">'+
                        '</div>'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img2.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px;">'+
                        '</div>'+
                    '</div>'+
                    '<div style="width: calc(25% - 8px); float: left; margin-right:8px;">'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img3.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 2 + 12px); border-radius: 8px;">'+
                        '</div>'+
                    '</div>'+
                    '<div style="width: calc(50%); float: left;">'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img4.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px; margin-bottom: 8px;">'+
                        '</div>'+
                        '<div style="border: 2px solid #053d57; background-image: url(\'img412.jpeg\'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; float: left; width: 100%; height: calc(1022px / 4); border-radius: 8px;">'+
                        '</div>'+
                    '</div>'+
				'');
            }
		}
		
</script>
</body></html>