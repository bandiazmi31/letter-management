===========---//INSTALASI SOURCE CODE\\---==============
							
-Ekstrak source code					
-Unggah ke local host					
-Jika menggunakan xampp copy ke dalam folder htdocs	
-Buat database baru dengan nama app_ps			
-import file app_ps.sql yang ada di folder db ke dalam	
 database yang dibuat tadi				
-Buka browser lalu jalankan dengan menuliskan 		
 localhost/namaweb					
_______________________________________________________
Akun Admin 		  |  Akun user			                    
user	: admin		|  user : pengguna			
pass	: admin		|  pass : pengguna			
========================================================


=============-----/////FAQ ERROR\\\\\-----==============

??. Unknown database ''
!!. Database belum dibuat atau nama database tidak sama
>>. Buat database baru atau perbaiki nama database atau
    sesuaikan pengaturan koneksi database

??. Access denied for user ''
!!. username atau password akun phpmyadmin tidak sesuai
>>. sesuaikan koneksi database dengan akun phpmyadmin

??. Uncaught Error: Call to undefined function mysql_connect()
!!. ekstensi mysql tidak tersedia atau sudah tidak di dukung
>>. Gunakan versi PHP5 atau versi xampp yang lawas (jadul)

??. mysqli::real_connect(): / Warning: mysqli_connect():
!!. ekstensi mysqli tidak tersedia atau tidak di dukung
>>. Gunakan versi PHP7 ke atas atau versi Xampp terbaru

??. Tampilan antarmuka tidak muncul atau acak-acakan
!!. file css / style tidak ditemukan atau belum responsif
>>. Gunakan internet saat menjalankan-nya atau hapus folder
    yang membungkus folder utama atau master


#NOTE:
Beberapa solusi penanganan error di atas mungkin saja tidak
dapat menyelesaikan masalah error dikarenakan beberapa faktor
lain atau solusi lain.
