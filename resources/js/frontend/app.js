import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import "./components/plugins.init";
import "./components/feather.js";

import { tns } from "tiny-slider";
window.tns = tns;
