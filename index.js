

 document.addEventListener('DOMContentLoaded', function() {
    let a=document.getElementById('abonne');
    let b=document.getElementById('emprunt');
    let c=document.getElementById('livre');
    a.onclick=function(){window.location.href='abonne.php'};
    b.onclick=function(){window.location.href='emprunt.php'};
    c.onclick=function(){window.location.href='livre.php'};


})




// document.addEventListener('DOMContentLoaded', function() {
//     let a=document.getElementById('abonne');
// let b=document.getElementById('emprunt');
// let c=document.getElementById('livre');

// a.onclick=function(){
//     a.style.color='blue';}

// b.addEventListener('click',function(){
//     let li=document.createElement('li');
//     let p=document.createElement('p');
//     p.innerHTML='salam';
//     li.appendChild(p);
//     let ul=document.getElementById('hh');
//     ul.appendChild(li);
// })
// })