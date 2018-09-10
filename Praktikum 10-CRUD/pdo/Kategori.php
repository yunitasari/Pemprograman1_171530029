<?php

    class Kategori{

        public function __construct(){ // koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbcompany_171530029', 'root', '');
        }

        public function create(){ // menyimpan data
            try{
                $sql = "insert into tbkategori(kategori_post) 
                values('$kategori_post') ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }

        
        public function read(){ // menampilkan data berdasarkan id kategori yang 
            try{
                $sql = "select * from tbkategori";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function update($id_kategori, $kategori_post ){ // mengubah data
            try{
                $sql = " update tbkategori 
                set kategori_post ='$id_kategori_post' 
                where id_kategori='$id_kategori'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function delete($id_kategori){ // menghapus data
            try{
                $sql = " delete from tbkategori 
                where id_kategori='$id_kategori' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function read_id($id_kategori){ // menampilkan data berdasarkan id kategori yang 
            try{
                $sql = "select * from tbkategori where id_kategori='$id_kategori' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }


    //fungsi / procedure / method
    //sebuah kumpulan statement atau baris kode yang berada di dalam
    // block code {} untuk menjalankan perintah tertentu
    //dan didefinisikan dengan sebuah nama


 /**
  * $this->db, variable untuk menampung peintah koneksi db
  * $sql, variabel untuk menampung perintah query
  * $stmt, variabel untuk menampung perintah query sementara yang akan dijalankan
  * $this->db->prepare(), perintah untuk penyiapan menjalankan query
  * execute(), perintah untuk eksekusi query 
  * PDOException, fungsi pada catch untuk mengecek baris kode yang error
  *
  *
  * kenapa menggunakan PreparedStatement?
  * Ketika menjalankan sebuah perintah untuk manipulasi data lebih ceoat.
  *
  */

?>