<?php

/* =========================
   DATA (Combined)
========================= */

$categories = [

"aitools" => [
"title" => "AI",
"tools" => [
[
"title" => "AI Image Upscaler",
"description" => "Enhance image resolution using AI.",
"link" => "/ai-image-upscaler/",
"icon" => "fas fa-expand",
"new" => true
],
[
"title" => "AI Image Editor",
"description" => "AI powered image editing.",
"link" => "/ai-image-editor/",
"icon" => "fas fa-image"
],
]
],

"images" => [
"title" => "Images",
"tools" => [
[
"title" => "Image Compressor",
"description" => "Compress JPG, PNG & WebP easily.",
"link" => "/image-compressor/",
"icon" => "fas fa-image"
],
[
"title" => "Texture Packer",
"description" => "Create optimized sprite sheets.",
"link" => "/texture-packer/",
"icon" => "fas fa-th-large"
],
]
],

"video" => [
"title" => "Video",
"tools" => [
[
"title" => "Video Compressor",
"description" => "Reduce MP4 size quickly.",
"link" => "/video-compressor/",
"icon" => "fas fa-video"
],
[
"title" => "Video to Audio",
"description" => "Extract audio from video.",
"link" => "/video-to-audio/",
"icon" => "fas fa-file-audio"
],
]
],

"audio" => [
"title" => "Audio",
"tools" => [
[
"title" => "Audio Compressor",
"description" => "Compress audio files.",
"link" => "/audio-compress/",
"icon" => "fas fa-volume-down"
],
[
"title" => "Audio Crop",
"description" => "Trim audio easily.",
"link" => "/audio-crop/",
"icon" => "fas fa-cut"
],
]
],

"developer" => [
"title" => "Developer",
"tools" => [
[
"title" => "JSON Viewer",
"description" => "Format and debug JSON.",
"link" => "/json-viewer/",
"icon" => "fas fa-code"
],
[
"title" => "Code Minifier",
"description" => "Minify HTML, CSS & JS.",
"link" => "/code-minify/",
"icon" => "fas fa-file-code",
"new" => true
],
]
],

"fonts" => [
"title" => "Fonts",
"tools" => [
[
"title" => "Font Converter",
"description" => "Convert TTF, WOFF & more.",
"link" => "/font-converter/",
"icon" => "fas fa-font"
],
[
"title" => "Bitmap Generator",
"description" => "Generate bitmap fonts.",
"link" => "/bitmap-generator/",
"icon" => "fas fa-text-height"
],
]
],

"others" => [
"title" => "Others",
"tools" => [
[
"title" => "Tax Calculator",
"description" => "Indian income tax tool.",
"link" => "/tax/",
"icon" => "fas fa-calculator"
],
[
"title" => "IP Checker",
"description" => "Check public IP address.",
"link" => "/whatismyip/",
"icon" => "fas fa-globe"
],
]
]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EazyStudio – Free Online Tools</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>

<style>
body{font-family:Inter,sans-serif;background:#f3f4f6}

.filter-btn{
padding:6px 16px;
border-radius:999px;
background:#e5e7eb;
font-size:14px;
transition:.2s;
}
.filter-btn:hover{background:#d1d5db}
.filter-btn.active{
background:#111827;
color:#fff;
}

.tool-card{
opacity:1;
transition:opacity .25s ease,transform .2s ease;
}
.tool-card.hidden{
opacity:0;
pointer-events:none;
position:absolute;
}
.tool-card .card-ui{
background:#fff;
padding:20px;
border-radius:18px;
border:1px solid #e5e7eb;
height:100%;
position:relative;
}
.tool-card:hover{
transform:translateY(-4px);
box-shadow:0 12px 25px rgba(0,0,0,.05);
}
.tool-card i{
font-size:26px;
color:#4f46e5;
margin-bottom:12px;
}
.tool-card h3{
font-weight:600;
margin-bottom:6px;
}
.tool-card p{
font-size:14px;
color:#6b7280;
margin-bottom:10px;
}
.new-badge{
position:absolute;
top:10px;
right:10px;
background:#4f46e5;
color:#fff;
font-size:11px;
padding:2px 8px;
border-radius:999px;
}
</style>

</head>
<body>

<!-- HEADER -->
<nav class="bg-white shadow-sm sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-5 h-14 flex justify-between items-center">
<a href="/" class="text-lg font-bold text-indigo-600">
<i class="fa-solid fa-bolt"></i> EAZYSTUDIO
</a>
</div>
</nav>

<!-- MAIN -->
<main>

<section class="py-16 text-center bg-gradient-to-br from-gray-100 to-gray-200">
<h1 class="text-4xl font-bold mb-3">Every tool you need in one place</h1>
<p class="text-gray-600 mb-8">Fast, modern & forever free optimization tools.</p>

<div class="max-w-md mx-auto mb-6">
<input type="text" id="searchInput"
placeholder="Search tools..."
class="w-full px-4 py-2 rounded-full border border-gray-300 focus:ring-2 focus:ring-indigo-500 outline-none">
</div>

<div class="flex flex-wrap justify-center gap-3">
<button class="filter-btn active" data-filter="all">All</button>
<?php foreach($categories as $key=>$cat): ?>
<button class="filter-btn" data-filter="<?= $key ?>">
<?= $cat['title'] ?>
</button>
<?php endforeach; ?>
</div>
</section>

<section class="py-10">
<div class="max-w-7xl mx-auto px-4">
<div id="toolsGrid"
class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

<?php foreach($categories as $key=>$cat):
foreach($cat['tools'] as $tool): ?>

<div class="tool-card"
data-category="<?= $key ?>"
data-title="<?= strtolower($tool['title']) ?>">

<div class="card-ui">

<?php if(isset($tool['new']) && $tool['new']): ?>
<span class="new-badge">New</span>
<?php endif; ?>

<i class="<?= $tool['icon'] ?>"></i>
<h3><?= $tool['title'] ?></h3>
<p><?= $tool['description'] ?></p>
<a href="<?= $tool['link'] ?>" class="text-indigo-600 font-medium text-sm">
Open →
</a>

</div>
</div>

<?php endforeach; endforeach; ?>

</div>
</div>
</section>

</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-400 py-8 text-center text-sm">
© <?= date("Y") ?> EazyStudio. All rights reserved.
</footer>

<script>

const filterButtons=document.querySelectorAll(".filter-btn");
const cards=document.querySelectorAll(".tool-card");
const searchInput=document.getElementById("searchInput");

function updateURL(category){
const url=new URL(window.location);
if(category==="all"){
url.searchParams.delete("category");
}else{
url.searchParams.set("category",category);
}
window.history.pushState({}, "", url);
}

function applyFilter(category){
const searchValue=searchInput.value.toLowerCase();

cards.forEach(card=>{
const cardCategory=card.dataset.category;
const title=card.dataset.title;

const matchCategory=category==="all"||cardCategory===category;
const matchSearch=title.includes(searchValue);

if(matchCategory&&matchSearch){
card.classList.remove("hidden");
}else{
card.classList.add("hidden");
}
});
}

filterButtons.forEach(btn=>{
btn.addEventListener("click",function(){
document.querySelector(".filter-btn.active")
.classList.remove("active");
this.classList.add("active");
const filter=this.dataset.filter;
updateURL(filter);
applyFilter(filter);
});
});

searchInput.addEventListener("input",()=>{
const activeCategory=
document.querySelector(".filter-btn.active").dataset.filter;
applyFilter(activeCategory);
});

window.addEventListener("DOMContentLoaded",()=>{
const params=new URLSearchParams(window.location.search);
const category=params.get("category");
if(category){
const btn=document.querySelector(`[data-filter="${category}"]`);
if(btn){
document.querySelector(".filter-btn.active")
.classList.remove("active");
btn.classList.add("active");
applyFilter(category);
}
}
});

</script>

</body>
</html>