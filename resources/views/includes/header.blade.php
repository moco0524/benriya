            <div class="header">
                <div>
                    <div class="logo">
                        <img src="/images/logo.png" height=50px>
                    </div>
                    <div class="headMsg">
                        <img src="/images/head_tel.png" height=80px>
                    </div>
                    <div class="mail">
                        <input type="button" class="styled" onclick="buttonClick()" value="お問合せはこちらまで">
                        <p>{{$val1}}　{{$val2}}</p>
                    </div>
                </div>
                <div>
                    <div class="menu1">
                        <a href="/top/{{$val1}}/{{$val2}}">Home</a>
                    </div>
                    <div class="menu2">
                        <a href="/about/{{$val1}}/{{$val2}}">会社概要</a>
                    </div>
                    <div class="menu2">
                        <a href="/area/{{$val1}}/{{$val2}}">対応エリア</a>
                    </div>
                    <div class="menu2">
                        <a href="/campaign/{{$val1}}/{{$val2}}">割引キャンペーン</a>
                    </div>
                </div>
            </div>
            
            <script>
                function buttonClick() {
                    location.href = "/contact/{{$val1}}/{{$val2}}";
                }
            </script>
