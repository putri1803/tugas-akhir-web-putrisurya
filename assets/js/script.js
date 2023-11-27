// dataTables
new DataTable('#example');

// CKEditor
ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    })
    .catch(error => {
        console.log(error);
    });

// Preview image
function previewImage() {
    const inputImgeFile = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    const inputFile = inputImgeFile;

    if (inputFile) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(inputFile.files[0]);

        fileReader.onload = function (e) {
            imgPreview.src = e.target.result;
        }
    }
}

// Tooltips
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
