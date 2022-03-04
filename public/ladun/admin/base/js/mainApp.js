var app = new Vue({
    el : '#divApp',
    data : {
        sectionPage : 'Dashboard'
    },
    methods : {
        menuAtc : function(path, section)
        {
            loadPage(path, section);
        }
    }
});

loadPage('mainApp/dashboard.php', 'Dashboard');

function loadPage(path, section)
{
    let rPage = server + path;
    app.sectionPage = section;
    $("#divUtama").html("Memuat ...");
    $("#divUtama").load(rPage);
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function confirmQuest(icon, title, text, x)
{
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    }).then((result) => {
        if (result.value) {
            x();
        }
    });
}

function checkForm(element)
{
    let statusCheck = true;
    for(let x = 0; x < element.length; x++){
        let formData = document.querySelector("#"+element[x]).value;
        if(formData.length === 0){
            statusCheck = false;
        }
    }
    return statusCheck;
}