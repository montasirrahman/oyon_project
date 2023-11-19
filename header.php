

    <header class="row">
            
            <div class="">
                <a href="index.php"><img src="./img/logo/logo.png" alt="" class="header_logo"></a>
            </div>
            <div class="hide_in_mobile">
                <a href="#" class="header-text">BROWSER</a>
                <a href="#" class="header-text">CHAT</a>
                <a href="#" class="header-text">COMMUNITY</a>
            </div>
            <div class="hide_in_mobile">
                <a href="#"><i class="material-icons b-googleicon">sms</i></a>
                <a href="#"><i class="material-icons b-googleicon">notifications_none</i></a>
                <a href="#"><i class="material-icons b-googleicon" style="margin-right: 10px;">person</i></a>
                <button  onclick="w3_open()" class="left-slidebar">&#9776;</button>
            </div>
            <div class="hide_in_pc">
              <button  onclick="w3_open()" class="left-slidebar">&#9776;</button>
          </div>
        
    </header>
    <!---Header script-->
    <script>
        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
        }
    </script>

            <!--main-->
            <script>
            $(document).ready(function () {
                $(".register-tab").click(function () {
                  $(".register-box").show();
                  $(".login-box").hide();
                  $(".register-tab").addClass("active");
                  $(".login-tab").removeClass("active");
                });
                $(".login-tab").click(function () {
                  $(".login-box").show();
                  $(".register-box").hide();
                  $(".login-tab").addClass("active");
                  $(".register-tab").removeClass("active");
                });
              });
        </script>