<?php

define('CHAT_FILE', 'CHAT');

if (isset($_POST['msg']) && !empty($_POST['msg']))
{
    if ($_POST['msg'] == 'clear')
        $file = fopen(CHAT_FILE, 'w');
    else
    {
        $file = fopen(CHAT_FILE, 'a');
        fputs($file, time() . ' ' . htmlspecialchars($_POST['msg']) . PHP_EOL);
        header('Location: .');
        die;
    }

    fclose($file);
}

$file = fopen(CHAT_FILE, 'r');

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>ShoutBox</title>
    <meta http-equiv="Refresh" content="20">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>ShoutBox</h1>

        <table class="table">
<?php while ($line = fgets($file)): list($time, $msg) = explode(' ', $line, 2) ?>
            <tr><td><span class="text-muted"><?= date('H:i', $time) ?></span> <?= trim($msg) ?></td></tr>
<?php endwhile ?>
        </table>

        <form action="?" method="post" class="form-inline" role="form">
            <div class="form-group">
                <input type="text" id="msg" name="msg" accesskey="s"
                    placeholder="message" size="80" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">send</button>
        </form>
    </div>

    <script type="text/javascript">
        document.getElementById('msg').focus();
    </script>
</body>

</html>
