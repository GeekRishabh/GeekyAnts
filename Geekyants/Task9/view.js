function toDoApp() {

  this.collectItems = [];

  this.render = function(argument) {
    //console.log("heythere");
    $("#dataItems").empty();
    console.log(this.collectItems);
    for(var i in this.collectItems){
      if(this.collectItems[i].isCompleted){
      $("#dataItems").append('<li class="list-group-item completed"><input type="checkbox" value="" checked id="check">&ensp; &ensp;'+this.collectItems[i].dataCaption+' &ensp; &ensp;<button class="btn btn-danger">Remove</button></li>');
    }else {
      $("#dataItems").append('<li class="list-group-item"><input type="checkbox" value=""  id ="check">&ensp; &ensp;'+this.collectItems[i].dataCaption+' &ensp; &ensp;<button class="btn btn-danger">Remove</button></li>');
    }
      }
    }

  this.addItem = function(argument) {
    // console.log("bye");
    var dataItem = $("#item").val();
    if (dataItem!="") {
      var v = new toDoItem();
      v.dataCaption=dataItem;
      v.isCompleted=false;
      this.collectItems.push(v);

    }

  }

  this.removeItem = function(e) {
    var i=$(e.target).parent().index(); //i is index
    if(this.collectItems[i].isCompleted){
      console.log(i);
      this.collectItems.splice(i,1);
      //console.log(this.collectItems);
      this.render();
    }

  }

  this.strikeData = function(e) {
    var i=$(e.target).parent().index();
    if (e.checked)
       this.collectItems[i].toggle();
    else
      this.collectItems[i].toggle();

    this.render();

  }

}
