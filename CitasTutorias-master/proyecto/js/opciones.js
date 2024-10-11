const botonopc = document.querySelector('#botonopciones');
const lugarapli = document.querySelector('.HeaderPrincipal')

function botonopciones1(opciones){
    const opciones1=document.createElement('Button');
    const enlaceperfil= document.createElement('A');
    enlaceperfil.href="./vistaperfilalum.php"
    
    enlaceperfil.textContent=opciones;
    opciones1.classList.add('opciones')
    document.getElementById('Perfil12').appendChild(opciones1)
    opciones1.appendChild(enlaceperfil)
    setTimeout(() => {
       opciones1.remove(); 
    },10000);
}
function asesoriasagendadas(nombre){
    const btnase=document.createElement('Button');
    const btncla= document.createElement('A');
    btncla.href="./asesoriasagendadas.php"
    btncla.textContent=nombre;
    btnase.classList.add('agendadas')
    document.getElementById('AsesoriasAgendadas').appendChild(btnase)
    btnase.appendChild(btncla)
    setTimeout(()=>{
        btnase.remove();
    },10000)
}
function botoncerrarsesion(texto){
    const cerrarsesion=document.createElement('form')
    cerrarsesion.setAttribute('action','php/logout.php')
    const botoncerrar= document.createElement('button');
    botoncerrar.textContent=texto;
    botoncerrar.classList.add("BotonCerrar")
    cerrarsesion.appendChild(botoncerrar)
    botoncerrar.setAttribute('type','submit')
    botoncerrar.setAttribute('value',"Cerrar Sesion")
    document.getElementById('CerrarSesion').appendChild(cerrarsesion)
    setTimeout(()=>{botoncerrar.remove()},10000)
}
botonopc.addEventListener('click',function(evento){
    evento.preventDefault();
    botoncerrarsesion("Cerrar Sesion")
    botonopciones1("Perfil")
    asesoriasagendadas('Asesorias Agendadas');
    
})