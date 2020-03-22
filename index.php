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
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde explicabo deserunt facilis cum perspiciatis quaerat aut quibusdam, ea assumenda delectus fugit rem voluptatibus iusto, esse blanditiis maiores! Laboriosam incidunt, quas!</li>
              <li class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde explicabo deserunt facilis cum perspiciatis quaerat aut quibusdam, ea assumenda delectus fugit rem voluptatibus iusto, esse blanditiis maiores! Laboriosam incidunt, quas!</li>
              <li class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde explicabo deserunt facilis cum perspiciatis quaerat aut quibusdam, ea assumenda delectus fugit rem voluptatibus iusto, esse blanditiis maiores! Laboriosam incidunt, quas!</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="container discover-right">
          <h2 class="text-center font-weight-bold mt-5">INFORMATION</h2>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptatum!</p>
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
          <small class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, expedita voluptatibus similique enim. In maiores, accusamus veritatis, id incidunt nulla dicta quis alias vel neque, cumque et dolorem at. Dignissimos.</small>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus doloribus atque, ullam magnam totam reprehenderit molestias dolores architecto! Sapiente nisi corporis numquam necessitatibus non, voluptatum illo rem ad optio est.</p>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row mr-0 symptoms-element" style="transform: translateY(-100px);">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <div class="container p-5">
            <h4>Cough</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus doloribus atque, ullam magnam totam reprehenderit molestias dolores architecto! Sapiente nisi corporis numquam necessitatibus non, voluptatum illo rem ad optio est.</p>
          </div>
        </div>
      </div>
      <div class="row mr-0 symptoms-element" style="transform: translateY(-200px);">
        <div class="col-md-6">
          <div class="container p-5">
            <h4>Sore Troath</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus doloribus atque, ullam magnam totam reprehenderit molestias dolores architecto! Sapiente nisi corporis numquam necessitatibus non, voluptatum illo rem ad optio est.</p>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row mr-0 symptoms-element" style="transform: translateY(-300px);">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <div class="container p-5">
            <h4>Headache</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus doloribus atque, ullam magnam totam reprehenderit molestias dolores architecto! Sapiente nisi corporis numquam necessitatibus non, voluptatum illo rem ad optio est.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contaigon" id="contaigon">
    <div class="container mb-5">
      <h2 class="text-center font-weight-bold mt-5 contaigon-rev">CONTAIGON</h2>
      <p class="text-center contaigon-rev">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut tenetur laudantium temporibus autem nihil quis doloremque recusandae fuga nobis, est, minima odio sunt asperiores. Repellat debitis totam esse, odit illum!</p>

      <div class="row mt-5">
        <div class="col-md-4 contaigon-rev">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/c1.jpg" alt="Contaigon Img" class="card-img">
            </div>
          </div>
          <h4 class="mt-4">Personal Contact</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at maxime tempora eveniet autem omnis suscipit voluptatum beatae aperiam natus.</p>
        </div>
        <div class="col-md-4 contaigon-rev">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/c1.jpg" alt="Contaigon Img" class="card-img">
            </div>
          </div>
          <h4 class="mt-4">Contaminated Objects</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at maxime tempora eveniet autem omnis suscipit voluptatum beatae aperiam natus.</p>
        </div>
        <div class="col-md-4 contaigon-rev">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/c1.jpg" alt="Contaigon Img" class="card-img">
            </div>
          </div>
          <h4 class="mt-4">Animal Contact</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at maxime tempora eveniet autem omnis suscipit voluptatum beatae aperiam natus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="prevention text-white" id="prevention">
    <div class="overlay">
      <h2 class="text-center font-weight-bold mt-5 prevention-rev">Prevention</h2>
      <div class="container">
        <p class="text-center prevention-rev">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut tenetur laudantium temporibus autem nihil quis doloremque recusandae fuga nobis, est, minima odio sunt asperiores. Repellat debitis totam esse, odit illum!</p>
        <div class="vh5"></div>
        <div class="row prevention-rev">
          <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
            <i class="fa fa-user fa-lg fa-4x"></i>
          </div>
          <div class="col-md-10 mt-5">
            <h4 class="font-weight-bold">Wash your hands often</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui obcaecati eius nisi dolorum, quod eveniet temporibus ipsum illum. Porro voluptatem obcaecati, dolorum quia soluta eaque! Quaerat voluptatibus assumenda accusamus.</p>
          </div>
        </div>
        <div class="row mt-5 prevention-rev">
          <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
            <i class="fa fa-user fa-lg fa-4x"></i>
          </div>
          <div class="col-md-10 mt-5">
            <h4 class="font-weight-bold">Wear a face mask</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui obcaecati eius nisi dolorum, quod eveniet temporibus ipsum illum. Porro voluptatem obcaecati, dolorum quia soluta eaque! Quaerat voluptatibus assumenda accusamus.</p>
          </div>
        </div>
        <div class="row mt-5 prevention-rev">
          <div class="col-md-2 text-center d-flex align-items-center justify-content-center">
            <i class="fa fa-user fa-lg fa-4x"></i>
          </div>
          <div class="col-md-10 mt-5">
            <h4 class="font-weight-bold">Avoid contact with sick people</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui obcaecati eius nisi dolorum, quod eveniet temporibus ipsum illum. Porro voluptatem obcaecati, dolorum quia soluta eaque! Quaerat voluptatibus assumenda accusamus.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="subscribe">
    <div class="container subscribe-rev">
      <h2 class="text-center font-weight-bold mt-5">SUBSCRIBE</h2>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut tenetur laudantium temporibus autem nihil quis doloremque recusandae fuga nobis, est, minima odio sunt asperiores. Repellat debitis totam esse, odit illum!</p>
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