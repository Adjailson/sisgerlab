<form>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1">
  <label class="form-check-label" for="inlineCheckbox1">Professor</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
  <label class="form-check-label" for="inlineCheckbox2">Coordenador</label>
</div>

  <div class="form-row">
    <div class="col">
      <label for="exampleNome">Nome</label>
      <input type="text" class="form-control" placeholder="Nome">
    </div>

    <div class="col">
      <label for="exampleSobreNome">Sobrenome</label>
      <input type="text" class="form-control" placeholder="Sobrenome">
    </div>

    <div class="col">
      <label for="exampleCpf">CPF</label>
      <input type="text" class="form-control" placeholder="CPF">
      <small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu CPF com mais ninguém.</small>
    </div>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o E-mail">
    <small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com mais ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">        
    </div>

    <div class="form-group">
        <input type="exampleInputPassword" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Repita a Senha" required>
    </div>

    <button type="cadastrar" class="btn btn-primary">Cadastrar</button>




    

</form>