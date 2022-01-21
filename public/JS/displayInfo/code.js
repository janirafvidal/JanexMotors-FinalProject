onload = function(){
    let imgs = document.getElementsByClassName("marcas")
    let info = document.getElementsByClassName("info")

    
    for(i=0; i<imgs.length; i++){
        let value = i
        imgs[i].onclick = function(){
            if (info[value].style.display == 'none' || info[value].style.display == "") {
                info[value].style.display = 'block';
              } else {
                info[value].style.display = 'none';
              }

        }

}
}
