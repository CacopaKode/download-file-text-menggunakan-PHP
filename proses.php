<?php

$name = $_POST['name'];
$email = $_POST['email'];
$namafile = "files_text.txt";

$content ="consectetur adipiscing elit. Quisque ut condimentum nulla. nama = <b> %s </b> Nam et felis id justo finibus congue ut convallis ipsum. email = <b> %s </b> Maecenas posuere erat vel augue mattis finibus. Vivamus eu dapibus quam, id convallis metus. Proin elementum nisl quis orci semper, ac porttitor odio dignissim. Pellentesque id luctus risus. Aliquam erat volutpat. Phasellus scelerisque, urna in lacinia luctus, massa ipsum mattis ante, sit amet bibendum nisl felis sed mi. In hac habitasse platea dictumst. Phasellus mi nibh, vehicula quis lectus vitae, porttitor semper lectus. Quisque faucibus velit quis velit sagittis rhoncus. Praesent blandit mauris tincidunt lectus sollicitudin posuere. Fusce in egestas tortor. Praesent sapien lacus, faucibus id eros id, laoreet sollicitudin magna.";

$file = fopen($namafile, "w") or die("stop create file");
fwrite($file, $content);
fclose($file);

header("Content-Disposition:attachment; filename=\"".$namafile."");
header("Content-Type: application/force-download");
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header("Content-Type: text/plain");

echo printf($content, $name, $email);
?>
