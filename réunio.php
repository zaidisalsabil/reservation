<?php






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <iframe src="nav.html" width="102%" height="70px" frameborder="0"></iframe>
    <style>
        /* Ajoutez votre propre style CSS ici */
        .room-image {
          height: 300px; /* Définir la hauteur de l'image */
          object-fit: cover; /* Assurez-vous que l'image s'étend pour couvrir tout le cadre */
          margin-bottom: 20px; /* Espacement entre l'image et le texte */
          margin-top: 80px;
          margin-left: 100px;
        }
        .room-description {
          text-align: left; /* Aligner le texte à gauche */
        }
        footer{
            margin-top: 50px;
        }
        button{
            background-color: rgb(168, 166, 162);

        }
      </style>
    </head>
    <body>
      <div class="container mt-4">
        <div class="row">
          <!-- Affichage de l'image à gauche -->
          <div class="col-md-6 order-md-2">
            <img src="images/reunion.jpeg" class="img-fluid room-image" alt="">
           
          </div>
          <!-- Affichage de la description et du formulaire de réservation à droite -->
          <div class="col-md-6 room-description order-md-1">
            <h2>Salle de réunion de luxe</h2>
            <p>
              L’hôtel BENI-HAMAD possède une salle de réunion pour 45 places .
              L’expérience et le savoir faire de notre staff garantissent la réussie de votre événement.
            </p>
            <!-- Formulaire de réservation -->
            <form action="réunion.php" method="post">
              <div class="form-group">
                <label for="date"> Date  :</label>
                <input type="date" class="form-control" id="date">
              </div>
              <div class="form-group">
                <label for="time"> Heure  :</label>
                <input type="time" class="form-control" id="heure">
              </div>
              <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="nom">
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email">
              </div>
              <button type="submit" class="">Réserver la salle</button>
            </form>
          </div>
        </div>
      </div>
        <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p>Tous droits réservés &copy; 2024</p>
    </div>
  </footer>
          
    
    <script src="js/popper.min js.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>