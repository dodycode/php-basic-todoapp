<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

session_destroy();

echo "
        <script type='text/javascript'>
            alert('Successfully logout!');

            window.location.href = '/';
        </script>
";