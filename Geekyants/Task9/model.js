function toDoItem() {

  this.dataCaption='';

  this.isCompleted=false;

  this.toggle= function () {
  this.isCompleted = !this.isCompleted;
  };
}
