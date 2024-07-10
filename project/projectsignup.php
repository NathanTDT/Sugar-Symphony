<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="projectsignupcss.css">
      
   </head>
   <body>
      <div class="center">
         <div class="container">
            
            <div class="text">
               Sign Up
            </div>
            <form action="http://localhost/project/verifyregister.php" method="post" >
               <div class="data">
                  <label>Username</label>
                  <input type="text" name="username" class="username" id="username"  required>
                  <div id="usernameavail"></div>
               </div>
               
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email" class="email" id="email" required>
                  <div id="emailavail"></div>
               </div>
               
               <div class="data">
                <label>Phone</label>
                <div class="phone-input">
                <select id="regionCode" name="regionCode">
                  <option value="+248">AX</option>
                  <option value="+93">AF</option>
                  <option value="+358 18">AX</option>
                  <option value="+355">AL</option>
                  <option value="+213">DZ</option>
                  <option value="+1 684">AS</option>
                  <option value="+376">AD</option>
                  <option value="+244">AO</option>
                  <option value="+1 264">AI</option>
                  <option value="+1 268">AG</option>
                  <option value="+54">AR</option>
                  <option value="+374">AM</option>
                  <option value="+297">AW</option>
                  <option value="+247">AC</option>
                  <option value="+61">AU</option>
                  <option value="+672 1">AQ</option>
                  <option value="+672">AQ</option>
                  <option value="+43">AT</option>
                  <option value="+994">AZ</option>
                  <option value="+973">BH</option>
                  <option value="+880">BD</option>
                  <option value="+1 246">BB</option>
                  <option value="+375">BY</option>
                  <option value="+32">BE</option>
                  <option value="+501">BZ</option>
                  <option value="+229">BJ</option>
                  <option value="+1 441">BM</option>
                  <option value="+975">BT</option>
                  <option value="+591">BO</option>
                  <option value="+599 7">BQ</option>
                  <option value="+387">BA</option>
                  <option value="+267">BW</option>
                  <option value="+55">BR</option>
                  <option value="+246">IO</option>
                  <option value="+1 284">VG</option>
                  <option value="+673">BN</option>
                  <option value="+359">BG</option>
                  <option value="+226">BF</option>
                  <option value="+257">BI</option>
                  <option value="+855">KH</option>
                  <option value="+237">CM</option>
                  <option value="+1">CA</option>
                  <option value="+238">CV</option>
                  <option value="+599 3">BQ</option>
                  <option value="+1 345">KY</option>
                  <option value="+236">CF</option>
                  <option value="+235">TD</option>
                  <option value="+64">NZ</option>
                  <option value="+56">CL</option>
                  <option value="+86">CN</option>
                  <option value="+61 89164">CX</option>
                  <option value="+61 89162">CC</option>
                  <option value="+57">CO</option>
                  <option value="+269">KM</option>
                  <option value="+242">CG</option>
                  <option value="+243">CD</option>
                  <option value="+682">CK</option>
                  <option value="+506">CR</option>
                  <option value="+225">CI</option>
                  <option value="+385">HR</option>
                  <option value="+53">CU</option>
                  <option value="+599 9">CW</option>
                  <option value="+357">CY</option>
                  <option value="+420">CZ</option>
                  <option value="+45">DK</option>
                  <option value="+246">DG</option>
                  <option value="+253">DJ</option>
                  <option value="+1 767">DM</option>
                  <option value="+1 809">DO</option>
                  <option value="+670">TL</option>
                  <option value="+56">CL</option>
                  <option value="+593">EC</option>
                  <option value="+20">EG</option>
                  <option value="+503">SV</option>
                  <option value="+240">GQ</option>
                  <option value="+291">ER</option>
                  <option value="+372">EE</option>
                  <option value="+251">ET</option>
                  <option value="+500">FK</option>
                  <option value="+298">FO</option>
                  <option value="+679">FJ</option>
                  <option value="+358">FI</option>
                  <option value="+33">FR</option>
                  <option value="+594">GF</option>
                  <option value="+689">PF</option>
                  <option value="+241">GA</option>
                  <option value="+220">GM</option>
                  <option value="+995">GE</option>
                  <option value="+49">DE</option>
                  <option value="+233">GH</option>
                  <option value="+350">GI</option>
                  <option value="+30">GR</option>
                  <option value="+299">GL</option>
                  <option value="+1 473">GD</option>
                  <option value="+590">GP</option>
                  <option value="+1 671">GU</option>
                  <option value="+502">GT</option>
                  <option value="+224">GN</option>
                  <option value="+245">GW</option>
                  <option value="+592">GY</option>
                  <option value="+509">HT</option>
                  <option value="+504">HN</option>
                  <option value="+852">HK</option>
                  <option value="+36">HU</option>
                  <option value="+354">IS</option>
                  <option value="+91">IN</option>
                  <option value="+62">ID</option>
                  <option value="+98">IR</option>
                  <option value="+964">IQ</option>
                  <option value="+353">IE</option>
                  <option value="+972">IL</option>
                  <option value="+39">IT</option>
                  <option value="+1 876">JM</option>
                  <option value="+81">JP</option>
                  <option value="+962">JO</option>
                  <option value="+7 6, +7 7">KZ</option>
                  <option value="+254">KE</option>
                  <option value="+686">KI</option>
                  <option value="+850">KP</option>
                  <option value="+82">KR</option>
                  <option value="+383, +377 44, +377 45, +386 43, +386 49, +381 28, +381 29, +381 38, +381 39">XK</option>
                  <option value="+965">KW</option>
                  <option value="+996">KG</option>
                  <option value="+856">LA</option>
                  <option value="+371">LV</option>
                  <option value="+961">LB</option>
                  <option value="+266">LS</option>
                  <option value="+231">LR</option>
                  <option value="+218">LY</option>
                  <option value="+423">LI</option>
                  <option value="+370">LT</option>
                  <option value="+352">LU</option>
                  <option value="+853">MO</option>
                  <option value="+389">MK</option>
                  <option value="+261">MG</option>
                  <option value="+265">MW</option>
                  <option value="+60">MY</option>
                  <option value="+960">MV</option>
                  <option value="+223">ML</option>
                  <option value="+356">MT</option>
                  <option value="+692">MH</option>
                  <option value="+596">MQ</option>
                  <option value="+222">MR</option>
                  <option value="+230">MU</option>
                  <option value="+262 269, +262 639">YT</option>
                  <option value="+52">MX</option>
                  <option value="+691">FM</option>
                  <option value="+373">MD</option>
                  <option value="+377">MC</option>
                  <option value="+976">MN</option>
                  <option value="+382">ME</option>
                  <option value="+1 664">MS</option>
                  <option value="+212">MA</option>
                  <option value="+258">MZ</option>
                  <option value="+95">MM</option>
                  <option value="+374 47, +374 97">AM</option>
                  <option value="+264">NA</option>
                  <option value="+674">NR</option>
                  <option value="+977">NP</option>
                  <option value="+31">NL</option>
                  <option value="+599 3, +599 4, +599 7">BQ</option>
                  <option value="+687">NC</option>
                  <option value="+64">NZ</option>
                  <option value="+505">NI</option>
                  <option value="+227">NE</option>
                  <option value="+234">NG</option>
                  <option value="+683">NU</option>
                  <option value="+672 3">NF</option>
                  <option value="+90 392">CY</option>
                  <option value="+44 28">GB</option>
                  <option value="+1 670">MP</option>
                  <option value="+47">NO</option>
                  <option value="+968">OM</option>
                  <option value="+92">PK</option>
                  <option value="+680">PW</option>
                  <option value="+970">PS</option>
                  <option value="+507">PA</option>
                  <option value="+675">PG</option>
                  <option value="+595">PY</option>
                  <option value="+51">PE</option>
                  <option value="+63">PH</option>
                  <option value="+64">PN</option>
                  <option value="+48">PL</option>
                  <option value="+351">PT</option>
                  <option value="+1 787, +1 939">PR</option>
                  <option value="+974">QA</option>
                  <option value="+262">RE</option>
                  <option value="+40">RO</option>
                  <option value="+7">RU</option>
                  <option value="+250">RW</option>
                  <option value="+599 4">BQ</option>
                  <option value="+590">BL</option>
                  <option value="+290">SH</option>
                  <option value="+1 869">KN</option>
                  <option value="+1 758">LC</option>
                  <option value="+590">MF</option>
                  <option value="+508">PM</option>
                  <option value="+1 784">VC</option>
                  <option value="+685">WS</option>
                  <option value="+378">SM</option>
                  <option value="+239">ST</option>
                  <option value="+966">SA</option>
                  <option value="+221">SN</option>
                  <option value="+381">RS</option>
                  <option value="+248">SC</option>
                  <option value="+232">SL</option>
                  <option value="+65">SG</option>
                  <option value="+599 3">BQ</option>
                  <option value="+1 721">SX</option>
                  <option value="+421">SK</option>
                  <option value="+386">SI</option>
                  <option value="+677">SB</option>
                  <option value="+252">SO</option>
                  <option value="+27">ZA</option>
                  <option value="+500">GS</option>
                  <option value="+995 34">XK</option>
                  <option value="+211">SS</option>
                  <option value="+34">ES</option>
                  <option value="+94">LK</option>
                  <option value="+249">SD</option>
                  <option value="+597">SR</option>
                  <option value="+47 79">SJ</option>
                  <option value="+268">SZ</option>
                  <option value="+46">SE</option>
                  <option value="+41">CH</option>
                  <option value="+963">SY</option>
                  <option value="+886">TW</option>
                  <option value="+992">TJ</option>
                  <option value="+255">TZ</option>
                  <option value="+888">XT</option>
                  <option value="+66">TH</option>
                  <option value="+882 16">TS</option>
                  <option value="+228">TG</option>
                  <option value="+690">TK</option>
                  <option value="+676">TO</option>
                  <option value="+373 2, +373 5">PS</option>
                  <option value="+1 868">TT</option>
                  <option value="+290 8">SH</option>
                  <option value="+216">TN</option>
                  <option value="+90">TR</option>
                  <option value="+993">TM</option>
                  <option value="+1 649">TC</option>
                  <option value="+688">TV</option>
                  <option value="+256">UG</option>
                  <option value="+380">UA</option>
                  <option value="+971">AE</option>
                  <option value="+44">GB</option>
                  <option value="+1">US</option>
                  <option value="+878">UP</option>
                  <option value="+598">UY</option>
                  <option value="+1 340">VI</option>
                  <option value="+998">UZ</option>
                  <option value="+678">VU</option>
                  <option value="+58">VE</option>
                  <option value="+39 06 698, assigned +379">VA</option>
                  <option value="+84">VN</option>
                  <option value="+1 808">UM</option>
                  <option value="+681">WF</option>
                  <option value="+967">YE</option>
                  <option value="+260">ZM</option>
                  <option value="+255 24">TZ</option>
                  <option value="+263">ZW</option>
               </select>

                </select>
                <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" placeholder="xxxx-xxxx-xx">
               </div>
             </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" name="password" class="password" id="password" required>
               </div>
               
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="registerbtn" class="registerbtn">Sign Up</button>
               </div>
               
            </form>
         </div>
      </div>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="projloginjava.js"></script>   
      <script>
    const usernamefield = document.getElementById('username');
    const emailfield=document.getElementById('email');           
    usernamefield.onblur = function () {
        console.log('Blur event triggered!');
        checkusername();
    }

    function checkusername() {
        var username = $("#username").val();
        $.ajax({
            method: "POST",
            url: "usernamecheck.php",
            data: { username: username },
            success: function (data) {
                $('#usernameavail').html(data);
            }
        });
    }
    emailfield.onblur = function () {
        console.log('Blur event 2 triggered!');
        checkEmail();
    }

    function checkEmail() {
        var email = $("#email").val();
        $.ajax({
            method: "POST",
            url: "usernamecheck.php",
            data: { email: email },
            success: function (data) {
                $('#emailavail').html(data);
            }
        });
    }
</script>

         
   </body>
</html>

