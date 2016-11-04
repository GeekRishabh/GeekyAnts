$(document).ready(function($) {

  var app = new toDoApp();
  $('form').on('submit',function(e){
    console.log('hello');
    app.addItem(e);
    app.render();
    e.preventDefault();
  });

  $("#dataItems").on("click", ".btn-danger", function(e){
      app.removeItem(e);
  });

  $("#dataItems").on("click", "#check", function(e){
      app.strikeData(e);
  });

});
