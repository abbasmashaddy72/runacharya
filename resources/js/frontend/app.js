import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import $ from "jquery";
window.$ = $;

import lightbox from "lightbox2";
window.lightbox = lightbox;

import "./components/plugins.init";
import "./components/feather.js";
import "./custom";

// import { tns } from "tiny-slider";
// window.tns = tns;

import Swiper from "swiper";

window.Swiper = Swiper;
