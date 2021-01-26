<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Anasayfa</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script> 
    function addEkmek() {
      document.getElementById("ekmek").innerHTML = "Somun ekmek";
      $('.toast').toast('show');
    }
    function addCikolata() {
      document.getElementById("ekmek").innerHTML = "Çikolata";
      $('.toast').toast('show');

    }
    function addDomates() {
      document.getElementById("ekmek").innerHTML = "Domates";
      $('.toast').toast('show');

    }

  </script> 

</head>

<body>

  <div class="bg-light">

    <div class="text-center">
      <img src="bm.png" alt="Italian Trulli">
      <h3>Erciyes Üniversitesi Bilgisayar Mühendisliği Bölümü Web Programlama 1 dersi final sorusu</h3>
      <h3 class="font-weight-normal">Dr. Öğr. Üyesi Fehim KÖYLÜ</h3>
      <h2 class="font-weight-bold">Alışveriş Uygulaması</h2>
      <p>Vermek istediğiniz siparişler için aşağıdaki listeden seçerek adedini belirtiniz.</p>
    </div>

    <div class="row align-items-center justify-content-center p-4">
      <div class="card m-1" style="width:400px">
        <div class="card-header text-center">Ekmek</div>
        <div class="card-body text-center">
          <div>
            <h4 class="card-title">2₺ / adet</h4>
          </div>
          <p class="card-text">Somun Ekmek</p>
          <p class="card-text">200 gr</p>
          <button type="button" class="btn btn-primary btn-block" onclick="addEkmek()">Sepete ekle</button>
        </div>
      </div>
      <div class="card m-1" style="width:400px">
        <div class="card-header text-center">Çikolata</div>
        <div class="card-body text-center">
          <div>
            <h4 class="card-title">5₺ / adet</h4>
          </div>
          <p class="card-text">Bitter çikolata</p>
          <p class="card-text">60 gr</p>
          <button type="button" class="btn btn-primary btn-block" onclick="addCikolata()">Sepete ekle</button>
        </div>
      </div>
      <div class="card m-1" style="width:400px">
        <div class="card-header text-center">Domates</div>
        <div class="card-body text-center">
          <div>
            <h4 class="card-title">6₺ / kg</h4>
          </div>
          <p class="card-text">Domates</p>
          <p class="card-text">Antalya Sera</p>
          <button type="button" class="btn btn-primary btn-block" onclick="addDomates()">Sepete ekle</button>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <h5 class="text-secondary d-flex">Siparişleriniz
        <span class="badge badge-secondary">3</span>
      </h5>
      <p id="ekmek"></p>
      <p id="cikolata"></p>
      <p id="domates"></p>
      <div class="toast" data-autohide="false">
        <div class="toast-body">
          Somun ekmek
        </div>
      </div>

    </div>  

    <div class="text-center">
      <p>© Fehim KÖYLÜ Erciyes Üniversitesi Bilgisayar Mühendisliği Bölümü
      </p>
      <a href="#">
      Bölüm sayfası </a><a href="#">Alışveriş kuralları</a><a href="#"> Destek</a>
    </div>

  </div>

</body>
</html>
