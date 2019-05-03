  <?php
  require('../public/config.php');
  include($inc .'header.php');
  ?>
  <script>
  function myFunction() {
    var fenster = window.open("", "", "width=600,height=400");
    fenster.document.write("<p>Das ist mein Fenster</p>");
  }
  function alertFunction(){
      alert("Ich bin eine alert Box!");
  }
  function getBrowserInformation(){
    var info = "\n App Name: " + navigator.appName;
    info += "\n App Version: " + navigator.appVersion;
    info += "\n App Code Name: " + navigator.appCodeName;
    info += "\n User Agent: " + navigator.userAgent;
    info += "\n Platform: " + navigator.platform;
    alert("Browserinformationen:" + info);
  }
  </script>

  <div class="wrapper">
  <h2>JavaScript</h2>
  <button onclick="javascript:history.back()">Link zurück</button><br>

  <button onclick="fenster()">Neues Fenster</button><br>

  <button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
  Datum und Uhrzeit.</button>
  <div id="demo"></div>

  <button onclick="alertFunction()">Warnungen</button>

  <h2 onclick="this.innerHTML = 'Ooops!'">Click on this text!</h2>
  <button onclick="getBrowserInformation();">Brwoser Infos</button>
  </div>


  <?php
  include($inc .'footer.php');
  ?>