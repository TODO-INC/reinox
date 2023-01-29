<h1 style="font-family: Julius Sans One, sans-serif; color:#071b53;margin-top:2%">Day-2 TECHNICAL EVENTS</h1>
<div class="container">
	<div class="card">
		<h3 id="relative">Paper Presentation</h3>
		<p>
			The relative color syntax allows existing colors to be modified using the color functions: if an origin color is specified, then each color
			channel can either be directly specified, or taken from the origin color (and possibly modified with math functions).
		</p>
		
	</div>
	<div class="card">
		<h3 id="mix">Code Corner</h3>
		<p>The color-mix() functional notation takes two color values and returns the result of mixing them in a given colorspace by a given amount.</p>
		
	</div>
	<div class="card">
		<h3 id="contrast">Trick Bug</h3>
		<p>
			The color-contrast() functional notation takes a color value and compares it to a list of other color values, selecting the one with the
			highest contrast from the list.
		</p>
		
	</div>
	<div class="card">
		<h3 id="hwb">Brain Teaser</h3>
		<p>
			The hwb() functional notation expresses a given color according to its hue, whiteness, and blackness. An optional alpha component represents
			the color's transparency.
		</p>
		
	</div>
	<div class="card">
		<h3 id="lab">Hozan ji</h3>
		<p>
			The lab() functional notation expresses a given color in the CIE L*a*b* color space. Lab represents the entire range of color that humans
			can see.
		</p>
		
	</div>
</div>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&family=Rowdies:wght@700&display=swap");
	@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");

* {
	box-sizing: border-box;
}
:root {
	--clr_none: hsl(40, 94%, 63%);
	--clr_text: hsl(0, 0%, 3%);
}

body {
	background-image: url(___sources/backgr.svg);
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
	container-name: container;
	container-size: inline-size;
}
.card {
	border: 1px solid black;
	border-radius: 5%;
	grid-template-rows: subgrid;
	box-shadow: 3px 3px 6px hsla(0, 0%, 0%, 0.426);
	background-color: rgb(248,248,255,0.6) ;	
	word-spacing:2px;
	padding:0;
}
h3 {
	font-size: 2rem;
}
 

p {
	margin-inline: 0.5rem;
	font-size: 1.1rem;
	font-family: "cambria", serif;
    font-weight: 900;
}
span:is(.norelative, .nomix, .nocontrast, .nohwb, .nolab, .nolch, .nooklch, .nooklab) {
	display: none;
	color: var(--clr_none);
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
	color: lightseagreen;
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
		color: lightseagreen;
	}
	span.norelative {
		display: inline;
	}
}
@supports not (color: color-mix(in srgb, #34c9eb 20%, white)) {
	#mix {
		color: lightseagreen;;
	}
	span.nomix {
		display: inline;
	}
}
@supports not (color: color-contrast(pink vs red, lightgreen, blue)) {
	#contrast {
		color: lightseagreen;
	}
	span.nocontrast {
		display: inline;
	}
}
@supports not (color: hwb(228 19% 6%)) {
	#hwb {
		color: lightseagreen;
	}
	span.nohwb {
		display: inline;
	}
}

@supports not (color: lab(59.69% 0.1007 0.1191)) {
	#lab {
		color: lightseagreen;
	}
	span.nolab {
		display: inline;
	}
}
/* @supports not (color: lch(37% 74 34 / 94%)) {
	#lch {
		color: var(--clr_none);
	}
	span.nolch {
		display: inline;
	}
} */
/* @supports not (color: oklch(40.1% 0.123 21.57)) {
	#oklch {
		color: var(--clr_none);
	}
	span.nooklch {
		display: inline;
	}
} */
/* @supports not (color: oklab(59.69% 0.1007 0.1191)) {
	#oklab {
		color: var(--clr_none);
	}
	span.nooklab {
		display: inline;
	}
} */
/* @supports (container-size: inline-size) {
	@container container (max-width: 800px) {
		.container {
			grid-template-columns: 1fr;
		}
	}
} */
/* @supports not (container-size: inline-size) {
	@media screen and (max-width: 800px) {
		.container {
			grid-template-columns: 1fr;
		}
	}
} */

</style>