var c = document.getElementById("c");
var ctx = c.getContext("2d");
c.height = window.innerHeight;
c.width = window.innerWidth;
var matrix = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%";
matrix = matrix.split("");
var columns = c.width / 10; 
var drops = [];
for(var x = 0; x < columns; x++)
    drops[x] = 1; 
function draw()
{
    ctx.fillStyle = "rgba(0, 0, 0, 0.04)";
    ctx.fillRect(0, 0, c.width, c.height);
    ctx.fillStyle = "#0000ff";
    ctx.font = 10 + "px cooper";
    for( var i = 0; i < drops.length; i++ )
    {
        var text = matrix[ Math.floor( Math.random() * matrix.length ) ];
        ctx.fillText(text, i * 10, drops[i] * 10);
        if( drops[i] * 10 > c.height && Math.random() > 0.975 )
            drops[i] = 0;
        drops[i]++;
    }
}
setInterval( draw, 35 );
