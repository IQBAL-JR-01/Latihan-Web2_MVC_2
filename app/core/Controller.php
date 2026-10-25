<?php
class Controller
{
// method pemanggilan layout
public function view($page, $data = array()){
require_once("../app/views/components/header.php");
require_once("../app/views/{$page}.php");
require_once("../app/views/components/footer.php");
}

// method pemanggilan model
public function model($model){
require_once("../app/models/{$model}.php");
return new $model;
}

// method peralihan halaman
public function redirect($controller, $method = "index"){
header("location: {BASE_URL}/{$controller}/{$method}");
exit();
}

// method menampilkan pesan sukses
public function success($title, $message = "") {
return $_SESSION["message"] = [
"type" => "positive",
"title" => $title,
"message" => $message
];
}

// method menampilkan pesan error
public function error($title, $message = "") {
return $_SESSION["message"] = [
"type" => "negative",
"title" => $title,
"message" => $message
];
}

// method upload gambar
public function uploadImage($name, $directory = "img") {
// random file name
$filename = uniqid();
// get file extension
$extension = strtolower(
pathinfo($_FILES[$name]["name"], PATHINFO_EXTENSION)
);
// alamat target direktori dan nama file
$destination = "{$directory}/{$filename}.{$extension}";
// periksa apakah foto berhasil diunggah
if (move_uploaded_file($_FILES[$name]["tmp_name"], $destination)){
return $destination;
}
return null;
}
}
?>