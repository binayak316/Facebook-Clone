// javascript for photo preview while you select the photo starts
function previewImages() {
var preview = document.querySelector('#preview_profile');

if (this.files) {
[].forEach.call(this.files, readAndPreview);
}

function readAndPreview(file) {

// Make sure `file.name` matches our extensions criteria
if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
return alert(file.name + " is not an image");
} // else...

var reader = new FileReader();

reader.addEventListener("load", function() {
var image = new Image();
image.height = 100;
image.title  = file.name;
image.src    = this.result;
preview.appendChild(image);
});

reader.readAsDataURL(file);
}
}
document.querySelector('#profile').addEventListener("change", previewImages);

// javascript for photo preview while you select the photo ends







