function openWave(evt, tabName){
    var i, content, tablink;
    
    content = document.getElementsByClassName("content1");
    
    for (i = 0; i < content.length; i++){
            content[i].style.display = "none";
            }
            
    tablink = document.getElementsByClassName("tablink");
    
    for (i = 0; i < tablink.length; i++){
            tablink[i].className = tablink[i].className.replace(" current", "");
            }
            
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " current";
}
