<?php
class M_album extends CI_Model{

	function get_all_album(){
		$hsl=$this->db->query("SELECT tbl_album.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album ORDER BY album_id DESC");
		return $hsl;
	}
	function simpan_album($album,$user_id,$user_nama,$gambar,$deskripsi){
		$hsl=$this->db->query("insert into tbl_album(album_nama,album_pengguna_id,album_author,album_cover,album_deskripsi) values ('$album','$user_id','$user_nama','$gambar','$deskripsi')");
		return $hsl;
	}
	function get_album_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_album.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album where album_id='$kode'");
		return $hsl;
	}
	function update_album($album_id,$album_nama,$user_id,$user_nama,$gambar,$deskripsi){
		$hsl=$this->db->query("update tbl_album set album_nama='$album_nama',album_pengguna_id='$user_id',album_author='$user_nama',album_cover='$gambar',album_deskripsi='$deskripsi' where album_id='$album_id'");
		return $hsl;
	}
	function update_album_tanpa_img($album_id,$album_nama,$user_id,$user_nama,$deskripsi){
		$hsl=$this->db->query("update tbl_album set album_nama='$album_nama',album_pengguna_id='$user_id',album_author='$user_nama',album_deskripsi='$deskripsi' where album_id='$album_id'");
		return $hsl;
	}
	function hapus_album($kode){
		$hsl=$this->db->query("delete from tbl_album where album_id='$kode'");
		return $hsl;
	}
	

}