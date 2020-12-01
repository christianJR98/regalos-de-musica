
//Slider config
$('.sliderOtrosProductos').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 2,
    responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

function getLineHeight(el) {
    var temp = document.createElement(el.nodeName), ret;
    temp.setAttribute("style", "margin:0; padding:0; "
        + "font-family:" + (el.style.fontFamily || "inherit") + "; "
        + "font-size:" + (el.style.fontSize || "inherit"));
    temp.innerHTML = "A";

    el.parentNode.appendChild(temp);
    ret = temp.clientHeight;
    temp.parentNode.removeChild(temp);

    return ret;
}

function countLines(el) {
    let divHeight = el.offsetHeight;
    let lineHeight = parseInt(getLineHeight(el));
    let lines = divHeight / lineHeight;

    return lines;
 }

 let lines = 2;

 function truncateTextElement(el){
    let data = el.innerText.split(' ');

     data[data.length - 1] = "...";
     el.innerText = data.join(" ");

     if(countLines(el) <= lines){
         return;
     }

     while(countLines(el) > lines){
        data.splice(data.length - 2, 1);
        el.innerText = data.join(" ");
     }
 }

 function truncateAllProductName(){
     let divs = document.querySelectorAll('#product-name');
     divs.forEach((ele)=>{
        if(countLines(ele) > lines){
            truncateTextElement(ele);
        }
     });
 }
 truncateAllProductName();