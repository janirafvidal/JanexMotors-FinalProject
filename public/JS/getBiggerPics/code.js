onload = function(){
    let imgs = document.getElementsByTagName("img")

    for(i=2; i<imgs.length; i++){
        imgs[i].onmouseover = getBigger
        imgs[i].onmouseout = getSmaller
    }
}

function getBigger(){
    this.height += 100
    this.width += 100 
}

function getSmaller(){
    this.height -= 100
    this.width -= 100 
}