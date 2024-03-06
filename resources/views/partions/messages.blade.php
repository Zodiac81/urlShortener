@if(session()->has('success'))
    <br>
    <div class="alert alert-success" id="msg-alert-success" role="alert">
        <span> <strong>Success:</strong> {{ session()->get('success') }} &nbsp; <i class="fa fa-check-circle fa-2x pull-right" style="margin-top: -0.13em;" aria-hidden="true"></i></span>
    </div>

@endif

<script>
    if(document.getElementById('msg-alert-success')) {
        setTimeout(function() {
            document.getElementById('msg-alert-success').style.display = 'none';
        }, 3000);
    }

</script>
