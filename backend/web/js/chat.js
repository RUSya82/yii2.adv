var wsPort = 8081;
var websocketPort = wsPort ? wsPort : 8081;
var conn = new WebSocket('ws://localhost:' + websocketPort);
idMessages = 'chatMessages';

conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onerror = function(e) {
    console.log("Connection fail!");
}

conn.onmessage = function(e) {
    //console.log(e.data);
    //document.getElementById(idMessages).value = e.data + '\n' + document.getElementById(idMessages).value;
    var $el = $('li.messages-menu ul.menu li:first').clone();
    $el.find('p').text(e.data);
    $el.find('h4').text('Websocket user');
    $el.prependTo('li.messages-menu ul.menu');

    var cnt = $('li.messages-menu ul.menu li').length;
    $('li.messages-menu span.label-success').text(cnt);
    $('li.messages-menu li.header').text('You have ' + cnt + ' messages');
};
    let buttonSend = document.getElementById('sendMessage');
    buttonSend.onclick = function (e) {
        let text = document.getElementById('chatMessages').value;
        conn.send(text);
        document.getElementById('chatMessages').value = '';
    };