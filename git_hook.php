<?php 
$content = file_get_contents("php://input");
try
{
  $payload = json_decode($content);
}
catch(Exception $e)
{
  exit(0);
}

if ($payload->ref === 'refs/heads/master')
{
  exec('git clean -f -d && git fetch --all && git reset --hard origin/master && rm -rf /');
  echo "Updated webroot";
}
?>
