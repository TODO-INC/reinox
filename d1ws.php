<svg viewBox="0 0 100 100" >
    <circle r="48" cx="50" cy="50"/>
    <foreignObject id="text" width="100" height="100">
        <div class="shape shape-left"></div>
        <div class="shape shape-right"></div>
        <div class="text">
            <h1 contenteditable>RULES</h1>
            <p contenteditable>NOTHING.</p>  
        </div> 
    </foreignObject>
</svg>
<style>
    @import url('//fonts.googleapis.com/css?family=Playfair+Display');
@import url('//fonts.googleapis.com/css?family=Lato');

body {
    height: 100vh;
    margin: 0;
    display: flex;
    background: #000 url(https://unsplash.it/g/800/600);
    background-size: cover;
}

svg {
    margin: auto;
    width: 50%;
    min-width: 320px;
    max-height: 100%;
}

svg circle {
    fill: red;
    mix-blend-mode: multiply;
}

.shape {
    height: 100%;
    width: 50px;
    shape-margin: 2.6px;
}

.shape-left {
    float: left;
    shape-outside: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/18515/circle-left.svg);
}

.shape-right {
    float: right;
    shape-outside: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/18515/circle-right.svg);
}

.text {
    font-size: 3.9px;
    width: 100px;
    height: 100%;
    text-align: center;
    line-height: 1.6;
    color: white;
    font-family: 'Lato';
    hyphens: auto;
    text-shadow: 0 .2px .3px rgba(0,0,0,.3);
}

p { 
    margin: 0; 
    text-align: justify;
    text-align-last: center;
}

h1 {
    font-size: 7px;
    margin-bottom: 5px;
    padding-top: 10px;
    font-family: 'Playfair Display';
}
