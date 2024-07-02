<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
  <style>
    /* Add your CSS styles here */
    .counts {
      padding-top: 10px;
      padding-bottom: 10px;
      background-color: #f6f7f9;
      text-align: center;
    }

    .counters .col-lg-3 {
      margin-bottom: 30px;
    }

    .purecounter {
      font-size: 48px;
      font-weight: bold;
      color: #707077;
    }

    .purecounter::after {
      content: attr(data-count);
      display: block;
    }
  </style>
</head>
<body>
  <section id="counts" class="counts bg-dark-subtle">
    <div class="container-fluid">
      <div class="row counters">
        <div class="col-lg-3 col-6 text-center">
          <span id="clientsCounter" class="purecounter" data-count=""></span>
          <p class="text text-uppercase fw-bold fs-5">Products</p>
          <i class="bi bi-box-seam" style="font-size: 65px; color: #21b313;"></i>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span id="projectsCounter" class="purecounter" data-count=""></span>
          <p class="text text-uppercase fw-bold fs-5">Sub Brands</p>
          <i class="bi bi-diagram-3-fill" style="font-size: 65px; color: #21b313;"></i>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span id="hoursCounter" class="purecounter" data-count=""></span>
          <p class="text text-uppercase fw-bold fs-5">Total Employees</p>
          <i class="bi bi-people-fill" style="font-size: 65px; color: #21b313;"></i>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span id="workersCounter" class="purecounter" data-count=""></span>
          <p class="text text-uppercase fw-bold fs-5">Country</p>
          <i class="bi bi-globe-americas " style="font-size: 65px; color: #21b313;"></i>
        </div>
      </div>
    </div>
  </section>

  <script>
    function animateValue(id, start, end, duration) {
      var obj = document.getElementById(id);
      var range = end - start;
      var current = start;
      var increment = end > start ? 1 : -1;
      var stepTime = Math.abs(Math.floor(duration / range));
      var timer = setInterval(function () {
        current += increment;
        obj.textContent = current;
        if (current == end) {
          clearInterval(timer);
        }
      }, stepTime);
    }

    document.addEventListener('DOMContentLoaded', function () {
      // Set up counters
      animateValue("clientsCounter", 0, 20, 10000); // 2 seconds
      animateValue("projectsCounter", 0, 10, 10000); // 2 seconds
      animateValue("hoursCounter", 0, 450, 10000); // 2 seconds
      animateValue("workersCounter", 0, 12, 10000); // 2 seconds
    });
  </script>
</body>
</html>
