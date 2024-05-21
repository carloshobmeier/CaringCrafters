console.log("oi")
async function getAddressInfo(cep) {
    if (cep.length != 9) {
        console.error('Error: CEP must be 8 digits long.');
        return;
    }

    cep = cep.replace("-","")
    console.log(cep)
    const url = `https://viacep.com.br/ws/${cep}/json/`;

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`Error fetching data: ${response.statusText}`);
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error:', error);
    }
}

// Example usage:
document.getElementById('cep').addEventListener("focusout",()=>{
    const cep = document.getElementById('cep').value;
    console.log(cep)
    getAddressInfo(cep).then(data => {
        const cityInput = document.getElementById("city");
        console.log(data)
        if (data && data.erro || data == undefined) {
            document.getElementById("city").value = ""
            console.error('Error: CEP not found.');
            document.getElementById("cep").classList.add("wrong");
        } else {
            console.log(data.localidade);
            cityInput.value = data.localidade
            document.getElementById("cep").classList.remove("wrong");

        }}
    );
})

document.getElementById('institution_cep').addEventListener("focusout",()=>{
    const cep = document.getElementById('institution_cep').value;
    console.log(cep)
    getAddressInfo(cep).then(data => {
        const cityInput = document.getElementById("institution_city");
        console.log(data)
        if (data && data.erro || data == undefined) {
            document.getElementById("institution_city").value = ""
            console.error('Error: CEP not found.');
            document.getElementById("institution_cep").classList.add("wrong");
        } else {
            console.log(data.localidade);
            cityInput.value = data.localidade
            document.getElementById("institution_cep").classList.remove("wrong");

        }}
    );
})

