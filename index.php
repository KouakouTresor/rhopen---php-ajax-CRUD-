<?php
include 'action.php';


?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">



  <!--DATATALABE-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">

  <link rel="stylesheet" href="css/styles.css" type="text/css">


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


  <!--DATATABLE -->
  <!--   <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>



  <script src="js/index.js" async></script>


  <title>Rhopen Lab Academy Admin</title>
</head>

<body style="background-color:white">

  <!--NAVBAR-->
  <div class="pos-f-t">
    <nav class="navbar navbar-dark bg-dark">
      <div clas="float-left">
        <img src="img/logo.jpg" class="img-fluid rounded-circle " alt="logo" style="height: 45px;">
        <h2 class="navbar-brand text-light">Rhopen Academy Lab</h2>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-2" id="navbarToggleExternalContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-light text-bold" id="exit" href="logout.php">Deconnexion<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
              </svg></a>
          </li>
      </div>
    </nav>
  </div>

  <!--DEBUT ADMIN PAGE -->
  <div class="container-fluid">
    <p div="success"></p>
    <div class="row justify-content-center">
      <h1 class="text-center mt-3 mb-3 col-8">Admin Page</h1>
    </div>

    <!--MODAL CONNEXION-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
      <!--data-backdrop="static"  modal static, fix-->
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h2 class="text-center">Connexion</h2>
            <form method="post" class="pt-3 pb-5 text-center" novalidate>
              <div class="form-group">
                <label for="exampleInputEmail1" class="text-center">Adresse e-mail</label>
                <input type="email" id="account" class="form-control" aria-describedby="emailHelp" placeholder="E-mail" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$" placeholder="E-mail" required>
              </div>
              <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" id="password" class="form-control" placeholder="Mot de passe..." required>
              </div>
              <p id="error" style="font-size:11px; color:#cc0000; margin-top:10px"></p>
              <button name="connectionForm" type="submit" id="btnLogin" class="btn btn-color col">Acceder</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!--UL ONGLET -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Formulaire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Liste étudiant</a>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row justify-content-center mt-3 mb-3">

          <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong><?= $_SESSION['response']; ?></strong>
            </div>
          <?php }
          unset($_SESSION['response']); ?>
        </div>


        <!-- FORMULAIRE ONGLET-->
        <form class="needs-validation" action="action.php" method="post" enctype="multipart/form-data" novalidate>
          <input type="hidden" name="id">
          <div class="form-group row justify-content-center">
            <label for="inputNom" class="col-4 col-form-label">Nom :</label>
            <div class="col-6">
              <input type="text" name="nom" pattern="^[a-zA-Z\s]*$" id="validationCustom02" class="form-control" id="inputNom" placeholder="Nom étudiant" required>
              <div class="invalid-feedback ">
                Veuillez saisir le nom de l'etudiant!
                pas de caractères spéciaux autorisés!
              </div>
              <div class="valid-feedback">
                Nom correctement saisi!
              </div>
            </div>
          </div>

          <div class="form-group row justify-content-center">
            <label for="inputPrenom" class="col-4 col-form-label">Prénom :</label>
            <div class="col-6">
              <input type="text" name="prenom" pattern="^[a-zA-Z\s]*$" id="validationCustom03" class="form-control" id="inputPrenom" placeholder="Prénom étudiant" required>
              <div class="invalid-feedback ">
                Veuillez saisir le prénom de l'étudiant!
                pas de caractères spéciaux autorisés!
              </div>
              <div class="valid-feedback">
                Prenom correctement saisi!
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <label for="inputEmail" class="col-4 col-form-label">E-mail :</label>
            <div class="col-6">
              <input type="email" name="email" class="form-control" id="inputEmail" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$" placeholder="E-mail" required>
              <div class="invalid-feedback ">
                Veuillez saisir un adresse e-mail valid!
              </div>
              <div class="valid-feedback">
                adresse e-mail correctement saisi!
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <label for="inputPhone" class=" col-4 col-form-label">N° téléphone :</label>
            <div class="col-6">
              <input type="tel" name="telephone" class="form-control" id="inputPhone" placeholder="N° téléphone" pattern="[0-9]{10}" required>
              <div class="invalid-feedback ">
                Veuillez saisir un N° de téléphone valid!
              </div>
              <div class="valid-feedback">
                N° de téléphone correctement saisi!
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <label for="date" class="col-4 col-form-label">Date et Heure :</label>
            <div class="col-6">
              <input class="form-control" name="date_creation" type="datetime-local" value="2011-08-19T13:45:00" id="date" required>
              <div class="invalid-feedback ">
                Veuillez saisir la date et heure!
              </div>
              <div class="valid-feedback">
                date et heure valident!
              </div>
            </div>
          </div>

          <div class="form-group row justify-content-center mb-4">
            <label class="col-4 col-form-label">Departement :</label>
            <div class="col-6">
              <select name="departement" class="form-control">
                <option value="1">Essonne (91)</option>
                <option value="2">Hauts-de-Seine (92)</option>
                <option value="3">Paris (92)</option>
                <option value="4">Seine-et-Marne (77)</option>
                <option value="5">Seine-Saint-Denis (93)</option>
                <option value="6">Val-d'Oise (95)</option>
                <option value="7">Val-de-Marne (94)</option>
                <option value="8">Yvelines (78)</option>
              </select>
            </div>

          </div>


          <div class="form-group row justify-content-center">
            <label for="icone" class="col-4">Ficher :</label>
            <input type="hidden" id="oldfile">
            <input class="col-6" type="file" name="ficher" id="inputFicher" value="import" class="custom-file">
          </div>

          <div class="row justify-content-center mt-4">
            <div>
              <button type="submit" name="buttonSubmit" class="btn btn-color btn-block sizeBtn" id="add-student">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                </svg>
                Créer batch
              </button>
            </div>

            <div>
              <button type="submit" class="btn btn-color btn-block sizeBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
                Annuler
              </button>
            </div>
          </div>
        </form>
      </div>

      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <!--TABLE ONGLET-->
        <div class="row justify-content-center mt-2">
          <p class="col-10"><strong>ÉTUDIANTS</strong></p>
          <table style="width: auto;" action="action.php" class="table table-striped table-responsive" id="data-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</thd>
                <th>E-mail</th>
                <th>Téléphone</th>
                <th>Date</th>
                <th>Departement</th>
                <th>Ficher</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php
            $query = 'SELECT * FROM userLab INNER JOIN departement WHERE idDepartement = departement.id_departement';
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            ?>
            <tbody>
              <?php while ($row = $result->fetch_assoc()) { ?>
                <tr id="<?php echo $row['id']; ?>">
                  <td><?php echo $row['id']; ?></td>
                  <td data-target="nom"><?php echo $row['nom']; ?></td>
                  <td data-target="prenom"><?php echo $row['prenom']; ?></td>
                  <td data-target="email"><?php echo $row['email']; ?></td>
                  <td data-target="telephone"><?php echo $row['telephone']; ?></td>
                  <td data-target="date_creation"><?php echo $row['date_creation']; ?></td>
                  <td data-target="departement"><?php echo $row['nom_departement']; ?></td>
                  <td data-target="ficher"><?php echo $row['ficher']; ?></td>
                  <td>
                    <a href="#" class="dt-button blue text-center  col btn-xs" data-role="update" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data data-whatever="@mdo">Modifier</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>" class="dt-button grey text-center col btn-xs" onclick="return confirm('Confirmer la suppression?');">Supprimer</a>
                  </td>


                  </td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <!--  MODAL EDIT -->
      <div class="row">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <!--   <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Étudiant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> -->
              <div class="modal-body">
                <h2>Modifier</h2>
                <form class="needs-validation" id="dataForm" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="hidden" id="idUpload">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nomUpload" pattern="^[a-zA-Z\s]*$" placeholder="Nom étudiant" required>
                    <div class="invalid-feedback ">
                      Veuillez saisir le prénom de l'étudiant!
                      pas de caractères spéciaux autorisés!
                    </div>
                    <div class="valid-feedback">
                      Prenom correctement saisi!
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenomUpload" pattern="^[a-zA-Z\s]*$" placeholder="prenom étudiant" required>
                    <div class="invalid-feedback ">
                      Veuillez saisir le prénom de l'étudiant!
                      pas de caractères spéciaux autorisés!
                    </div>
                    <div class="valid-feedback">
                      Prenom correctement saisi!
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">E-mail </label>
                    <input type="email" id="emailUpload" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$" placeholder="E-mail" class="form-control" placeholder="E-mail" required>
                    <div class="invalid-feedback ">
                      Veuillez saisir un adresse e-mail valid!
                    </div>
                    <div class="valid-feedback">
                      adresse e-mail correctement saisie!
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPhone">N° téléphone </label>
                    <input type="tel" class="form-control" id="phoneUpload" pattern="[0-9]{10}" placeholder="N° téléphone" required>
                    <div class="invalid-feedback ">
                      Veuillez saisir un N° de téléphone valid!
                    </div>
                    <div class="valid-feedback">
                      N° de téléphone correctement saisie!
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="date">Date et Heure :</label>
                    <input class="form-control" id="dateUpload" type="datetime-local" value="2011-08-19T13:45:00" required>
                    <div class="invalid-feedback ">
                      Veuillez saisir la date et heure!
                    </div>
                    <div class="valid-feedback">
                      date et heure valides!
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="departement">Departement :</label>
                      <select id="departementUpload" class="form-control">
                        <option value="1">Essonne (91)</option>
                        <option value="2">Hauts-de-Seine (92)</option>
                        <option value="3">Paris (92)</option>
                        <option value="4">Seine-et-Marne (77)</option>
                        <option value="5">Seine-Saint-Denis (93)</option>
                        <option value="6">Val-d'Oise (95)</option>
                        <option value="7">Val-de-Marne (94)</option>
                        <option value="8">Yvelines (78)</option>
                      </select>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Ficher
                      <input class="col-6" type="file" id="ficherUpload" value="import" class="custom-file">
                      <input type="hidden" id="ipUpload">
                      <input type="hidden" id="portUpload">
                      <input type="hidden" id="passUpload">

                    </label>
                  </div>
                  <div class="row justify-content-center mt-4">
                    <div class="col-10"></div>
                    <a href="#" class="dt-button blue col-4 text-center" id="saveBtn">Modifier</a>
                    <a href="#" value="Annuler" class="dt-button blue col-4 text-center" data-dismiss="modal">Annuler</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>