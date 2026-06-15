let containerUpload = document.querySelector('.upload-image')
let inputImage = document.querySelector('.upload-image input#ad-image')

inputImage.addEventListener("change", (e) => {
    let file = e.target.files[0]
    
    if (file) {
        containerUpload.innerHTML = "<img class='preview' src=''>"
        const preview = document.querySelector('.upload-image .preview')
        const reader = new FileReader()

        reader.onload = function(e) {
            preview.src = e.target.result
        }

        reader.readAsDataURL(file)
    }
})
