<h1 style="font-family: Julius Sans One, sans-serif;">Day-2 NON TECHNICAL EVENTS</h1>
<div class="container">
	<div class="card">
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
	<!-- <div class="card">
		<h3 id="lab">LAB</h3>
		<p>
			The lab() functional notation expresses a given color in the CIE L*a*b* color space. Lab represents the entire range of color that humans
			can see.
		</p>
		<p><span class="nolab">No Support For This Browser</span></p>
	</div>
	<div class="card">
		<h3 id="lch">LCH</h3>
		<p>
			The lch() functional notation expresses a given color in the LCH color space. It has the same L axis as lab(), but uses polar coordinates C
			(Chroma) and H (Hue).
		</p>
		<p><span class="nolch">No Support For This Browser</span></p>
	</div>
	<div class="card">
		<h3 id="oklch">OKLCH</h3>
		<p>
			The oklch() functional notation expresses a given color in the OKLCH color space. It has the same L axis as oklab(), but uses polar
			coordinates C (Chroma) and H (Hue).
		</p>
		<p><span class="nooklch">No Support For This Browser</span></p>
	</div>
	<div class="card">
		<h3 id="oklab">OKLAB</h3>
		<p>
			The oklab() functional notation expresses a given color in the Oklab color space, which attempts to mimic how color is perceived by the
			human eye. The oklab() works with a Cartesian coordinate system on the OKlab color space, the a- and b-axes. If you want a polar color
			system, chroma and hue, use oklch().
		</p>
		<p><span class="nooklab">No Support For This Browser</span></p>
	</div> -->
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
	background: url(https://source.unsplash.com/E8Ufcyxz514/2400x1823)no-repeat center center fixed;
	font-family: "Atkinson Hyperlegible", sans-serif;
	color: var(--clr_text);
}
:is(h1, h3) {
	text-align: center;
	text-transform: uppercase;
	font-family: "Rowdies", sans-serif;
	font-weight: 700;
	font-size: 3rem;
	/* text-shadow: 0.1em 0.1em 0 black; */
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
	background-color: ghostwhite;
}
h3 {
	font-size: 2rem;
}
p {
	margin-inline: 0.5rem;
	font-size: 1.1rem;
    font-weight: 900;
	font-family: "Quattrocento", serif;
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
	span.corelative {
		display: inline;
	}
}
@supports not (color: color-mix(in srgb, #34c9eb 20%, white)) {
	#mix {
		color: red;
	}
	span.nomix {
		display: inline;
	}
}
@supports not (color: color-contrast(pink vs red, lightgreen, blue)) {
	#contrast {
		color: red;
	}
	span.nocontrast {
		display: inline;
	}
}
/* @supports not (color: hwb(228 19% 6%)) {
	#hwb {
		color:rgb(201 65 224)
	}
	span.nohow {
		display: inline;
	}
} */

/* @supports not (color: lab(59.69% 0.1007 0.1191)) {
	#lab {
		color: var(--clr_none);
	}
	span.nolab {
		display: inline;
	}
} */
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