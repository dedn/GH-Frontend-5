
$(document).ready(function(){

$.ajax({
    url: 'getlist.php',
    method: 'POST'
}).success(function( html ) {
    $( "#todos" ).append( html );
});
});
document.getElementById('add').addEventListener('click', add);
show();
function get_todos() {
    var todos = new Array;
    var todos_str = localStorage.getItem('todo');
    if (todos_str != null) {
        todos = JSON.parse(todos_str);
    }
    return todos;
}

function add() {
    var task = document.getElementById('task').value;

    $.ajax({
        url: 'addtask.php',
        type: 'POST',
        data:{'data':JSON.stringify(task)}
    }).success(function( html ) {
        $( '#todos' ).append( html );
    });

  return false;

}


function show() {
    var todos = get_todos();

    var html = '<ul>';
    for(var i=0; i<todos.length; i++) {
        html += '<li id="taskstest">' + todos[i] + '<button id="remove" id="' + i  + '"><i class="fa fa-times"></i></button></li>';
    };
    html += '</ul>';

    document.getElementById('todos').innerHTML = html;

    var buttons = document.getElementsByClassName('remove');
    for (var i=0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', remove);
    };
}


function remove() {
    var id = this.getAttribute('id');
    var todos = get_todos();
    todos.splice(id, 1);
    localStorage.setItem('todo', JSON.stringify(todos));



    show();

    return false;
}