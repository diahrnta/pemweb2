//buat fungsi
//ambil value/milai inputan username dan password
//kita cek kondisi nya apakah username dan password yang diinputkan sama 
//dengan nilai yang ditentukan (kondisi pertama)

//jika benar arahkan ke dashboard admin
//jika salah berikan alert username dan password salah

//jika tidak inputkan untuk username dan password (kondisi kedua)
//tampilkan alert username dan password tidak boleh kosong

function login(){
    // mengambil nilai inputan user berdasarkan id 
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;
 
     if (user == "admin" && pass == "123456"){
         alert('selamat anda berhasil login');
         window.location = "./index.php"
         return false;  
     } else if (username == "" || password == "") {
         alert('username & password tidak boleh kosong')
         return false;
    } else {
         alert('username / password salah')
         return false
     }
 }