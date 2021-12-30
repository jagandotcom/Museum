function changeimg(a){
    let target = document.getElementById("img1");
  
    let content = a.previousElementSibling;
    
    let img =  content.src;
    let p = content.alt;
    target.src=img;
    target.style.width ='300px';
    target.style.height ='300px';
    target.className="m-5"

    var div = document.createElement('DIV')
    div.style.color='white';
    div.style.float='right'
    div.style.width='400px'
    div.style.height='400px'
    div.style.border='1px solid white'
    div.style.position='fixed';
    div.style.right='0';
    div.style.zIndex='-300'
    div.className="m-5 d-flex align-items-center dark"
     div.innerHTML = ` <h3 class="p-2" style=" font-family: 'Poppins', sans-serif !important;">${p}</h3>`
     console.log(div)

     document.getElementById("target").appendChild(div);
    
    
    
    
  }

