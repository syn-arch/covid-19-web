<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="vendor/fa/css/all.min.css">

  <title>COVID19 BY DIASCODE</title>
</head>
<body>

  <navbar class="navbar navbar-expand-lg shadow fixed-top">
    <div class="container">
      <a href="#landing" class="nav-brand font-weight-bold text-white">COVID 19</a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#my-nav">
        <i class="fa fa-bars text-white nav-toggler-i"></i>
      </button>

      <div class="collapse navbar-collapse" id="my-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#landing" class="nav-link text-white">HOME</a>
          </li>
          <li class="nav-item">
            <a href="#discover" class="nav-link text-white">DISCOVER</a>
          </li>
          <li class="nav-item">
            <a href="#symptoms" class="nav-link text-white">SYMPTOMS</a>
          </li>
          <li class="nav-item">
            <a href="#contaigon" class="nav-link text-white">CONTAIGON</a>
          </li>
          <li class="nav-item">
            <a href="#prevention" class="nav-link text-white">PREVENTION</a>
          </li>
        </ul>
      </div>

    </div>
  </navbar>

  <div class="landing" id="landing">
    <div class="overlay text-white d-flex align-items-center">
      <div class="container w-100 text-center" id="landing-text">
        <h1 class="text-center font-weight-bold landing-title d-block">COVID 19</h1>
        <div class="description-text text-center mb-5">
          <span class="font-weight-bold">Coronavirus disease 2019 (COVID-19)</span>
          is an infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease was first identified in 2019 in Wuhan, Central China, and has since spread globally, resulting in the 2019–20 coronavirus pandemic.
        </div>
        <a href="#discover">
          <img src="assets/img/arrow.png" alt="arrow icon" class="arrow img-fluid">
        </a>
      </div>
    </div>
  </div>

  <div class="discover" id="discover">
    <div class="row mr-0">
      <div class="col-md-6 discover-img text-white">
        <div class="overlay">
          <div class="container discover-left">
          <h2 class="text-center font-weight-bold mt-5 mb-5">DISCOVER</h2>
            <ul>
              <li>8 new countries/territories/areas (Bulgaria, Costa Rica, Faroe Islands, French Guiana, Maldives, Malta, Martinique, and Republic of Moldova) have reported cases of COVID-19 in the past 24 hours.</li>
              <li class="mt-3">Over 100 countries have now reported laboratory-confirmed cases of COVID19.</li>
              <li class="mt-3">WHO has issued a consolidated package of existing preparedness and response guidance for countries to enable them to slow and stop COVID-19 transmission and save lives. WHO is urging all countries to prepare for the potential arrival of COVID-19 by readying emergency response systems; increasing capacity to detect and care for patients; ensuring hospitals have the space, supplies and necessary personnel; and developing life-saving medical interventions</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="container discover-right">
          <h2 class="text-center font-weight-bold mt-5">INFORMATION</h2>
          <p class="text-center">Live statistics and coronavirus news tracking the number of confirmed cases, recovered patients, and death toll by country due to the COVID 19 coronavirus from Wuhan, China. </p>
          <form id="form-information" method="POST" class="mt-5">
            <div class="form-group">
              <label for="categories">Categories</label>
              <select name="categories" id="categories" class="form-control shadow">
                <option value="select_categories">-- Select Categories --</option>
                <option value="worldwide">Get Information World Wide</option>
                <option value="get_by_country">Get Information By Country Name</option>
              </select>
            </div>
            <div class="form-group mt-4" id="country_name">
              <label for="country_name">Country Name</label>
              <input type="country_name" class="form-control country_input shadow country_name" placeholder="Country Name">
            </div>
            <div class="form-group mt-4">
              <button type="submit" class="btn btn-dark btn-block">Submit</button>
            </div>
          </form>
          <small class="text-muted text-center">But in the following days they felt like that they were the only people in the state who wanted to find out. </small>
        </div>
      </div>
    </div>
  </div>

  <div class="symptoms text-white" id="symptoms">
    <div class="overlay">
      <h2 class="text-center font-weight-bold mt-5 symptoms-element">SYMPTOMS</h2>
      <div class="row mr-0 symptoms-element">
        <div class="col-md-6">
          <div class="container p-5">
            <h4>High Fever</h4>
            <p>he WHO initially recommended using acetaminophen instead of ibuprofen to help reduce fever and aches and pains related to this coronavirus.</p>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row mr-0 symptoms-element" style="transform: translateY(-100px);">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <div class="container p-5">
            <h4>Cough</h4>
            <p>What is a dry cough? Health experts say one symptom of COVID-19 is coughing without bringing up mucus</p>
          </div>
        </div>
      </div>
      <div class="row mr-0 symptoms-element" style="transform: translateY(-200px);">
        <div class="col-md-6">
          <div class="container p-5">
            <h4>Sore Throath</h4>
            <p>In the US, the most common test for the COVID-19 virus looks for viral RNA in a sample taken with a swab from a person's nose or throat..</p>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row mr-0 symptoms-element" style="transform: translateY(-300px);">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <div class="container p-5">
            <h4>Headache</h4>
            <p>That's the most common symptom among people who get the coronavirus that's sweeping the world..</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contaigon" id="contaigon">
    <div class="container mb-5">
      <h2 class="text-center font-weight-bold mt-5 contaigon-rev">CONTAIGON</h2>
      <p class="text-center contaigon-rev">As we can see in the chart, coronavirus spreads more easily than seasonal flu. The reproduction rate (also called "R0" or "R naught") is somewhere between 2 and 2.6. It's shown as a range because it varies between places and is influenced by the measures taken to slow transmission.</p>

      <div class="row mt-5">
        <div class="col-md-4 contaigon-rev">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/c1.jpg" alt="Contaigon Img" class="card-img">
            </div>
          </div>
          <h4 class="mt-4">Personal Contact</h4>
          <p>close personal contact; contact with an object or surface with viral particles on it and then touching your mouth, nose or eyes.</p>
        </div>
        <div class="col-md-4 contaigon-rev">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/c2.jpg" alt="Contaigon Img" class="card-img">
            </div>
          </div>
          <h4 class="mt-4">Contaminated Objects</h4>
          <p>People may acquire coronavirus through air and by touching contaminated surfaces.</p>
        </div>
        <div class="col-md-4 contaigon-rev">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/c3.jpg" alt="Contaigon Img" class="card-img">
            </div>
          </div>
          <h4 class="mt-4">Animal Contact</h4>
          <p>They should avoid contact with live animal markets, stray animals and wild animals, and should not eat raw fish, or other raw animal.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="prevention text-white" id="prevention">
    <div class="overlay">
      <h2 class="text-center font-weight-bold mt-5 prevention-rev">Prevention</h2>
      <div class="container">
        <p class="text-center prevention-rev">Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your national and local public health authority. Most people who become infected experience mild illness and recover, but it can be more severe for others</p>
        <div class="vh5"></div>
        <div class="row prevention-rev">
          <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
            <i class="fa fa-user fa-lg fa-4x"></i>
          </div>
          <div class="col-md-10 mt-5">
            <h4 class="font-weight-bold">Wash your hands often</h4>
            <p>Clean your hands often. Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place.</p>
          </div>
        </div>
        <div class="row mt-3 prevention-rev">
          <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
            <i class="fa fa-user fa-lg fa-4x"></i>
          </div>
          <div class="col-md-10 mt-3">
            <h4 class="font-weight-bold">Wear a face mask</h4>
            <p>As coronavirus continues to spread, face masks in public are common in many parts of Asia, but the U.S. discourages them.</p>
          </div>
        </div>
        <div class="row mt-3 prevention-rev">
          <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
            <i class="fa fa-user fa-lg fa-4x"></i>
          </div>
          <div class="col-md-10 mt-3">
            <h4 class="font-weight-bold">Avoid contact with sick people</h4>
            <p>Steps to help prevent the spread of COVID-19 if you are sick, Limit contact with pets & animals: You should restrict contact with pets and other animals.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="subscribe">
    <div class="container subscribe-rev">
      <h2 class="text-center font-weight-bold mt-5">SUBSCRIBE</h2>
      <p class="text-center">Newsletter subscription. Subscribe to our newsletter and stay updated on the latest developments and special offers! Your newsletter preferences.</p>
      <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="input-group mt-4">
          <input type="text" class="form-control input-subscribe" placeholder="yourmail@example.com">
          <button class="btn btn-dark input-group-append" id="subscribe-button">GO</button>
        </div>
      </div>
    </div>
  </div>

  <div class="footer text-white pt-5 mt-5">
    <div class="container">
      <div class="row mr-0">
        <div class="col-md-5">
          <h4>CORONAVIRUS (COVID19)</h4>
          <p>  is an infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease was first identified in 2019 in Wuhan, Central China, and has since spread globally, resulting in the 2019–20 coronavirus pandemic.</p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h4>SITES</h4>
          <ul class="list-unstyled">
            <li>HOME</li>
            <li>DISCOVER </li>
            <li>SYMPTOMS</li>
            <li>CONTAIGON</li>
            <li>PREVENTION</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>Thanks,</h4>
        </div>
      </div>
    </div>
    <div class="bg-secondary text-white mt-4">
      <p class="text-center mb-0 py-3">&copy; <?php echo date('Y') ?> By Adiatna Sukmana</p>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="vendor/jquery-3.4.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/scrollreveal.min.js"></script>
  <script src="vendor/fa/js/all.min.js"></script>
  <script src="vendor/sweetalert2/sweetalert2.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>