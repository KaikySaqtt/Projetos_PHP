function checkFileNameLength(input) {
    if (input.files.length > 0) {
      const fileName = input.files[0].name;
      const maxLength = 30; // Defina o comprimento máximo desejado aqui
  
      if (fileName.length > maxLength) {
        alert("O nome do arquivo excede o comprimento máximo permitido de " + maxLength + " caracteres.");
        input.value = ''; // Limpar a seleção do arquivo
      }
    }
  }