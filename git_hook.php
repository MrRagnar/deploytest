<?php 
try
{
  $payload = json_decode($_REQUEST['payload']);
}
catch(Exception $e)
{
  exit(0);
}

if ($payload->ref === 'refs/heads/master')
{
  exec('git clean -f -d && git fetch --all && git reset --hard origin/master');
}
