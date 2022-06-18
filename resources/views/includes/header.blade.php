<div class="wrapper">
    <div class="logo">
        <img src="/images/logo.png" height=50px>
    </div>

    <div id="call" class="headMsg" style="margin:0 auto;">
        <img src="/images/head_tel.png" height=80px>
    </div>

    <div class="mail">
        <input type="button" class="styled" onclick="buttonClick()" value="お問合せはこちらまで">
    </div>
</div>


<div class="wrapper">
    <div class="menu">
        <a href="/top/{{$val1}}/{{$val2}}/1">Home</a>
    </div>
 
    <div class="menu">
        <a href="/about/{{$val1}}/{{$val2}}">会社概要</a>
    </div>

    <div class="menu">
        <a href="/area/{{$val1}}/{{$val2}}">対応エリア</a>
    </div>

    <div class="menu">
        <a href="/campaign/{{$val1}}/{{$val2}}">割引キャンペーン</a>
    </div>
</div>

<script type="text/javascript">
	$(function(){
		var ua = navigator.userAgent;
		var phone = document.getElementById('call')
		if (ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
			phone.innerHTML = '<a href="tel:0120065955"><img src="/images/head_tel.png" height=80px></a>'
		}else if (ua.indexOf("iPad") > 0 || ua.indexOf("Android") > 0) {
			phone.innerHTML = '<a href="tel:0120065955"><img src="/images/head_tel.png" height=80px></a>'
		} else {
			phone.innerHTML = '<img src="/images/head_tel.png" height=80px>'
		}
	})

    function buttonClick() {
        location.href = "/contact/{{$val1}}/{{$val2}}";
    }
</script>