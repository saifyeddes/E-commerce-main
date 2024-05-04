<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <meta name="description" content="Tailwind CSS Starter template - Admin theme, dashboard, or web application UI!">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,fixed header, admin starter template, admin template, admin console, example">

    <style type="text/css">:root, :host {
  --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
  --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
  --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
  --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
  --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
  --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
  --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
  --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
  --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
}

svg:not(:root).svg-inline--fa, svg:not(:host).svg-inline--fa {
  overflow: visible;
  box-sizing: content-box;
}

.svg-inline--fa {
  display: var(--fa-display, inline-block);
  height: 1em;
  overflow: visible;
  vertical-align: -0.125em;
}
.svg-inline--fa.fa-2xs {
  vertical-align: 0.1em;
}
.svg-inline--fa.fa-xs {
  vertical-align: 0em;
}
.svg-inline--fa.fa-sm {
  vertical-align: -0.0714285705em;
}
.svg-inline--fa.fa-lg {
  vertical-align: -0.2em;
}
.svg-inline--fa.fa-xl {
  vertical-align: -0.25em;
}
.svg-inline--fa.fa-2xl {
  vertical-align: -0.3125em;
}
.svg-inline--fa.fa-pull-left {
  margin-right: var(--fa-pull-margin, 0.3em);
  width: auto;
}
.svg-inline--fa.fa-pull-right {
  margin-left: var(--fa-pull-margin, 0.3em);
  width: auto;
}
.svg-inline--fa.fa-li {
  width: var(--fa-li-width, 2em);
  top: 0.25em;
}
.svg-inline--fa.fa-fw {
  width: var(--fa-fw-width, 1.25em);
}

.fa-layers svg.svg-inline--fa {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

.fa-layers-counter, .fa-layers-text {
  display: inline-block;
  position: absolute;
  text-align: center;
}

.fa-layers {
  display: inline-block;
  height: 1em;
  position: relative;
  text-align: center;
  vertical-align: -0.125em;
  width: 1em;
}
.fa-layers svg.svg-inline--fa {
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-text {
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-counter {
  background-color: var(--fa-counter-background-color, #ff253a);
  border-radius: var(--fa-counter-border-radius, 1em);
  box-sizing: border-box;
  color: var(--fa-inverse, #fff);
  line-height: var(--fa-counter-line-height, 1);
  max-width: var(--fa-counter-max-width, 5em);
  min-width: var(--fa-counter-min-width, 1.5em);
  overflow: hidden;
  padding: var(--fa-counter-padding, 0.25em 0.5em);
  right: var(--fa-right, 0);
  text-overflow: ellipsis;
  top: var(--fa-top, 0);
  -webkit-transform: scale(var(--fa-counter-scale, 0.25));
          transform: scale(var(--fa-counter-scale, 0.25));
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-bottom-right {
  bottom: var(--fa-bottom, 0);
  right: var(--fa-right, 0);
  top: auto;
  -webkit-transform: scale(var(--fa-layers-scale, 0.25));
          transform: scale(var(--fa-layers-scale, 0.25));
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right;
}

.fa-layers-bottom-left {
  bottom: var(--fa-bottom, 0);
  left: var(--fa-left, 0);
  right: auto;
  top: auto;
  -webkit-transform: scale(var(--fa-layers-scale, 0.25));
          transform: scale(var(--fa-layers-scale, 0.25));
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
}

.fa-layers-top-right {
  top: var(--fa-top, 0);
  right: var(--fa-right, 0);
  -webkit-transform: scale(var(--fa-layers-scale, 0.25));
          transform: scale(var(--fa-layers-scale, 0.25));
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-top-left {
  left: var(--fa-left, 0);
  right: auto;
  top: var(--fa-top, 0);
  -webkit-transform: scale(var(--fa-layers-scale, 0.25));
          transform: scale(var(--fa-layers-scale, 0.25));
  -webkit-transform-origin: top left;
          transform-origin: top left;
}

.fa-1x {
  font-size: 1em;
}

.fa-2x {
  font-size: 2em;
}

.fa-3x {
  font-size: 3em;
}

.fa-4x {
  font-size: 4em;
}

.fa-5x {
  font-size: 5em;
}

.fa-6x {
  font-size: 6em;
}

.fa-7x {
  font-size: 7em;
}

.fa-8x {
  font-size: 8em;
}

.fa-9x {
  font-size: 9em;
}

.fa-10x {
  font-size: 10em;
}

.fa-2xs {
  font-size: 0.625em;
  line-height: 0.1em;
  vertical-align: 0.225em;
}

.fa-xs {
  font-size: 0.75em;
  line-height: 0.0833333337em;
  vertical-align: 0.125em;
}

.fa-sm {
  font-size: 0.875em;
  line-height: 0.0714285718em;
  vertical-align: 0.0535714295em;
}

.fa-lg {
  font-size: 1.25em;
  line-height: 0.05em;
  vertical-align: -0.075em;
}

.fa-xl {
  font-size: 1.5em;
  line-height: 0.0416666682em;
  vertical-align: -0.125em;
}

.fa-2xl {
  font-size: 2em;
  line-height: 0.03125em;
  vertical-align: -0.1875em;
}

.fa-fw {
  text-align: center;
  width: 1.25em;
}

.fa-ul {
  list-style-type: none;
  margin-left: var(--fa-li-margin, 2.5em);
  padding-left: 0;
}
.fa-ul > li {
  position: relative;
}

.fa-li {
  left: calc(var(--fa-li-width, 2em) * -1);
  position: absolute;
  text-align: center;
  width: var(--fa-li-width, 2em);
  line-height: inherit;
}

.fa-border {
  border-color: var(--fa-border-color, #eee);
  border-radius: var(--fa-border-radius, 0.1em);
  border-style: var(--fa-border-style, solid);
  border-width: var(--fa-border-width, 0.08em);
  padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
}

.fa-pull-left {
  float: left;
  margin-right: var(--fa-pull-margin, 0.3em);
}

.fa-pull-right {
  float: right;
  margin-left: var(--fa-pull-margin, 0.3em);
}

.fa-beat {
  -webkit-animation-name: fa-beat;
          animation-name: fa-beat;
  -webkit-animation-delay: var(--fa-animation-delay, 0s);
          animation-delay: var(--fa-animation-delay, 0s);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
          animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
          animation-timing-function: var(--fa-animation-timing, ease-in-out);
}

.fa-bounce {
  -webkit-animation-name: fa-bounce;
          animation-name: fa-bounce;
  -webkit-animation-delay: var(--fa-animation-delay, 0s);
          animation-delay: var(--fa-animation-delay, 0s);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
          animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
          animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
}

.fa-fade {
  -webkit-animation-name: fa-fade;
          animation-name: fa-fade;
  -webkit-animation-delay: var(--fa-animation-delay, 0s);
          animation-delay: var(--fa-animation-delay, 0s);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
          animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
          animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
}

.fa-beat-fade {
  -webkit-animation-name: fa-beat-fade;
          animation-name: fa-beat-fade;
  -webkit-animation-delay: var(--fa-animation-delay, 0s);
          animation-delay: var(--fa-animation-delay, 0s);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
          animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
          animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
}

.fa-flip {
  -webkit-animation-name: fa-flip;
          animation-name: fa-flip;
  -webkit-animation-delay: var(--fa-animation-delay, 0s);
          animation-delay: var(--fa-animation-delay, 0s);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
          animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
          animation-timing-function: var(--fa-animation-timing, ease-in-out);
}

.fa-shake {
  -webkit-animation-name: fa-shake;
          animation-name: fa-shake;
  -webkit-animation-delay: var(--fa-animation-delay, 0s);
          animation-delay: var(--fa-animation-delay, 0s);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
          animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, linear);
          animation-timing-function: var(--fa-animation-timing, linear);
}

.fa-spin {
  -webkit-animation-name: fa-spin;
          animation-name: fa-spin;
  -webkit-animation-delay: var(--fa-animation-delay, 0s);
          animation-delay: var(--fa-animation-delay, 0s);
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 2s);
          animation-duration: var(--fa-animation-duration, 2s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, linear);
          animation-timing-function: var(--fa-animation-timing, linear);
}

.fa-spin-reverse {
  --fa-animation-direction: reverse;
}

.fa-pulse,
.fa-spin-pulse {
  -webkit-animation-name: fa-spin;
          animation-name: fa-spin;
  -webkit-animation-direction: var(--fa-animation-direction, normal);
          animation-direction: var(--fa-animation-direction, normal);
  -webkit-animation-duration: var(--fa-animation-duration, 1s);
          animation-duration: var(--fa-animation-duration, 1s);
  -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
          animation-iteration-count: var(--fa-animation-iteration-count, infinite);
  -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
          animation-timing-function: var(--fa-animation-timing, steps(8));
}

@media (prefers-reduced-motion: reduce) {
  .fa-beat,
.fa-bounce,
.fa-fade,
.fa-beat-fade,
.fa-flip,
.fa-pulse,
.fa-shake,
.fa-spin,
.fa-spin-pulse {
    -webkit-animation-delay: -1ms;
            animation-delay: -1ms;
    -webkit-animation-duration: 1ms;
            animation-duration: 1ms;
    -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
    -webkit-transition-delay: 0s;
            transition-delay: 0s;
    -webkit-transition-duration: 0s;
            transition-duration: 0s;
  }
}
@-webkit-keyframes fa-beat {
  0%, 90% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  45% {
    -webkit-transform: scale(var(--fa-beat-scale, 1.25));
            transform: scale(var(--fa-beat-scale, 1.25));
  }
}
@keyframes fa-beat {
  0%, 90% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  45% {
    -webkit-transform: scale(var(--fa-beat-scale, 1.25));
            transform: scale(var(--fa-beat-scale, 1.25));
  }
}
@-webkit-keyframes fa-bounce {
  0% {
    -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
  }
  10% {
    -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
  }
  30% {
    -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
  }
  50% {
    -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
  }
  57% {
    -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
  }
  64% {
    -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
  }
  100% {
    -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
  }
}
@keyframes fa-bounce {
  0% {
    -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
  }
  10% {
    -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
  }
  30% {
    -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
  }
  50% {
    -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
  }
  57% {
    -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
  }
  64% {
    -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
  }
  100% {
    -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
  }
}
@-webkit-keyframes fa-fade {
  50% {
    opacity: var(--fa-fade-opacity, 0.4);
  }
}
@keyframes fa-fade {
  50% {
    opacity: var(--fa-fade-opacity, 0.4);
  }
}
@-webkit-keyframes fa-beat-fade {
  0%, 100% {
    opacity: var(--fa-beat-fade-opacity, 0.4);
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
            transform: scale(var(--fa-beat-fade-scale, 1.125));
  }
}
@keyframes fa-beat-fade {
  0%, 100% {
    opacity: var(--fa-beat-fade-opacity, 0.4);
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
            transform: scale(var(--fa-beat-fade-scale, 1.125));
  }
}
@-webkit-keyframes fa-flip {
  50% {
    -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
  }
}
@keyframes fa-flip {
  50% {
    -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
  }
}
@-webkit-keyframes fa-shake {
  0% {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
  4% {
    -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
  }
  8%, 24% {
    -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
  }
  12%, 28% {
    -webkit-transform: rotate(18deg);
            transform: rotate(18deg);
  }
  16% {
    -webkit-transform: rotate(-22deg);
            transform: rotate(-22deg);
  }
  20% {
    -webkit-transform: rotate(22deg);
            transform: rotate(22deg);
  }
  32% {
    -webkit-transform: rotate(-12deg);
            transform: rotate(-12deg);
  }
  36% {
    -webkit-transform: rotate(12deg);
            transform: rotate(12deg);
  }
  40%, 100% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
}
@keyframes fa-shake {
  0% {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
  4% {
    -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
  }
  8%, 24% {
    -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
  }
  12%, 28% {
    -webkit-transform: rotate(18deg);
            transform: rotate(18deg);
  }
  16% {
    -webkit-transform: rotate(-22deg);
            transform: rotate(-22deg);
  }
  20% {
    -webkit-transform: rotate(22deg);
            transform: rotate(22deg);
  }
  32% {
    -webkit-transform: rotate(-12deg);
            transform: rotate(-12deg);
  }
  36% {
    -webkit-transform: rotate(12deg);
            transform: rotate(12deg);
  }
  40%, 100% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.fa-rotate-90 {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.fa-rotate-180 {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.fa-rotate-270 {
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

.fa-flip-horizontal {
  -webkit-transform: scale(-1, 1);
          transform: scale(-1, 1);
}

.fa-flip-vertical {
  -webkit-transform: scale(1, -1);
          transform: scale(1, -1);
}

.fa-flip-both,
.fa-flip-horizontal.fa-flip-vertical {
  -webkit-transform: scale(-1, -1);
          transform: scale(-1, -1);
}

.fa-rotate-by {
  -webkit-transform: rotate(var(--fa-rotate-angle, none));
          transform: rotate(var(--fa-rotate-angle, none));
}

.fa-stack {
  display: inline-block;
  vertical-align: middle;
  height: 2em;
  position: relative;
  width: 2.5em;
}

.fa-stack-1x,
.fa-stack-2x {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  z-index: var(--fa-stack-z-index, auto);
}

.svg-inline--fa.fa-stack-1x {
  height: 1em;
  width: 1.25em;
}
.svg-inline--fa.fa-stack-2x {
  height: 2em;
  width: 2.5em;
}

.fa-inverse {
  color: var(--fa-inverse, #fff);
}

.sr-only,
.fa-sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

.sr-only-focusable:not(:focus),
.fa-sr-only-focusable:not(:focus) {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

.svg-inline--fa .fa-primary {
  fill: var(--fa-primary-color, currentColor);
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa .fa-secondary {
  fill: var(--fa-secondary-color, currentColor);
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-primary {
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-secondary {
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa mask .fa-primary,
.svg-inline--fa mask .fa-secondary {
  fill: black;
}

.fad.fa-inverse,
.fa-duotone.fa-inverse {
  color: var(--fa-inverse, #fff);
}</style><link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
	<link rel="manifest" href="../site.webmanifest">
	<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#3b7977">

	<!-- Primary Meta Tags -->
	<title>Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS</title>
	<meta name="title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
	<meta name="description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.tailwindtoolbox.com/">
	<meta property="og:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
	<meta property="og:description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="og:image" content="https://www.tailwindtoolbox.com/social.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://www.tailwindtoolbox.com/">
	<meta property="twitter:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
	<meta property="twitter:description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="twitter:image" content="https://www.tailwindtoolbox.com/social.png">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

<style>@font-face {
              font-family: 'Open Sans Regular';
              font-style: normal;
              font-weight: 400;
              src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-regular.woff');
          }</style><style>@font-face {
              font-family: 'Open Sans Bold';
              font-style: normal;
              font-weight: 800;
              src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/OpenSans-Bold.woff');
          }</style><style>@font-face {
              font-family: 'Open Sans ExtraBold';
              font-style: normal;
              font-weight: 800;
              src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-800.woff');
          }</style></head>


<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <!--Nav-->
    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#">
                    <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                </a>
            </div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                    <input type="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">

                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                </svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                <a href="login.php" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>

                                <div class="border border-gray-800"></div>
                                <a href="logout.php" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="home.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="add_product.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                            <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Add Product</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="all_product.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                            <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">All product</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="users.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Users</span>
                        </a>
                    </li>
                <li class="mr-3 flex-1">
                                        <a href="all_orders.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Orders</span>
                                        </a>
                                    </li><li class="mr-3 flex-1">
                                        <a href="pending_orders.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Delivery Orders</span>
                                        </a>
                                    </li>
                                <li class="mr-3 flex-1">
                                        <a href="report.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Report</span>
                                        </a>
                                    </li>

                </ul>
            </div>


        </div>

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">Dashboard</h3>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <?php
                    // Database connection details
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "cse411project";

                    // Establish the database connection
                    $connection = mysqli_connect($host, $user, $pass, $db);

                    // Check connection
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Query to calculate total amount of products in the cart
                    $sql = "SELECT SUM(quantity * price) AS total_amount FROM cart";
                    $result = mysqli_query($connection, $sql);

                    if ($result) {
                        // Fetch the result
                        $row = mysqli_fetch_assoc($result);
                        $totalAmount = $row['total_amount'];
                    } else {
                        $totalAmount = 0;
                    }

                    // Close the connection
                    mysqli_close($connection);
                    ?>

                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">Total Amount</h5>
                                <h3 class="font-bold text-3xl">$<?php echo $totalAmount; ?> <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>

                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                   <?php
                   // Database connection details
                   $host = "localhost";
                   $user = "root";
                   $pass = "";
                   $db = "cse411project";

                   // Establish the database connection
                   $connection = mysqli_connect($host, $user, $pass, $db);

                   // Check connection
                   if (!$connection) {
                       die("Connection failed: " . mysqli_connect_error());
                   }

                   // Query to count total number of administrators
                   $sql = "SELECT COUNT(*) AS total_admin FROM admin";
                   $result = mysqli_query($connection, $sql);

                   if ($result) {
                       // Fetch the result
                       $row = mysqli_fetch_assoc($result);
                       $totalAdmin = $row['total_admin'];
                   } else {
                       $totalAdmin = 0;
                   }

                   // Close the connection
                   mysqli_close($connection);
                   ?>

                   <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                       <div class="flex flex-row items-center">
                           <div class="flex-shrink pr-4">
                               <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                           </div>
                           <div class="flex-1 text-right md:text-center">
                               <h5 class="font-bold uppercase text-gray-600">Total Admin</h5>
                               <h3 class="font-bold text-3xl"><?php echo $totalAdmin; ?> <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                           </div>
                       </div>
                   </div>

                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <?php
                    // Database connection details
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "cse411project";

                    // Establish the database connection
                    $connection = mysqli_connect($host, $user, $pass, $db);

                    // Check connection
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Query to count total number of users
                    $sql = "SELECT COUNT(*) AS total_users FROM users";
                    $result = mysqli_query($connection, $sql);

                    if ($result) {
                        // Fetch the result
                        $row = mysqli_fetch_assoc($result);
                        $totalUsers = $row['total_users'];
                    } else {
                        $totalUsers = 0;
                    }

                    // Close the connection
                    mysqli_close($connection);
                    ?>

                    <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">New Users</h5>
                                <h3 class="font-bold text-3xl"><?php echo $totalUsers; ?> <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>

                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                   <?php
                   // Connect to your database
                  $host = "localhost";
                  $user = "root";
                  $pass = "";
                  $db   ="cse411project";

                   // Create connection
                   $conn = new mysqli($host, $user, $pass, $db);

                   // Check connection
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                   }

                   // Query to count total number of products
                   $sql = "SELECT COUNT(*) AS total_products FROM product";
                   $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                       // Fetch the result
                       $row = $result->fetch_assoc();
                       $totalProducts = $row['total_products'];
                   } else {
                       $totalProducts = 0;
                   }

                   // Close the connection
                   $conn->close();
                   ?>

                   <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                       <div class="flex flex-row items-center">
                           <div class="flex-shrink pr-4">
                               <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                           </div>
                           <div class="flex-1 text-right md:text-center">
                               <h5 class="font-bold uppercase text-gray-600">Total Products</h5>
                               <h3 class="font-bold text-3xl"><?php echo $totalProducts; ?> Products</h3>
                           </div>
                       </div>
                   </div>

                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <?php
                    // Database connection details
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "cse411project";

                    // Establish the database connection
                    $connection = mysqli_connect($host, $user, $pass, $db);

                    // Check connection
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Query to count total number of orders
                    $sql = "SELECT COUNT(*) AS total_orders FROM orders";
                    $result = mysqli_query($connection, $sql);

                    if ($result) {
                        // Fetch the result
                        $row = mysqli_fetch_assoc($result);
                        $totalOrders = $row['total_orders'];
                    } else {
                        $totalOrders = 0;
                    }

                    // Close the connection
                    mysqli_close($connection);
                    ?>

                    <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">Orders</h5>
                                <h3 class="font-bold text-3xl"><?php echo $totalOrders; ?> Orders</h3>
                            </div>
                        </div>
                    </div>

                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">Delivery Orders</h5>
                                <h3 class="font-bold text-3xl">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>


            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                        </div>
                        <div class="p-5"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="chartjs-7" class="chartjs chartjs-render-monitor" width="213" height="106" style="display: block; width: 213px; height: 106px;"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-7"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["January", "February", "March", "April"],
                                        "datasets": [{
                                            "label": "Page Impressions",
                                            "data": [10, 20, 30, 40],
                                            "borderColor": "rgb(255, 99, 132)",
                                            "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                        }, {
                                            "label": "Adsense Clicks",
                                            "data": [5, 15, 10, 30],
                                            "type": "line",
                                            "fill": false,
                                            "borderColor": "rgb(54, 162, 235)"
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                        </div>
                        <div class="p-5"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="chartjs-0" class="chartjs chartjs-render-monitor" width="213" height="106" style="display: block; width: 213px; height: 106px;"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "line",
                                    "data": {
                                        "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                        "datasets": [{
                                            "label": "Views",
                                            "data": [65, 59, 80, 81, 56, 55, 40],
                                            "fill": false,
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {}
                                });
                            </script>
                        </div>
                    </div>

                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                        </div>
                        <div class="p-5"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><canvas id="chartjs-4" class="chartjs chartjs-render-monitor" width="213" height="106" style="display: block; width: 213px; height: 106px;"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["P1", "P2", "P3"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [300, 50, 100],
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>

                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">

                </div>


            </div>
        </div>
    </div>








    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>




</body><div id="aitopia" class="aitopia dark" data-v-app=""><!----><!----><div id="aitopia-container" class="close-sidebar"><div id="aitopia-sidebar"><div id="ai-sidebar" class="ait-flex ait-w-full ait-h-full ait-overflow-hidden"><div class="ait-flex ait-flex-col ait-w-[calc(100%_-_60px)]" id="ait-sidebar-chat"><div class="ait-header ait-flex-shrink"><nav class="ait-w-full ait-bg-[transparent]"><div class="ait-flex ait-items-center ait-w-full ait-p-0"><div class="ait-flex ait-items-center ait-justify-between ait-w-full"><div class="ait-flex ait-items-center ait-justify-between"><span><svg class="ait-w-8 ait-h-8  ait-logo" xmlns="http://www.w3.org/2000/svg" baseProfile="tiny" viewBox="0 0 125 121.7" overflow="visible"><circle fill="#01a77d" cx="63.4" cy="61.2" r="57.8"></circle><g fill="#fff"><path d="M46.9 60.5h-.4c-1.9-.2-3.3-1.9-3.1-3.8.6-6.3 4.5-38 17.3-41.2 8.2-2 14.4 7.5 16.5 10.6 1.1 1.6.6 3.8-1 4.9s-3.8.6-4.9-1c-3.5-5.3-6.9-8.2-9-7.7-4.2 1-10 14.8-12 35.1-.2 1.7-1.7 3.1-3.4 3.1zm51.9-4.9c-.5 0-1-.1-1.4-.3-1.8-.8-2.6-2.9-1.8-4.6 2.6-5.8 3.2-10.2 1.7-11.7-3.1-3-17.8-.6-36.1 8.6-1.7.9-3.8.2-4.7-1.6-.9-1.7-.2-3.8 1.6-4.7.3-.2 8.3-4.1 17.4-7.1 13.4-4.5 22.2-4.5 26.7-.2 6.1 5.8 1.4 16.2-.1 19.6-.7 1.3-2 2-3.3 2zM88.2 89.5c-1.8 0-3.3-1.3-3.5-3.1-.2-1.9 1.1-3.7 3.1-3.9 6.3-.7 10.4-2.5 10.9-4.6 1-4.2-8.7-15.6-25.9-26.6-1.6-1-2.1-3.2-1.1-4.8s3.2-2.1 4.8-1.1c.3.2 7.8 5 15.1 11.3 10.7 9.3 15.3 16.7 13.9 22.8-1.9 8.2-13.2 9.5-16.9 10h-.4zm-25.9 18.1c-7.2 0-12.4-8.3-14.2-11.2-1-1.6-.5-3.8 1.1-4.8s3.8-.5 4.8 1.1c3.4 5.4 6.7 8.3 8.8 7.9 4.2-.9 10.3-14.5 12.9-34.8.2-1.9 2-3.3 3.9-3 1.9.2 3.3 2 3 3.9-.8 6.3-5.4 37.9-18.4 40.7-.5.1-1.2.2-1.9.2zm-25-18.1c-5.5 0-9.4-1.3-11.8-4-5.6-6.3-.1-16.3 1.6-19.5.9-1.7 3.1-2.3 4.7-1.4 1.7.9 2.3 3.1 1.4 4.7-3.1 5.6-4 9.9-2.6 11.5 2.9 3.2 17.7 1.9 36.7-5.7a3.57 3.57 0 0 1 4.6 1.9 3.57 3.57 0 0 1-1.9 4.6c-.3.1-8.6 3.5-17.9 5.8-5.9 1.4-10.8 2.1-14.8 2.1zm16.5-12.6c-.6 0-1.2-.2-1.8-.5-.3-.2-7.9-4.8-15.4-10.8-11-8.9-15.8-16.2-14.6-22.3 1.6-8.2 12.9-9.9 16.6-10.5 1.9-.3 3.7 1 4 2.9s-1 3.7-2.9 4c-6.3.9-10.3 2.8-10.7 4.9-1 4.3 9 15.3 26.6 25.8 1.7 1 2.2 3.1 1.2 4.8-.7 1.1-1.8 1.7-3 1.7z"></path><circle cx="63.8" cy="60.5" r="8.4"></circle></g></svg></span><div class="ait-self-center ait-text-base ait-text-black ait-ml-2 dark:ait-text-gray-200 ait-whitespace-nowrap">Chat</div></div><button class="ait-flex ait-items-center ait-space-x-2 ait-bg-transparent hover:ait-bg-[var(--ait-link-color)] ait-transition-all ait-rounded-full ait-p-1 ait-px-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="ait-w-4 ait-h-4 dark:ait-text-gray-200"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path></svg><span class="ait-text-sm dark:ait-text-gray-200">Nouvelle conversation</span></button></div></div></nav></div><div id="ait-upgrade-plan-modal" class="ait-hide"><div tabindex="-1" aria-hidden="true" class="ait-fixed !ait-z-[999999] ait-modal ait-m-0 ait-bg-[rgba(0,0,0,.5)] ait-top-0 ait-left-0 ait-bottom-0 ait-right-0 ait-w-full ait-p-4 ait-overflow-x-hidden ait-overflow-y-auto md:ait-inset-0 h-[calc(100%)] ait-max-h-full ait-justify-center ait-flex ait-w-full ait-items-center" data-modal-hide=""><div class="ait-relative ait-w-full md:ait-max-w-lg ait-max-h-full"><div class="ait-relative ait-bg-white ait-rounded-lg ait-shadow dark:ait-bg-neutral-800"><div class="ait-px-6 ait-py-4 ait-border-b ait-rounded-t dark:ait-border-neutral-600"><h3 class="ait-text-base ait-font-semibold ait-text-neutral-900 lg:ait-text-lg dark:ait-text-white ait-text-center">Search</h3><button type="button" class="ait-absolute ait-top-3 ait-right-2.5 ait-text-neutral-400 ait-bg-transparent hover:ait-bg-neutral-200 hover:ait-text-neutral-900 ait-rounded-lg ait-text-sm ait-w-8 ait-h-8 ait-ml-auto ait-inline-flex ait-justify-center ait-items-center dark:hover:ait-bg-neutral-600 dark:hover:ait-text-white" data-modal-hide=""><svg class="ait-w-3 ait-h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path></svg><span class="ait-sr-only">Close modal</span></button></div><div class="ait-px-4 ait-py-12 ait-w-full ait-text-center ait-flex ait-flex-col ait-items-center ait-gap-8"><p class="ait-px-4 ait-text-sm ait-text-neutral-600 dark:ait-text-neutral-400">Les données de ChatGPT ne sont pas en temps réel. ChatGPT Sidebar combine l'intelligence de ChatGPT avec des informations web en temps réel, permettant à GPT de gérer plus efficacement les questions liées aux informations en temps réel. Mettez à niveau pour obtenir cette fonctionnalité et ne vous préoccupez plus des informations obsolètes!</p><button class="aitopia-pricing ait-cursor-pointer ait-w-full ait-font-semibold ait-text-white ait-text-sm ait-py-2 ait-rounded-md ait-flex ait-items-center ait-gap-2 ait-justify-center ait-bg-[var(--ait-link-color)] hover:ait-opacity-80 ait-transition-all">Mettez à jour maintenant</button></div><!----></div></div></div></div><button data-dropdown-toggle="ait-upgrade-plan-modal" id="ait-toggle-upgrade-button" class="ait-hidden"></button><div id="ai-sidebar-content" class="false"><div class="ait-min-h-screen ait-flex ait-flex-col"><div id="ai-message-container" class="ait-flex ait-relative ait-flex-grow ait-w-full ait-overflow-x-hidden ait-h-[calc(100vh_-_265px)] ait-max-h-[calc(100vh_-_265px)]"><div class="ait-w-full"><div class="ait-flex ait-flex-col ait-h-full ait-space-y-3"><div id="aitopia-example"><div class="ait-p-2"><div class="ait-flex ait-items-center ait-justify-between ait-p-3 ait-space-x-3 ait-border ait-rounded-xl ait-bg-neutral-100 dark:ait-bg-neutral-900 dark:ait-text-neutral-200"><div><div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div><p class="ait-font-bold">🤓 Expliquer une chose complexe</p><p class="ait-opacity-60 ait-text-[11px] example_content">Expliquez l'intelligence artificielle de telle sorte            que je puisse l'expliquer à mon enfant de six ans.</p></div><button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="ait-w-5 ait-h-5 ait-cursor-pointer" fill="none"><path d="M20 12L14 6M20 12L14 18M20 12L9.5 12M4 12L6.5 12" stroke="#14746F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></button></div></div><div class="ait-p-2"><div class="ait-flex ait-items-center ait-justify-between ait-p-3 ait-space-x-3 ait-border ait-rounded-xl ait-bg-neutral-100 dark:ait-bg-neutral-900 dark:ait-text-neutral-200"><div><div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div><p class="ait-font-bold">🧠 Obtenez des suggestions et créez de nouvelles idées</p><p class="ait-opacity-60 ait-text-[11px] example_content">S'il vous plaît, donnez-moi les 10 meilleures idées de voyage autour du monde</p></div><button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="ait-w-5 ait-h-5 ait-cursor-pointer" fill="none"><path d="M20 12L14 6M20 12L14 18M20 12L9.5 12M4 12L6.5 12" stroke="#14746F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></button></div></div><div class="ait-p-2"><div class="ait-flex ait-items-center ait-justify-between ait-p-3 ait-space-x-3 ait-border ait-rounded-xl ait-bg-neutral-100 dark:ait-bg-neutral-900 dark:ait-text-neutral-200"><div><div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div><p class="ait-font-bold">💭 Traduire, résumer, corriger la grammaire et plus encore...</p><p class="ait-opacity-60 ait-text-[11px] example_content">Je t'aime</p></div><button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="ait-w-5 ait-h-5 ait-cursor-pointer" fill="none"><path d="M20 12L14 6M20 12L14 18M20 12L9.5 12M4 12L6.5 12" stroke="#14746F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></button></div></div></div><!----><div data-v-1aa42437="" class="ait-h-full" id="aitopia-message"><div data-v-1aa42437="" aria-details="chat-key-0" class="ait-bg-neutral-100 dark:ait-bg-neutral-900 dark:ait-text-gray-200"><div data-v-1aa42437="" class="ait-flex ait-p-2 ait-text-[10px] dark:ait-text-gray-200 ait-flex-col ait-items-start ait-justify-start ait-gap-2"><div data-v-1aa42437="" class="ait-flex ait-items-center ait-space-x-2"><img data-v-1aa42437="" class="ait-w-4" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAUCAYAAACJfM0wAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAN4SURBVHgBrVVZTBNRFD0tQ0trW2wFBWVTRCqKIKKgxA3FDUX90MRooiYmSoxRY+KHH/qlHxoNf2piosYPxUiiJijuuAUMLiDFirJ0YRNQsGXt0I73PRGhBRKXk7Qzc+fNmXPvPfeNDIQDV89G+QuKa5IkpeAvIQMsoltcmrMl28KvD+VdiJS7USgBUfhHELnNI2LR6a27rAI8ODoSaXRwKDJmzIZhjAbdLhfe2qrxtLJ8RGLiiZAJ0gE6PSjIIFvAQ16YGxWDlTPn4JG5DB+b6qBXa7AuYR5SJ8eivv0bHN1deF5lQltnh5ds2Q5GLIckGb1JNQEqUpqE84V3UVRtJrW9mBYyEUEaHT402ulFdqgUChxetQnJJMALY9mf4B1dFT8HadFxaHK0o6XjOxZOm4EVcUkos9fieH4uX9MjuvDa8hlPKt9j9+LVqKi3optigzGEeHV8Mowh4cgvL0Fi+BQeyyDSSy8forqlEWlT47BsegL63B4UmF7zmtc0N2FW2GS8qq0cnlgXoEa6MQEn7uQiwhDsnQj2LFkDQe6HMw9u0svDKLNkxNLRI3mgU6l91st/nQRrA7kqn2Yw1eSMF58q0CuKyIyfy9edKshDi9PB1X7tcPg8M6C4W+yFQa0duKHyV0KtVJIiCecK7/CYqcGKI5mbkT0+E2+sn7n1alubsC01HeVUZ9Hd56u4gSzEHJ4cGQMTLWIN2b9sPfwpfW+coCbGjJ+EmZOiuHpnTycmjjUMr5jh9rtibE9bjiCtFi+rzCixfuKOOJixAfcr3nGH6PuzYgPzO1sX2U+JYWvMwJrAFASqNNiXnsUn71ZpMVo7nNyGD4i8rcs5hEBLTTeQv7842kZW7OqvUW7JM0wPjcDGpPnISkzBw4pSXCl6hMhxExDgrxzUBwW2zFuMcrvFp+lDiFldsxJTEaYPgrnRBnO+jYgUNKUyrKVxTqFxZiVhUAh+3PdsMgtMb+GNIcSsVpdpGPYuXYtSew0vywSdHqlTYskFVXzy2NTpaVMKCTTg1L28Ye3ZX2PJNjjAyE7eu8GbYwwNR8S4YPT2iXhfZ+ENSqCJzF6Sice0OY1E+lOxhItks2ODg+yB22XFA9fzo41YQ2nrVCoaBieulzxHVXMDRoPQpxBy/ET3dtkoG31R9Uf++xPIczbubHfTJ4V2ZAv+I34AZ/hkrokSVEoAAAAASUVORK5CYII=" alt="gpt-image"><span data-v-1aa42437="">GPT-3.5</span></div><!----></div><div data-v-1aa42437="" class="dark:ait-bg-neutral-900 dark:ait-text-gray-200 ait-px-8 ait-py-4 ai_result_container"><div data-v-1aa42437="" class="ait-flex ait-flex-row ait-items-center"><div data-v-1aa42437="" class="ai_result">Bonjour, comment puis-je vous aider aujourd'hui?</div><!----></div><!----><div data-v-1aa42437="" class="ait-mt-3 ait-flex ait-items-center ait-float-right ait-cursor-pointer ait-gap-2 ait-divide-x-[0.5px] ait-divide-neutral-300 dark:ait-divide-neutral-700 ait-opacity-0"><div data-v-be103d6e="" data-v-1aa42437="" class="ait-relative ait-block"><button data-v-1aa42437="" type="button" class="ait-flex"><svg data-v-1aa42437="" class="svg-inline--fa fa-clipboard ait-w-3 ait-h-3" aria-hidden="true" focusable="false" data-prefix="far" data-icon="clipboard" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path class="" fill="currentColor" d="M280 64h40c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128C0 92.7 28.7 64 64 64h40 9.6C121 27.5 153.3 0 192 0s71 27.5 78.4 64H280zM64 112c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320c8.8 0 16-7.2 16-16V128c0-8.8-7.2-16-16-16H304v24c0 13.3-10.7 24-24 24H192 104c-13.3 0-24-10.7-24-24V112H64zm128-8a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"></path></svg></button><div data-v-be103d6e="" class="ait-absolute ait-z-[9999999] ait-top-0 ait-left-1/2 ait-transform ait--translate-x-1/2 ait-py-1 ait-px-2 ait-rounded-md ait-shadow-lg ait-bg-neutral-200 dark:ait-bg-neutral-950 dark:ait-text-gray-200 ait-translate-y-[-120%] ait:border-[1px] ait-border-neutral-200 dark:ait-border-neutral-300" style="display: none;"><div data-v-be103d6e="" class="ait-text-xs ait-font-medium ait-text-gray-500 dark:ait-text-gray-200 ait-whitespace-nowrap ait-max-w-[200px] ait-w-full">Copier</div></div></div><!----></div><div data-v-1aa42437="" class="ait-clear-both"></div></div><!----></div><div data-v-1aa42437="" id="ait-stop-chat-ai_chat" class="ait-stop-chat ait-hide"><button data-v-1aa42437="" class="ait-text-white hover:ait-bg-green-800 ait-font-medium ait-text-md ait-px-5 ait-py-2 ait-rounded-md dark:hover:ait-bg-[var(--ait-tab-menu-active-bg-color)]"><div data-v-1aa42437="" class="ait-flex ait-w-full ait-gap-2 ait-items-center ait-justify-center"><svg data-v-1aa42437="" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="icon-xs" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect data-v-1aa42437="" x="3" y="3" width="18" height="18" rx="2" ry="2"></rect></svg> Arrêtez de générer</div></button></div></div></div></div></div><div class="ait-px-3 ait-pt-3"><div class="ait-flex ait-relative ait-w-full ait-items-center ait-justify-between ait-my-3"><div class="ait-flex ait-w-full ait-gap-2 ait-items-center"><div class="ait-flex ait-items-center ait-relative ait-space-x-1"><button data-dropdown-toggle="ait-credit-dropdown" class="ait-flex ait-items-center ait-relative dark:ait-text-neutral-200 ait-border ait-rounded-full"><img src="chrome-extension://becfinhbfclcgokjlobojlnldbfillpf/assets/images/coin.png" alt="coin image" class="ait-w-4 ait-h-4"><div class="ait-text-sm">10</div></button><button type="button" id="aitopia-pricing" class="ait-text-neutral-500 hover:ait-text-neutral-50 hover:ait-bg-green-700 ait-ml-1 ait-rounded-lg focus:ait-outline-none ait-text-xs ait-px-2 ait-py-1 ait-text-center aitopia-pricing">Améliorer</button></div><div id="ait-credit-dropdown" class="ait-z-20 ait-bottom-[40px] ait-width-full ait-absolute ait-hide ait-w-full ait-max-w-[250px] ait-bg-white ait-divide-y ait-divide-neutral-100 ait-rounded-lg ait-shadow dark:ait-bg-neutral-900 dark:ait-divide-neutral-700"><div class="ait-block ait-px-4 ait-py-3 ait-font-medium ait-text-center ait-text-neutral-700 ait-rounded-t-lg ait-bg-neutral-50 dark:ait-bg-neutral-950 dark:ait-text-white"><span class="ait-font-bold">Free Plan</span><button type="button" class="ait-text-white ait-bg-green-700 hover:ait-bg-green-800 focus:ait-outline-none focus:ait-ring-4 focus:ait-ring-green-300 ait-font-medium ait-rounded-full ait-text-sm ait-px-5 ait-py-1 ait-text-center ait-ml-5 ait-mr-2 dark:ait-bg-green-600 dark:hover:ait-bg-green-700 dark:focus:ait-ring-green-800 aitopia-pricing">Améliorer</button></div><div class="ait-divide-y ait-divide-neutral-100 dark:ait-divide-neutral-700"><div class="ait-flex ait-px-4 ait-py-3 hover:ait-bg-neutral-100 dark:hover:ait-bg-neutral-700"><div class="ait-w-full ait-pl-3"><div class="ait-grid ait-grid-cols-4 ait-gap-4 ait-text-neutral-900 dark:ait-text-white ait-text-sm ait-mb-1.5 dark:ait-text-neutral-400"><div class="ait-col-span-3">Fast Text <div class="ait-text-[10px] ait-text-neutral-500 ait-pt-2 dark:ait-text-neutral-400">GPT-3.5</div></div><div class="ait-text-right"><span class="ait-text-sm">10</span></div></div></div></div><div class="ait-flex ait-px-4 ait-py-3 hover:ait-bg-neutral-100 dark:hover:ait-bg-neutral-700"><div class="ait-w-full ait-pl-3"><div class="ait-grid ait-grid-cols-4 ait-gap-4 ait-text-neutral-900 dark:ait-text-white ait-text-sm ait-mb-1.5 dark:ait-text-neutral-400"><div class="ait-col-span-3">Advanced Text <div class="ait-text-[10px] ait-text-neutral-500 ait-pt-2 dark:ait-text-neutral-400">GPT-4</div></div><div class="ait-text-right"><span class="ait-text-sm">0</span></div></div></div></div><div class="ait-flex ait-px-4 ait-py-3 hover:ait-bg-neutral-100 dark:hover:ait-bg-neutral-700"><div class="ait-w-full ait-pl-3"><div class="ait-grid ait-grid-cols-4 ait-gap-4 ait-text-neutral-900 dark:ait-text-white ait-text-sm ait-mb-1.5 dark:ait-text-neutral-400"><div class="ait-col-span-3">Image <div class="ait-text-[10px] ait-text-neutral-500 ait-pt-2 dark:ait-text-neutral-400">image</div></div><div class="ait-text-right"><span class="ait-text-sm">1</span></div></div></div></div></div></div><div class="ait-flex ait-flex-row ait-items-center ait-gap-1 ait-ml-2"><div data-v-be103d6e="" class="ait-relative ait-block"><button class="ait-cursor-pointer ait-p-1.5 ait-rounded-full ait-flex ait-items-center ait-justify-center hover:ait-bg-neutral-300 dark:hover:ait-bg-neutral-900 ait-border ait-transition-all"><svg class="svg-inline--fa fa-scissors ait-w-4 ait-h-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="scissors" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="" fill="currentColor" d="M256 192l-39.5-39.5c4.9-12.6 7.5-26.2 7.5-40.5C224 50.1 173.9 0 112 0S0 50.1 0 112s50.1 112 112 112c14.3 0 27.9-2.7 40.5-7.5L192 256l-39.5 39.5c-12.6-4.9-26.2-7.5-40.5-7.5C50.1 288 0 338.1 0 400s50.1 112 112 112s112-50.1 112-112c0-14.3-2.7-27.9-7.5-40.5L499.2 76.8c7.1-7.1 7.1-18.5 0-25.6c-28.3-28.3-74.1-28.3-102.4 0L256 192zm22.6 150.6L396.8 460.8c28.3 28.3 74.1 28.3 102.4 0c7.1-7.1 7.1-18.5 0-25.6L342.6 278.6l-64 64zM64 112a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm48 240a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg></button><div data-v-be103d6e="" class="ait-absolute ait-z-[9999999] ait-top-0 ait-left-1/2 ait-transform ait--translate-x-1/2 ait-py-1 ait-px-2 ait-rounded-md ait-shadow-lg ait-bg-neutral-200 dark:ait-bg-neutral-950 dark:ait-text-gray-200 ait-translate-y-[-120%] ait:border-[1px] ait-border-neutral-200 dark:ait-border-neutral-300" style="display: none;"><div data-v-be103d6e="" class="ait-text-xs ait-font-medium ait-text-gray-500 dark:ait-text-gray-200 ait-whitespace-nowrap ait-max-w-[200px] ait-w-full">Prenez une capture d'écran</div></div></div><div data-v-be103d6e="" class="ait-relative ait-block"><button class="ait-cursor-pointer ait-p-1.5 ait-rounded-full ait-flex ait-items-center ait-justify-center hover:ait-bg-neutral-300 dark:hover:ait-bg-neutral-900 ait-border ait-transition-all"><svg class="svg-inline--fa fa-image ait-w-4 ait-h-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="" fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64