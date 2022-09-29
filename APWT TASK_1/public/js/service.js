$(document).ready(function(){

    var items = document.getElementsByClassName('item');
    items = [...items];
    var ids=[];
    var i=0;
    var interval = 800;
    var intervalId;


     for(item in items)
     {
         var id = '#'+(items[item].getAttribute('id'));
         ids.push(id);
     }

     $(ids[i++]).show("slide", { direction: "up" }, 800);
    intervalId = setInterval(function(){
        $(ids[i++]).show("slide", { direction: "up" }, 800);
        if(i>=ids.length)
        {
            clearInterval(intervalId);
        }
        //console.log(i);
    },interval);

});