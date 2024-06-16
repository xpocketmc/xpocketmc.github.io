<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plugin List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.css">
    <link rel="stylesheet" href="css/bootstrgap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">XPocketMCPlugins</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h1 class="mt-5">Available Plugins</h1>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">ClearLagg PocketMine</h5>
                    <p class="card-text">Helps to clear lag on your server by removing entities.</p>
                    <a href="download.php?plugin=clearlagg" class="btn btn-primary">Download</a>
                </div>
                </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">CustomNPCs PocketMine</h5>
                    <p class="card-text">CustomNPCs for your server</p>
                    <a href="download.php?plugin=customnpcs" class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
        <!-- Add more plugins here as cards -->
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<footer>
  <div class="container">
    <p>&copy; <?php echo date("Y"); ?> XPocketMC. All rights reserved.</p>
  </div>
</footer>