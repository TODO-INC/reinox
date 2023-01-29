	
<h1 style="font-family: Julius Sans One, sans-serif;color:#071b53;margin-top:2%" class="non">Day-2 NON TECHNICAL EVENTS</h1>
<div class="container">
	<div class="card" style="word-spacing:2px;">
		<h3 id="relative">Dare to Prove</h3>
		<p>
			A brain teaser is a form of puzzle that requires thought to solve.It often requires thinking in unconventional ways with given
			 constraints in mind; sometimes it also involves later thinking.
		</p>
		
	</div> 
	<div class="card">
		<h3 id="mix">Shout in Silence</h3>
		<p>In this game all players will use headphones so they cant't hear each other.No gesture allowed,only words form mouth.</p>
		
	</div>
	<div class="card">
		<h3 id="contrast">Screen Master</h3>
		<p>
		A brain teaser is a form of puzzle that requires thought to solve.It often requires thinking in unconventional ways with given
			 constraints in mind; sometimes it also involves later thinking.
		</p>
		
	</div>
	<div class="card">
		<h3 id="hwb">Shutter Up</h3>
		<p>
			Int this event, the participants need to click the picture and sent it before the time limit to on of the respective member of that event
		</p>
		
	</div>
</div>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&family=Rowdies:wght@700&display=swap");

* {
	box-sizing: border-box;
}
:root {
	--clr_none: hsl(40, 94%, 63%);
	--clr_text: hsl(0, 0%, 3%);
}

body {
	background: url(___sources/workbg.jfif)no-repeat center center fixed;
	font-family: "Atkinson Hyperlegible", sans-serif;
	color: var(--clr_text);

}
:is(h1, h3) {
	text-align: center;
	text-transform: uppercase;
	font-family: "Rowdies", sans-serif;
	font-weight: 700;
	font-size: 3rem;
	color: var(--clr_none);
}

.container {
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 2rem;
	max-width: 960px;
	margin: auto;
}
.card {
	border: 1px solid black;
	border-radius: 10% 0 10% 0;
	grid-template-rows: subgrid;
	box-shadow: 3px 3px 6px hsla(0, 0%, 0%, 0.426);
	background-color: rgb(248,248,255,0.5) ;
}
h3 {
	font-size: 2rem;
}
p {
	margin-inline: 0.5rem;
	font-size: 1.1rem;
    font-weight: 900;
	font-family: "cambria", serif;
}
#relative {
	color: rgb(from green r g b / 80%);
}
#mix {
	color: color-mix(in srgb, #34c9eb 20%, rgb(14, 1, 1));
}
#contrast {
	color: color-contrast(pink vs red, lightgreen, blue);
}
#hwb {
	color: rgb(238 14 14);
}
#lab {
	color: lab(59.69% 0.1007 0.1191);
}
#lch {
	color: lch(37% 74 34 / 94%);
}
#oklch {
	color: oklch(40.1% 0.123 21.57);
}
#oklab {
	color: oklab(59.69% 0.1007 0.1191);
}

@supports not (color: rgb(from green r g b / 80%)) {
	#relative {
		color: rgb(238 14 14);
	}
}
@supports not (color: color-mix(in srgb, #34c9eb 20%, white)) {
	#mix {
		color: red;
	}
}
@supports not (color: color-contrast(pink vs red, lightgreen, blue)) {
	#contrast {
		color: red;
	}
}

</style>