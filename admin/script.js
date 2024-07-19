// script.js
function deleteTeacher(element) {
    var matricula = element.dataset.id;
    if (confirm("Tem certeza que deseja excluir este professor?")) {
      // Fazer a requisição AJAX para o servidor
      fetch('delete_teacher.php?matricula=' + matricula, {
        method: 'DELETE'
      })
      .then(response => {
        if (response.ok) {
          // Remover a linha da tabela
          element.closest('tr').remove();
          console.log("Professor excluído com sucesso!");
        } else {
          console.error("Erro ao excluir o professor.");
        }
      })
      .catch(error => {
        console.error("Erro na requisição:", error);
      });
    }
  }