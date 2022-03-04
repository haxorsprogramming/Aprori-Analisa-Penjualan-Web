// inisialisasi 
document.querySelector("#txtUsername").focus();

function prosesLogin()
{
    let username = document.querySelector("#txtUsername").value;
    let password = document.querySelector("#txtPassword").value;
    if(username === '' || password === ''){
        pesanUmumApp('warning', 'Isi field !!!', 'Harap isi field !!!');
    }else{
        let ds = {'username':username, 'password':password}
        $.post(server + "/api/loginProses.php", ds, function(data){
            let obj = JSON.parse(data);
            let status = obj.status;
            if(status === "SUCCESS"){
                window.location.assign(server + "mainApp/index.php");
            }else{
                pesanUmumApp('warning', 'DENIED', 'Username / Password salah !!!');
            }
        });
    }
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}