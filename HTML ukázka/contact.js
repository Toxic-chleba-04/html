function contact(){
    alert ("dominik.gombos@gmail.com   605310612");
    
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
   
}
    