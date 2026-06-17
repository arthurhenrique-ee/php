let boxUpload = document.querySelector('.upload-image')
let preview = document.querySelector('.upload-image .preview')
let inputImg = document.querySelector('.upload-image input#ad-image')
let inputs = document.querySelectorAll('input')
let btnPublic = document.querySelector('.ad-details #btn-public')

function previewImg(e) {
    let file = e.target.files[0]
    
    if (file) {
        const reader = new FileReader()

        reader.onload = function(e) {
            preview.src = e.target.result
        }

        reader.readAsDataURL(file)
        boxUpload.classList.add("loaded")
    }
}

inputImg.addEventListener("change", (event) => {
    previewImg(event)
})

boxUpload.addEventListener("click", () => {
    inputImg.click();
})

inputs.forEach(input => {
    input.addEventListener("input", () => {
        if (input.value) {
            btnPublic.classList.add("active")
        }
    }) 
});