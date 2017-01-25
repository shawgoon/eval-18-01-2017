$(document).ready(function() {

  // création d'un nouveau véhicule
  $("#create").on('submit', function(event) {
    event.preventDefault(); // on stop l'envoi de formulaire
    var datas = $(this).serialize(); // on récup les données du formulaire on format correctement les données de sérialize en objet JSON
    // datas += "&voiture="+voiture.id;
    console.log(datas);

    //on envoi le message au serveur
    $.ajax({
      method: "POST",
      url: "http://localhost/eval-18-01-2017/exo3/back.php",
      data: datas,
      success: function(res) {
        console.log({"vehicule" : datas, "id"});
        if (res.success) {
          
        }
      };
    });
  });
});
