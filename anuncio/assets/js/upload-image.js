let inputFile = document.querySelector('#ad-image')
let uploadArea = document.querySelector('.upload-image')
let preview = document.querySelector('.preview')

let inputTitulo = document.querySelector('#ad-titulo')
let inputDesc = document.querySelector('#ad-descricao')
let submitBtn = document.querySelector('#btn-submit')

uploadArea.addEventListener("click", () => {
    inputFile.click()
})

inputFile.addEventListener("change", () => {
    const file = inputFile.files[0]

    if (file) {
        const sizeFile = file.size / (1024 * 1024)
        if (sizeFile > 2) {
            alert("Imagem muito grande! Tente novamente.")
            return
        }

        const img = new Image()
        img.onload = () => {

            if (img.width < 1280) {
                alert("A largura mínima é 1280px")
                return
            }

            preview.src = URL.createObjectURL(file)
            uploadArea.classList.add("loaded")
        }

        img.src = URL.createObjectURL(file)
    }
})

function validateForm() {
    const imageFilled = inputFile.files.length > 0
    const titleFilled = inputTitulo.value.trim() !== ""
    const descFilled = inputDesc.value.trim() !== ""

    if (imageFilled && titleFilled && descFilled) {
        submitBtn.classList.add('active')
    }
}

inputFile.addEventListener("change", validateForm)
inputTitulo.addEventListener("input", validateForm)
inputDesc.addEventListener("input", validateForm)