<ul class="menuwrap">
    <li style="margin: 0 auto;"><img class="imagesize" src="/images/logo.png"></li>
    <li id="hdMsg" style="margin:0 auto;"></li>
    <div class="buttonArea">
		<li class="mailButton"><input type="button" class="styled" onclick="mailClick()" value="メールはこちら"></li>
		<li class="telButton"><input type="button" class="styled" id="phoneCall"  onclick="telClick()" value="電話はこちら"></li>
    </div>
</ul>

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
        <a href="/campaign/{{$val1}}/{{$val2}}">割引</a>
    </div>
</div>

<script type="text/javascript">
	$(function(){
		var ua = navigator.userAgent;
		if ((ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) ||
			(ua.indexOf("iPad") > 0 || ua.indexOf("Android") > 0)) {
			$("#hdMsg").html('');
			$("#phoneCall").show();
		} else {
//			$("#hdMsg").html('');
			$("#hdMsg").html('<a href="tel:0120065955"><img class="imagesize" src="/images/head_tel.png"></a>');
//			$("#phoneCall").show();
			$("#phoneCall").hide();
		}		
	})

    function mailClick() {
        location.href = "/contact/{{$val1}}/{{$val2}}";
    }
    function telClick() {
    	location.href = "tel:0120065955";
    }
</script>