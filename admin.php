<?php
include 'action.php';


?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="./img/android-icon-36x36.png">

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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


  <!--DATATABLE -->
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
  <div class="row">
    <nav class="navbar navbar-light col-12" style="background-color: #343a40">
      <!-- Brand -->
      <div clas="float-left">
        <img src="img/logo.jpg" class="img-fluid rounded-circle ml-3 height=" 20" alt="logo" style="height: 45px;">
        <h2 class="navbar-brand">Rhopen Academy Lab</h2>
      </div>
    </nav>
  </div>
  <div class="container">
    <p div="success"></p>
    <div class="row justify-content-center">
      <h1 class="text-center mt-3 mb-3 col-8">Admin Page</h1>
      <div class="custom-control custom-switch float-right">
        <input type="checkbox" class="custom-control-input col-2" id="darkSwitch" />
        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
      </div>
    </div>


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


        <!-- FORMULAIRE -->
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
          <div class="form-group row justify-content-center">
            <label for="icone" class="col-4">Liste des étudiants :</label>
            <input type="hidden" name="oldfile">
            <input class="col-6" type="file" name="ficher_csv" accept=".txt" id="inputFicher" value="import" class="custom-file">
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
        <!--TABLE -->
        <div class="row justify-content-center mt-2">
          <?php
          $query = 'SELECT * FROM userLab';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
          ?>
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
                <th>Ficher</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                  <td class="active" id="theadId" ><?php echo $row['id']; ?></td>
                  <td class="active"><?php echo $row['nom']; ?></td>
                  <td><?php echo $row['prenom']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['telephone']; ?></td>
                  <td><?php echo $row['date_creation']; ?></td>
                  <td><?php echo $row['ficher_csv']; ?></td>
                  <td>
                    <a href="#"  name="edit" class="dt-button  blue  col btn-xs editTab" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Modifier</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>" class="dt-button   col btn-xs" onclick="return confirm('Confirmer la suppression?');">Supprimer</a>
                  </td>
                  <!--  MODAL EDIT -->

                  <div class="row">
                    <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier Étudiant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form id="dataForm"  method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                <input type="hidden" id="idUpload" value="">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nomUpload" pattern="^[a-zA-Z\s]*$" value="<?php echo $nom  ?>" placeholder="Nom étudiant" required>
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
                                <input type="text" class="form-control" id="prenomUpload" pattern="^[a-zA-Z\s]*$" value="<?php echo $prenom?>" placeholder="prenom étudiant" required>
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
                                  adresse e-mail correctement saisi!
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputPhone">N° téléphone </label>
                                <input type="tel" class="form-control" id="phoneUpload" pattern="[0-9]{10}" placeholder="N° téléphone" required>
                                <div class="invalid-feedback ">
                                  Veuillez saisir un N° de téléphone valid!
                                </div>
                                <div class="valid-feedback">
                                  N° de téléphone correctement saisi!
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="date">Date et Heure :</label>
                                <input class="form-control" id="dateUpload" type="datetime-local" value="2011-08-19T13:45:00" required>
                                <div class="invalid-feedback ">
                                  Veuillez saisir la date et heure!

                                </div>
                                <div class="valid-feedback">
                                  date et heure valident!
                                </div>
                              </div>

                              <div class="form-group">
                                <label>Ficher
                                  <input type="hidden" id="oldFicher">
                                  <input class="col-6" type="file" id="ficherUpload" accept=".txt" value="import" class="custom-file" >
                                  <input type="hidden" id="ipUpload">
                                  <input type="hidden" id="portUpload">
                                  <input type="hidden" id="passUpload">

                                </label>
                                <!-- <input class="col-6" type="hidden" name="inputIp" class="custom-file">
                              <input class="col-6" type="hidden" name="inputPort" class="custom-file">
                              <input class="col-6" type="hidden" name="inputPass" class="custom-file"> -->
                              </div>
                              <input type="submit" value="Modier" class="dt-button blue btn-block btn-lg" name="updateNameBtn" id="updateBtn">
                              <input type="submit" value="Annuler" class="dt-button blue btn-block btn-lg" data-dismiss="modal">

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    </td>
              </tr>

            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>