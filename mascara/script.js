// Funções para aplicar as máscaras

function applyMask(field) {
    const input = document.getElementById(field);

    let value = input.value.replace(/\D/g, ''); // Remove tudo que não for número

    // Máscara para CPF (000.000.000-00)
    if (field === 'cpf') {
        value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    }
    
    // Máscara para Telefone Celular (00) 00000-0000
    if (field === 'telefone') {
        value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    }

    // Máscara para Data de Nascimento (00/00/0000)
    if (field === 'data-nascimento') {
        value = value.replace(/(\d{2})(\d{2})(\d{4})/, '$1/$2/$3');
    }

    // Máscara para CEP (00000-000)
    if (field === 'cep') {
        value = value.replace(/(\d{5})(\d{3})/, '$1-$2');
    }

    // Atualiza o valor do campo com a máscara
    input.value = value;
}

// Funções de validação

function validateForm(event) {
    let isValid = true;

    // Nome
    const nome = document.getElementById('nome').value;
    if (nome === "") {
        document.getElementById('error-nome').textContent = "Nome completo é obrigatório.";
        isValid = false;
    } else {
        document.getElementById('error-nome').textContent = "";
    }

    // CPF
    const cpf = document.getElementById('cpf').value.replace(/\D/g, '');
    if (!cpf || cpf.length !== 11) {
        document.getElementById('error-cpf').textContent = "CPF inválido. Preencha corretamente.";
        isValid = false;
    } else {
        document.getElementById('error-cpf').textContent = "";
    }

    // Telefone
    const telefone = document.getElementById('telefone').value.replace(/\D/g, '');
    if (!telefone || telefone.length !== 11) {
        document.getElementById('error-telefone').textContent = "Telefone inválido. Preencha corretamente.";
        isValid = false;
    } else {
        document.getElementById('error-telefone').textContent = "";
    }

    // Data de Nascimento
    const dataNascimento = document.getElementById('data-nascimento').value.replace(/\D/g, '');
    if (!dataNascimento || dataNascimento.length !== 8) {
        document.getElementById('error-data-nascimento').textContent = "Data de nascimento inválida.";
        isValid = false;
    } else {
        document.getElementById('error-data-nascimento').textContent = "";
    }

    // CEP
    const cep = document.getElementById('cep').value.replace(/\D/g, '');
    if (!cep || cep.length !== 8) {
        document.getElementById('error-cep').textContent = "CEP inválido.";
        isValid = false;
    } else {
        document.getElementById('error-cep').textContent = "";
    }

    // E-mail
    const email = document.getElementById('email').value;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!email || !emailRegex.test(email)) {
        document.getElementById('error-email').textContent = "E-mail inválido.";
        isValid = false;
    } else {
        document.getElementById('error-email').textContent = "";
    }

    // Se houver erro, impede o envio do formulário
    if (!isValid) {
        event.preventDefault();
    }

    return isValid;
}
