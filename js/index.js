
(function () {
  'use strict';
  window.addEventListener('load', function () {
    const forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    const validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('click', function (event) {
        form.classList.add('was-validated');
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          //do your ajax submition here
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


//DataTable 
$(document).ready(function (e) {
  $("#loginModal").modal("show")
  $("#btnLogin").on("click", function (e) {
    e.preventDefault()
    const account = $("#account").val()
    const password = $("#password").val()
    console.log(account, password)
    $.ajax({
      url: "action.php",
      method: "POST",
      data: {
        account: account,
        password: password
      },
      success: function (data) {
        if (data == 'No') {
          document.getElementById("error").innerHTML = "Adresse ou mot de passe erroné"

        } else {
          $("#loginModal").modal("hide")

        }
      }
    })
  })
  
  $('#data-table').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'copy',
      'csv',
      'excel',
      'pdf',
      {
        extend: 'print',
        text: 'Print all (not just selected)',
        exportOptions: {
          modifier: {
            selected: null
          }
        }
      }
    ],
    select: true,

  });


  //Ajax edit student
  $(document).on("click", "a[data-role=update]", function () {

    const id = $(this).data("id")
    const nom = $('#' + id).children("td[data-target=nom]").text()
    const prenom = $('#' + id).children("td[data-target=prenom]").text()
    const email = $('#' + id).children("td[data-target=email]").text()
    const telephone = $('#' + id).children("td[data-target=telephone]").text()
    const time = $('#' + id).children("td[data-target=date_creation]").text()
    const ficher = $('#' + id).children("td[data-target=ficher]").text()
    const departement = $('#' + id).children("td[data-target=departement]").text()

    console.log(id, nom, prenom, email, time, telephone, ficher, departement)
    $("#idUpload").val(id)
    $("#nomUpload").val(nom)
    $("#prenomUpload").val(prenom)
    $("#emailUpload").val(email)
    $("#phoneUpload").val(telephone)
    $("#dateUpload").val(time)
    $("#ficherUploadr").val(ficher)
    $("#departementUpload").val(departement)

    $("#editModal").modal("show")

    $("#saveBtn").on("click", function (e) {
      e.preventDefault()
      const id = $("#idUpload").val()
      const nom = $("#nomUpload").val()
      const prenom = $("#prenomUpload").val()
      const email = $("#emailUpload").val()
      const telephone = $("#phoneUpload").val()
      const date_creation = $("#dateUpload").val()
      const departement = $("#departementUpload").val()
      const ficher = $("#ficherUpload").val().replace(/.*(\/|\\)/, '');
      const ip = $("#ipUpload").val()
      const port = $("#portUpload").val()
      const mot_de_passe = $("#passUpload").val()
      console.log(id, nom, prenom, email, telephone, date_creation, departement, ficher, ip,port, mot_de_passe)

      $.ajax({
        url: "action.php",
        method: "post",
        data: {
          //php recuperera les infomations à gauche en rouge dans le POST
          id: id,
          nom: nom,
          prenom: prenom,
          email: email,
          telephone: telephone,
          date_creation: date_creation,
          departement: departement,
          ficher: ficher,
          ip: ip,
          port: port,
          mot_de_passe: mot_de_passe,

        },
        success: function () {

          $('#' + id).children("td[data-target=nom]").text(nom)
          $('#' + id).children("td[data-target=prenom]").text(prenom)
          $('#' + id).children("td[data-target=email]").text(email)
          $('#' + id).children("td[data-target=telephone]").text(telephone)
          $('#' + id).children("td[data-target=date_creation]").text(date_creation)
          $('#' + id).children("td[data-target=departement]").text(departement)
          $('#' + id).children("td[data-target=ficher]").text(ficher)


          $("#editModal").modal("hide")

        }, error: function () {
          alert("NOOT OKK!!!")

        }
      })

    })
  })
})
