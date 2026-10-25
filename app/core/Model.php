<?php
class Model
{
// inisiasi properti
protected $db;
protected $table;

// konstruktor
public function __construct(){
// pembuatan objek dari kelas Database
$this->db = new Database;
}

// method baca semua data dari tabel
public function all(){
// persiapkan query string
$this->db->query("SELECT * FROM {$this->table}");
return $this->db->multiple();
}

// method baca data berdasarkan id
public function find($id){
// persiapkan query string
$this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
$this->db->bind("id", $id);
return $this->db->single();
}

// method baca data berdasarkan kolom tertentu
public function where($col, $val, $multiple = false) {
// persiapkan query string
$this->db->query("SELECT * FROM {$this->table} WHERE {$col}=:val");
$this->db->bind("val", $val);
if ($multiple) {
return $this->db->multiple();
}
return $this->db->single();
}

// method simpan data
public function store($data = array()) {
// ambil key dari array data
$keys = array_keys($data);
// ubah array menjadi string
$columns = implode(", ", $keys);
$values = implode(", :", $keys);
// persiapkan query string
$this->db->query("INSERT INTO {$this->table} ({$columns})
VALUES (:{$values})");
// data binding
foreach ($data as $key => $value) {
$this->db->bind($key, $value);
}

return $this->db->count();
}
// method ubah data
public function update($id, $data = array()) {
// ambil key dari array data
$keys = array_keys($data);
// buat array pasangan string kolom=:value
$pairs = array();
foreach ($keys as $key) {
$pairs[] = "{$key}=:{$key}";
}
// ubah array menjadi string
$string = implode(", ", $pairs);
// persiapkan query string
$this->db->query("UPDATE {$this->table} SET {$string} WHERE id=:id");
// data binding
foreach ($data as $key => $value) {
$this->db->bind($key, $value);
}
$this->db->bind("id", $id);
return $this->db->count();
}

// method hapus data berdasarkan id
public function destroy($id){
// persiapkan query string
$this->db->query("DELETE FROM {$this->table} WHERE id=:id");
$this->db->bind("id", $id);
return $this->db->count();
}
}
?>