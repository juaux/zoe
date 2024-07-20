<!DOCTYPE html>
<html>
<head>
  <title>Modal Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqk1w2/knoG80k332eYXYlOjLiPEcTDQKtBvrH7bZ9Y3GeHQGsr6c97x9XDYeB1Yx/J+c7yPq+7C0" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.edit-btn').click(function() {
        // Abre o modal
        $('#editModal').modal('show');
      });
    });
  </script>
</head>
<body>

  <!-- Exemplo de tabela (substitua pelo seu código) -->
  <table id="example3" class="display" style="min-width: 845px">
    <thead>
      <tr>
        <th></th>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Curso</th>
        <th>Sexo</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Data de Entrada</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="foto.jpg" alt="foto" width="50" height="50"></td>
        <td>123456</td>
        <td>João da Silva</td>
        <td>Engenharia</td>
        <td>Masculino</td>
        <td>(11) 98765-4321</td>
        <td>joao@email.com</td>
        <td>2023-03-15</td>
        <td>
          <a href="#" class="btn btn-sm btn-primary edit-btn" data-target="#editModal" data-toggle="modal"><i class="la la-pencil"></i></a>
          <!-- Adicione outros botões aqui, se necessário -->
        </td>
      </tr>
      <!-- Outras linhas da tabela -->
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Conteúdo da página 'tesdit.html' -->
          <iframe src="tesdit.html" width="100%" height="400px"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar Alterações</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>