// document.addEventListener('DOMContentLoaded', function(){
//     asignarData();
//     resetEstilos();
//     botonAnterior()
    
// })
// const sliders = document.querySelectorAll('.visual-slider');
// const manejadores = document.querySelectorAll('.miniaruras');
// // const btnAnterior = document.querySelector('.manejador-izq')

// let dataNum = 0

// let listadoSlider = [];
// let listadoManejadores = [];

// const resetEstilos = () => {
//     sliders.forEach(element => { 
//         element.style.opacity = "0" 
//     });
//     let visible = sliders[0];
//     visible.style.opacity="1"
//     visible.classList.add("sliderActivo")

//     manejadores.forEach(manejador =>{
//         listadoManejadores.push(manejador)
//     })
//     let manejadorReset = listadoManejadores[0];
//     manejadorReset.classList.add('active')
// }
// const asignarData = () =>{
//     sliders.forEach(element => {
//         element.dataset.slider = dataNum;
//         dataNum++ 
//         // console.log (element)
//     });
//     dataNum = 0
//     manejadores.forEach(ele => {
//         // ele.textContent = dataNum+1;
//         ele.dataset.boton = dataNum
//         // console.log(ele)
//         dataNum++
//     });
// }
// //  botones presionados
// manejadores.forEach(element => {
//     element.addEventListener("click", function(e){
//         mostrarSlider(e)
//         // console.log(e)
//     })
// });


// // Funcion para mostrar el slider
// let btnData
// function mostrarSlider (e){
//     const slider = e.target
//     btnData = e.target.dataset.boton;
//     sliderAnimado = btnData
//     console.log("cliqueado " + sliderAnimado)
//     // quitar active
//     manejadores.forEach(item => {
//         item.classList.remove("active")
//     });
//     // poner active
//     manejadores.forEach(element  => {
//         slider.classList.add('active')
//         sliders.forEach(element => {
//             listadoSlider.push(element)
//             element.style.opacity = '0';
//             element.classList.remove('sliderActivo')
//         });
//     });
//     listadoSlider[btnData].style.opacity = '1'
//     // listadoSlider[btnData].style.zindex = 500 
//     listadoSlider[btnData].classList.add('sliderActivo')  
// }


// let botonActivo;
// const botonAnterior = () => {
//     manejadores.forEach(element => {
//         if (element.classList.contains('active')){
//             botonActivo = element;
//         }
//     }); 
// }
// let sliderAnimado = 0;

// const sliderTiempo = () =>{
    
//     if (sliderAnimado < sliders.length){
//         if(sliderAnimado === 0){
//             sliderAnimado++
//         }
//         console.log("animado" + btnData)
//         btnData = sliderAnimado
//         sliderAnimado++
//         // btnData++
//         // console.log (btnData)
        
//         // quitar active
//         manejadores.forEach(item => {
//             item.classList.remove("active")
//         });
//         // poner active
//         manejadores.forEach(element  => {
//             sliders.forEach(element => {
//                 listadoSlider.push(element)
//                 element.style.opacity = '0';
//                 element.classList.remove('sliderActivo')
//             });
//         });
//     }else{
//         sliderAnimado = 0
//         console.log("volvi")
//         btnData=0
//         // quitar active
//         manejadores.forEach(item => {
//             item.classList.remove("active")
//         });
//         // poner active
//         manejadores.forEach(element  => {
//             sliders.forEach(element => {
//                 listadoSlider.push(element)
//                 element.style.opacity = '0';
//                 element.classList.remove('sliderActivo')
//             });
//         });
//     }
//     listadoManejadores[btnData].classList.add('active')
//     listadoSlider[btnData].style.opacity = '1'  
//     listadoSlider[btnData].classList.add('sliderActivo');


// }
// // btnAnterior.addEventListener("click", sliderTiempo);
// setInterval(() => {
//     sliderTiempo()
// }, 3000);
