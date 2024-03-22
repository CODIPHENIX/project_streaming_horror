export function errormsg(){

    var urlParams = new URLSearchParams(window.location.search);
    if(urlParams.has('error')) {
        var errorDiv = document.getElementById('error');
        errorDiv.textContent = urlParams.get('error');
        errorDiv.style.display = 'block';
    }
    if(urlParams.has('success')) {

        Swal.fire({
            text: urlParams.get('success'),
            icon: "success"
          }); 
    }
   
}