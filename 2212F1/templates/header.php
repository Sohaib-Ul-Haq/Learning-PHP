<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
   <!-- Nav tabs -->
   <ul class="nav nav-tabs" id="navId" role="tablist">
    <li class="nav-item">
        <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#tab2Id">Action</a>
            <a class="dropdown-item" href="#tab3Id">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
        </div>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
    </li>
   </ul>
   
   <!-- Tab panes -->
   <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
   </div>
   
   <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
   <script>
    var triggerEl = document.querySelector('#navId a')
    bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
   </script>
   
  </header>