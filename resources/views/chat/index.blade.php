@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Chat</h1>
    <div id="chat-box" class="bg-white p-4 rounded shadow h-80 overflow-y-scroll mb-4">
        <!-- Mensagens aparecem aqui -->
    </div>
    <form id="chat-form">
        @csrf
        <input type="text" name="message" id="message" class="border rounded w-full p-2 mb-2" placeholder="Digite a mensagem...">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Enviar</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function fetchMessages() {
    $.get("{{ route('chat.fetch') }}", function(data) {
        $('#chat-box').html('');
        data.forEach(function(msg) {
            $('#chat-box').append(`<div><strong>${msg.user.name}:</strong> ${msg.message}</div>`);
        });
        $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
    });
}

fetchMessages();
setInterval(fetchMessages, 3000); // a cada 3 segundos

$('#chat-form').submit(function(e) {
    e.preventDefault();
    $.post("{{ route('chat.store') }}", {
        message: $('#message').val(),
        _token: '{{ csrf_token() }}'
    }, function() {
        $('#message').val('');
        fetchMessages();
    });
});
</script>
@endsection