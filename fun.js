window.addEventListener('load', function () {
    var div = document.body;
    var style = window.getComputedStyle(div);
    ChangeColor();  
    var elem = document.getElementById("background-canvas");
    elem.parentNode.removeChild(elem);
    elem = document.getElementById("i1");
    elem.parentNode.removeChild(elem);
    function ChangeColor() {
        var navContainer = document.getElementById("nav-bar-container");
        var path = style.getPropertyValue('background-image');
        path = path.substring(4, path.length-1);
        
        var img = document.getElementById("i1");
        var length = img.src.length;
        img.src = path.slice(1, length - 1);
        
        var canvas = document.getElementById("background-canvas");
        canvas.getContext('2d').drawImage(img, 0, 0, img.width, img.height);
        
        var pixelData = canvas.getContext('2d').getImageData(1000, 1000, 1, 1).data;

        var rgb = rgbToHex(pixelData[0], pixelData[1], pixelData[2])
        
        var hex = "#" + ("000000" + rgb).slice(-6); 
        navContainer.style.backgroundColor =  hex;
        console.log(rgb);

        //var values = document.getElementById("values");
        //values.innerHTML = 'R: ' + pixelData[0] + '<br>G: ' + pixelData[1] + '<br>B: ' + pixelData[2] + '<br>A: ' + pixelData[3];
    };

    
    function rgbToHex(r, g, b) {
        if (r > 255 || g > 255 || b > 255)
            throw "Invalid color component";
        return ((r << 16) | (g << 8) | b).toString(16);
    }
    
    /*
    var canvas = document.getElementById("background-canvas");
    var ctx = canvas.getContext("2d");
    GetPixel(ctx, 1, 500);
    
function changeColor() {    
    var imgData = ctx.getImageData(1, 50, 1, 1);
    //alert("rgba(" + imgData.data[0] + ", " + imgData.data[1] + ", " + imgData.data[2] + ", " + imgData.data[3] +");");
    navContainer.style.backgroundColor =  "rgba(" + imgData.data[0] + ", " + imgData.data[1] + ", " + imgData.data[2] + ", " + imgData.data[3] +");";
    console.log(imgData.data[0]);
    console.log(imgData.data[1]);
    console.log(imgData.data[2]);
    console.log(imgData.data[3]);
    console.log(navContainer.style.backgroundcolor);
  }
 function GetPixel(context, x, y)
{
    var navContainer = document.getElementById("nav-bar-container");
    var p = context.getImageData(x, y, 1, 1).data; 
    console.log(p[0]);
    console.log(p[1]);
    console.log(p[2]);
    var hex = "#" + ("000000" + rgbToHex(p[0], p[1], p[2])).slice(-6);  
    navContainer.style.backgroundColor =  hex;
    console.log("RGB: " + rgbToHex(p[0], p[1], p[2]))
    console.log(hex);
}

*/
});